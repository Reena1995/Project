<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\SendMail;
use App\Listeners\SendMailFired;
use App\Events\RegisterMailEvent;
use App\Listeners\SendRegisterMailFired;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        SendMail::class => [
            SendMailFired::class,
        ],

        RegisterMailEvent::class => [
            SendRegisterMailFired::class,
        ]
    ];

   
    public function boot()
    {
        //
    }
}
