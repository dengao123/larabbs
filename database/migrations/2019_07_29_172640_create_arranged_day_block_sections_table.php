<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedDayBlockSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranged_day_block_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day_block_id')->comment('日编排板块id，用于编排，关联arranged_day_blocks表');
            $table->integer('section_id')->comment('栏目id,关联sections表');
            $table->time('start_time')->comment('编排时间');
            $table->tinyInteger('play_mode')->comment('播出方式:1 硬定时 2 软定时 3 顺延 4 插播 5 手动');
            $table->tinyInteger('status')->comment('状态：0 未上单 1 待审核 2 审核中 3 已上单 4 审核驳回');
            $table->string('opinions')->nullable()->comment('审核意见');
            $table->integer('arranged_time')->comment('栏目已编排时长');
            $table->integer('unarranged_time')->comment('栏目未编排时长');
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
        Schema::dropIfExists('arranged_day_block_sections');
    }
}
