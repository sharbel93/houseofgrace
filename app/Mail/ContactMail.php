<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->message = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'contact@houseofgraceeldoret.or.ke';
        $name = 'me';
        $subject = 'Contact Messages  ';
        return $this->view('emails.contact')
            ->to($address, $name)
            ->from($this->message->email, $this->message->firstname)
            ->subject($subject)
            ->with(
                [ 'firstname' => $this->message->firstname,
                    'lastname' => $this->message->lastname,
                    'phone' => $this->message->phone,
                    'subject' => $this->message->subject,
                    'content' => $this->message->message
                ]
            );
    }
}
