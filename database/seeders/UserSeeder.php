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
            'first_name' => ('test user'),
            'last_name' => ('last name'),
            'subscription_status' => false,
            'e-mail' => Str::random(7).'@gmail.com',
            'password' => Str::random(6),

        ]);
    }
}
