@extends('layout.admin_base')

@section('title', 'Nhập kho')

@section('content')
    <div class="table-agile-info">
        <h3>Nhập kho</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form">
                    <div class="form-group">
                        <label>Game</label>
                        <input name="categoryName" type="text" class="form-control" placeholder="Tên thể loại">
                    </div>
                    <div class="form-group">
                        <label>Số lượng</label>
                        <input name="categoryName" type="text" class="form-control" placeholder="Tên thể loại">
                    </div>
                    <div class="form-group">
                        <label>Giá nhập</label>
                        <input name="categoryName" type="text" class="form-control" placeholder="Tên thể loại">
                    </div>
                    <div class="form-group">
                        <label>Giá bán</label>
                        <input name="categoryName" type="text" class="form-control" placeholder="Tên thể loại">
                    </div>
                    <div class="form-group">
                        <label>Người nhập</label>
                        <input name="categoryName" type="text" class="form-control" placeholder="Tên thể loại">
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-plus"></i> Nhập mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection
