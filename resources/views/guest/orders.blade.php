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
                        <h3>Lịch sử đơn hàng</h3>
                        <p>Hiển thị đơn hàng của bạn đã hoàn tất</p>
                    </div>
                    <div class=orders-table>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th style="width: 120px;">Mã đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>TT thanh toán</th>
                                <th>Trạng thái</th>
                                <th>Tùy biến</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width: 120px;">1</td>
                                <td>15/12/2022</td>
                                <td>1.380.000đ</td>
                                <td>Đã hoàn thành</td>
                                <td>
                                    <a href="{{url('/orders_detail')}}">
                                        <i class="fas fa-eye" style="background-color: #337AB7; color: white; width: 25px; height: 25px; padding-top: 5px; border-radius: 2px;"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td style="width: 120px;">2</td>
                                <td>15/12/2022</td>
                                <td>1.380.000đ</td>
                                <td>Đang vận chuyển</td>
                                <td>
                                    <a href="{{url('/orders_detail')}}">
                                        <i class="fas fa-eye" style="background-color: #337AB7; color: white; width: 25px; height: 25px; padding-top: 5px; border-radius: 2px;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 120px;">3</td>
                                <td>15/12/2022</td>
                                <td>1.380.000đ</td>
                                <td>Đang xử lí</td>
                                <td>
                                    <a href="{{url('/orders_detail')}}">
                                        <i class="fas fa-eye" style="background-color: #337AB7; color: white; width: 25px; height: 25px; padding-top: 5px; border-radius: 2px;"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
