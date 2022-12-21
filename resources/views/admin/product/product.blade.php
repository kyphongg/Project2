@extends('layout.admin_base')

@section('title', 'Thể loại')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách Sản phẩm</h3>
        <a href="{{url('/admin/products_add')}}">
            <button><i class="fa-solid fa-plus"></i> Nhập SP mới</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 15px;">STT</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Thể loại</th>
                        <th>Nhà sản xuất</th>
                        <th>Số lượng</th>
                        <th>Mô tả</th>
                        <th>Loại sản phẩm</th>
                        <th>Giá nhập</th>
                        <th>Giá bán</th>
                        <th>Tình trạng</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>SP001</td>
                        <td>EldenRing</td>
                        <td><img src="/images/ps5(sp3).png" style="width: 75px; height: 75px;"></td>
                        <td>Nhập vai, Hành Động</td>
                        <td>PS5</td>
                        /
                        <td>10</td>
                        /
                        <td>Trò chơi siêu cuốn</td>
                        <td>Bán chạy</td>
                        <td>1.250.000đ</td>
                        <td>1.350.000đ</td>
                        <td>Còn hàng</td>
                        <td>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SP002</td>
                        <td>EldenRing</td>
                        <td><img src="/images/ps5(sp3).png" style="width: 75px; height: 75px;"></td>
                        <td>Nhập vai, Hành Động</td>
                        <td>PS5</td>
                        /
                        <td>10</td>
                        /
                        <td>Trò chơi siêu cuốn</td>
                        <td>Bán chạy</td>
                        <td>1.250.000đ</td>
                        <td>1.350.000đ</td>
                        <td>Còn hàng</td>
                        <td>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
