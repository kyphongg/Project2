@extends('layout.admin_base')

@section('title', 'Đơn hàng mới')

@section('content')
    <div class="table-agile-info">
        <div class="table-heading">
            <div class="row">
                <div class="col">
                    <h3>Đơn hàng đã xác nhận</h3>
                </div>
                <div class="col">
                    <div class="order-status" style="margin-left: 320px;">
                        <a href="{{url('/admin/new_orders')}}">Đơn mới |</a>
                        <a href="{{url('/admin/done_orders')}}">Đã hoàn thành |</a>
                        <a href="{{url('/admin/cancel_orders')}}">Bị hủy</a>
                    </div>
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
                    @foreach($order as $o)
                    <tr>
                        <td style="text-align: center;">{{$o->order_id}}</td>
                        <td>{{$o->customer_name}}</td>
                        <td>{{$o->customer_phone}}</td>
                        <td>{{$o->customer_address}}</td>
                        <td style="text-align: center;">{{$o->order_total}} đ</td>
                        <td style="text-align: center;">2023-1-11 10:39</td>
                        <td style="text-align: center;">
                            <button class="btn btn-success" style="width: 100px;"><b>Vận chuyển</b></button>
                        </td>
                        <td style="text-align: center;">
                            <a class="btn btn-primary" style="text-align: center;" href="{{url('/admin/orders_details/'.$o->order_id)}}">
                                Xem chi tiết
                            </a>
                        </td>
                    </tr>
                    @endforeach
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
