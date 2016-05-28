<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('admin', 'Admin\IndexController@index');
Route::get('admin/welcome', 'Admin\IndexController@welcome');

Route::get('admin/index', 'Admin\IndexController@index');
Route::get('admin/login', 'Admin\AuthController@getLogin');
Route::get('admin/logout', 'Admin\AuthController@logout');
Route::post('admin/login', 'Admin\AuthController@postLogin');
Route::get('admin/register', 'Admin\AuthController@getRegister');
Route::post('admin/register', 'Admin\AuthController@postRegister');

//商品路由
Route::get('admin/goods/index', 'Admin\GoodsController@index');
Route::get('admin/goods/edit/{id}', 'Admin\GoodsController@edit');
Route::get('admin/goods/create', 'Admin\GoodsController@create');
Route::get('admin/goods/del', 'Admin\GoodsController@del');
Route::post('admin/goods/save', 'Admin\GoodsController@save');
Route::post('admin/goods/ajax', 'Admin\GoodsController@ajax');

//商品类别路由
Route::get('admin/category/index', 'Admin\CategoryController@index');

//文章路由
Route::get('admin/article/index', 'Admin\ArticleController@index');
Route::get('admin/article/edit/{id}', 'Admin\ArticleController@edit');
Route::get('admin/article/create', 'Admin\ArticleController@create');
Route::post('admin/article/save', 'Admin\ArticleController@save');
Route::post('admin/article/ajax', 'Admin\ArticleController@ajax');

//文章类别路由
Route::get('admin/article_cat/index', 'Admin\ArticleCatController@index');
Route::get('admin/article_cat/edit/{id}', 'Admin\ArticleCatController@edit');
Route::get('admin/article_cat/create', 'Admin\ArticleCatController@create');
Route::post('admin/article_cat/save', 'Admin\ArticleCatController@save');
Route::get('admin/article_cat/del/{id}', 'Admin\ArticleCatController@del');

//管理员路由
Route::get('admin/admin/index', 'Admin\AdminController@index');
Route::post('admin/admin/ajax', 'Admin\AdminController@ajax');

