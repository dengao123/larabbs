<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedDayBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranged_day_blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day_id')->comment('日期id，关联arranged_days表');
            $table->integer('block_id')->comment('板块id，关联blocks表');
            $table->tinyInteger('play_mode')->comment('播出方式:1 硬定时 2 软定时');
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
        Schema::dropIfExists('arranged_day_blocks');
    }
}
