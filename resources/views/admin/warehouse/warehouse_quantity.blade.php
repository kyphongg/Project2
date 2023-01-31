@extends('layout.admin_base')

@section('title', 'Quản lý kho')

@section('content')
    <div class="table-agile-info">
        <h3>Số lượng tồn kho</h3>
        @php
        $date = now();
        @endphp
        <p style="margin-top: 15px;">Thời gian: {{$date}}</p>
        <div class="panel panel-default">
            <div class="table-responsive" style="margin-top: 15px;">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: center;">Game</th>
                        <th style="text-align: center;">Số lượng ban đầu</th>
                        <th style="text-align: center;">Số lượng bán</th>
                        <th style="text-align: center;">Số lượng tồn kho</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ware as $key => $w)
                    <tr>
                        <td style="text-align: center;">{{$w->game_name}}</td>
                        @php
                            $count = Illuminate\Support\Facades\DB::table('tbl_game')
        ->join('tbl_warehouse', 'tbl_warehouse.game_id', '=', 'tbl_game.game_id')
        ->where('tbl_game.game_id',$w->game_id)
        ->sum('tbl_warehouse.quantity_in');
                            $out = Illuminate\Support\Facades\DB::table('tbl_order_detail')
        ->join('tbl_order', 'tbl_order.order_id', '=', 'tbl_order_detail.order_id')
        ->join('tbl_game', 'tbl_game.game_id', '=', 'tbl_order_detail.game_id')
        ->where('tbl_order_detail.game_id',$w->game_id)
        ->sum('tbl_order_detail.game_quantity');
                        @endphp
                        <td style="text-align: center;">{{$count}}</td>
                        <td style="text-align: center;">{{$out}}</td>
                        <td style="text-align: center;">{{$count-$out}}</td>
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
