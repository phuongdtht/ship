<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;

class UserController extends Controller
{
    function GetAdminLogin(){
        return view('Admin.login_admin');
    }
    function PostAdminLogin(Request $request){
        $this->validate($request,
            [
                'email'=> 'required',
                'password'=>'required|min:3|max:100',

            ],
            [
                'email.required'=>'Bạn chưa nhập email',
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=> 'Tên password phải từ 3-100 kí tự',
                'password.max'=> 'Tên password phải từ 3-100 kí tự',
            ]);
        // $data=['email'=>$request->email, 'password'=>$request->password];
        $credentials = $request->only('email', 'password');

        if (auth::attempt($credentials)){
            return redirect()->route('indexAdmin');
        }
        else {
            return redirect('admin/login')-> with('thongbao','Đăng nhập không thành công');
        }
    }
    //log out
    function   GetAdminLogout(){
        Auth::logout();
        return redirect('admin/login');
    }

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
        if ($user-> name == $request-> NameUser or $user-> email == $request-> email) {
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
    //update user
    function GetUpdateUser($id){
        $user= users::find($id);
        return view('Admin.Users.Update',['UserUpdate'=>$user]);
    }
    function PostUpdateUser(Request $request, $id){
        $user = users::find($id);
        $this->validate($request ,
            [
                'NameUser'=>'required',
                'email'=> 'required',
                'password'=>'min:3|max:100',
                'role'=>'required'

            ],
            [
                'NameUser.required'=>'Bạn chưa nhập Name',
                'email.required'=>'Bạn chưa nhập email',
                'level.required'=>'Bạn chưa nhập level',
                //'password.required'=>'Bạn chưa nhập password',
                'password.min'=> 'Tên password phải từ 3-100 kí tự',
                'password.max'=> 'Tên password phải từ 3-100 kí tự',
            ]);

        $user-> name = $request-> NameUser;
        $user-> email = $request-> email;
        $user-> password = bcrypt($request->password);
        $user-> level = $request-> level;
        $user->save();
        return redirect('admin/users/updateuser/'.$id)->with('thongbao','Update thành công');
    }
    // xoá user
    function DeleteUser ($id){
        $del=users::find($id);
        $del->delete();
        return redirect('admin/user/list')-> with('thongbao','Bạn đã xoá thành công');
    }

}
