<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('goods',function(Blueprint $table){
            $table->increments('goods_id')->comment('');
            $table->integer('cat_id')->comment('');
            $table->integer('user_id')->comment('');
            $table->string('goods_sn',60)->comment('');
            $table->string('goods_name',120)->comment('');
            $table->string('goods_name_style',60)->comment('');
            $table->integer('click_count')->comment('');
            $table->integer('brand_id')->comment('');
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
        //
        Schema::drop('goods');
    }
}
