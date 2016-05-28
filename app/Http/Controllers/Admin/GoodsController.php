<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goods;
use App\Models\Category;

class GoodsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.goods.index');
    }

    public function edit($id)
    {
        $goods = Goods::find($id);
        $goods_cat = Category::all();
        return view('admin.goods.edit', ['goods' => $goods,'goods_cat'=>$goods_cat]);
    }

    public function create()
    {
        $goods = new Goods();
        return view('admin.goods.edit', ['goods' => $goods]);
    }

    public function ajax(Request $request)
    {
        $filter = $request->only(['draw', 'columns', 'order', 'start', 'length']);
        $data = Goods::orderBy($filter['columns'][$filter['order'][0]['column']]['data'], $filter['order'][0]['dir'])->forPage($filter['start'] / $filter['length'] + 1, $filter['length'])->get();
        $recordsTotal = Goods::all()->count();
        $recordsFiltered = Goods::all()->count();
        return [
            'draw' => intval($filter['draw']),
            'recordsTotal' => intval($recordsTotal),
            'recordsFiltered' => intval($recordsFiltered),
            'data' => $data->toArray()
        ];
    }
}
