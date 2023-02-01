@extends('layout.admin_base')

@section('title', 'Thống kê')

@section('content')
    <!-- //market-->
    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <a href="{{url("/admin/customer-list")}}">
                <div class="col-md-4 market-update-right">
                    <i class="fas fa-users"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Khách hàng</h4>
                    <h3>{{$customer_total}}</h3>
                    <p>Số lượt đăng ký tài khoản</p>
                </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-1">
                <a href="{{url("/admin/comment")}}">
                <div class="col-md-4 market-update-right">
                    <i style="color: white;" class="fa fa-comments fa-3x" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Bình luận</h4>
                    <h3>{{$comment_total}}</h3>
                    <p>Số lượng bình luận</p>
                </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-3">
                <a href="{{url("/admin/all-staff")}}">
                <div class="col-md-4 market-update-right">
                    <i class="far fa-address-card"></i>
                </div>
                <div class="col-md-8 market-update-left">
                        <h4>Nhân viên</h4>
                        <h3>{{$admin_total}}</h3>
                        <p>Số lượng nhân viên</p>
                </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-4">
                <a href="{{url("/admin/all_orders")}}">
                <div class="col-md-4 market-update-right">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="col-md-8 market-update-left">
                        <h4>Đơn mới</h4>
                        <h3>{{$order_new}}</h3>
                        <p>Số lượng đơn chưa duyệt</p>
                </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="graphBox">
            <div class="box">
                <h3 style="text-align: center;">Sản phẩm bán chạy nhất</h3>
                <canvas id="myChart" style="margin-top: 15px;"></canvas>
            </div>
            <div class="box">
                <h3 style="text-align: center;">Biểu đồ doanh thu</h3>
{{--                                <form autocomplete="off" style="margin-bottom: 10px;">--}}
{{--                                    @csrf--}}
{{--                                    <div class="col-md-3">--}}
{{--                                        <p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-3">--}}
{{--                                        <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>--}}
{{--                                    </div>--}}
{{--                                    <input style="margin-top: 25px;" type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lấy dữ liệu">--}}
{{--                                </form>--}}
                <canvas id="earning"></canvas>
            </div>
        </div>

        <div class="detailsOrder">
            <div class="outOfStockItem">
                <div class="cardHeader">
                    <h2>Sản phẩm hết hàng</h2>
                </div>
                <table>
                    @foreach($ware as $key => $w)
                        @php
                            $count = Illuminate\Support\Facades\DB::table('tbl_warehouse')
        ->join('tbl_game', 'tbl_game.game_id', '=', 'tbl_game.game_id')
        ->where('tbl_game.game_id',$w->game_id)
        ->sum('tbl_warehouse.quantity_in');
                            $out = Illuminate\Support\Facades\DB::table('tbl_order_detail')
        ->join('tbl_order', 'tbl_order.order_id', '=', 'tbl_order_detail.order_id')
        ->join('tbl_game', 'tbl_game.game_id', '=', 'tbl_order_detail.game_id')
        ->where('tbl_order_detail.game_id',$w->game_id)
        ->sum('tbl_order_detail.game_quantity');
                        @endphp
                        <tr>
                            @if($count-$out==0)
                                <td>
                                    <div class="imgBx"><img src="/public/images/upload/{{$w->game_image}}" height="80"
                                                            width="80" alt=""></div>
                                </td>
                                <td>
                                    <h4 class="btn btn-danger">Hết hàng</h4><br>
                                    <span>{{$w->game_name}}</span>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="doneOrders">
                <div class="cardHeader">
                    <h2>Đơn hàng hôm nay đã hoàn thành</h2>
                    <a href="{{url("/admin/all_orders")}}" class="btnn">Xem tất cả</a>
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
                    @foreach($date as $d)
                        <tbody>
                        <tr>
                            <td>{{$d->order_code}}</td>
                            <td>{{$d->customer_name}}</td>
                            <td>{{$d->customer_phone}}</td>
                            <td>{{number_format($d->order_total)}} VNĐ</td>
                            @if($d->order_status==0)
                                <td>Đang chờ xác nhận</td>
                            @elseif($d->order_status==1)
                                <td>Đang chờ vận chuyển</td>
                            @elseif($d->order_status==2)
                                <td>Đang chờ khách xác nhận</td>
                            @elseif($d->order_status==3)
                                <td><span class="status delivered">Đã hoàn thành</span></td>
                            @endif
                            <td>{{$d->time_in}}</td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>
        </div>

        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Đơn hàng gần đây</h2>
                    <a href="{{url("/admin/all_orders")}}" class="btnn">Xem tất cả</a>
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
                    @foreach($order as $c)
                        <tr>
                            <td>{{$c->order_code}}</td>
                            <td>{{number_format($c->order_total)}} VNĐ</td>
                            @if($c->payment_method==1)
                                <td>Tiền mặt</td>
                            @elseif($c->payment_method==2)
                                <td>Chuyển khoản ngân hàng</td>
                            @endif
                            @if($c->order_status==0)
                                <td>Đang chờ xác nhận</td>
                            @elseif($c->order_status==1)
                                <td>Đang chờ vận chuyển</td>
                            @elseif($c->order_status==2)
                                <td>Đang chờ khách xác nhận</td>
                            @elseif($c->order_status==3)
                                <td><span class="status delivered">Đã hoàn thành</span></td>
                            @endif
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
{{--            <div class="featureItem">--}}
{{--                <div class="cardHeader">--}}
{{--                    <h2>Sản phẩm bán chạy</h2>--}}
{{--                </div>--}}
{{--                <table>--}}
{{--                    <tr>--}}
{{--                        <td width="70px">--}}
{{--                            <div class="imgBx"><img src="/images/ps5(sp1).jpg"></div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <h4>100 lượt mua</h4>--}}
{{--                            <span>Demon's Souls</span>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                </table>--}}
{{--            </div>--}}
        </div>
        <div class="clearfix"></div>
    </div>

@endsection

@section('js')

{{--    @foreach ($moneyDay as $m)--}}
{{--        @php--}}
{{--        $money = $m->order_total;--}}
{{--        echo $money;--}}
{{--            @endphp--}}
{{--    @endforeach--}}




    @parent
    <script type="text/javascript">
        $(function() {
            // const ctx = document.getElementById('myChart');
            const earning = document.getElementById('earning');

            // new Chart(ctx, {
            //     type: 'doughnut',
            //     data: {
            //         labels: ['Mô Phỏng', 'Phiêu Lưu', 'Hành Động', 'Nhập Vai', 'Chiến Thuật', 'Thể thao'],
            //         datasets: [{
            //             label: 'Số lượng bán ra',
            //             data: [10, 25, 100, 45, 12, 3],
            //             borderWidth: 1
            //         }]
            //     },
            //     options: {
            //         responsive: true,
            //     }
            // });

            new Chart(earning, {
                type: 'bar',
                data: {
                    labels: ['Tổng doanh thu'],
                    datasets: [{
                        label: 'Tổng doanh thu theo ngày',
                        data: [{!!$moneyDay!!}],
                        backgroundColor: [
                            'rgba(255,99,132,1)',
                        ],
                        borderWidth: 1
                    },
                        {
                            label: 'Tổng doanh thu theo năm',
                            data: [{!!$moneyYear!!}],
                            backgroundColor: [
                                'rgba(54,162,235,1)',
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    responsive: true,
                }
            });
        });
    </script>
@endsection
