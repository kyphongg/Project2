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
                        <p><b>Địa chỉ nhận hàng:</b> {{$customer->customer_address}}</p>
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
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                                <th>Tình trạng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $o)
                                <tr>
                                    <td>{{$o->order_code}}</td>
                                    <td>{{$o->time_in}}</td>
                                    <td>{{$o->game_name}}</td>
                                    <td><img src="/public/images/upload/{{$o->game_image}}"></td>
                                    <td>{{$o->game_quantity}}</td>
                                    <td>{{number_format($o->game_price)}} VNĐ</td>
                                    @if($o->order_status==0)
                                        <td>Đang chờ xử lý</td>
                                    @elseif($o->order_status==1)
                                        <td>Đã xác nhận</td>
                                    @elseif($o->order_status==2)
                                        <td>Đang vận chuyển</td>
                                    @elseif($o->order_status==3)
                                        <td>Hoàn thành</td>
                                    @elseif($o->order_status==4)
                                        <td>Huỷ</td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-price">
                        <table>

                            <tr>
                                <td style="font-weight: bold;">Tổng giá sản phẩm:</td>
                                <td>{{$o->order_total}} VNĐ</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Phí vận chuyển:</td>
                                <td style="padding-left: 20px;">Miễn Phí</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Tổng thành tiền:</td>
                                <td>{{$o->order_total}} VNĐ</td>
                            </tr>

                        </table>
                    </div>
                    <div class="two-btn" style="padding-bottom: 30px;">
                        <div class="row">
                            <div class="col">
                                <a href="{{url("/orders/$customer->customer_id")}}">
                                    <button class="btn btn-secondary btn-back">Quay lại</button>
                                </a>
                            </div>
                            @forelse($order as $o)
                                @if($o->order_status==2)
                                    <div class="col">
                                        <a href="{{url('/received_orders/'.$o->order_id)}}">
                                            <button class="btn btn-secondary btn-next">Nhận đơn hàng</button>
                                        </a>
                                    </div>
                                @endif
                            @empty
                                <p>Rỗng</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
