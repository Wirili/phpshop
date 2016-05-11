<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ArticleCat;

class ArticleCatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
//        $cat_list=ArticleCat::where('parent_id',0)->get();
        $cat_list=$this->getCatList(0);
        return view('admin.article_cat_index',['cat_list'=>$cat_list]);
    }

    private function getCatList($parent_id,$level = 0,&$list=[]){
        $cat=ArticleCat::where('parent_id',$parent_id)->orderBy('sort_order')->get();
        foreach ($cat as $item) {
            $itemArr = $item->toArray();
            $itemArr['level']=$level;
            $list[]=$itemArr;
            if ($item->child_cat()->count() > 0) {
                $this->getCatList($item->cat_id,$level+1,$list);
            }
        }
        return $list;
    }
}
