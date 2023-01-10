@extends('layout.admin_base')

@section('title', 'Đơn hàng mới')

@section('content')
    <div class="table-agile-info">
        <h3>Đơn hàng đang xử lý</h3>
        <div class="panel panel-default">
            <div class="table-responsive" style="margin-top: 15px;">
                <table id="myTable" class="table table-striped table-bordered" style="text-align: center;">
                    <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Địa chỉ giao hàng</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Cập nhật</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($order as $o)
                    <tr>
                        <td>{{$o->order_id}}</td>
                        <td>{{$o->customer_name}}</td>
                        <td>{{$o->order_total}} VNĐ</td>
                        <td>{{$o->customer_address}}</td>
                        <td>03/01/2022</td>
                        @if($o->order_status==0)
                            <td>Đang chờ xử lý</td>
                        @endif

                        <td>
                            <button style="width: 100px; background-color: #5CB85C;"><b>Vận chuyển</b></button>
                        </td>
                        <td>
                            <a style="text-align: center;" href="{{url('/admin/orders_details/'.$o->order_id)}}">
                                <i class="fas fa-eye" style="background-color: #337AB7; color: white; width: 25px; height: 25px; padding-top: 5px; border-radius: 2px;"></i>
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
