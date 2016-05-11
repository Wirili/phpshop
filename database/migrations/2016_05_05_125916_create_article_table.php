<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('article',function(Blueprint $table){
            $table->increments('article_id')->comment('');
            $table->integer('cat_id')->comment('');
            $table->string('title')->comment('');
            $table->longText('contents')->comment('');
            $table->string('author',30)->comment('');
            $table->string('author_email',60)->comment('');
            $table->string('keywords')->comment('');
            $table->boolean('article_type')->default(2)->comment('');
            $table->boolean('is_open')->default(1)->comment('');
            $table->timestamp('add_time')->comment('');
            $table->string('file_url')->comment('');
            $table->boolean('open_type')->default(0)->comment('');
            $table->string('link')->comment('');
            $table->string('description')->nullable()->comment('');
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
        Schema::drop('article');
    }
}
