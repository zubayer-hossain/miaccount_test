<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AccountHeadSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(GroupAccountHeadPivotSeeder::class);
    }
}
