<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class UserController extends Controller
{
    // xem danh sach user
    function GetListUser(){
        $UserModel= new  users;
        $ListUser=$UserModel->get();
        return view('Admin.Users.List',['user'=>$ListUser]);
    }
    // điều hướng để tạo user mới
    function GetAddUser(){
        return view('Admin.Users.Add');
    }
    function PostAddUser(Request $request){
        $this->validate($request,
            [
                'NameUser'=>'required',
                'email'=> 'required',
                'password'=>'min:3|max:100',
                'role'=>'required'

            ],
            [
                'NameUser.required'=>'Bạn chưa nhập Name',
                'email.required'=>'Bạn chưa nhập email',
                'role.required'=>'Bạn chưa nhập level',
                //'password.required'=>'Bạn chưa nhập password',
                'password.min'=> 'Tên password phải từ 3-100 kí tự',
                'password.max'=> 'Tên password phải từ 3-100 kí tự',
            ]);

        $user= new users();
        if ($user-> name == $request-> NameUser or $user-> email = $request-> email) {
            return redirect('admin/user/adduser')->with('thongbao','Người dùng đã tồn tại');
        }
        else
        $user-> name = $request-> NameUser;
        $user-> email = $request-> email;
        $user-> password = bcrypt($request-> password);
        $user-> role = $request-> role;
        $user->save();
        return redirect('admin/user/adduser')->with('thongbao','Thêm thành công');
    }

}
