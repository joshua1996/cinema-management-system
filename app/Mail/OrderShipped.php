<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\hallSeatModel;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $ticketID;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->ticketID = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.ticket')
            ->text('email.ticket')
            ->subject('My Cinema Ticket')
            ->with(['data'=> $this->ticketID]);
    }
}
