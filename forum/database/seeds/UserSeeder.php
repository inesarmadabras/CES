<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'name' => 'admin',
            'email' => 'nma-apps@spms.min-saude.pt',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
