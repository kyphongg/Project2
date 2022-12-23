@extends('layout.admin_base')

@section('title', 'Sửa sản phẩm trong kho')

@section('content')
    <div class="table-agile-info">
        <h3>Cập nhật thông tin sản phẩm trong kho</h3>
        <div class="panel-body">
            <div class="position-center">
                @foreach($ware as $key => $w)
                    <form role="form" action="{{url('/admin/update-warehouse/'.$w->warehouse_id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Game</label>
                            <select name="game_id" class="form-control m-bot15">
                                @foreach($game_id as $ke => $g)
                                    <option value="{{$g->game_id}}">{{$g->game_id}}: {{$g->game_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input name="quantity_in" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Giá nhập</label>
                            <input name="price_in" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Giá bán</label>
                            <input name="price_out" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ngày nhập (Năm-Tháng-Ngày)</label>
                            <input name="date_in" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Người nhập</label>
                            <select name="admin_id" class="form-control m-bot15">
                                @foreach($admin_id as $l => $ad)
                                    <option value="{{$ad->admin_id}}">{{$ad->admin_id}}: {{$ad->admin_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endforeach
                        <a href="{{URL::to('/admin/warehouse')}}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button></a>
                        <button type="submit" class="btn btn-info">Sửa</button>
                    </form>
            </div>

        </div>
    </div>
@endsection
