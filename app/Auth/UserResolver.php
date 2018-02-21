<?php 

namespace App\Auth;

use App\User;

class UserResolver{

	public function resolveById($id){
		return User::findOrFail($id);
	}
}
