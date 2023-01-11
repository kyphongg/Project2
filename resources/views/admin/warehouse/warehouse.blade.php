@extends('layout.admin_base')

@section('title', 'Quản lý kho')

@section('content')
    <div class="table-agile-info">
        <h3>Kho</h3>
        <a href="{{url('/admin/warehouse_add')}}">
            <button class="btn btn-primary"><i class="fa-solid fa-plus"></i>  Nhập sản phẩm</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 45px;">ID</th>
                        <th style="text-align: center;">Game</th>
                        <th style="text-align: center;">Số lượng</th>
                        <th style="text-align: center;">Ngày nhập</th>
                        <th style="text-align: center;">Người nhập</th>
                        <th style="text-align: center;">Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ware as $key => $w)
                    <tr>
                        <td style="text-align: center;">{{$w->warehouse_id}}</td>
                        <td>{{$w->game_name}}</td>
                        <td style="text-align: center;">{{$w->quantity_in}}</td>
                        <td style="text-align: center;">{{$w->time_in}}</td>
                        <td style="text-align: center;">{{$w->admin_name}}</td>
                        <td style="text-align: center;">
                            <a href="{{URL::to('/admin/edit-warehouse/'.$w->warehouse_id)}}" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
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
