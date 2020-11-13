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
        //
        User::create([
            'name' => ('test user'),
            'subscription_status' => false,
            'email' => Str::random(7).'@gmail.com',
            'password' => Str::random(8),
        ]);
    }
}
