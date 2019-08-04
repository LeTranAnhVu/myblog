<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsLetterNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $subject;

    /**
     * Create a new message instance.
     * @param $email String - the email address of person want to send is email to
     * @param $subject String - the subject of the email
     * @return void
     */
    public function __construct($email, $subject)
    {
        $this->email = $email;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('emails.newsletter-notification');
    }
}
