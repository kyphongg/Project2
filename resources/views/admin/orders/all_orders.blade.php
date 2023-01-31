@extends('layout.admin_base')

@section('title', 'Tổng đơn hàng')

@section('content')
    <div class="table-agile-info">
        <div class="table-heading">
            <div class="row">
                <div class="col">
                    <h3>Tổng đơn hàng</h3>
                </div>
                <div class="col">
                    <div class="order-status" style="margin-left: 300px;">
                        <a href="{{url('/admin/new_orders')}}">Đơn mới |</a>
                        <a href="{{url('/admin/accept_orders')}}">Đã xác nhận |</a>
                        <a href="{{url('/admin/done_orders')}}">Đã hoàn thành |</a>
                        {{--                        <a href="{{url('/admin/cancel_orders')}}">Bị hủy</a>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 75px;">Thứ tự</th>
                        <th style="width: 75px;">Mã đơn</th>
                        <th style="width: 145px; text-align: center;">Người nhận</th>
                        <th style="text-align: center;width: 90px;">SĐT</th>
                        <th style="text-align: center;">Địa chỉ giao hàng</th>
                        <th style="text-align: center;">Tổng tiền</th>
                        <th style="text-align: center;">Ngày đặt</th>
                        <th style="text-align: center;">Trạng thái</th>
                        <th style="text-align: center;">Tuỳ biến</th>
                        <th style="text-align: center;">Chi tiết</th>
                    </tr>
                    </thead>
                    @php
                        $i=0;
                    @endphp
                    @foreach($order as $c)
                        @php
                            $i++;
                        @endphp
                        <tbody>
                        <tr>
                            <td style="text-align: center;">{{$i}}</td>
                            <td style="text-align: center;">{{$c->order_code}}</td>
                            <td style="text-align: center;">{{$c->customer_name}}</td>
                            <td style="text-align: center;">{{$c->customer_phone}}</td>
                            <td style="text-align: center;">{{$c->customer_address}}</td>
                            <td style="text-align: center;">{{$c->order_total}} VNĐ</td>
                            <td style="text-align: center;">{{$c->time_in}}</td>
                            @if($c->order_status==0)
                                <td>Đang chờ xác nhận</td>
                                <td style="text-align: center;">
                                    <a style="text-align: center;" href="{{url('/admin/accept_orders/'.$c->order_id)}}">
                                        <button class="btn btn-success" style="width: 80px;"><b>Xác nhận</b></button>
                                    </a>
                                </td>
                            @elseif($c->order_status==1)
                                <td>Đang chờ vận chuyển</td>
                                <td style="text-align: center;">
                                    <a style="text-align: center;" href="{{url('/admin/shipped_orders/'.$c->order_id)}}">
                                        <button class="btn btn-success" style="width: 80px;"><b>Vận chuyển</b></button>
                                    </a>
                                </td>
                            @elseif($c->order_status==2)
                                <td>Đang chờ khách xác nhận</td>
                                <td style="text-align: center;">
                                    <button class="btn btn-success" style="width: 80px;"><b>Đã vận chuyển</b></button>
                                </td>
                            @elseif($c->order_status==3)
                                <td>Khách đã nhận được hàng</td>
                                <td style="text-align: center;">
                                    <button class="btn btn-success" style="width: 80px;"><b>Hoàn thành</b></button>
                                </td>
                            @endif
                            <td style="text-align: center;">
                                <a class="btn btn-primary" style="text-align: center;" href="{{url('/admin/orders_details/'.$c->order_id)}}">
                                    Xem chi tiết
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
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
