<?php

namespace Database\Seeders;

use App\Models\AccountHead;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Hash;

class AccountHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account_heads = array(
            array('id' => '1','name' => 'Account Head 1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'Account Head 2','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','name' => 'Account Head 3','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','name' => 'Account Head 4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','name' => 'Account Head 5','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','name' => 'Account Head 6','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','name' => 'Account Head 7','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','name' => 'Account Head 8','created_at' => NULL,'updated_at' => NULL)
        );
        AccountHead::insert($account_heads);
    }
}
