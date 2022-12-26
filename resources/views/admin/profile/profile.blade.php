@extends('layout.admin_base')

@section('title', 'Hồ sơ cá nhân')

@section('content')
    <div class="table-agile-info">
        <h3>Hồ sơ cá nhân</h3>
        <div class="adminUser-detail" style="margin-top: 15px">
            @foreach($admin as $key => $ad)
            <p>Họ và tên</p>
                <p style="font-weight: 600; margin-top: 10px; margin-bottom: 10px;">{{$ad->admin_name}}</p>
                <p>Địa chỉ email</p>
                <p style="font-weight: 600; margin-top: 10px; margin-bottom: 10px;">{{$ad->admin_email}}</p>
                <p>Chức vụ</p>
                <p style="font-weight: 600; margin-top: 10px; margin-bottom: 10px;">
                @if($ad->admin_level==0)
                    <p style="font-weight: 600; margin-top: 10px; margin-bottom: 10px;">Quản lý</p>
                @elseif($ad->admin_level==1)
                    <p style="font-weight: 600; margin-top: 10px; margin-bottom: 10px;">Nhân viên kho</p>
                @elseif($ad->admin_level==2)
                    <p style="font-weight: 600; margin-top: 10px; margin-bottom: 10px;">Nhân viên đơn hàng</p>
                @elseif($ad->admin_level==3)
                    <p style="font-weight: 600; margin-top: 10px; margin-bottom: 10px;">Nhân viên CSKH</p>
                @elseif($ad->admin_level==100)
                    <p style="font-weight: 600; margin-top: 10px; margin-bottom: 10px;">Chủ cửa hàng</p>
                @endif
            @endforeach
        </div>
@endsection
