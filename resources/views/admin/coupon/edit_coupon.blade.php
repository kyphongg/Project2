@extends('layout.admin_base')

@section('title', 'Sửa nhà sản xuất')

@section('content')
    <div class="table-agile-info">
        <h3>Sửa nhà sản xuất</h3>
        <div class="panel-body">
            @forelse($coupon as $coupons)
                <div class="position-center">
                    <form role="form" action="{{url('/admin/update-coupon/'.$coupons->coupon_id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Tên mã giảm giá</label>
                            <input name="coupon_name" value="{{$coupons->coupon_name}}" type="text" class="form-control" placeholder="Tên mã giảm giá">
                            <label>Mã giảm giá</label>
                            <input name="coupon_text" value="{{$coupons->coupon_text}}" type="text" class="form-control" placeholder="Mã giảm giá">
                            <label>Giảm</label>
                            <input name="coupon_number" value="{{$coupons->coupon_number}}" type="text" class="form-control" placeholder="Giảm">
                            <label>Số lượng</label>
                            <input name="coupon_quantity" value="{{$coupons->coupon_quantity}}" type="text" class="form-control" placeholder="Số lượng">
                            <label>Mục đích</label>
                            <select name="coupon_serve" class="form-control m-bot15">
                                <option value="0">Giảm theo phần trăm</option>
                                <option value="1">Giảm theo tiền</option>
                            </select>
                            <label>Trạng thái</label>
                            <select name="coupon_status" class="form-control m-bot15">
                                <option value="0">Hoạt động</option>
                                <option value="1">Không hoạt động</option>
                            </select>
                        </div>
                        <a href="{{URL::to('/admin/coupons')}}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button></a>
                        <button type="submit" class="btn btn-info">Sửa</button>
                    </form>
                </div>
            @empty
                <tr><td colspan="4">Danh sách rỗng</td></tr>
            @endforelse
        </div>
    </div>
@endsection
