<?php

use Illuminate\Database\Seeder;
use App\Models\ArticleCat;

class ArticleCatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list=[[
            'cat_id'=>1,
            'cat_name'=>'帮助分类',
            'keywords'=>'帮助words',
            'cat_desc'=>'帮助desc'
        ]];
        foreach ($list as $item){
            ArticleCat::create($item);
        }
    }
}
