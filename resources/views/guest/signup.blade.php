@extends('layout.base')

@section("title","Đăng Ký")

@section('content')
    <div class="my-signup">
        <form action="{{URL::to('/customer_signup')}}" method="post">
            {{csrf_field()}}
            <h3>Đăng ký tài khoản</h3>
            <div class="row">
                <div class="col">
                    <span>Họ và tên: </span>
                    <input type="text" name="customer_name" class="box" placeholder="Nhập họ tên đầy đủ của bạn">
                    <span>Số điện thoại: </span>
                    <input type="tel" name="customer_phone" class="box" placeholder="Nhập số điện thoại của bạn">
                    <span>Địa chỉ hiện tại: </span>
                    <input type="text" name="customer_address" class="box" placeholder="Nhập địa chỉ/nơi ở của bạn">
                </div>

                <div class="col">
                    <span>Email của bạn:</span>
                    <input type="email" name="customer_email" class="box" placeholder="Nhập email của bạn">
                    <span>Mật khẩu</span>
                    <input type="password" name="customer_password" class="box" placeholder="Nhập mật khẩu">
                    <span>Xác nhận mật khẩu</span>
                    <input type="password" name="customer_password_again" class="box" placeholder="Nhập xác nhận mật khẩu">
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="" id="remember-me">
                    <label for="remember-me">Đồng ý với Điều khoản dịch vụ của Gaming Shop</label>
                </div>
                <input type="submit" value="Đăng ký" class="btn">
            </div>

        </form>
    </div>
@endsection
