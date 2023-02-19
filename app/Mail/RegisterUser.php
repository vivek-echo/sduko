<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterUser extends Mailable
{
    use Queueable, SerializesModels;
    protected $response;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($response)
    {
       $this->response = $response;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $res['name']=$this->response['getData']['name'];
        $res['userId']=$this->response['userId'];
        return $this->view('Mail.signUp', $res);
    }
}
