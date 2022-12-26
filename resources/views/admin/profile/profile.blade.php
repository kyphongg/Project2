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
                @if($ad->admin_level==1)
                    <p>Nhân viên kho</p>
                @endif
            @endforeach
        </div>
@endsection
