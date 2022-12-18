@extends('layout.base')

@section('title', 'Giỏ Hàng')

@section('content')
    <div class="cart-p">
        <div class="cart-heading">
            <h3>Giỏ hàng</h3>
            <p>(2 sản phẩm)</p>
        </div>
        <div class="cart-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="images/ps5(sp1).jpg">
                        </td>
                        <td>Demon's Souls (PS5)</td>
                        <td><input type="number" min="1" max="5" value="1"></td>
                        <td>1.350.000đ</td>
                        <td><i class="fa-solid fa-ban" style="color: red"></i> Xóa sản phẩm</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="images/ps5(sp1).jpg">
                        </td>
                        <td>Demon's Souls (PS5)</td>
                        <td><input type="number" min="1" max="5" value="1"></td>
                        <td>1.350.000đ</td>
                        <td><i class="fa-solid fa-ban" style="color: red"></i> Xóa sản phẩm</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="cart-price">
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
        <div class="two-btn">
            <div class="row">
                <div class="col">
                    <a href={{url("/home")}}>
                        <button class="btn-back">Tiếp tục mua hàng</button>
                    </a>
                </div>

                <div class="col">
                    <a href={{url("/payment")}}>
                        <button class="btn-next">Thanh toán</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
