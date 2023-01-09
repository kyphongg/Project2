    @extends('layout.base')

@section('title' ,'Thanh Toán')

@section('content')
    <div class="payment">
        <div class="payment-heading">
            <h3>Thanh toán</h3>
        </div>

        <div class="payment-body">
            <div class="row">
                <div class="col payment-cart">
                    <div>
                        <table class="table table-bordered table-hover table-striped">
                            <?php
                            $content = Cart::content();
                            ?>
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($content as $v)
                            <tr>
                                <td>1</td>
                                <td>{{$v->name}}</td>
                                <td>{{$v->qty}}</td>
                                <td>{{number_format($v->price * $v->qty).' VNĐ'}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <?php
                        $message = Session::get('message');
                        if($message)
                            echo $message;
                        ?>
                        <form method="POST" action="{{URL::to('/check_coupon')}}">
                            @csrf
                            <input type="text" class="form-control" name="coupon_text" placeholder="Nhập mã giảm giá">
                            <input type="submit" class="btn btn-default check_coupon" name="check_coupon" value="Tính mã giảm giá">

                        </form>

                        <div class="two-btn">
                            <div class="row">
                                <div class="cartt-price">
                                    <table>
                                        <tr>
                                            <td style="font-weight: bold;">Tổng giá sản phẩm:</td>
                                             <td>{{Cart::priceTotal(0).' VNĐ'}}</td>
                                        </tr>
                                        <tr>
                                             <td style="font-weight: bold;">Thuế:</td>
                                            <td style="padding-left: 20px;">{{Cart::tax(0).' VNĐ'}}</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">Phí vận chuyển:</td>
                                            <td style="padding-left: 40px;">Miễn Phí</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">Mã giảm giá:</td>
                                            <td style="padding-left: 40px;">
                                                @if(Session::get('coupon'))
                                                    @foreach(Session::get('coupon') as $key => $c)
                                                        @if($c['coupon_serve']==0)
                                                            {{$c['coupon_number']}}%
                                                        @else
                                                            {{$c['coupon_number']}}K
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">Giảm:</td>
                                            <td style="padding-left: 40px;">
                                                @if(Session::get('coupon'))
                                                    @foreach(Session::get('coupon') as $key => $c)
                                                        @if($c['coupon_serve']==0)
                                                            @php

                                                            @endphp
                                                        @else
                                                            <p>
                                                                @php

                                                                @endphp
                                                            </p>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;">Tổng thành tiền:</td>
                                            <td>{{Cart::total(0).' VNĐ'}}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col">
                                    <a href={{url("/home")}}>
                                        <button class="btn btn-secondary btn-backk">Tiếp tục mua hàng</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col payment-info">
                    <div class="sp">
                        <h4>Thông tin giao hàng</h4>
                        <div class="info-detail">
                            <form action="" class="payment-infomation">
                                <div class="form-group">
                                    <p style="font-weight: bold">Họ và tên</p>
                                    <p>{{$customer->customer_name}}</p>
                                </div>
                                <div class="form-group">
                                    <p style="font-weight: bold">Số điện thoại</p>
                                    <p>{{$customer->customer_phone}}</p>
                                </div>
                                <div class="form-group">
                                    <p style="font-weight: bold">Địa chỉ hiện tại</p>
                                    <p>{{$customer->customer_address}}</p>
                                </div>
                                <div class="form-group">
                                    <p style="font-weight: bold">Email</p>
                                    <p>{{$customer->customer_email}}</p>
                                </div>
                            </form>
                        </div>
                        <button type="button" id="show-updateinfo" class="btn btn-secondary btn-update" onclick="openPopup()">Cập nhật hồ sơ</button>
                        <div class="popup" id="popup">
                            <div class="close-btn" onclick="closePopup()">&times;</div>
                            <div class="form">
                                <h3>Chỉnh sửa hồ sơ</h3>
                                <form action="{{url('/update-profile/'.$customer->customer_id)}}" class="user-infomation" method="POST">
                                    @csrf
                                <div class="form-element">
                                    <label for="text" style="font-weight: bold; color: white;">Họ và tên</label>
                                    <input type="text" id="text" name="customer_name" placeholder="Nhập họ và tên của bạn">
                                </div>
                                <div class="form-element">
                                    <label for="text" style="font-weight: bold; color: white;">Số điện thoại</label>
                                    <input type="text" id="text" name="customer_phone" placeholder="Nhập số điện thoại của bạn">
                                </div>
                                <div class="form-element">
                                    <label for="text" style="font-weight: bold; color: white;">Địa chỉ hiện tại</label>
                                    <input type="text" id="text" name="customer_address" placeholder="Nhập địa chỉ của bạn">
                                </div>
                                <div class="form-element">
                                    <label for="email" style="font-weight: bold; color: white;">Email</label>
                                    <input type="text" id="email" name="customer_email" placeholder="Nhập email của bạn">
                                </div>
                                <div class="form-element">
                                    <button type="submit" class="btn btn-secondary" onclick="closePopup()">Cập nhật hồ sơ</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payment-method">
                    <h4>Phương thức thanh toán</h4>
                    <form action="{{URL::to('/order_place')}}" method="POST">
                        @csrf
                        <div class="payCash">
                            <span>
                                <label>
                                    <input name="payment_method" value="1" type="checkbox">
                                    <img src="/images/GDTT.png" alt="">
                                        Thanh toán tiền mặt khi nhận hàng (COD)
                                    <p>Bạn chỉ phải thanh toán khi nhận được hàng. Nhân viên sẽ liên hệ bạn để xác nhận đơn hàng trong vòng 24h
                                sau khi bạn hoàn tất đơn hàng</p>
                                </label>
                            </span>
                        </div>

                        <div class="payOnline">
                            <span>
                                <label>
                                    <input name="payment_method" value="2" type="checkbox">
                                    <img src="/images/bank.png" alt="">
                                        Thanh toán chuyển khoản ngân hàng
                                    <p>Bạn chỉ phải thanh toán khi nhận được hàng. Nhân viên sẽ liên hệ bạn để xác nhận đơn hàng trong vòng 24h
                                sau khi bạn hoàn tất đơn hàng</p>
                                    <p>Nhân viên sẽ liên hệ với bạn qua email/ điện thoại để xác nhận đơn hàng.
                            <br>Thông tin chuyển khoản:<span style="color:blue; font-weight: bold;"> Ngân hàng TP BANK - 04182459601 - MAI KỲ PHONG</span>
                            <br>Nội dung chuyển khoản: ck + "Tên tài khoản".
                                <br><span style="color:red; font-weight: bold;">LƯU Ý</span>: Vui lòng ghi đúng nội dung chuyển khoản <span style="color:red; font-weight: bold;">ĐÚNG NỘI DUNG BÊN TRÊN.</span>
                            <br>Bạn có thể thao tác chuyển khoản nhanh chóng bằng cách mở ứng dụng ngân hàng và chọn quét mã QR bên dưới và ghi đúng nội dung chuyển khoản.</p>
                            <img style="width: 235px; height: 235px; border: 1px solid rgba(0,0,0,0.08); margin-left: 500px;" src="/images/qrchuyenkhoan.jpg" alt="">
                                </label>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-payment">Hoàn tất đơn hàng</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
