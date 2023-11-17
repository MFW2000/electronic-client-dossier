<?php

namespace App\Listeners;

use App\Events\EmailUpdated;
use Illuminate\Contracts\Auth\MustVerifyEmail;

/**
 * Listener that listens for the {@see EmailUpdated} event.
 */
class SendUpdatedEmailVerificationNotification
{
    /**
     * Handle the event.
     */
    public function handle(EmailUpdated $event): void
    {
        if ($event->user instanceof MustVerifyEmail && ! $event->user->hasVerifiedEmail()) {
            $event->user->sendEmailVerificationNotification();
        }
    }
}
