<?php

namespace App\Listeners;

use App\Events\orderNumberEvent;
use App\Mail\eventIsFiredMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class assignOrderNumberListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\orderNumberEvent  $event
     * @return void
     */
    public function handle(orderNumberEvent $event)
    {
//        dd($event->orderNumber);

        Mail::to("test@gmail.com")->send(new eventIsFiredMail($event->orderNumber));

    }
}
