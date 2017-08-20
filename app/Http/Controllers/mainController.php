<?php

namespace App\Http\Controllers;

use App\cinemaModel;
use App\hallSeatModel;
use App\movieModel;
use App\showingModel;
use App\foodDrinkModel;
use App\foodDrinkComboModel;
use App\moviePosterModel;
use Carbon\Carbon;
use Cookie;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;

class mainController extends Controller
{
    private $_apiContext;
    protected $redirectTo = '/';

    public function __construct()
    {

    }

    public function index(Request $request)
    {
//		if ($request->cookie('userid') != null) {
//			$hallseat = new hallSeatModel();
//			$hallseat->where('userid', '=', $request->cookie('userid'))
//				->delete();
//		}
        $movie = new movieModel;
        $cinema = new cinemaModel();
        $showing = new showingModel();

        $showingResult = $showing->whereRaw('showingTime+1 >= now()')
            ->join('movie', 'showing.movieID', '=', 'movie.movieID')
            ->join('cinema', 'showing.cinemaID', '=', 'cinema.cinemaID')
            ->groupBy('movie.movieID')->get(['movie.name', 'cinema.cinema', 'movie.movieID', 'showing.cinemaID']);
        $movieResult = $movie->get();

        //return view('index', ['c' => $movieResult, 'showing' => $showingResult]);
        return redirect()->route('nowshowing');
    }

    public function movieGetCinema(Request $request)
    {
        $showing = new showingModel();
        $showingResult = $showing->where('movieID', '=', $request->input('movie'))
            ->whereRaw('showingTime+1 > now()')
            ->join('cinema', 'showing.cinemaID', '=', 'cinema.cinemaID')
            ->groupBy('cinema.cinemaID')
            ->get();
        //  echo $showingResult;
        return $showingResult;
    }

    public function movieGetSession(Request $request)
    {
        $showing = new showingModel();
        $showingResult = $showing->where([
            ['movieID', '=', $request->input('movie')],
            ['cinemaID', '=', $request->input('cinema')],
        ])->groupBy('showing.showingTime')
            ->get();
        //->whereRaw('showingTime+1 >= now()')
        return $showingResult;
    }

    public function sessionGetTime(Request $r)
    {
        $showing = new showingModel();
        $showingResult = $showing->where([
            ['movieID', '=', $r->input('movieID')],
            ['cinemaID', '=', $r->input('cinemaID')],
            ['showingTime', '=', $r->input('showingTime')],
        ])->get();
        return $showingResult;
    }

    public function buyTicket(Request $request)
    {
        $showing = new showingModel();
        $showingResult = $showing->where([
            ['movieID', '=', $request->input('movie')],
            ['cinemaID', '=', $request->input('cinema')],
            ['showingTime', '=', $request->input('showingTime')],
            ['time', '=', $request->input('time')],
        ])->first();
        return $showingResult; //$showingResult;
    }

    public function redirectToBuyTicket($id)
    {
        $showing = new showingModel();
        $hallseat = new hallSeatModel();
        $showingResult = $showing->where('showing.showingID', '=', $id)
            ->join('cinema', 'showing.cinemaID', '=', 'cinema.cinemaID')
            ->join('movie', 'showing.movieID', '=', 'movie.movieID')
            ->leftjoin('hallseat', 'showing.showingID', '=', 'hallseat.showingID')
            ->get(['cinema.cinemaID as cci', 'cinema.*', 'showing.ID as sid', 'showing.showingID as showingshowingID', 'showing.*', 'movie.movieID as mid', 'movie.name as moviename', 'movie.*', 'hallseat.*']);
        //echo $showingResult;
        $hallseatR = $hallseat
            //  ->join('showing', 'hallseat.showingID', '=', 'showing.showingID')
            ->where('showingID', '=', $id)
            ->where('seatStatus', '=', '1')
            ->get(['seat']);
        if ($showingResult[0]->end < date('Y-m-d'))
        {
            return $showingResult->movieID;
        } else
        {
            return view('ticketing.selectSeats3D', ['showing' => $showingResult, 'hallseat' => $hallseatR]);
        }
    }

    public function buySeat(Request $request)
    {
        $hallseat = new hallSeatModel();
        $showing = new showingModel();
        $time = uniqid();
        $ticketTime = Carbon::now();
        $hallseatResult = $hallseat->whereIn('seat', $request->input('seat'))
            ->where('seatStatus', '=', '1')
            ->where('showingID', '=', $request->input('showingID'))
            ->get();
        if ($hallseatResult->count() > 0)
        {
            return 'sold';
        } else
        {
            foreach ($request->input('seat') as $key => $value)
            {
                $hallseat->insert([
                    'seat' => $value,
                    'ticketTime' => $time,
                    'userid' => $time,
                    'showingID' => $request->input('showingID')
                ]);
            }
            Cookie::queue('userid', $time, 10);
            return $time;
        }
    }

