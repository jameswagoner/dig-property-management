<?php

namespace App\Jobs\PayPal;

use App\Actions\PayPal\RecordPayment;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class VerifiedIpn implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $ipnEvent;

    public function __construct($event)
    {
        $this->ipnEvent = $event;
    }

    public function handle(RecordPayment $recordPayment)
    {
        $recordPayment($this->ipnEvent->getMessage());
    }
}
