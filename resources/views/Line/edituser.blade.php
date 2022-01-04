@extends('Line.master')
@section('content')
<br>
<div class="container">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" >
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Thông Tin Cá Nhân</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Lịch Sử Đặt Vé</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-edit" type="button" role="tab" aria-controls="pills-edit" aria-selected="false">Sửa Thông Tin Cá Nhân</button>
    </li>
</ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="color:white">
        <table class="table table-borderless" style="color:white">
            <tbody>
              <tr>
                <th scope="col">Họ Tên:sdasdasd</th>
              </tr>
              <tr>
                <th scope="col">Email:sdasdasd</th>
              </tr>
              <tr>
                <th scope="col">Giới Tính:sdasdasd</th>
              </tr>
              <tr>
                <th scope="col">Ngày Sinh:sdasdasd</th>
              </tr>
              <tr>
                <th scope="col">Số Điện Thoại:sdasdasd</th>
              </tr>
            </tbody>
          </table>
        
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" > 
        <table class="table table-borderless" style="color:white">
            <thead class="table-dark">
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Phim</th>
                <th scope="col">Ngày Đặt</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>@twitter</td>
                <td>Thornton</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="tab-pane fade" id="pills-edit" role="tabpanel" aria-labelledby="pills-edit" style="color:white">
        <form>
            <div class="row mb-3">
              <label for="inputHoTen" class="col-sm-2 col-form-label">HọTên</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputHoTen">
              </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
              </div>
            </div>
            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-2 pt-0">GiớiTính</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Nam
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Nữ
                  </label>
                </div>
              </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </form>
    </div>
  </div>
</div>
@endsection