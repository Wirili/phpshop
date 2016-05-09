<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
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
            'article_id'=>1,
            'cat_id'=>1,
            'title'=>'帮助',
            'content'=>'adf',
            'author'=>'admin',
            'author_email'=>'admin@qq.com',
            'keywords'=>'帮助',
            'file_url'=>'',
            'link'=>''
        ]];
        foreach ($list as $item) {
            Article::create($item);
        }
    }
}
