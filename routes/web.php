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

//Đăng nhập admin
Route::get('admin/login','Admin\UserController@GetAdminLogin')->name('getadmin');
Route::post('admin/login','Admin\UserController@PostAdminLogin')->name('postadmin');
Route::get('admin/logout','Admin\UserController@GetAdminLogout')->name('logout');
//Route nhóm admin
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'], function()
{
    //trang chủ
    Route::get('/admin','Admin\HomeController@index')->name('indexAdmin');
    //quản lý user
    Route::group(['prefix'=>'user'], function(){
    route::get('/list', 'Admin\UserController@GetListUser')->name('listuser');
    route::post('/adduser', 'Admin\UserController@PostAddUser' )->name('postadduser');
    route::get('/adduser', 'Admin\UserController@GetAddUser' )->name('getadduser');
    route::post('updateuser/{id}', 'Admin\UserController@PostUpdateUser' )->name('postupdateuser');
    route::get('updateuser/{id}', 'Admin\UserController@GetUpdateUser' )->name('getupdateuser');
    route::get('deleteuser/{id}', 'Admin\UserController@DeleteUser' )->name('getdeleteuser');
        });
    //quản lý post
    Route::group(['prefix'=>'post'], function(){
    route::get('/list', 'Admin\PostController@GetListPost' )->name('listpost');
    route::post('/addpost', 'Admin\PostController@PostAddPost' )->name('postaddpost');
    route::get('/addpost', 'Admin\PostController@GetAddPost' )->name('getaddpost');
    route::post('/updatepost/{id}', 'Admin\PostController@PostUpdatePost' )->name('postupdatepost');
    route::get('/updatepost/{id}', 'Admin\PostController@GetUpdatePost' )->name('getupdatepost');
    route::get('/delepost/{id}', 'Admin\PostController@DeletePost' )->name('getdeletepost');
    });
});