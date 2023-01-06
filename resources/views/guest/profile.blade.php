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
                    @if($customer)
                    <div class="row user-detail">
                        <div class="col-2">
                            <p>Họ và tên</p>
                            <p style="font-weight: 600;">{{$customer->customer_name}}</p>
                        </div>

                        <div class="col-2">
                            <p>Số điện thoại</p>
                            <p style="font-weight: 600;">{{$customer->customer_phone}}</p>
                        </div>

                        <div class="col-4">
                            <p>Địa chỉ</p>
                            <p style="font-weight: 600;">{{$customer->customer_address}}</p>
                        </div>

                        <div class="col-4">
                            <p>Địa chỉ email</p>
                            <p style="font-weight: 600;">{{$customer->customer_email}}</p>
                        </div>
                    </div>
                    <div class="changeInfo">
                        <h3>Chỉnh sửa và cập nhật tài khoản</h3>
                        <form action="{{url('/update-profile/'.$customer->customer_id)}}" class="user-infomation" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="customer_name" type="text" class="form-control" placeholder="Họ và Tên">
                            </div>
                            <div class="form-group">
                                <input name="customer_phone" type="text" class="form-control" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <input name="customer_address" type="text" class="form-control" placeholder="Địa chỉ">
                            </div>
                            <div class="form-group">
                                <input name="customer_email" type="text" class="form-control" placeholder="Email">
                            </div>
                            <button type="submit" class="userbtn-update">Cập nhật hồ sơ</button>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection
