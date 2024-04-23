<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cmgmyr\Messenger\Models\Message as VendorMessage;
// use GuzzleHttp\Psr7\Message;
use App\Models\Message;
class MessengerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
          $this->app->bind(VendorMessage::class, Message::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
