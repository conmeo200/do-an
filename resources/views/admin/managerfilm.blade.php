@extends('admin.masteradmin')
@section('contentadmin')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Thể Loai</th>
                    <th>Hình Ảnh</th>
                    <th>Tên Phim</th>
                    <th>Nội Dung</th>
                    <th>Chỉnh Sửa</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($phim as $ph)
                <tr>
                    <td>{{$ph->ID}}</td>
                    <td>{{$ph->Loai}}</td>
                    <td >
                       <img src="/source/img/IMG/{{$ph->image}}" width="100px" height="100px">
                    </td>
                    <td>{{$ph->TenPhim}}</td>
                    <td style="width: 40%">{{$ph->NoiDung}}</td>
                    <td>
                            <a href="/editfilm/{{$ph->ID}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="/destroy/{{$ph->ID}}"><button type="button" class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection