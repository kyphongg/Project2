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
                        @foreach($customer as $key => $c)
                        <tr>
                            <td>{{$c->customer_id}}</td>
                            <td>{{$c->customer_name}}</td>
                            <td>{{$c->customer_email}}</td>
                            <td>{{$c->customer_phone}}</td>
                            <td>{{$c->customer_address}}</td>
                            <td>
                                <a href="#" class="active">
                                    <i class="fa-solid fa-square-check" style="font-size: 25px; color: #337AB7;"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
@endsection
