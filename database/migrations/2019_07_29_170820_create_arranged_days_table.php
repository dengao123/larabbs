<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranged_days', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('template_week_id')->comment('生成该日编单的模板星期ID，关联 arranged_template_weeks 表');
            $table->date('date')->comment('日期');
            $table->boolean('is_arranged')->comment('是否编排，0 未编排 1已编排');
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
        Schema::dropIfExists('arranged_days');
    }
}
