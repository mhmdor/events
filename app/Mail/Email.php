<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class Email extends Mailable
{
    public function build()
    {
        return $this->subject('Invitation')
                    ->view('emails'); // Create a corresponding view file in resources/views/emails
    }
}

