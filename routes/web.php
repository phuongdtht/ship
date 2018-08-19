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



Route::get('/admin','Admin\HomeController@index')->name('indexAdmin');

route::get('admin/user/list', 'Admin\UserController@GetListUser')->name('listuser');
route::post('admin/user/adduser', 'Admin\UserController@PostAddUser' )->name('postadduser');
route::get('admin/user/adduser', 'Admin\UserController@GetAddUser' )->name('getadduser');
route::post('updateuser/{id}', 'Admin\UserController@PostUpdateUser' )->name('postupdateuser');
route::get('updateuser/{id}', 'Admin\UserController@GetUpdateUser' )->name('getupdateuser');
route::get('deleteuser/{id}', 'Admin\UserController@DeleteUser' )->name('getdeleteuser');

