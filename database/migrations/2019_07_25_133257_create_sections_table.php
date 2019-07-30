<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel_id')->comment('频道id,关联channel表');
            $table->string('name')->comment('栏目名称');
            $table->tinyInteger('play_type')->nullable()->comment('播出类型：1 录播 2 直播 3 转播');
            $table->tinyInteger('section_type')->nullable()->comment('栏目类型：1 普通轮盘 2 剧集轮盘 3 固定栏目 4 广告 5 报时');
            $table->string('signal')->nullable()->comment('信号源');
            $table->boolean('play_mode')->nullable()->comment('播出方式:1 定时 2 软定时 3 手动');
            $table->mediumInteger('length')->nullable()->comment('时长');
            $table->smallInteger('difference')->nullable()->comment('误差');
            $table->text('desc')->nullable()->comment('描述');
            $table->tinyInteger('status')->comment('状态：0 停用，1 启用，2 未编排，3 已编排');
            $table->integer('eq_sound')->comment('EQ音效,关联音效表');
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
        Schema::dropIfExists('sections');
    }
}
