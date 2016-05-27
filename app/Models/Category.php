<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='category';
    protected $primaryKey='cat_id';

    public function child_cat(){
        return $this->hasMany('App\Models\Category','parent_id','cat_id');
    }
}
