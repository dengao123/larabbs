<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel_id')->comment('频道id,关联channel表');
            $table->string('name')->comment('板块名称');
            $table->tinyInteger('status')->nullable()->comment('状态：0 停用，1 启用');
            $table->tinyInteger('play_mod')->comment('预播方式：1 硬定时 2 软定时');
            $table->string('play_time',20)->comment('预播时间，不带日期');
            $table->string('duration',20)->comment('时长');
            $table->text('desc')->nullable()->comment('描述');
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
        Schema::dropIfExists('blocks');
    }
}
