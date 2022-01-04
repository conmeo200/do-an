@extends('admin.masteradmin')
@section('contentadmin')
<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Tên </label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Nhập Tên" name="nameuser">
          </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  name="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password"  name=">Password">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
@endsection