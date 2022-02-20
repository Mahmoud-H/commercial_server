<?php

namespace App\Listeners;
use Aacotroneo\Saml2\Events\Saml2LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Saml2LoginListener
{
    public function __construct()
    {
        //
    }
    public function handle(Saml2LoginEvent $event)
    {
        $user = $event->getSaml2User();
        $userData = [
            'id' => $user->getUserId(),
            'attributes' => $user->getAttributes(),
            'assertion' => $user->getRawSamlAssertion()
        ];
        request()->session()->put('userData', $userData);

    }
}
