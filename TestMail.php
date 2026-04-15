<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use SerializesModels;

    public function build()
    {
        return $this->subject('Test Email from Laravel')
                    ->view('emails.test');
    }
}
