<?php

namespace App\Http\Controllers\AuthSso;

use App\Http\Controllers\Controller;
use Aacotroneo\Saml2\Saml2Auth;

class AuthSso extends Controller
{
    protected $saml2Auth;
    public function __construct($idpName){
        $this->saml2Auth = new Saml2Auth(Saml2Auth::loadOneLoginAuthFromIpdConfig($idpName));
    }
    public function login($url = null){
        if(is_null($url))
            $url = url('/');
        return $this->saml2Auth->login($url);
    }
    public function logout($url = null){
        if(is_null($url))
            $url = url('/');
        return $this->saml2Auth->logout($url);
    }
    public function getUserData(){
        if(request()->session()->get('userData'))
            return request()->session()->get('userData');
        else
            return [];
    }
    public function isAuthenticated(){
        if(count($this->getUserData()))
            return true;
        else
            return false;
    }
}
