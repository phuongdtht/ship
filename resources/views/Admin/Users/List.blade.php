@extends('Admin.Layout.Layout')
@section('css')
    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
    @stop
@section('content')



                <div >
                    <h1 class="page-header">User
                        <small>List</small>
                    </h1>
                </div>


            <!-- /.row -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Data Tables
                            <small>advanced tables</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li><a href="#">Tables</a></li>
                            <li class="active">Data tables</li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">

                                <!-- /.box -->

                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Data Table With Full Features</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        @if (session('thongbao'))
                                            <div class="alert alert-success">
                                                {{session('thongbao')}}
                                            </div>
                                        @endif
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>email</th>
                                                <th>password</th>
                                                <th>gender</th>
                                                <th>phone</th>
                                                <th>delete</th>
                                                <th>update</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $user as $item )
                                            <tr>
                                                <td> {{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->role}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->password}} </td>
                                                <td> {{$item->gender}} </td>
                                                <td>{{$item->phone}} </td>
                                                <td class="center"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                                                        <i class="fa fa-trash-o  fa-fw"></i>Delele
                                                    </button>
                                                </td>

                                                <td class="center"><a class="btn btn-success" href="{{route('getupdateuser',$item->id)}}">
                                                        <i class="fa fa-pencil fa-fw"></i> Edit</a>
                                                </td>

                                            </tr>
                                            <div class="modal modal-warning fade" id="modal-warning">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title"> Bạn chắc chắn muốn xoá</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">NO</button>
                                                            <button type="button" class="btn btn-outline" data-dismiss="modal" data-toggle="modal" data-target="#modal-danger">
                                                                YES
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <div class="modal modal-danger fade" id="modal-danger">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title">Đây là thông tin quan trọng Bạn chắc chắn muốn xoá</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">NO</button>
                                                            <a class="btn btn-outline" href="{{route('getdeleteuser',$item->id)}}">
                                                                <i class="fa fa-trash-o  fa-fw"></i> YES  </a>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>


                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>email</th>
                                                <th>password</th>
                                                <th>gender</th>
                                                <th>phone</th>
                                                <th>delete</th>
                                                <th>update</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </section>
                    <!-- /.content -->
                </div>

    @stop


