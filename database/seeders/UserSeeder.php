<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'muhammad',
            'username' => 'muhammad',
            'password' => bcrypt('password'),
            'level' => 'admin',
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'user1',
            'username' => 'user1',
            'password' => bcrypt('password'),
            'level' => 'pegawai',
            'remember_token' => Str::random(60),
        ]);
    }
}
