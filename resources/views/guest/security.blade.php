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
                <div class="security">
                    <div class="security-heading">
                        <h3>Mật khẩu bảo mật</h3>
                        <p>Vì sự an toàn khuyến khích khách hàng sử dụng mật khẩu mạnh</p>
                    </div>
                    <div class=security-body>
                        <div class="changePassword">
                            <h3>Thay đổi mật khẩu</h3>
                            <form action="" class="password-change">
                                <div class="form-group">
                                    <input type="password">
                                    <label for="">Mật khẩu mới</label>
                                </div>
                                <div class="form-group">
                                    <input type="password">
                                    <label for="">Nhập lại mật khẩu mới</label>
                                </div>
                                <button class="passwordbtn-update">Cập nhật hồ sơ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
