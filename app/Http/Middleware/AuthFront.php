<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthSso\AuthSso;
// use Illuminate\Http\Request;
class AuthFront
{
   public function handle( $request,Closure $next){
       
      $auth = new AuthSso('sso');
    // dd($auth->isAuthenticated());
     // dd($auth->login());
if(!$auth->isAuthenticated()){
   //  dd("test1");
     // $auth->login('http://mne.ps/damage-report/public/front/UserFront');
      $auth->login('http://mne.ps/commercial/public/front/UserFrontHome');
     // $auth->login($url = null);
}

   return $next($request);
	//$user = Auth::user();
     //  dd();
//	 if($user['roles'][0]['title']=== "User")
// 	{
//		return $next($request);
//	}else{
//        dd("denied");
//		//return view('name of the view for un authinticated users');
//	}
}
    
    
}
