<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Authorizer;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class OAuthController extends Controller
{
    use Helpers;

    public function authorizeClient(){
    	return $this->response->array(Authorizer::issueAccessToken());
    }

    public function authorizePassword($email, $password){
    	$credentials = [
    		'email' => $email,
    		'password' => $password
    	];

    	if(Auth::once($credentials)){
    		return Auth::user()->id;
    	}else{
	    	return false;		
    	}
    }
}
