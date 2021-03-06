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

Route::get('/', [
	'as' => 'home.index',
	'uses' => 'HomeController@index'
]);
Route::get('/test/{id}', [
	'as' => 'home.test',
	'uses' => 'HomeController@test'
]);

Route::get('/chi-tiet/{id}', [
	'as' => 'home.detail',
	'uses' => 'HomeController@detail'
]);

Route::get('/ban-chay-nhat', [
	'as' =>'home.bestseller',
	'uses' => 'HomeController@bestseller'
]);

Route::get('/sach-moi', [
	'as' =>'home.newbook',
	'uses' => 'HomeController@newbook'
]);

Route::get('/sap-phat-hanh', [
	'as' =>'home.comming',
	'uses' => 'HomeController@comming'
]);

Route::get('/giam-gia', [
	'as' =>'home.discount',
	'uses' => 'HomeController@discount'
]);

Route::get('/combo', [
	'as' =>'home.combo',
	'uses' => 'HomeController@combo'
]);

Route::get('/tac-gia', [
	'as' =>'home.author',
	'uses' => 'HomeController@author'
]);

Route::get('/nha-xuat-ban', [
	'as' =>'home.publisher',
	'uses' => 'HomeController@publisher'
]);

Route::get('/cong-ty-phat-hanh', [
	'as' =>'home.issuer',
	'uses' => 'HomeController@issuer'
]);

Route::get('/tim-kiem', [
	'as' =>'home.search',
	'uses' => 'HomeController@search'
]);

Route::get('/thanh-toan', [
	'as' =>'home.checkout',
	'uses' => 'HomeController@checkout'
]);

Route::get('/tai-khoan', [
	'as' =>'home.customer',
	'uses' => 'HomeController@customer'
]);

Route::get('/danh-muc', [
	'as' =>'home.cate',
	'uses' => 'HomeController@cate'
]);
