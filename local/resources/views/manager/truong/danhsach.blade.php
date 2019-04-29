@extends('manager.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trường
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
                        <th>Logo</th>
                        <th>Địa chỉ</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($school as $tr)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tr->id}}</td>
                        <td>{{$tr->name}}</td>
                        <td><img src="image/logo/{{$tr->logo}}" alt="<?php echo "Hình ảnh trường: " . $tr->name;?>" width="200" height="200"></td>
                        <td>{{$tr->address}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="manager/school/xoa/{{$tr->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="manager/school/sua/{{$tr->id}}">Edit</a></td>
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