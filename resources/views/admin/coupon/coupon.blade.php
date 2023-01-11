@extends('layout.admin_base')

@section('title', 'Mã giảm giá')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách mã giảm giá của sản phẩm</h3>
        <a href="{{url('/admin/coupons_add')}}">
            <button class="btn btn-primary"><i class="fa-solid fa-plus"></i>  Thêm mã giảm giá</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="text-align: center;">
                    <thead>
                    <tr>
                        <th style="width: 30px;">ID</th>
                        <th style="text-align: center;">Tên mã giảm giá</th>
                        <th style="text-align: center;">Mã giảm giá</th>
                        <th style="text-align: center;">Giảm</th>
                        <th style="text-align: center;">Số lượng</th>
                        <th style="text-align: center;">Mục đích</th>
                        <th style="text-align: center;">Trạng thái</th>
                        <th style="text-align: center;">Tùy biến</th>
                    </tr>
                    </thead>
                    @forelse($coupon as $coupons)
                        <tbody>
                        <tr>
                            <td>{{$coupons->coupon_id}}</td>
                            <td>{{$coupons->coupon_name}}</td>
                            <td>{{$coupons->coupon_text}}</td>
                            @if($coupons->coupon_serve==0)
                                <td>{{$coupons->coupon_number}}%</td>
                            @else
                                <td>{{$coupons->coupon_number}}K</td>
                            @endif
                            <td>{{$coupons->coupon_quantity}}</td>
                            @if($coupons->coupon_serve==0)
                                <td>Giảm theo phần trăm</td>
                            @else
                                <td>Giảm theo tiền</td>
                            @endif
                            @if($coupons->coupon_status==0)
                                <td>Hoạt động</td>
                            @else
                                <td>Không hoạt động</td>
                            @endif
                            <td>
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
