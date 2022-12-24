@extends('layout.admin_base')

@section('title', 'Khách hàng')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách khách hàng</h3>
        <div class="panel panel-default">
            <div class="table-responsive" style="margin-top: 15px;">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">STT</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lan</td>
                            <td>lan@customer.com</td>
                            <td>0377923832</td>
                            <td>Số 2A ngõ 18 Quận 1 Hồ Chí Minh</td>
                            <td>
                                <a href="#" class="active">
                                    <i class="fa-solid fa-square-check" style="font-size: 25px; color: #337AB7;"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
@endsection
