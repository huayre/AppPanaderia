<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Roy Carlos Huayre Bujaico',
            'email' => 'huayreunas@gmail.com',
            'email_verified_at' => now(),
            'password' => \Illuminate\Support\Facades\Hash::make('123456789'), // password
            'remember_token' => Str::random(10),
        ]);


    }
}
