<?php

namespace App\Listeners;

use App\Mail\MyEmail;
use App\Events\OrderShipped;
use Illuminate\Support\Facades\Mail;

class SendShipmentNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderShipped $event): void
    {
        Mail::to('recipient@example.com')->send(new MyEmail($event->order));
    }
}
