<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsAcknowledgement extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    public function build()
    {
        return $this->subject('We Received Your Message')
                    ->from('no_reply@tzamun.sa', 'Tzamun')
                    ->to($this->contactData['email'])
                    ->view('emails.contact-acknowledgement')
                    ->with('data', $this->contactData);
    }
}