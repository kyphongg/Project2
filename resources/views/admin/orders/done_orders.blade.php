@extends('layout.admin_base')

@section('title', 'Đơn hàng mới')

@section('content')
    <div class="table-agile-info">
        <div class="row">
            <div class="col">
                <h3>Đơn hàng đã hoàn thành</h3>
            </div>
            <div class="col">
                <div class="order-status" style="margin-left: 300px;">
                    <a href="{{url('/admin/new_orders')}}">Đơn hàng mới |</a>
                    <a href="{{url('/admin/accept_orders')}}">Đã xác nhận |</a>
                    <a href="{{url('/admin/cancel_orders')}}">Bị hủy</a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 75px;">Mã đơn</th>
                        <th style="width: 145px; text-align: center;">Người nhận</th>
                        <th style="text-align: center;width: 90px;">SĐT</th>
                        <th style="text-align: center;">Địa chỉ giao</th>
                        <th style="text-align: center;">Tổng tiền</th>
                        <th style="text-align: center;">Ngày đặt</th>
                        <th style="text-align: center;">Trạng thái</th>
                        <th style="text-align: center;">Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>Phong</td>
                        <td>0966331402</td>
                        <td>Văn Chương, Đống Đa, Hà Nội</td>
                        <td style="text-align: center;">4.030.000đ</td>
                        <td style="text-align: center;">2023-1-11 10:53</td>
                        <td style="text-align: center;">
                            <button class="btn btn-success" style="width: 110px;"><b>Đã giao hàng</b></button>
                        </td>
                        <td style="text-align: center;">
                            <a class="btn btn-primary" style="text-align: center;" href="{{url('/admin/orders_details')}}">
                                Xem chi tiết
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>Phong</td>
                        <td>0966331402</td>
                        <td>Văn Chương, Đống Đa, Hà Nội</td>
                        <td style="text-align: center;">4.030.000đ</td>
                        <td style="text-align: center;">2023-1-11 10:53</td>
                        <td style="text-align: center;color: #5BC0DE;">
                            <b>Đã hoàn thành</b>
                        </td>
                        <td style="text-align: center;">
                            <a class="btn btn-primary" style="text-align: center;" href="{{url('/admin/orders_details')}}">
                                Xem chi tiết
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
