<?php

namespace App\Actions\PayPal;

use App\Models\Payment;

class RecordPayment
{
    public function __invoke($data)
    {
        Payment::create([
            'ray' => $data
        ]);
    }
}
