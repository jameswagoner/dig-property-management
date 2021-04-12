<?php

namespace App\Providers;

use App\Services\Twilio;
use Exception;
use Illuminate\Support\ServiceProvider;
use Twilio\Rest\Client;

class TwilioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @throws Exception
     */
    public function register()
    {
        foreach (config('twilio') as $key => $value) {
            if (empty($value)) {
                throw new Exception("Please provide a value for ${key}");
            }
        }

        $this->app->bind(Client::class, function () {
            return new Client(config('twilio.account_sid'), config('twilio.auth_token'));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        //
    }
}
