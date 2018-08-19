@extends('Admin.Layout.Layout')
@section('content')



                <div >
                    <h1 class="page-header">User
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $user as $item )
                        <tr class="odd gradeX" align="center">
                            <td> {{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->password}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getdeleteuser',$item->id)}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getupdateuser',$item->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

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
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>X</td>
                                            </tr>

                                            <tr>
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>U</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
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
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

