@extends('layout.admin_base')

@section('title', 'Thêm thể loại')

@section('content')
    <div class="table-agile-info">
        <h3>Nhập sản phẩm mới</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mã sản phẩm</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Mã sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Hình ảnh</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Thể loại</label>
                        <div class="row">
                            <div class="col">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Hành động
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Nhập vai
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Thể thao
                                    </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Mô Phỏng
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Phiêu Lưu
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        Chiến thuật
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhà sản xuất</label>
                        <select class="form-control m-bot15">
                            <option>PS5</option>
                            <option>PS4</option>
                            <option>Nintendo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số lượng</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        <textarea class="form-control " id="ccomment" name="comment" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Loại sản phẩm</label>
                        <select class="form-control m-bot15">
                            <option>Nổi bật</option>
                            <option>Bán chạy</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá nhập</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá bán</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tình trạng</label>
                        <select class="form-control m-bot15">
                            <option>Còn hàng</option>
                            <option>Hết hàng</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-plus"></i> Nhập SP mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection
