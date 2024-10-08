<?php

namespace Turahe\Subscription\Listeners;

use Turahe\Subscription\Events\SubscriptionCancelled;

class UpdateActiveSubscription
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle($event)
    {
        $currentPlan = $event instanceof SubscriptionCancelled
                            ? null : $event->user->subscription()->provider_plan;

        $event->user->forceFill([
            'current_billing_plan' => $currentPlan,
        ])->save();
    }
}
