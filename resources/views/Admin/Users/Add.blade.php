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
                    <h1 class="page-header">Users
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
                    <form action="{{route('postadduser')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="form-control" name="NameUser" placeholder="Please Enter User Name" />
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <input class="form-control" name="ivatar" placeholder="Please Enter Avatar" />
                        </div>
                        <div class="form-group">
                            <label> Introduce</label>
                            <input class="form-control" name="introduce" placeholder="Please Enter Introduce" />
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input class="form-control" type="email" name="email" placeholder="Please email Name" />
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input class="form-control" type="number" name="Gender" placeholder="Please email Gender" />
                        </div>
                        <div class="form-group">
                            <label>Passwword</label>
                            <input class="form-control" type="password" name="password" placeholder="Please password" />
                        </div>
                        <div class="form-group">
                            <label>Level</label>
                            <input class="form-control" type="number" name="role" placeholder="Please level" />
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" type="number" name="phone" placeholder="Please Phone" />
                        </div>
                        <div class="form-group">
                            <label>Date of Birth </label>
                            <input class="form-control" type="number" name="DateOfBirth" placeholder="Please Date of Birth" />
                        </div>
                        <div class="form-group">
                            <label>User id Update </label>
                            <input class="form-control" type="number" name="UserIdUpdate" placeholder="Please Date of User id Update" />
                        </div>

                        <button type="submit" class="btn btn-primary">User Add</button>
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