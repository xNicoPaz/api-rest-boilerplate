<?php

use Illuminate\Database\Seeder;

class OAuthClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Crear un cliente para password grants
        \DB::insert('insert into oauth_clients (id, secret, name, created_at, updated_at) values (?, ?, \'Password Grant Client\', NOW(), NOW())', ['asd987qwekjl9768', '918dxh897gadogd8b8d92d98gaofs', ]);
    }
}
