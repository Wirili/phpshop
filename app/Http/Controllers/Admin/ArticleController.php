<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
//        $list=Article::all()->forPage(1,15);
//        return view('admin.article_index',['list'=>$list]);
        return view('admin.article_index');
    }

    public function show($id)
    {
        return view('admin.article_show');
    }

    public function edit($id)
    {
        $article=Article::find($id);
        return view('admin.article_edit',['article'=>$article]);
    }

    public function ajax(Request $request){
        $filter=$request->only(['draw','columns','order','start','length']);
        $data = Article::with('article_cat')->forPage($filter['start']/$filter['length']+1,$filter['length'])->get();
        $recordsTotal=Article::all()->count();
        $recordsFiltered=Article::all()->count();
        return [
            'draw'=>intval($filter['draw']),
            'recordsTotal'=>intval($recordsTotal),
            'recordsFiltered'=>intval($recordsFiltered),
            'data'=>$data->toArray()
        ];
    }
}
