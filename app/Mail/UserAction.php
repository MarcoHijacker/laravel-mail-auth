<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;
    public $ord;
    public $action;

    public function __construct($user, $ord, $action)
    {
        $this -> user = $user;
        $this -> ord = $ord;
        $this -> action = $action;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this  -> from('user@boolean.it')
                      -> view('mail.order-mail');
    }
}
