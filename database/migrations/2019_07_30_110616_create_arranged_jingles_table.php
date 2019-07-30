<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedJinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranged_jingles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel_id')->comment('频道id,关联channels表');
            $table->string('group_name')->comment('jingle单分组名');
            $table->boolean('is_share')->comment('是否共享，0 不共享 1 共享');
            $table->integer('create_staff_id')->comment('创建者id,关联merchant_users表');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arranged_jingles');
    }
}
