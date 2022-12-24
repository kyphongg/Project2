@extends('layout.admin_base')

@section('title', 'Thêm nhân viên')

@section('content')
    <div class="table-agile-info">
        <h3>Thêm nhân viên mới</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên nhân viên</label>
                        <input type="text" class="form-control" name="product_name" placeholder="Tên nhân viên" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="product_name" placeholder="Tên nhân viên" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu</label>
                        <input type="password" class="form-control" name="product_name" placeholder="Tên nhân viên" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chức vụ</label>
                        <select name="category_id" class="form-control m-bot15">
                            <option value="0">Nhân viên kho</option>
                            <option value="1">Nhân viên đơn hàng</option>
                            <option value="2">Nhân viên CSKH</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info" name="add_product"><i class="fa-solid fa-plus"></i> Thêm mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection
