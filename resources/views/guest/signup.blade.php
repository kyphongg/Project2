@extends('layout.base')

@section("title","Đăng Ký")

@section('content')
    <div class="my-signup">
        <form action="">
            <h3>Đăng ký tài khoản</h3>
            <div class="row">
                <div class="col">
                    <span>Họ và tên: </span>
                    <input type="text" name="" class="box" placeholder="Nhập họ tên đầy đủ của bạn">
                    <span>Email của bạn:</span>
                    <input type="email" name="" class="box" placeholder="Nhập email của bạn">
                    <span>Số điện thoại: </span>
                    <input type="tel" name="" class="box" placeholder="Nhập số điện thoại của bạn">
                    <span>Địa chỉ hiện tại: </span>
                    <input type="text" name="" class="box" placeholder="Nhập địa chỉ/nơi ở của bạn">
                </div>

                <div class="col">
                    <span>Tên đăng nhập: </span>
                    <input type="text" name="" class="box" placeholder="Nhập tên đăng nhập mà bạn muốn">
                    <span>Mật khẩu</span>
                    <input type="password" name="" class="box" placeholder="Nhập mật khẩu">
                    <span>Xác nhận mật khẩu</span>
                    <input type="password" name="" class="box" placeholder="Nhập xác nhận mật khẩu">
                    <div class="checkbox">
                        <input type="checkbox" name="" id="remember-me">
                        <label for="remember-me">Đồng ý với Điều khoản dịch vụ của Gaming Shop</label>
                    </div>
                    <a href="{{url('/home')}}">
                        <input type="button" value="Đăng ký" class="btn">
                    </a>
                </div>
            </div>

        </form>
    </div>
@endsection
