<?php

namespace App\Listeners;

use Aacotroneo\Saml2\Events\Saml2LogoutEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;



class Saml2LogoutListener
{
    public function __construct()
    {
        //
    }

    public function handle(Saml2LogoutEvent $event)
    {
        request()->session()->forget('userData');
        session()->save();
    }
}
