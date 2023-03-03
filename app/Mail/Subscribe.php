<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Subscribe extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($email,$subject, $description)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('skanameks6@gmail.com','Smkn 6 Jember')->subject($this->subject)
        ->markdown('emails.message',['desc'=>$this->description]);
    }
}
