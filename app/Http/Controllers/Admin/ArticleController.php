<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $list=Article::all()->forPage(1,15);
        return view('admin.article_index',['list'=>$list]);
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
}
