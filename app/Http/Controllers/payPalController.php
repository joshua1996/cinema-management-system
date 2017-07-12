<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hallSeatModel;
use Paypal;
use Illuminate\Support\Facades\Redirect;

class payPalController extends Controller {

	public function __construct() {
		$this->_apiContext = PayPal::ApiContext(
			config('services.paypal.client_id'),
			config('services.paypal.secret'));

		$this->_apiContext->setConfig(array(
			'mode' => 'sandbox',
			'service.EndPoint' => 'https://api.sandbox.paypal.com',
			'http.ConnectionTimeOut' => 30,
			'log.LogEnabled' => true,
			'log.FileName' => storage_path('logs/paypal.log'),
			'log.LogLevel' => 'FINE',
		));

	}

	public function getCheckout(Request $r) {
		$hallseat = new hallSeatModel();
		$hallseat->where('userid', '=', session('userid'))
			->update([
				'email' => $r->input('email'),
			]);

		//  session(['userid' => $r->userid]);
		//  $hallseat = new hallSeatModel();
		$hallseatResult = $hallseat->where('userid', '=', session('userid'))
			->join('showing', 'hallseat.showingID', '=', 'showing.ID')
			->join('movie', 'showing.movieID', '=', 'movie.movieID')
			->get();
		//echo $hallseatResult;

		$payer = PayPal::Payer();
		$payer->setPaymentMethod('paypal');

		$itemList = PayPal::itemList();
		$payItem = PayPal::Item();
		$payItem->setName($hallseatResult[0]->name . ' movie ticket')
			->setCurrency('MYR')
			->setQuantity($hallseatResult->count())
			->setPrice($hallseatResult[0]->price);
		$itemList->addItem($payItem);
		$payItem = PayPal::Item();
		$payItem->setName('booking Fee')
			->setCurrency('MYR')
			->setQuantity(1)
			->setPrice($hallseatResult[0]->bookingFee);
		$itemList->addItem($payItem);

		$amount = PayPal::Amount();
		$amount->setCurrency('MYR');
		$amount->setTotal(($hallseatResult[0]->price * $hallseatResult->count()) + $hallseatResult[0]->bookingFee); // This is the simple way,
		// you can alternatively describe everything in the order separately;
		// Reference the PayPal PHP REST SDK for details.

		$transaction = PayPal::Transaction();
		$transaction->setAmount($amount);
		$transaction->setItemList($itemList);
		$transaction->setDescription('What are you selling?');

		$redirectUrls = PayPal::RedirectUrls();
		$redirectUrls->setReturnUrl(action('payPalController@getDone'));
		$redirectUrls->setCancelUrl(action('payPalController@getCancel'));

		$payment = PayPal::Payment();
		$payment->setIntent('sale');
		$payment->setPayer($payer);
		$payment->setRedirectUrls($redirectUrls);
		$payment->setTransactions(array($transaction));

		$response = $payment->create($this->_apiContext);
		$redirectUrl = $response->links[1]->href;

		//return Redirect::to($redirectUrl);
		return $redirectUrl;
	}

	public function getDone(Request $request) {
		$id = $request->get('paymentId');
		$token = $request->get('token');
		$payer_id = $request->get('PayerID');

		$payment = PayPal::getById($id, $this->_apiContext);

		$paymentExecution = PayPal::PaymentExecution();

		$paymentExecution->setPayerId($payer_id);
		//  $executePayment = $payment->execute($paymentExecution, $this->_apiContext);
		$hallseat = new hallSeatModel();
		$hallseat->where('userid', '=', session('userid'))
			->update(['seatStatus' => 1]);
		return view('checkout.done', ['userid' => session('userid')]);
	}

	public function getCancel() {
		// Curse and humiliate the user for cancelling this most sacred payment (yours)
		return view('checkout.cancel');
	}
}
