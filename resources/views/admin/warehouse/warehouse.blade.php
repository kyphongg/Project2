@extends('layout.admin_base')

@section('title', 'Quản lý kho')

@section('content')
    <div class="table-agile-info">
        <h3>Kho</h3>
        <a href="{{url('/admin/warehouse_add')}}">
            <button><i class="fa-solid fa-plus"></i>  Nhập sản phẩm</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">STT</th>
                        <th>Game</th>
                        <th>Số lượng</th>
                        <th>Giá nhập</th>
                        <th>Giá bán</th>
                        <th>Ngày nhập</th>
                        <th>Người nhập</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    @foreach($ware as $key => $w)
                    <tbody>
                    <tr>
                        <td>{{$w->warehouse_id}}</td>
                        <td>{{$w->game_name}}</td>
                        <td>{{$w->quantity_in}}</td>
                        <td>{{$w->price_in}}đ</td>
                        <td>{{$w->price_out}}đ</td>
                        <td>{{$w->time_in}}</td>
                        <td>{{$w->admin_name}}</td>
                        <td>
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