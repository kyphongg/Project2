@extends('layout.base')

@section('title','Tài Khoản')

@section('content')
    <div class="profile">
        <div class="row">
            <div class="col-3">
                <div class="side-nav">
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
                        <div class="animation"></div>
                    </ul>
                </div>
            </div>

            <div class="col-9">
                <div class="account">
                    <h3>Tổng quan</h3>
                    <div class="row user-detail">
                        <div class="col-2">
                            <p>Họ và tên</p>
                            <p style="font-weight: 600;">Mai Kỳ Phong</p>
                        </div>

                        <div class="col-2">
                            <p>Số điện thoại</p>
                            <p style="font-weight: 600;">0966331402</p>
                        </div>

                        <div class="col-4">
                            <p>Địa chỉ</p>
                            <p style="font-weight: 600;">Nhà A17, Tạ Quang Bửu, Hai Bà Trưng, Hà Nội</p>
                        </div>

                        <div class="col-4">
                            <p>Địa chỉ email</p>
                            <p style="font-weight: 600;">kyphong2802@gmail.com</p>
                        </div>
                    </div>
                    <div class="changeInfo">
                        <h3>Chỉnh sửa và cập nhật tài khoản</h3>
                        <form action="" class="user-infomation">
                            <div class="form-group">
                                <input type="text">
                                <label for="">Họ và Tên</label>
                            </div>
                            <div class="form-group">
                                <input type="text">
                                <label for="">Số điện thoại</label>
                            </div>
                            <div class="form-group">
                                <input type="text">
                                <label for="">Địa chỉ hiện tại</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="">
                                <label for="">Email</label>
                            </div>
                            <button class="userbtn-update">Cập nhật hồ sơ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