    public function confirm(Request $r)
    {
        $hallseat = new hallSeatModel();
        $foodDrinkCombo = new foodDrinkComboModel();
        $userid = Cookie::get('userid');
        $time = Cookie::get('userid');
        if (is_null($userid))
        {
            return 'gg';
        } else
        {
            Cookie::queue('userid', $time, 10);
            $hallseat->where('userid', '=', $userid)->update(['userid' => $time]);
            $hallseatResult = $hallseat
                ->join('showing', 'hallseat.showingID', '=', 'showing.showingID')
                ->join('movie', 'showing.movieID', '=', 'movie.movieID')
                ->join('cinema', 'showing.cinemaID', '=', 'cinema.cinemaID')
                ->where('userid', '=', $r->userid)
                ->get();
            session(['userid' => $time]);
            $foodDrinkComboR = $foodDrinkCombo->all();
            return view('ticketing.confirm', ['hallseat' => $hallseatResult, 'foodDrink' => $foodDrinkComboR]);
        }
    }

    public function timeOut()
    {
        $hallseat = new hallSeatModel();
        $hallseat->where('userid', '=', session('userid'))
            ->delete();
        return view('ticketing.timeOut');
    }

    // public function nextToPayment(Request $request)
    // {
    //
    //     return session('userid');
    // }
    public function movieList()
    {
        $movie = new movieModel;
        $movieResult = $movie->whereRaw('movie.releaseDate < now()')->get();
        $cinema = new cinemaModel();
        $cinemaR = $cinema->all();
        $showing = new showingModel();
        $showingResult = $showing->where([
            ['start', '<=', date('Y-m-d')],
            ['end', '>=', date('Y-m-d')],
            ['showingTime', '>=', date('Y-m-d')]
        ])//->whereRaw('showingTime >= now()')
        ->join('movie', 'showing.movieID', '=', 'movie.movieID')
            ->groupBy('movie.movieID')
            ->get(['movie.*', 'showing.*']);
        $moviePoster = new moviePosterModel();
        $moviePosterR = $moviePoster->get();

//        Mail::to('kjw1996@hotmail.com')
//            ->send(new OrderShipped($moviePosterR));
        return view('movies.now-showing', ['showing' => $showingResult, 'moviePoster' => $moviePosterR]);
    }

    public function movie(Request $r)
    {
        $movie = new movieModel;
        $movieResult = $movie->where('movieID', '=', $r->movie)->first();
        $showing = new showingModel();
        $firstDay = $showing->where('showingTime', '>=', date('Y-m-d'))
            ->where('movieID', '=', $r->movie)
            ->orderBy('showingTime', 'asc')
            ->first();
        return view('movies.movieDetail', ['movie' => $movieResult, 'firstDay' => $firstDay]);
    }

    public function byMovie(Request $r)
    {
        $showing = new showingModel();
        $movie = new movieModel();
        $showingDay = $showing->where('showingTime', '>=', date('Y-m-d'))
            ->groupBy('showing.showingTime')
            ->get();
        $cinema = $showing->where([
            ['showing.showingTime', '=', $r->showingDate],
            ['showing.movieID', '=', $r->movieID]
        ])
            ->join('cinema', 'showing.cinemaID', '=', 'cinema.cinemaID')
            ->groupBy('showing.cinemaID')->get();
        $showingDetail = $movie->where('movieID', '=', $r->movieID)->get();
        $times = $showing->where([
            ['movieID', '=', $r->movieID],
            ['showingTime', '=', $r->showingDate]
        ])
            ->orderBy('showingTime', 'asc')
            ->orderBy('time', 'asc')
            ->get();
        return view('showtimes.byMovie', ['showingDay' => $showingDay, 'showing' => $showingDetail, 'cinema' => $cinema, 'times' => $times]);
    }

    public function filterCinemaGetMovie(Request $r)
    {
        $showing = new showingModel();
        $showingR = $showing->all();
        if ($r->input('cinemaID') == 'all')
        {
            $showingR = $showing->join('movie', 'showing.movieID', '=', 'movie.movieID')
                ->groupBy('showing.movieID')->get();
        } else
        {
            $showingR = $showing->where('cinemaID', '=', $r->input('cinemaID'))
                ->join('movie', 'showing.movieID', '=', 'movie.movieID')
                ->groupBy('showing.movieID')->get();
        }
        return $showingR;
    }

    public function filterRatingGetMovie(Request $r)
    {
        $movie = new movieModel();
        $movieR;
        if ($r->input('rating') == 'all')
        {
            $movieR = $movie->all();
        } else
        {
            $movieR = $movie->where('rating', '=', $r->input('rating'))->get();
        }
        return $movieR;
    }

    public function filterLanguageGetMovie(Request $r)
    {
        $movie = new movieModel();
        $movieR;
        if ($r->input('language') == 'all')
        {
            $movieR = $movie->all();
        } else
        {
            $movieR = $movie->where('languages', '=', $r->input('language'))->get();
        }
        return $movieR;
    }

    public function comingSoon()
    {
        $movie = new movieModel();
        //$movieR = $movie->whereRaw('releaseDate > now()')->get();
        $showing = new showingModel();
        $showingResult = $showing->where([
            ['start', '>=', date('Y-m-d')]
        ])//->whereRaw('showingTime >= now()')
        ->join('movie', 'showing.movieID', '=', 'movie.movieID')
            ->groupBy('movie.movieID')
            ->get(['movie.*', 'showing.*']);
        return view('movies.coming-soon', ['showing' => $showingResult]);
    }

