@extends('manager.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Chi tiết</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $tr)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tr->id}}</td>
                        <td>{{$tr->name}}</td>
                        <td>{{$tr->email}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="profile/{{$tr->id}}"> Chi tiết</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="profile/user/xoa/{{$tr->id}}">Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection