<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedDaySectionProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranged_day_section_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('day_block_section_id')->comment('日编排板块栏目id，用于编排，关联arranged_day_block_sections表');
            $table->integer('program_id')->comment('节目id,关联audios表');
            $table->tinyInteger('link_type')->comment('节目连接状态，1 连接 0 断开');
            $table->tinyInteger('link_ways')->comment('连接效果');
            $table->tinyInteger('eq_sound')->comment('eq音效');
            $table->time('start_time')->comment('编排时间');
            $table->integer('create_staff_id')->comment('上单人，关联merchant_users表');
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
        Schema::dropIfExists('arranged_day_section_programs');
    }
}
