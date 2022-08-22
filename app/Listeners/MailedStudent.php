<?php

namespace App\Listeners;

use App\Events\StudentCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class MailedStudent implements ShouldQueue
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
     * @param  \App\Events\StudentCreated  $event
     * @return void
     */
    public function handle(StudentCreated $event)
    {
        Mail:: send('emailSend', $event->email_data, function ($messages)
        {
            $messages->to($event->email_data['email_id']);
            $messages->subject("Email send");
        });
    }
}
