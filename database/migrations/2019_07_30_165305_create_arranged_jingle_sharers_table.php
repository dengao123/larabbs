<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedJingleSharersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranged_jingle_sharers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jingle_id')->comment('jingle单id,关联arranged_jingles表');
            $table->integer('sharer_staff_id')->comment('共享者id,关联merchant_users表');
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
        Schema::dropIfExists('arranged_jingle_sharers');
    }
}
