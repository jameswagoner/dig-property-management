<?php

namespace App\Actions\PayPal;

use App\Models\Payment;
use Mdb\PayPal\Ipn\Message;

class RecordPayment
{
    public function __invoke(Message $message)
    {
        Payment::create([
            'source' => 'paypal',
            'source_id' => $message->get('txn_id'),
            'status' => $message->get('payment_status'),
            'amount' => $message->get('mc_gross') * 100,
            'fee' => $message->get('mc_fee') * 100,
            'description' => $message->get('memo'),
            'raw' => json_encode($message->getAll()),
        ]);
    }
}
