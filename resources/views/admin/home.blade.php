@extends('layout.admin_base')

@section('title', 'Thống kê')

@section('content')
    <!-- //market-->
    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fas fa-users"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Khách hàng</h4>
                    <h3>{{$customer_total}}</h3>
                    <p>Số lượt đăng ký tài khoản</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Đơn hàng</h4>
                    <h3>1,250</h3>
                    <p>Số lượng đơn đã bán</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="far fa-address-card"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Nhân viên</h4>
                    <h3>{{$admin_total}}</h3>
                    <p>Số lượng nhân viên</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-4">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Đơn mới</h4>
                    <h3>19</h3>
                    <p>Số lượng đơn chưa duyệt</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="graphBox">
            <div class="box">
                <canvas id="myChart"></canvas>
            </div>
            <div class="box">
                <canvas id="earning"></canvas>
            </div>
        </div>

        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Đơn hàng gần đây</h2>
                    <a href="#" class="btnn">Xem tất cả</a>
                </div>
                <table style="margin-top: -125px;">
                    <thead>
                    <tr>
                        <td>Mã ĐH</td>
                        <td>Giá</td>
                        <td>PTTT</td>
                        <td>Tình Trạng</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>4.500.000đ</td>
                        <td>Tiền mặt</td>
                        <td><span class="status delivered">Đã hoàn thành</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>5.500.000đ</td>
                        <td>Chuyển khoản</td>
                        <td><span class="status loading">Đơn mới</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1.500.000đ</td>
                        <td>Tiền mặt</td>
                        <td><span class="status shipping">Đang vận chuyển</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>4.500.000đ</td>
                        <td>Tiền mặt</td>
                        <td><span class="status loading">Đang xử lý</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>4.500.000đ</td>
                        <td>Tiền mặt</td>
                        <td><span class="status cancel">Bị hủy</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="featureItem">

        </div>
        <div class="clearfix"> </div>
    </div>



@endsection
