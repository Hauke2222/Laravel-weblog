<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            // Reset cached roles and permissions
    app()['cache']->forget('spatie.permission.cache');


    Role::create(['name' => 'user']);
    $user = User::create([
        'name' => 'user',
        'email' => 'user@example.com',
        'password' => Hash::make('password'),
    ]);
    $user->assignRole('user');

    Role::create(['name' => 'writer']);
    $writer = User::create([
        'name' => 'writer',
        'email' => 'writer@example.com',
        'password' => Hash::make('password'),
    ]);
    $writer->assignRole('writer');

    Role::create(['name' => 'admin']);
    $admin = User::create([
        'name' => 'admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('password'),
    ]);
    $admin->assignRole('admin');
    }
}
