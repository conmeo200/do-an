@extends('admin.masteradmin')
@section('contentadmin')



@foreach ($data as $phim)
<form action="/update/{{$phim->ID}}" method="post" enctype="multipart/form-data">
  @csrf

  <div class="form-group" method="post">
    <label for="email">Tên Phim :</label>
    <input type="text" class="form-control" placeholder="Nhập Tên Phim"  name="NameTP" autofocus value="{{$phim->TenPhim}}">
  </div>
  <br>
  <div class="form-group">
    <label for="email">Thể Loại :</label>
    <select class="form-control form-control-sm" name="loaiphim">
      @if($phim->ID_Loai == 1)
        <option value="1">Hành Động</option>
        <option value="2">Hoạt Hình</option>
        <option value="3">Lãng Mạn</option>
      @elseif($phim->ID_Loai == 2) 
        <option value="2">Hoạt Hình</option>
        <option value="1">Hành Động</option>
        <option value="3">Lãng Mạn</option>
      @else
        <option value="3">Lãng Mạn</option>
        <option value="1">Hành Động</option>
        <option value="2">Hoạt Hình</option>
      @endif
    </select>
  </div>
 
  <div class="form-group" >
    <label >Chọn Suất Chiếu</label><br>
        @foreach ($qlXC as $ql)
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$ql->ID_XC}}" name="suatchieu[]" checked >
      <label class="form-check-label" for="inlineCheckbox1">{{$ql->ID_XC}}</label>
    </div>
        @endforeach
  </div>

  <br>
  <div class="form-group" name="phongchieu">
    <label >Chọn Phòng Chiếu</label><br>
      @foreach ($qlXC as $ql)
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$ql->SoPhong}}" name="phongchieu[]" checked>
      <label class="form-check-label" for="inlineCheckbox1">{{$ql->SoPhong}}</label>
    </div>
    @endforeach
  </div>
 
  <br>
  <div class="form-group">
    <label for="comment">Nội Dung :</label>
    <textarea class="form-control" rows="10" id="comment" name="noidung">{{$phim->NoiDung}}</textarea>
  </div>
  <br>
  <div class="input-group">
    <div class="custom-file">
      <img src="/source/img/IMG/{{$phim->image}}" alt="">
    </div>
  </div>
  <div class="form-group">
      Chọn Hình Ảnh :
    <br>
    <input type="file" name="fileToUpload" id="fileToUpload" name="img" value="{{$phim->image}}">
    </div>
  <br> 

  <button type="submit" class="btn btn-primary">Sửa</button>
</form>
@endforeach
@endsection