<?php

namespace App\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use App\Transformers\UserTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;

/*
	La idea es evolucionar esto para un futuro uso, asi como esta es muy precario.
	Pero es un maravilloso comienzo.
*/
class ProfileController extends Controller
{
	use Helpers;
    //
    public function index(){
    	$user = $this->auth->user();

    	return $this->response->item($user, new UserTransformer());
    }
}
