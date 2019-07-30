<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrangedTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arranged_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('channel_id')->comment('频道id,关联channels表');
            $table->string('name')->comment('模板名称');
            $table->boolean('type')->comment('模板类型，1:常规模板，2:特列模板');
            $table->boolean('status')->nullable()->comment('模板状态，1:使用中，0:待使用');
            $table->timestamp('start_time')->nullable()->comment('模板生效开始时间');
            $table->timestamp('end_time')->nullable()->comment('模板结束时间，注意：只有特例模板才有结束时间');
            $table->string('create_staff_id',50)->nullable()->comment('模板创建人，关联merchant_users表');
            $table->string('update_staff_id',50)->nullable()->comment('模板修改人，关联merchant_users表');
            $table->timestamp('recently_update_time')->nullable()->comment('最新更新时间');
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
        Schema::dropIfExists('arranged_templates');
    }
}
