<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
	/*Todo con CORS*/
	$api->group(['middleware' => ['cors']], function($api){
		/*Las macumbas de OAuth*/
		$api->group(['namespace' => 'App\Http\Controllers\Auth'], function($api){
			$api->post('auth/authorize-client', 'OAuthController@authorizeClient');
		});

		/*La API REST en si misma*/
		$api->group(['namespace' => 'App\Http\Controllers', 'middleware' => ['api.auth']], function($api){
			$api->resource('me', 'ProfileController');
		});
	});


});