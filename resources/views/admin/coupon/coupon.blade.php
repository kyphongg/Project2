@extends('layout.admin_base')

@section('title', 'Mã giảm giá')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách mã giảm giá của sản phẩm</h3>
        <a href="{{url('/admin/coupons_add')}}">
            <button><i class="fa-solid fa-plus"></i>Thêm MGG</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">ID</th>
                        <th>Tên mã giảm giá</th>
                        <th>Mã giảm giá</th>
                        <th>Giảm</th>
                        <th>Số lượng</th>
                        <th>Mục đích</th>
                        <th>Trạng thái</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    @forelse($coupon as $coupons)
                        <tbody>
                        <tr>
                            <td style="text-align: center;">{{$coupons->coupon_id}}</td>
                            <td style="text-align: center;">{{$coupons->coupon_name}}</td>
                            <td style="text-align: center;">{{$coupons->coupon_text}}</td>
                            @if($coupons->coupon_serve==0)
                                <td style="text-align: center;">{{$coupons->coupon_number}}%</td>
                            @else
                                <td style="text-align: center;">{{$coupons->coupon_number}}K</td>
                            @endif
                            <td style="text-align: center;">{{$coupons->coupon_quantity}}</td>
                            @if($coupons->coupon_serve==0)
                                <td style="text-align: center;">Giảm theo phần trăm</td>
                            @else
                                <td style="text-align: center;">Giảm theo tiền</td>
                            @endif
                            @if($coupons->coupon_status==0)
                                <td style="text-align: center;">Hoạt động</td>
                            @else
                                <td style="text-align: center;">Không hoạt động</td>
                            @endif
                            <td style="text-align: center;">
                                <a href="{{URL::to('/admin/edit-coupon/'.$coupons->coupon_id)}}" class="active" ui-toggle-class="">
                                    <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                                </a>
                                <a onclick="return confirm('Xoá ?')" href="{{URL::to('/admin/delete-coupon/'.$coupons->coupon_id)}}" class="active" ui-toggle-class="">
                                    <i class="fa-solid fa-square-xmark" style="font-size: 25px; color: #D9534F;"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    @empty
                        <tr><td colspan="4">Danh sách rỗng</td></tr>
                    @endforelse
                </table>
            </div>
        </div>
@endsection
