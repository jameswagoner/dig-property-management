<?php

namespace App\Actions\PayPal;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Str;
use Mdb\PayPal\Ipn\Message;

class RecordPayment
{
    public function __invoke(Message $message)
    {
        $payment = Payment::create([
            'source' => 'paypal',
            'source_id' => $message->get('txn_id'),
            'status' => $message->get('payment_status'),
            'amount' => $message->get('mc_gross') * 100,
            'fee' => $message->get('mc_fee') * 100,
            'description' => $message->get('memo'),
            'raw' => json_encode($message->getAll()),
        ]);

        if ($user = User::where('email', Str::lower($message->get('payer_email')))->first()) {
            $payment->user()->associate($user);
        }
    }
}
