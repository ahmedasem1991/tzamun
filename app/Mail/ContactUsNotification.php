<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission')
                    ->from('no_reply@tzamun.sa', 'Tzamun')
                    ->to('info@tzamun.sa')
                    ->view('emails.contact-notification')
                    ->with('data', $this->contactData);
    }
}