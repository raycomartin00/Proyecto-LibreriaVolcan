<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
	
	public $confirmacion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($confirmacion)
    {
        $this->confirmacion = $confirmacion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.Confirmacion');
    }
}
