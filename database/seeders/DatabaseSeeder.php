<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);




 $user =[ [
            'name'  => 'Admin',
            'email' => 'Admin@user.com',
            'password' => bcrypt('password'),
            'role'=>'admin'
        ],
        [
            'name'  => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'role' =>'user'
        ]];
        User::insert($user);

        
    }
}
