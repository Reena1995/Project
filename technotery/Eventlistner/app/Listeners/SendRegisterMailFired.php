<?php

namespace App\Listeners;

use App\Events\RegisterMailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Register;
use Mail;

class SendRegisterMailFired
{
   
    public function __construct()
    {
        //
    }

   
    public function handle(RegisterMailEvent $event)
    { $user = Register::find($event->userId);
        
        Mail::send('registermail',['user' => $user],function($message) use ($user){
            $message->to($user['email'],$user['name']);
            $message->subject('Event Testing');

        });
    }
}
