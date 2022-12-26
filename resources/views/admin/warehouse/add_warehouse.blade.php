@extends('layout.admin_base')

@section('title', 'Nhập kho')

@section('content')
    <div class="table-agile-info">
        <h3>Nhập kho</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{url('/admin/warehouse_save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Game</label>
                        <select name="game_id" class="form-control m-bot15">
                            @foreach($game_id as $key => $g)
                                <option value="{{$g->game_id}}">{{$g->game_name}}</option>
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
                                <option value="{{$ad->admin_id}}">{{$ad->admin_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <a href="{{URL::to('/admin/warehouse')}}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button></a>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-plus"></i> Nhập mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection
