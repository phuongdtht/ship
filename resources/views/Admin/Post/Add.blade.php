@extends('Admin.Layout.Layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Posts
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}} <br/>
                            @endforeach
                        </div>
                    @endif
                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="{{route('postaddpost')}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Post Title</label>
                                <input class="form-control" name="Title" placeholder="Please Enter post title" />
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="Name" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="Phone" placeholder="Please Enter Phone" />
                            </div>
                            <div class="form-group">
                                <label>address_start</label>
                                <input class="form-control" name="address_start" placeholder="Please Enter address_start" />
                            </div>
                            <div class="form-group">
                                <label>address_end</label>
                                <input class="form-control" name="address_end" placeholder="Please Enter address_end" />
                            </div>
                            <div class="form-group">
                                <label>ship_cost</label>
                                <input class="form-control" name="ship_cost" placeholder="Please Enter ship_cost" />
                            </div>

                            <div class="form-group">
                                <label>Intro</label>
                                <input class="form-control" name="intro" placeholder="Please Enter intro" />
                            </div>
                            <div class="form-group">
                                <label>content</label>
                                <input class="form-control" name="content" placeholder="Please Enter content" />
                            </div>

                            <div class="form-group">
                                <label>tag</label>
                                <input class="form-control" name="tag" placeholder="Please Enter tag" />
                            </div>
                            <div class="form-group">
                                <label>description</label>
                                <input class="form-control" name="description" placeholder="Please Enter description" />
                            </div>
                            <div class="form-group">
                                <label>slug</label>
                                <input class="form-control" name="slug" placeholder="Please Enter slug" />
                            </div>
                            <div class="form-group">
                                <label>Active</label>
                                <input class="form-control" name="active" placeholder="Please Enter active" />
                            </div>
                            <button type="submit" class="btn btn-default">Post Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Main content -->

        <!-- /.content -->
    </div>
@stop