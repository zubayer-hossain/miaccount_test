<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = array(
            array('id' => '1', 'account_head_id' => '1', 'date' => '2022-06-13 12:19:21', 'debit' => '60.00', 'credit' => '40.00', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '2', 'account_head_id' => '2', 'date' => '2022-06-13 12:19:21', 'debit' => '35.00', 'credit' => '20.00', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '3', 'account_head_id' => '4', 'date' => '2022-06-13 12:19:21', 'debit' => '70.00', 'credit' => '40.00', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '4', 'account_head_id' => '5', 'date' => '2022-06-13 12:19:21', 'debit' => '30.00', 'credit' => '10.00', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '5', 'account_head_id' => '3', 'date' => '2022-06-13 12:19:21', 'debit' => '70.00', 'credit' => '30.00', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '6', 'account_head_id' => '6', 'date' => '2022-06-13 12:19:21', 'debit' => '30.00', 'credit' => '25.00', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '7', 'account_head_id' => '7', 'date' => '2022-06-13 12:19:21', 'debit' => '70.00', 'credit' => '60.00', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '8', 'account_head_id' => '8', 'date' => '2022-06-13 12:19:21', 'debit' => '30.00', 'credit' => '15.00', 'created_at' => NULL, 'updated_at' => NULL),
        );
        Transaction::insert($transactions);
    }
}
