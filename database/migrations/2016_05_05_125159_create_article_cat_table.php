<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('article_cat',function(Blueprint $table){
            $table->smallIncrements('cat_id')->comment('');
            $table->string('cat_name')->comment('');
            $table->boolean('cat_type')->default(1)->comment('');
            $table->string('keywords')->default('')->comment('');
            $table->string('cat_desc')->default('')->comment('');
            $table->integer('sort_order')->default(50)->comment('');
            $table->boolean('show_in_nav')->default(0)->comment('');
            $table->integer('parent_id')->default(0)->comment('');
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
        Schema::drop('article_cat');
    }
}
