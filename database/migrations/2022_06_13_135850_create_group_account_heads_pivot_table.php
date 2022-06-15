<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupAccountHeadsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_head_group', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_head_id')->nullable()->constrained('account_heads');
            $table->foreignId('group_id')->nullable()->constrained('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_head_group');
    }
}
