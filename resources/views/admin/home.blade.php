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
                    <i style="color: white;" class="fa fa-comments fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Bình luận</h4>
                    <h3>{{$comment_total}}</h3>
                    <p>Số lượng bình luận</p>
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
                    <i class="fas fa-file-invoice-dollar"></i>
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
                <h3 style="text-align: center;">Danh mục bán chạy nhất</h3>
                <canvas id="myChart" style="margin-top: 15px;"></canvas>
            </div>
            <div class="box">
                <h3 style="text-align: center;">Biểu đồ doanh thu</h3>
{{--                <form autocomplete="off" style="margin-bottom: 10px;">--}}
{{--                    @csrf--}}
{{--                    <div class="col-md-3">--}}
{{--                        <p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3">--}}
{{--                        <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>--}}
{{--                    </div>--}}
{{--                    <input style="margin-top: 25px;" type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lấy dữ liệu">--}}
{{--                </form>--}}
                <canvas id="earning"></canvas>
            </div>
        </div>

        <div class="detailsOrder">
            <div class="outOfStockItem">
                <div class="cardHeader">
                    <h2>Sản phẩm hết hàng</h2>
                </div>
                <table>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp1).jpg"></div></td>
                        <td>
                            <h4 class="btn btn-danger">Hết hàng</h4><br>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp2).jpg"></div></td>
                        <td>
                            <h4 class="btn btn-danger">Hết hàng</h4><br>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp3).png"></div></td>
                        <td>
                            <h4 class="btn btn-danger">Hết hàng</h4><br>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp4).jpg"></div></td>
                        <td>
                            <h4 class="btn btn-danger">Hết hàng</h4><br>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp5).jpeg"></div></td>
                        <td>
                            <h4 class="btn btn-danger">Hết hàng</h4><br>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="doneOrders">
                <div class="cardHeader">
                    <h2>Đơn hàng hôm nay</h2>
                </div>
                <table style="margin-top: -55px; text-align: center;">
                    <thead>
                    <tr>
                        <td>Mã ĐH</td>
                        <td>Tên KH</td>
                        <td>Số điện thoại</td>
                        <td>Số tiền</td>
                        <td>Tình Trạng</td>
                        <td>Thời gian</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Phong</td>
                        <td>0966331402</td>
                        <td>1.000.000đ</td>
                        <td><span class="status delivered">Đã hoàn thành</span></td>
                        <td>27-1-2023</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Phong</td>
                        <td>0966331402</td>
                        <td>1.000.000đ</td>
                        <td><span class="status delivered">Đã hoàn thành</span></td>
                        <td>27-1-2023</td>
                    </tr>  <tr>
                        <td>3</td>
                        <td>Phong</td>
                        <td>0966331402</td>
                        <td>1.000.000đ</td>
                        <td><span class="status delivered">Đã hoàn thành</span></td>
                        <td>27-1-2023</td>
                    </tr>  <tr>
                        <td>4</td>
                        <td>Phong</td>
                        <td>0966331402</td>
                        <td>1.000.000đ</td>
                        <td><span class="status delivered">Đã hoàn thành</span></td>
                        <td>27-1-2023</td>
                    </tr>  <tr>
                        <td>5</td>
                        <td>Phong</td>
                        <td>0966331402</td>
                        <td>1.000.000đ</td>
                        <td><span class="status delivered">Đã hoàn thành</span></td>
                        <td>27-1-2023</td>
                    </tr>
                    </tbody>
                </table>
                    <h3 style="text-align: right; margin-top:20px;">Tổng doanh thu: 5.000.000đ</h3>
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
            <div class="featureItem">
                <div class="cardHeader">
                    <h2>Sản phẩm bán chạy</h2>
                </div>
                <table>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp1).jpg"></div></td>
                        <td>
                            <h4>100 lượt mua</h4>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp2).jpg"></div></td>
                        <td>
                            <h4>52 lượt mua</h4>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp3).png"></div></td>
                        <td>
                            <h4>34 lượt mua</h4>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp4).jpg"></div></td>
                        <td>
                            <h4>12 lượt mua</h4>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="70px"><div class="imgBx"><img src="/images/ps5(sp5).jpeg"></div></td>
                        <td>
                            <h4>20 lượt mua</h4>
                            <span>Demon's Souls</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


        <div class="clearfix"> </div>
    </div>



@endsection
