<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class activateAccount extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $recepiant ;
    public function __construct($to)
    {
        $this->recepiant=$to;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */


















    public function build()
    {
        return $this
        ->from("granialmagory@gmail.com")
        ->to($this->recepiant)
        ->subject("تفعيل حساب مستخدم علي موقع مستشفي طوارئ")
        ->view('welcome');
    }
}
