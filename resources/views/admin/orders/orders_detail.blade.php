@extends('layout.admin_base')

@section('title', 'Đơn hàng mới')

@section('content')
    <div class="table-agile-info">
        <h3>Chi tiết đơn hàng</h3>
        <div class="info-orders">
            <p><b>Mã đơn hàng:</b> {{$order->order_id}}</p>
            <p><b>Khách hàng:</b> {{$order->customer_name}}</p>
            <p><b>Ngày đặt hàng:</b> 2023-1-11 11:06</p>
            <p><b>Số điện thoại:</b> {{$order->customer_phone}}</p>
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
                @foreach($detail as $d)
                <tr>
                    <td><img style="width: 100px; height: 100px;" src="/public/images/upload/{{$d->game_image}}" alt=""></td>
                    <td>{{$d->game_name}}</td>
                    <td>{{$d->game_quantity}}</td>
                    <td>{{number_format($d->game_price).' VNĐ'}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="cart-price">
                <table>
                    <tr>
                        <td style="font-weight: bold;">Tổng giá sản phẩm:</td>
                        <td>{{number_format($order->game_price*$order->game_quantity).' VNĐ'}}</td>
                    </tr>
{{--                    <tr>--}}
{{--                        <td style="font-weight: bold;">Thuế:</td>--}}
{{--                        <td style="padding-left: 20px;">{{number_format($order->game_price*0.01*$order->game_quantity).' VNĐ'}}</td>--}}
{{--                    </tr>--}}
                    <tr>
                        <td style="font-weight: bold;">Phí vận chuyển:</td>
                        <td style="padding-left: 40px;">Miễn Phí</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Tổng thành tiền:</td>
                        <td>{{$order->order_total.' VNĐ'}}</td>
                    </tr>
                </table>
            </div>
            <a href="{{URL::to('/admin/accept_orders')}}">
                <button type="button" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button>
            </a>
        </div>
    </div>
@endsection
