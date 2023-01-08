@extends('layout.admin_base')

@section('title', 'Đơn hàng mới')

@section('content')
    <div class="table-agile-info">
        <h3>Chi tiết đơn hàng</h3>
        <div class="info-orders">
            <p><b>Mã đơn hàng:</b> 1</p>
            <p><b>Khách hàng:</b> {{$order->customer_name}}</p>
            <p><b>Ngày đặt hàng:</b> 03/01/2023</p>
            <p><b>Địa chỉ giao hàng:</b> {{$order->customer_address}}</p>
            <p><b>Hình thức thanh toán:</b> <?php
                                            if ($order->payment_method == 1)
                                                echo 'Tiền mặt';
                                            elseif ($order->payment_method == 2)
                                                echo 'Chuyển khoản';
                                            ?></p>
        </div>
        <div class="table-responsive" style="margin-top: 15px;">
            <table id="myTable" class="table table-striped table-bordered" style="text-align: center;">
                <thead>
                <tr>
                    <th style="width: 50px;">Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá tiền</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img style="width: 100px; height: 100px;" src="/images/ps5(sp2).jpg"></td>
                    <td>God of War: Ragnorok</td>
                    <td>2</td>
                    <td>3.000.000đ</td>
                </tr>
                <tr>
                    <td><img style="width: 100px; height: 100px;" src="/images/ps5(sp1).jpg"></td>
                    <td>Demon's Souls</td>
                    <td>1</td>
                    <td>1.000.000đ</td>
                </tr>
                </tbody>
            </table>
            <div class="cart-price">
                <table>
                    <tr>
                        <td style="font-weight: bold;">Tổng giá sản phẩm:</td>
                        <td>4.000.000đ</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Phí vận chuyển:</td>
                        <td style="padding-left: 20px;">30.000đ</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Tổng thành tiền:</td>
                        <td>4.030.000đ</td>
                    </tr>
                </table>
            </div>
            <a href="{{URL::to('/admin/accept_orders')}}">
                <button type="button" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button>
            </a>
        </div>
    </div>
@endsection
