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
                    <h3>150</h3>
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
                    <h3>5</h3>
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
        <div class="clearfix"> </div>
    </div>

@endsection
