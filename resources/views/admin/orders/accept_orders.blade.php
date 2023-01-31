@extends('layout.admin_base')

@section('title', 'Đơn hàng đã xác nhận')

@section('content')
    <div class="table-agile-info">
        <div class="table-heading">
            <div class="row">
                <div class="col">
                    <h3>Đơn hàng đã xác nhận</h3>
                </div>
                <div class="col">
                    <div class="order-status" style="margin-left:260px;">
                        <a href="{{url('/admin/new_orders')}}">Đơn mới |</a>
                        <a href="{{url('/admin/done_orders')}}">Đã hoàn thành |</a>
                        <a href="{{url('/admin/all_orders')}}">Tổng đơn hàng</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 45px;">STT</th>
                        <th style="width: 70px;">Mã đơn</th>
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
                    @php
                        $i=0;
                    @endphp
                    @foreach($order as $o)
                        @php
                            $i++;
                        @endphp
                    <tr>
                        <td style="text-align: center;">{{$i}}</td>
                        <td style="text-align: center;">{{$o->order_code}}</td>
                        <td>{{$o->customer_name}}</td>
                        <td>{{$o->customer_phone}}</td>
                        <td>{{$o->customer_address}}</td>
                        <td style="text-align: center;">{{$o->order_total}} VNĐ</td>
                        <td style="text-align: center;">{{$o->time_in}}</td>
                        @if($o->order_status==0)
                            <td style="text-align: center;">
                                <a style="text-align: center;" href="{{url('/admin/accept_orders/'.$o->order_id)}}">
                                    <button class="btn btn-success" style="width: 80px;"><b>Xác nhận</b></button>
                                </a>
                            </td>
                        @elseif($o->order_status==1)
                            <td style="text-align: center;">
                                <a style="text-align: center;" href="{{url('/admin/shipped_orders/'.$o->order_id)}}">
                                    <button class="btn btn-danger" style="width: 95px;"><b>Vận chuyển</b></button>
                                </a>
                            </td>
                        @elseif($o->order_status==2)
                            <td style="text-align: center;">
                                <button class="btn btn-success" style="width: 80px;"><b>Đã vận chuyển</b></button>
                            </td>
                        @elseif($o->order_status==3)
                            <td style="text-align: center;">
                                <button class="btn btn-success" style="width: 80px;"><b>Hoàn thành</b></button>
                            </td>
                        @endif
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
