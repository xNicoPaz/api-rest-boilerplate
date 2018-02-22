<?php

use App\User;
use App\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        //Crear 20 usuarios
    	$faker = Factory::create('es_AR');
    	for ($i=0; $i < 20; $i++) { 
    		$user = User::create([
    			'name' => $faker->userName(),
    			'uuid' => $faker->uuid(),
    			'email' => $faker->email(),
    			'password' => bcrypt('123456789')
    		]);
    	}*/

        $this->call(OAuthClientsTableSeeder::class);
    }
}
