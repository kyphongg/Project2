@extends('layout.base')

@section('title' ,'Thanh Toán')

@section('content')
    <div class="payment">
        <div class="payment-heading">
            <h3>Giỏ hàng</h3>
        </div>

        <div class="payment-body">
            <div class="row">
                <div class="col payment-cart">
                    <div>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>Demon's Souls (PS5)</td>
                                <td>1</td>
                                <td>1.350.000đ</td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>Demon's Souls (PS5)</td>
                                <td>1</td>
                                <td>1.350.000đ</td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="payment-price">
                            <table>
                                <tr>
                                    <td style="font-weight: bold;">Tổng giá sản phẩm:</td>
                                    <td>1.350.000đ</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Phí vận chuyển:</td>
                                    <td style="padding-left: 20px;">30.000đ</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Tổng thành tiền:</td>
                                    <td>1.380.000đ</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col payment-info">
                    <div class="sp">
                        <h4>Thông tin giao hàng</h4>
                        <div class="info-detail">
                            <form action="" class="payment-infomation">
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
                                    <button class="btn-update">Cập nhật hồ sơ</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="payment-method">
                    <h4>Phương thức thanh toán</h4>
                    <form action="">
                        <div class="payCash">
                            <input type="radio" name="fav_language" class="cash" value="cash">
                            <label for="cash">
                                <img src="images/GDTT.png">
                                Thanh toán tiền mặt khi nhận hàng (COD)
                            </label>
                            <p>Bạn chỉ phải thanh toán khi nhận được hàng. Nhân viên sẽ liên hệ bạn để xác nhận đơn hàng trong vòng 24h
                                sau khi bạn hoàn tất đơn hàng</p>
                        </div>
                        <div class="payOnline">
                            <input type="radio" name="fav_language" class="onlineBanking" value="online">
                            <label for="online">
                                <img src="images/bank.png">
                                Thanh toán chuyển khoản ngân hàng
                            </label>
                            <p>Nhân viên sẽ liên hệ với bạn qua email/ điện thoại để xác nhận đơn hàng.
                            <br>Thông tin chuyển khoản:<span style="color:blue; font-weight: bold;"> Ngân hàng TP BANK - 04182459601 - MAI KỲ PHONG</span>
                            <br>Nội dung chuyển khoản: ck + "Tên tài khoản".
                                <br><span style="color:red; font-weight: bold;">LƯU Ý</span>: Vui lòng ghi đúng nội dung chuyển khoản <span style="color:red; font-weight: bold;">ĐÚNG NỘI DUNG BÊN TRÊN.</span>
                            <br>Bạn có thể thao tác chuyển khoản nhanh chóng bằng cách mở ứng dụng ngân hàng và chọn quét mã QR bên dưới và ghi đúng nội dung chuyển khoản.</p>
                            <img style="width: 235px; height: 235px; border: 1px solid rgba(0,0,0,0.08); margin-left: 500px;" src="images/qrchuyenkhoan.jpg">
                        </div>
                    </form>
                    <a href="#">
                        <button class="btn-payment">Hoàn tất đơn hàng</button>
                    </a>
                </div>
            </div>
        </div>
@endsection
