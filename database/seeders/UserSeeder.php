<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
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
            'name'              => 'Noor-A-Alam Siddique',
            'email'             => 'kisorniru@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('123456'),
            'type'              => 'admin',
            'remember_token'    => Str::random(10),
        ]);
    }
}
