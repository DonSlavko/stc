<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $subject;
    public $fullName;
    public $content;

    /**
     * Create a new message instance.
     *
     * @param $sender
     */
    public function __construct($sender)
    {
        $this->email = $sender->email;
        $this->subject = $sender->subject;
        $this->fullName = $sender->full_name;
        $this->content = $sender->content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject($this->subject)->markdown('emails.send');
    }
}
