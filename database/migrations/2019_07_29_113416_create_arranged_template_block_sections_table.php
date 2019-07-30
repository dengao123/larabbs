<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedTemplateBlockSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranged_template_block_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('template_week_block_id')->comment('星期板块id，用于编排，关联arranged_template_week_blocks表');
            $table->integer('section_id')->comment('栏目id,关联sections表');
            $table->time('start_time')->comment('编排时间');
            $table->tinyInteger('play_mode')->comment('播出方式:1 硬定时 2 软定时 3 顺延 4 插播 5 手动');
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
        Schema::dropIfExists('arranged_template_block_sections');
    }
}
