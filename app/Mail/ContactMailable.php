<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $contact_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_data)
    {
        $this->contact_data = $contact_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');

        $from_name = "Funda of Web IT";
        $from_email = "youremail@gmail.com";
        $subject = "Funda of Web IT: You have a new query";
        return $this->from($from_email, $from_name)
            ->view('emails.contact')
            ->subject($subject)
        ;
    }
}
