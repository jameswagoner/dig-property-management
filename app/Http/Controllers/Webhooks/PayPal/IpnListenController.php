<?php

namespace App\Http\Controllers\Webhooks\PayPal;

use App\Http\Controllers\Controller;
use App\Jobs\PayPal\VerifiedIpn;
use Illuminate\Http\Request;
use Mdb\PayPal\Ipn\Event\MessageVerifiedEvent;
use Mdb\PayPal\Ipn\ListenerBuilder\Guzzle\ArrayListenerBuilder;

class IpnListenController extends Controller
{
    public function __invoke(Request $request, ArrayListenerBuilder $builder)
    {
        $listener = $builder->build();

        $listener->onVerified(fn(MessageVerifiedEvent $event) => VerifiedIpn::dispatch($event));

//        $listener->onInvalid();
//
//        $listener->onVerificationFailure();

        $listener->listen();
    }
}
