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
                    <th>Họ Tên</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Chỉnh Sửa</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                            <label class="form-check-label" for="defaultCheck1">
                              Khách Hàng
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Admin
                            </label>
                        </div>
                        <td>
                            <a href="customer_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
    
                    
                        </td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Khách Hàng
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Admin
                            </label>
                        </div>
                    </td>
                    <td>
                        <a href="customer_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
                        <a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>

                </td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Khách Hàng
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Admin
                            </label>
                        </div>
                    </td>
                    <td>
                        <a href="customer_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
                        <a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>

                </td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Khách Hàng
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Admin
                            </label>
                        </div>
                    </td>
                    <td>
                        <a href="customer_detail.php"><button type="button" class="btn btn-primary">Sửa</button></a>
                        <a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>

                </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
@endsection