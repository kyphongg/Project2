@extends('layout.base')

@section('title','Tài Khoản')

@section('content')
    <div class="profile">
        <div class="row">
            <div class="col-3">
                <div class="side-nav" style="margin-bottom: 85px">
                    <ul class="nav-links">
                        <li style="border-bottom: 1px solid #E6E8EB;">
                            <a href="{{url("/profile")}}" ><i class="fa-solid fa-user"></i>Tài khoản</a>
                        </li>
                        <li style="border-bottom: 1px solid #E6E8EB;">
                            <a href="{{url("/orders")}}"><i class="fa-solid fa-cart-shopping"></i>Lịch sử đơn hàng</a>
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
                        <p style="color: red;"><b style="color: black;">Tình trạng:</b> Đang xử lí</p>
                        <p><b>Hình thức thanh toán:</b> Tiền mặt</p>
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
                            <tr>
                                <td><img src="/images/ps5(sp2).jpg"></td>
                                <td>God of War: Ragnarok</td>
                                <td>2</td>
                                <td>3.000.000đ</td>
                            </tr>
                            <tr>
                                <td><img src="/images/ps5(sp1).jpg"></td>
                                <td>Demon's Souls</td>
                                <td>1</td>
                                <td>1.000.000đ</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-price">
                        <table>
                            <tr>
                                <td style="font-weight: bold;">Tổng giá sản phẩm:</td>
                                <td>1.350.000đ</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Phí vận chuyển:</td>
                                <td style="padding-left: 20px;">30.000đ</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Tổng thành tiền:</td>
                                <td>1.380.000đ</td>
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
