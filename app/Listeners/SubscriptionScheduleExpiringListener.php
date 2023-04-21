<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Stripe\Event;

class SubscriptionScheduleExpiringListener implements ShouldQueue
{

    use InteractsWithQueue;

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
    public function handle(Event $event): void
    {
        $schedule = $event->data->object;

        $user = User::where('stripe_id', $schedule->customer)->first();

        if ($user) {
            $user->is_paid = false;
            $user->save();
        }
    }
}
