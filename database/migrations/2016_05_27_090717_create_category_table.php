<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('category',function(Blueprint $table){
            $table->mediumIncrements('cat_id')->comment('');
            $table->string('cat_name',100)->comment('');
            $table->string('keywords',100)->comment('');
            $table->string('cat_desc',255)->comment('');
            $table->mediumInteger('parent_id')->default(0)->comment('');
            $table->tinyInteger('sort_order')->default(50)->comment('');
            $table->boolean('is_show')->default(true)->comment('');
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
        Schema::drop('category');
    }
}
