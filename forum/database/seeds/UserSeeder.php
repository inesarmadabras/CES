<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'name' => 'admin',
            'email' => 'servicedesk@spms.min-saude.pt',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'github_username' => 'nma-apps',
        ]);
    }
}
