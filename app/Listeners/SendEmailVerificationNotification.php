<?php

// App\Listeners\SendEmailVerificationNotificationListener.php
namespace App\Listeners;

use App\Events\SendEmailVerificationNotification as SendEmailVerificationNotificationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailVerificationNotification as SendEmailVerificationNotificationMail;

class SendEmailVerificationNotificationListener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(SendEmailVerificationNotificationEvent $event)
    {
        Mail::to($event->user->email)->send(new SendEmailVerificationNotificationMail($event->user));
    }
}
