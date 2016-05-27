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
Route::get('admin/index', 'Admin\IndexController@index');
Route::get('admin/login', 'Admin\AuthController@getLogin');
Route::get('admin/logout', 'Admin\AuthController@logout');
Route::post('admin/login', 'Admin\AuthController@postLogin');
Route::get('admin/register', 'Admin\AuthController@getRegister');
Route::post('admin/register', 'Admin\AuthController@postRegister');

//商品路由
Route::get('admin/category/index', 'Admin\CategoryController@index');
Route::get('admin/category/ajax', 'Admin\CategoryController@ajax');

//文章路由
Route::get('admin/article/index', 'Admin\ArticleController@index');
Route::get('admin/article/edit/{id}', 'Admin\ArticleController@edit');
Route::get('admin/article/create', 'Admin\ArticleController@create');
Route::get('admin/article/ajax', 'Admin\ArticleController@ajax');
Route::post('admin/article/save', 'Admin\ArticleController@save');

//文章类别路由
Route::get('admin/article_cat/index', 'Admin\ArticleCatController@index');
Route::get('admin/article_cat/edit/{id}', 'Admin\ArticleCatController@edit');
Route::get('admin/article_cat/create', 'Admin\ArticleCatController@create');
Route::post('admin/article_cat/save', 'Admin\ArticleCatController@save');
Route::get('admin/article_cat/del/{id}', 'Admin\ArticleCatController@del');

//管理员路由
Route::get('admin/admin/index', 'Admin\AdminController@index');
Route::get('admin/admin/ajax', 'Admin\AdminController@ajax');

