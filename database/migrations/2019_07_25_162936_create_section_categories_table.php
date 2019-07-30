<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id')->comment('栏目ID,关联v8_sections表');
            $table->integer('category_id')->comment('分类ID,关联v8_sort表');
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
        Schema::dropIfExists('section_categories');
    }
}
