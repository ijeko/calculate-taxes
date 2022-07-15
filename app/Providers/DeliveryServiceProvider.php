<?php

namespace App\Providers;

use App\Factories\DeliveryServiceFactory\DeliveryServiceFactory;
use App\Services\DeliveryServices\DeliveryService;
use Illuminate\Support\ServiceProvider;

class DeliveryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DeliveryService::class, function () {
            return (new DeliveryServiceFactory())->createByName(request('service'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
