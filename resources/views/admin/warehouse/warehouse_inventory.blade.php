@extends('layout.admin_base')

@section('title', 'Quản lý kho')

@section('content')
    <div class="table-agile-info">
        <h3>Kiểm kê sản phẩm</h3>
        <div class="panel panel-default">
            <div class="table-responsive" style="margin-top: 15px;">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center;">Ngày kiểm kê</th>
                        <th style="text-align: center;">Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: center;">01/01/2023</td>
                        <td style="text-align: center;">
                            <a href="{{url('/admin/warehouse_inventory_details')}}">
                                <i class="fas fa-eye" style="background-color: #337AB7; color: white; width: 25px; height: 25px; padding-top: 5px; border-radius: 2px;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">02/01/2023</td>
                        <td style="text-align: center;">
                            <a href="{{url('/admin/warehouse_inventory_details')}}">
                                <i class="fas fa-eye" style="background-color: #337AB7; color: white; width: 25px; height: 25px; padding-top: 5px; border-radius: 2px;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">03/01/2023</td>
                        <td style="text-align: center;">
                            <a href="{{url('/admin/warehouse_inventory_details')}}">
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
