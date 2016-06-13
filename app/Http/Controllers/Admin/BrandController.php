<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Brand as Brand;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Validator,Redirect;

class BrandController extends Controller
{
    //
    protected $rules = [
        'brand_name' => 'required',
    ];

    protected $messages = [
        'brand_name.required' => '请输入品牌名称',
    ];
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('admin.brand.index');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    public function create()
    {
        $brand = new Brand();
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    public function del($id)
    {
        $brand = Brand::find($id);
        if($brand->count()) {
            $brand->delete();
            return $this->sysMsg('品牌删除成功',\URL::action('Admin\BrandController@index'));
        }else
            return $this->sysMsg('品牌不存在',\URL::action('Admin\BrandController@index'));
    }

    public function save(Request $request)
    {

        $validator = Validator::make($request->all(), $this->rules, $this->messages);
        if ($validator->fails()) {
            return $this->sysMsg('',null,'error')->withErrors($validator);
        }
        if ($request->has('brand_id')) {
            $brand=Brand::find($request->brand_id);
        } else {
            $brand = new Brand();
        }
        $brand->brand_logo='';
        $file=$request->file('brand_logo_img');
        if($file){
            Storage::disk('images')->put('/data/images/asdfasdf.jpg',\File::get($file));
            $brand->brand_logo = '/data/images/asdfasdf.jpg';
        }
        $brand->brand_name = $request->brand_name;
        $brand->sort_order = $request->input('sort_order',50);
        $brand->is_show = $request->input('is_show',0);
        $brand->site_url = $request->site_url;
        $brand->brand_desc = $request->brand_desc;
        $brand->save();
        return $this->sysMsg('品牌保存成功',\URL::action('Admin\BrandController@index'));
    }

    public function ajax(Request $request)
    {
        $filter = $request->only(['draw', 'columns', 'order', 'start', 'length']);
        $data = Brand::orderBy($filter['columns'][$filter['order'][0]['column']]['data'], $filter['order'][0]['dir'])->forPage($filter['start'] / $filter['length'] + 1, $filter['length'])->get();
        $recordsTotal = Brand::all()->count();
        $recordsFiltered = Brand::all()->count();
        return [
            'draw' => intval($filter['draw']),
            'recordsTotal' => intval($recordsTotal),
            'recordsFiltered' => intval($recordsFiltered),
            'data' => $data->toArray()
        ];
    }
}
