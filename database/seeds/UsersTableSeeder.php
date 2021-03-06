<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Carla',
            'email'    => 'quenallatacarla@gmail.com',
            'password' => bcrypt(87654321),
                   
        ]);
        User::create([
            'name'     => 'Ronald',
            'email'    => 'roalmollericona@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        
    }
}

