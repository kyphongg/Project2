@extends('layout.admin_base')

@section('title', 'Thêm nhân viên')

@section('content')
    <div class="table-agile-info">
        <h3>Thêm nhân viên mới</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{url('/admin/save-employee')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên nhân viên</label>
                        <input type="text" class="form-control" name="admin_name" placeholder="Tên nhân viên" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="admin_email" placeholder="Tên nhân viên" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu</label>
                        <input type="password" class="form-control" name="admin_password" placeholder="Tên nhân viên" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chức vụ</label>
                        <select name="admin_level" class="form-control m-bot15">
                            <option  value="1">Nhân viên kho</option>
                            <option  value="2">Nhân viên đơn hàng</option>
                            <option  value="3">Nhân viên CSKH</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info" name="add_admin"><i class="fa-solid fa-plus"></i> Thêm mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection
