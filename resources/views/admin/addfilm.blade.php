@extends('admin.masteradmin')
@section('contentadmin')
{{-- @if($messe))
      <div class="alert alert-success">
             echo('$messe')
      </div>
@endif --}}

<form enctype="multipart/form-data" id="addfilm" method="POST" action="{{url('/addfilm')}}">
  @csrf
    <div class="form-group">
      <label for="email">Tên Phim :</label>
      <input type="text" class="form-control" placeholder="Nhập Tên Phim"  name="NameTP" id="NameTP" autofocus>
    </div>
    <br>
    <div class="form-group">
      <label >Thể Loại :</label>
      <select class="form-control form-control-sm" name="loaiphim" id="loaiphim">
        <option value="1">Hành Động</option>
        <option value="2">Hoạt Hình</option>
        <option value="3">Lãng Mạn</option>
      </select>
    </div>
    <br>
    <div class="form-group" >
      <label >Chọn Suất Chiếu</label><br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="suatchieu[]">
        <label class="form-check-label" for="inlineCheckbox1">9:00</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="suatchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">13:00</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="suatchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">16:00</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="suatchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">18:00</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="5" name="suatchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">21:00</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="6" name="suatchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">23:00</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="7" name="suatchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">1:00</label>
      </div>
    </div>
    <br>
    <div class="form-group" name="phongchieu">
      <label >Chọn Phòng Chiếu</label><br>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="phongchieu[]">
        <label class="form-check-label" for="inlineCheckbox1">1</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="phongchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">2</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="3" name="phongchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">3</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="4" name="phongchieu[]">
        <label class="form-check-label" for="inlineCheckbox2">4</label>
      </div>
    </div>
    <br>
    <div class="form-group">
      <label for="comment">Nội Dung :</label>
      <textarea class="form-control" rows="5" id="comment" name="noidung"></textarea>
    </div>
    <br>
    <div class="form-group">
      Chọn Hình Ảnh :
    <br>
    <input type="file" name="fileToUpload" id="fileToUpload" >
    </div>
    <br>
    <button type="submit" class="btn btn-primary" id="btnThem">Thêm</button>
  </form>
  {{-- <script type="text/javascript">
      $("#addfilm").submit(function(e){
        e.preventDefault();
        let tenPhim=$("#NameTP").val();
        let loaiPhim=$("#loaiphim").val();
        let noiDung=$("#comment").val();
        let hinhAnh=$("#fileToUpload").val();
        $.ajax({
          url: "/addfilm",
          type:'post',
          data: {
              tenPhim:tenPhim,
              loaiPhim:loaiPhim,
              noiDung:noiDung,
              hinhAnh:hinhAnh,
              _token:$('meta[name="csrf-token"]').attr('content'),
              },
          success: function(data) {
            console.log(data);
          }
        });
      });
  </script> --}}
@endsection