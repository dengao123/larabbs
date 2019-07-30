<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedJingleProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jingle_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jingle_id')->comment('jingle单id,关联arranged_jingles表');
            $table->integer('program_id')->comment('节目id,关联audios表');
            $table->tinyInteger('eq_sound')->comment('eq音效');
            $table->tinyInteger('link_ways')->comment('连接效果');
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
        Schema::dropIfExists('jingle_programs');
    }
}
