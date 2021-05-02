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
    return view('welcome');
});






Route::get('/home', 'HomeController@index')->name('home');


// Auth::routes();


Route::get('/login', 'Auth\LoginController@loginForm')->name('login.form');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin-dashboard', 'DashboardController@dashboard')->name('admin.dashboard');


Route::get('/menu', 'MenuController@index')->name('admin.menu');
Route::post('/menu/store', 'MenuController@store')->name('admin.menu.store');
Route::get('/menu/create', 'MenuController@create')->name('admin.menu.create');
Route::get('/menu/destroy/{id}', 'MenuController@destroy')->name('admin.menu.destroy');
Route::get('/menu/edit/{id}', 'MenuController@edit')->name('admin.menu.edit');
Route::put('/menu/update/{menu}', 'MenuController@update')->name('admin.menu.update');


Route::get('/menu-item', 'MenuitemController@index')->name('admin.menuitem');
Route::post('/menu-item/store', 'MenuitemController@store')->name('admin.menuitem.store');
Route::get('/menu-item/create', 'MenuitemController@create')->name('admin.menuitem.create');
Route::get('/menu-item/destroy/{id}', 'MenuitemController@destroy')->name('admin.menuitem.destroy');	
Route::get('/menu-item/edit/{menuitem}', 'MenuitemController@edit')->name('admin.menuitem.edit');
Route::put('/menu-item/update/{menuitem}', 'MenuitemController@update')->name('admin.menuitem.update');

Route::get('/menu-item-category', 'MenuitemcategoryController@index')->name('admin.menuitemcategory');
Route::post('/menu-item-category/store', 'MenuitemcategoryController@store')->name('admin.menuitemcategory.store');	
Route::get('/menu-item-category/create', 'MenuitemcategoryController@create')->name('admin.menuitemcategory.create');
Route::get('/menu-item-category/destroy/{id}', 'MenuitemcategoryController@destroy')->name('admin.menuitemcategory.destroy');
Route::get('/menu-item-category/edit/{menuitemcategory}', 'MenuitemcategoryController@edit')->name('admin.menuitemcategory.edit');
Route::put('/menu-item-category/update/{menuitemcategory}', 'MenuitemcategoryController@update')->name('admin.menuitemcategory.update');