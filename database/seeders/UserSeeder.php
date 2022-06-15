<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create(
            [
                'name'              => 'Super Admin',
                'email'             => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('superadmin'),
                'remember_token'    => Str::random(10),
            ]
        );
    }
}
