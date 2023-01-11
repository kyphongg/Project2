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
                        <th style="text-align: center;">Game</th>
                        <th style="text-align: center;">Số lượng ban đầu</th>
                        <th style="text-align: center;">Số lượng nhập mới</th>
                        <th style="text-align: center;">Số lượng bán</th>
                        <th style="text-align: center;">Số lượng tồn kho</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ware as $key => $w)
                    <tr>
                        <td style="text-align: center;">{{$w->game_name}}</td>
                        <td style="text-align: center;">20</td>
                        <td style="text-align: center;">10</td>
                        <td style="text-align: center;">0</td>
                        <td style="text-align: center;">30</td>
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
