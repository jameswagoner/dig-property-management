<?php

namespace App\Http\Controllers\Webhooks\PayPal;

use App\Http\Controllers\Controller;
use App\Jobs\PayPal\VerifiedIpn;
use App\Models\Payment;
use Illuminate\Http\Request;
use Mdb\PayPal\Ipn\Event\MessageInvalidEvent;
use Mdb\PayPal\Ipn\Event\MessageVerificationFailureEvent;
use Mdb\PayPal\Ipn\Event\MessageVerifiedEvent;
use Mdb\PayPal\Ipn\ListenerBuilder\Guzzle\ArrayListenerBuilder;

class IpnListenController extends Controller
{
    public function __invoke(Request $request, ArrayListenerBuilder $builder)
    {
        $builder->setData($request->all());

        if ($request->get('ipn_test') === 1) {
            $builder->useSandbox();
        }

        $listener = $builder->build();

        $listener->onVerified(function (MessageVerifiedEvent $event) {
            VerifiedIpn::dispatch($event);
        });

        $listener->onInvalid(function (MessageInvalidEvent $event) {

        });

        $listener->onVerificationFailure(function (MessageVerificationFailureEvent $event) {

        });

        $listener->listen();
    }
}