    public function allCinemas()
    {
        $cinema = new cinemaModel();
        $cinemaR = $cinema->all();
        return view('cinemas.all-cinemas', ['cinema' => $cinemaR]);
    }

    public function cinemaDetail(Request $r)
    {
        $cinema = new cinemaModel();
        $cinemaR = $cinema->where('cinemaID', '=', $r->cinemaID)->first();
        return view('cinemas.cinemaDetail', ['cinema' => $cinemaR]);
    }

    public function byCinema(Request $r)
    {
        $showing = new showingModel();
        $showingR = $showing->where('cinemaID', '=', $r->cinemaID)
            ->join('movie', 'showing.movieID', '=', 'movie.movieID')
            ->groupBy('showing.movieID')->get();
        //  echo $showingR;
        return view('showtimes.byCinema', ['showing' => $showingR]);
    }

    public function language(Request $r)
    {
        $showing = new showingModel();
        $a = array();
        foreach ($r->input() as $key => $value)
        {
            $a = $value;
        }
        if (count($a) == 0)
        {
            $showingResult = $showing->where([
                ['start', '<=', date('Y-m-d')],
                ['end', '>=', date('Y-m-d')]
            ])//->whereRaw('showingTime >= now()')
            ->join('movie', 'showing.movieID', '=', 'movie.movieID')
                ->groupBy('movie.movieID')
                ->get(['movie.*', 'showing.*']);
            //->toSql();
            //echo $showingResult;

            return view('layouts.l_movie', ['showing' => $showingResult]);
        } else
        {

            $showingResult = $showing->where([
                ['start', '<=', date('Y-m-d')],
                ['end', '>=', date('Y-m-d')]
            ])//->whereRaw('showingTime >= now()')
            ->join('movie', 'showing.movieID', '=', 'movie.movieID')
                ->groupBy('movie.movieID')
                ->whereIn('movie.languages', $a)
                ->get(['movie.*', 'showing.*']);
            //->toSql();
            //echo $showingResult;
            return view('layouts.l_movie', ['showing' => $showingResult]);
        }

    }

    public function searchMovie(Request $r)
    {
        $movie = new movieModel;
        $movieR = $movie->where('name', 'like', '%' . $r->input('movie') . '%')->get();
        return $movieR;
    }

    public function bookingHistory()
    {
        $hallseat = new hallSeatModel();
        $hallseatR = $hallseat->where('loginID', '=', Auth::guard('member')->user()->loginID)
            ->get();
        return view('myprofile.booking-history', ['hallseat' => $hallseatR]);
    }

    // public function createmember() {
    // 	return view('movieclub.createmember');
    // }

    // public function creatememberPost(Request $r) {
    // 	// $date = strtotime($r->input('month').'-'.$r->input('day').'-'.$r->input('year'));
    // 	// $new = date('Y-m-d', $date);
    // 	$member = new memberModel();
    // 	// $member->insert([
    // 	//   'fullname'=> $r->input('fullname'),
    // 	//   'email'=> $r->input('email'),
    // 	//   'ic'=> $r->input('ic'),
    // 	//   'password'=> $r->input('password'),
    // 	//   'mobile' => $r->input('mobile'),
    // 	//   'birthday'=> $new,
    // 	//   'gender'=> $r->input('gender'),
    // 	//   'address' => $r->input('address'),
    // 	//   'marital' => $r->input('marital'),
    // 	//   'state' => $r->input('state'),
    // 	//   'postcode' => $r->input('postcode')
    // 	// ]);
    // 	// return '$date';
    // 	$member->create([
    // 		'email' => $r->input('email'),
    // 		'password' => bcrypt($r->input('password')),
    // 	]);
    // 	return redirect('/');
    // }

    // public function login(Request $r) {
    // 	$errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
    // 	// if (Auth::guard('member')->attempt(['email' => $r->input('email'), 'password' => $r->input('password')], true)) {
    // 	//
    // 	//   //  return redirect('/');
    // 	// } else {
    // 	//     return redirect('/')->withErrors($errors);
    // 	// }
    // 	if ($this->attemptLogin($r)) {
    // 		return $this->sendLoginResponse($r);

    // 	}
    // }

    // public function attemptLogin(Request $request) {
    // 	return $this->guard()->attempt(
    // 		$this->credentials($request), $request->has('remember')
    // 	);
    // }

    // public function guard() {
    // 	return Auth::guard('member');
    // }

    // protected function credentials(Request $request) {
    // 	return $request->only($this->username(), 'password');
    // }

    // public function username() {
    // 	return 'email';
    // }

    // protected function sendLoginResponse(Request $request) {
    // 	$request->session()->regenerate();

    // 	//    $this->clearLoginAttempts($request);

    // 	return redirect('/');
    // }

    // protected function authenticated(Request $request, $user) {
    // 	//
    // }

    // public function redirectPath() {
    // 	if (method_exists($this, 'redirectTo')) {
    // 		return $this->redirectTo();
    // 	}

    // 	return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    // }

}
