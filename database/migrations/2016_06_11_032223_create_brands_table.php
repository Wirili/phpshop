<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('brand_id')->comment('');
            $table->string('brand_name',60)->comment('');
            $table->string('brand_letter',60)->default('')->comment('');
            $table->string('brand_logo',80)->default('')->comment('');
            $table->text('brand_desc')->default('')->comment('');
            $table->string('site_url',255)->default('')->comment('');
            $table->integer('sort_order')->default(50)->comment('');
            $table->boolean('is_show')->default(1)->comment('');
            $table->boolean('is_delete')->default(0)->comment('');
            $table->boolean('audit_status')->default(1)->comment('');
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
        Schema::drop('brands');
    }
}
