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
        //Crear 20 usuarios
    	$faker = Factory::create('es_AR');
    	for ($i=0; $i < 20; $i++) { 
    		$user = User::create([
    			'name' => $faker->userName(),
    			'uuid' => $faker->uuid(),
    			'email' => $faker->email(),
    			'password' => bcrypt('123456789')
    		]);

            //Crear entre 5 y 20 posts por usuarios
    		$postsToCreate = intval(rand(5, 20));
    		for ($j=0; $j < $postsToCreate; $j++) { 
    			$post = Post::create([
                    'user_id' => $user->id,
    				'uuid' => $faker->uuid(),
    				'body' => $faker->paragraph()
    			]);
    		}
    	}

        //Crear un par de clients para los grants de Client Credentials y Password
        \DB::insert('insert into oauth_clients (id, secret, name, created_at, updated_at) values (?, ?, \'Client Credentials Grant Client\', NOW(), NOW())', ['83fbqioadh8od', '1o8fbdiadba28bd2qo8bdb199d8b98asd', ]);
        \DB::insert('insert into oauth_clients (id, secret, name, created_at, updated_at) values (?, ?, \'Password Grant Client\', NOW(), NOW())', ['asd987qwekjl9768', '918dxh897gadogd8b8d92d98gaofs', ]);


    }
}
