<?php

namespace App\Listeners;

use App\Events\UserSubscriptionCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserSubscriptionCreatedListener
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
     * 
     * @param UserSubscriptionCreated $event
     * @return void
     */
    public function handle(UserSubscriptionCreated $event): void
    {
        $user = User::findOrFail($event->user_id);
        $user->is_paid = true;
        $user->save();
    }
}
