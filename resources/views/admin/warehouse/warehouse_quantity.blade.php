@extends('layout.admin_base')

@section('title', 'Quản lý kho')

@section('content')
    <div class="table-agile-info">
        <h3>Số lượng tồn kho</h3>
        <p style="margin-top: 15px;">Ngày/Tháng/Năm: 03/01/2023</p>
        <div class="panel panel-default">
            <div class="table-responsive" style="margin-top: 15px;">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Game</th>
                        <th>Số lượng ban đầu</th>
                        <th>Số lượng nhập mới</th>
                        <th>Số lượng bán</th>
                        <th>Số lượng tồn kho</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: center;">Elden Ring</td>
                        <td style="text-align: center;">20</td>
                        <td style="text-align: center;">10</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;">30</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Demon's Souls</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;">10</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;">10</td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">Grand Theft Auto V</td>
                        <td style="text-align: center;">15</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;">5</td>
                        <td style="text-align: center;">10</td>
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
