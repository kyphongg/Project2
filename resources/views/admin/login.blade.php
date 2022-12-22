@extends('layout.base')

@section("title","Đăng nhập")

@section('content')
    <div class="my-login">
        <form action="{{URL::to('/admin_login')}}" method="post">
            {{csrf_field()}}
            <h3>Đăng nhập</h3>
            <h3>Quản lý</h3>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert" style="color: red; font-size: 17px; width: 100%; text-align: center; font-weight: bold">', $message, '</span>';
                Session::put('message', null);
            }
            ?>
            <span>Email</span>
            <input type="email" name="admin_email" class="box" placeholder="Email" required="">
            <span>Mật khẩu</span>
            <input type="password" name="admin_password" class="box" placeholder="Mật khẩu" required="">
            <input type="submit" value="Đăng nhập" class="btn">
            <p>Quên mật khẩu ? <a href="#">Ấn tại đây</a></p>
        </form>
    </div>
@endsection
