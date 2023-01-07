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
                                <div class="form-element">
                                    <label for="text" style="font-weight: bold; color: white;">Họ và tên</label>
                                    <input type="text" id="text" placeholder="Nhập họ và tên của bạn">
                                </div>
                                <div class="form-element">
                                    <label for="text" style="font-weight: bold; color: white;">Số điện thoại</label>
                                    <input type="text" id="text" placeholder="Nhập số điện thoại của bạn">
                                </div>
                                <div class="form-element">
                                    <label for="text" style="font-weight: bold; color: white;">Địa chỉ hiện tại</label>
                                    <input type="text" id="text" placeholder="Nhập địa chỉ của bạn">
                                </div>
                                <div class="form-element">
                                    <label for="email" style="font-weight: bold; color: white;">Email</label>
                                    <input type="text" id="email" placeholder="Nhập email của bạn">
                                </div>
                                <div class="form-element">
                                    <button class="btn btn-secondary" onclick="closePopup()">Cập nhật hồ sơ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payment-method">
                    <h4>Phương thức thanh toán</h4>
                    <form action="">
                        <div class="payCash">
                            <input type="radio" name="fav_language" class="cash" value="cash">
                            <label for="cash">
                                <img src="/images/GDTT.png" alt="">
                                Thanh toán tiền mặt khi nhận hàng (COD)
                            </label>
                            <p>Bạn chỉ phải thanh toán khi nhận được hàng. Nhân viên sẽ liên hệ bạn để xác nhận đơn hàng trong vòng 24h
                                sau khi bạn hoàn tất đơn hàng</p>
                        </div>
                        <div class="payOnline">
                            <input type="radio" name="fav_language" class="onlineBanking" value="online">
                            <label for="online">
                                <img src="/images/bank.png" alt="">
                                Thanh toán chuyển khoản ngân hàng
                            </label>
                            <p>Nhân viên sẽ liên hệ với bạn qua email/ điện thoại để xác nhận đơn hàng.
                            <br>Thông tin chuyển khoản:<span style="color:blue; font-weight: bold;"> Ngân hàng TP BANK - 04182459601 - MAI KỲ PHONG</span>
                            <br>Nội dung chuyển khoản: ck + "Tên tài khoản".
                                <br><span style="color:red; font-weight: bold;">LƯU Ý</span>: Vui lòng ghi đúng nội dung chuyển khoản <span style="color:red; font-weight: bold;">ĐÚNG NỘI DUNG BÊN TRÊN.</span>
                            <br>Bạn có thể thao tác chuyển khoản nhanh chóng bằng cách mở ứng dụng ngân hàng và chọn quét mã QR bên dưới và ghi đúng nội dung chuyển khoản.</p>
                            <img style="width: 235px; height: 235px; border: 1px solid rgba(0,0,0,0.08); margin-left: 500px;" src="/images/qrchuyenkhoan.jpg" alt="">
                        </div>
                    </form>
                    <a href="{{url('/success')}}">
                        <button class="btn btn-secondary btn-payment">Hoàn tất đơn hàng</button>
                    </a>
                </div>
            </div>
        </div>
@endsection
