<?php

namespace Database\Seeders;

use App\Models\AccountHeadGroup;
use Illuminate\Database\Seeder;

class GroupAccountHeadPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group_account_heads_pivot = array(
            array('id' => '1','group_id' => '1','account_head_id' => '4'),
            array('id' => '2','group_id' => '1','account_head_id' => '5'),
            array('id' => '3','group_id' => '2','account_head_id' => '1'),
            array('id' => '4','group_id' => '2','account_head_id' => '2'),
            array('id' => '5','group_id' => '3','account_head_id' => '3'),
            array('id' => '6','group_id' => '4','account_head_id' => '6'),
            array('id' => '7','group_id' => '4','account_head_id' => '7'),
            array('id' => '8','group_id' => '5','account_head_id' => '8')
        );

        AccountHeadGroup::insert($group_account_heads_pivot);
    }
}
