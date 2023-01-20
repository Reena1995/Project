<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\sendmaildemo;
use Mail;

class sendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $sendMail;
   
    public function __construct($sendMail)
    {
        $this->sendMail=$sendMail;

    }

   
    public function handle()
    { 
        $user = $this->sendMail; 
        Mail::send('email.welcomeMail', ['user' => $user], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Welcome Mail');
        });
        return true;
    }
}
