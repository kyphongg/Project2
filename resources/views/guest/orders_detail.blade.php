@extends('layout.base')

@section('title','Tài Khoản')

@section('content')
    <div class="profile">
        <div class="row">
            <div class="col-3">
                <div class="side-nav" style="margin-bottom: 85px">
                    <ul class="nav-links">
                        <li style="border-bottom: 1px solid #E6E8EB;">
                            <a href="{{url("/profile/$customer->customer_id")}}"><i class="fa-solid fa-user"></i>Tài
                                khoản</a>
                        </li>
                        <li style="border-bottom: 1px solid #E6E8EB;">
                            <a href="{{url("/orders/$customer->customer_id")}}"><i
                                    class="fa-solid fa-cart-shopping"></i>Lịch sử đơn hàng</a>
                        </li>
                        <li style="border-bottom: 1px solid #E6E8EB;">
                            <a href="#"><i class="fa-solid fa-user-lock"></i>Mật khẩu và bảo mật</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-heart"></i>Sản phẩm yêu thích</a>
                        </li>
                        <div class="animation start-user"></div>
                    </ul>
                </div>
            </div>

            <div class="col-9">
                <div class="orders">
                    <div class="order-heading">
                        <h3>Chi tiết đơn hàng</h3>
                        <p><b>Mã đơn hàng:</b> 1</p>
                        <p><b>Ngày đặt hàng:</b> 03/01/2023</p>
                        <p><b>Địa chỉ nhận hàng:</b> {{$customer->customer_address}}</p>
                        <p style="color: red;"><b style="color: black;">Tình trạng:</b> Đang chờ xử lý </p>
                        <p><b>Hình thức thanh toán:</b> @if($payment->payment_method==1)
                                Tiền mặt
                            @elseif($payment->payment_method==2)
                                Chuyển khoản ngân hàng
                            @endif</p>
                    </div>
                    <div class=orders-table>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $o)
                                <tr>
                                    <td><img src="/public/images/upload/{{$o->game_image}}"></td>
                                    <td>{{$o->game_name}}</td>
                                    <td>{{$o->game_quantity}}</td>
                                    <td>{{$o->order_total}} VNĐ</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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
                    <div class="two-btn" style="padding-bottom: 30px;">
                        <div class="row">
                            <div class="col">
                                <a href="{{url('/orders')}}">
                                    <button class="btn-back">Quay lại</button>
                                </a>
                            </div>

                            <div class="col">
                                <a href="#">
                                    <button class="btn-next">Hủy đơn hàng</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
