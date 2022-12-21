@extends('layout.admin_base')

@section('title', 'Thêm nhà sản xuất')

@section('content')
    <div class="table-agile-info">
        <h3>Thêm nhà sản xuất</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên nhà sản xuất</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-plus"></i> Thêm NSX mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection
