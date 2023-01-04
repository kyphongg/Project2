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
                        <th>Cập nhật</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Phong</td>
                        <td>4.030.000đ</td>
                        <td>Văn Chương, Đống Đa, Hà Nội</td>
                        <td>03/01/2022</td>
                        <td>
                            <button style="width: 100px; background-color: #5CB85C;"><b>Vận chuyển</b></button>
                        </td>
                        <td>
                            <a style="text-align: center;" href="{{url('/admin/orders_details')}}">
                                <i class="fas fa-eye" style="background-color: #337AB7; color: white; width: 25px; height: 25px; padding-top: 5px; border-radius: 2px;"></i>
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
