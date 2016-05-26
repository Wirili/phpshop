<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table="article";
    protected $primaryKey="article_id";
    protected $fillable=['title','is_open'];
    public function article_cat(){
        return $this->belongsTo('App\Models\ArticleCat','cat_id','cat_id');
    }
}
