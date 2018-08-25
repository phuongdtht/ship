<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Posts;

class PostController extends Controller
{
    //
    function GetListPost()
    {
        $PostModel = new Posts();
        $ListPost = $PostModel->get();
        return view('Admin.Post.List', ['post' => $ListPost]);
    }
    function GetAddPost(){
        return view('Admin.Post.Add');
    }
    function PostAddPost (Request $request ){

        $this-> validate($request,
            [
                'Title'=> 'required|min:3|max:500',
                'Name'=>'required|min:3|max:100',



            ],
            [
                'Title.required'=>'Bạn chưa nhập title post',
                'Title.min'=> 'Tên post phải từ 3-500 kí tự',
                'Title.max'=> 'Tên post phải từ 3-500 kí tự',
                'Name'=>'Bạn chưa nhập category id',
                'Name.min'=> 'Tên category phải từ 3-100 kí tự',
                'Name.max'=> 'Tên category phải từ 3-100 kí tự',
            ]);
        $cate= new posts();
        $cate-> title = $request-> Title;
        $cate-> name = $request-> Name;
        $cate-> phone = $request-> Phone;
        $cate-> address_start = $request-> address_start;
        $cate-> address_end = $request-> address_end;
        $cate-> ship_cost = $request-> ship_cost;
        $cate-> intro = $request-> intro;
        $cate-> content = $request-> content;
        $cate-> tag = $request-> tag;
        $cate-> description = $request-> description;
        $cate-> active = $request-> active;
        $cate->save();

        return redirect('admin/post/addpost')->with('thongbao','Thêm thành công');
    }
    function GetUpdatePost($id){
        $post= posts::find($id);
        return view('Admin.Post.Update',['getpost'=>$post]);
    }
    function PostUpdatePost(Request $request, $id){
        $cate=posts::find($id);
        // dd($request->all());
        $this-> validate($request,
            [
                'NamePost'=> 'required|min:3|max:500',
                'Category'=>'required|min:3|max:100',



            ],
            [
                'NamePost.required'=>'Bạn chưa nhập title post',
                'NamePost.min'=> 'Tên post phải từ 3-500 kí tự',
                'NamePost.max'=> 'Tên post phải từ 3-500 kí tự',
                'Category'=>'Bạn chưa nhập category id',
                'Category.min'=> 'Tên category phải từ 3-100 kí tự',
                'Category.max'=> 'Tên category phải từ 3-100 kí tự',
            ]);

        $cate-> title = $request-> NamePost;
        $cate-> category_id = $request-> Category;
        $cate-> intro = $request-> intro;
        $cate-> content = $request-> content;
        $cate-> image = $request-> image;
        $cate-> tag = $request-> tag;
        $cate-> description = $request-> description;
        $cate-> CountComment = $request-> countcomment;
        $cate-> slug = $request-> slug;
        $cate-> active = $request-> active;
        $cate->save();

        return redirect('admin/post/updatepost/'.$id)->with('thongbao','update thàng công');
    }
    function Deletepost ($id){
        $del=posts::find($id);
        $del->delete();
        return redirect('admin/post/list')-> with('thongbao','Bạn đã xoá thành công');
    }


}
