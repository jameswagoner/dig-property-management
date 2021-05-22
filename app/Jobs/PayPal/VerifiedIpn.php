<?php

namespace App\Jobs\PayPal;

use App\Actions\PayPal\RecordPayment;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mdb\PayPal\Ipn\Event\MessageVerifiedEvent;

class VerifiedIpn implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public MessageVerifiedEvent $ipnEvent;

    public function __construct(MessageVerifiedEvent $event)
    {
        $this->ipnEvent = $event;
    }

    public function handle(RecordPayment $recordPayment)
    {
        $message = $this->ipnEvent->getMessage();
        $recordPayment($message->getAll());
    }
}
