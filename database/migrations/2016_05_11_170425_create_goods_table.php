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
            $table->smallInteger('cat_id')->default(0)->comment('');
            $table->integer('user_id')->comment('');
            $table->string('goods_sn',60)->comment('');
            $table->string('goods_name',120)->comment('');
            $table->string('goods_name_style',60)->default('+')->comment('');
            $table->integer('click_count')->default(0)->comment('');
            $table->smallInteger('brand_id')->default(0)->comment('');
            $table->string('provider_name',100)->comment('');
            $table->smallInteger('goods_number')->default(0)->comment('');
            $table->integer('default_shipping')->comment('');
            $table->decimal('market_price',10,2)->default(0)->comment('');
            $table->decimal('shop_price',10,2)->default(0)->comment('');
            $table->decimal('promote_price',10,2)->default(0)->comment('');
            $table->timestamp('promote_start_date')->comment('');
            $table->timestamp('promote_end_date')->comment('');
            $table->tinyInteger('warn_number')->default(1)->comment('');
            $table->string('keywords',255)->comment('');
            $table->string('goods_brief',255)->comment('');
            $table->text('goods_desc')->comment('');
            $table->string('goods_thumb',255)->comment('');
            $table->string('goods_img',255)->comment('');
            $table->string('original_img',255)->comment('');
            $table->tinyInteger('is_real')->default(0)->comment('');
            $table->string('extension_code',30)->comment('');
            $table->tinyInteger('is_on_sale')->default(0)->comment('');
            $table->tinyInteger('is_alone_sale')->default(0)->comment('');
            $table->tinyInteger('is_shipping')->default(0)->comment('');
            $table->integer('integral')->default(0)->comment('');
            $table->smallInteger('sort_order')->default(100)->comment('');
            $table->boolean('is_delete')->default(0)->comment('');
            $table->boolean('is_best')->default(0)->comment('');
            $table->boolean('is_new')->default(0)->comment('');
            $table->boolean('is_hot')->default(0)->comment('');
            $table->boolean('is_promote')->default(0)->comment('');
            $table->integer('bonus_type_id')->default(0)->comment('');
            $table->smallInteger('goods_type')->default(0)->comment('');
            $table->string('seller_note',255)->comment('');
            $table->integer('give_integral')->default(-1)->comment('');
            $table->integer('rank_integral')->default(-1)->comment('');
            $table->integer('suppliers_id')->nullable()->comment('');
            $table->boolean('is_check')->nullable()->comment('');
            $table->boolean('store_hot')->default(0)->comment('');
            $table->boolean('store_new')->default(0)->comment('');
            $table->boolean('store_best')->default(0)->comment('');
            $table->smallInteger('group_number')->default(0)->comment('');
            $table->boolean('is_xiangou')->default(0)->comment('');
            $table->timestamp('xiangou_start_date')->comment('');
            $table->timestamp('xiangou_end_date')->comment('');
            $table->integer('xiangou_num')->default(0)->comment('');
            $table->boolean('review_status')->default(1)->comment('');
            $table->string('review_content',255)->comment('');
            $table->text('goods_shipai')->comment('');
            $table->integer('comments_number')->default(0)->comment('');
            $table->integer('sales_volume')->default(0)->comment('');
            $table->integer('comment_num')->default(0)->comment('');
            $table->boolean('model_price')->default(0)->comment('');
            $table->boolean('model_inventory')->default(0)->comment('');
            $table->boolean('model_attr')->default(0)->comment('');
            $table->decimal('largest_amount',10,2)->default(0)->comment('');
            $table->text('pinyin_keyword')->nullable()->comment('');
            $table->string('goods_product_tag',2000)->nullable()->comment('');
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
