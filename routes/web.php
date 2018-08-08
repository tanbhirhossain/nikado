<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home.main');
});

Route::get('/admin/dashboard', function () {
    return view('backend.backend_master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//===================================================== Admin Panel Route
//Admin Auth==============
Route::GET('admin/home','AdminController@index')->name('admin.home');
// Route::GET('admin/editor','EditorController@index');
// Route::GET('admin/test','EditorController@test');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');

Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//End Admin Auth=========

Route::resource('category', 'CategoryController');
Route::resource('sub_category', 'SubcategoryController');
Route::resource('brand', 'BrandController');
//End Admin Panel Route
