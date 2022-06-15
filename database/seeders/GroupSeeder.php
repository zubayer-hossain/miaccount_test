<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = array(
            array('id' => '1','name' => 'Group 1','parent_id' => NULL,'level' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'Group 2','parent_id' => '1','level' => '2','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','name' => 'Group 3','parent_id' => NULL,'level' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','name' => 'Group 4','parent_id' => '6','level' => '3','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','name' => 'Group 5','parent_id' => NULL,'level' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','name' => 'Group 6','parent_id' => '5','level' => '2','created_at' => NULL,'updated_at' => NULL)
        );

        Group::insert($groups);
    }
}
