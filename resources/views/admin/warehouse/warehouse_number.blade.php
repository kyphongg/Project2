@extends('layout.admin_base')

@section('title', 'Sản phẩm')

@section('content')
    <div class="table-agile-info">
        <h3>Số lượng sản phẩm</h3>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center;width: 45px;">Mã sản phẩm</th>
                        <th style="text-align: center;">Tên sản phẩm</th>
                        <th style="text-align: center;">Hình ảnh</th>
                        <th style="text-align: center;">Tổng số lượng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td style="width:180px;">God Of War: Ragnarok</td>
                        <td style="text-align: center;width:50px;"><img src="/images/ps5(sp2).jpg" height="80" width="80" alt=""></td>
                        <td style="text-align: center;width:85px;">15</td>
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
