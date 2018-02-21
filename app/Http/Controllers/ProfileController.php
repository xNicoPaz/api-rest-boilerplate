<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use App\Transformers\UserTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProfileController extends Controller
{
	use Helpers;
    //
    public function index(){
    	$user = $this->auth->user();

    	return $this->response->item($user, new UserTransformer());
    	//return json_encode(['a' =>1, 'b' => 2, 'c' => 3]);

    	//return $user;
    }
}
