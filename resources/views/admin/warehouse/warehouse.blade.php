@extends('layout.admin_base')

@section('title', 'Quản lý kho')

@section('content')
    <div class="table-agile-info">
        <h3>Kho</h3>
        <a href="{{url('/admin/warehouse_add')}}">
            <button><i class="fa-solid fa-plus"></i>  Nhập sản phẩm</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">STT</th>
                        <th>Game</th>
                        <th>Số lượng</th>
                        <th>Giá nhập</th>
                        <th>Giá bán</th>
                        <th>Người nhập</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>God of War: Ragnarok</td>
                        <td>10</td>
                        <td>1.380.000đ</td>
                        <td>1.450.000đ</td>
                        <td>Lâm</td>
                        <td>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                            </a>
                        </td>
@endsection
