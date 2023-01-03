@extends('layout.admin_base')

@section('title', 'Đơn hàng mới')

@section('content')
    <div class="table-agile-info">
        <h3>Đơn hàng mới</h3>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Khách hàng</th>
                        <th>Tổng tiền</th>
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
                        <td>03/01/2022</td>
                        <td>Đã hủy</td>
                        <td style="text-align: center;">
                            <a style="text-align: center;" href="{{url('/orders_detail')}}">
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
