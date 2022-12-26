@extends('layout.admin_base')

@section('title', 'Danh sách nhân viên')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách nhân viên</h3>
        <a href="{{url('/admin/add-employee')}}">
            <button><i class="fa-solid fa-plus"></i>Thêm nhân viên</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive" style="margin-top: 15px;">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">STT</th>
                        <th>Tên nhân viên</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    @forelse($admin as $admins)
                        <tbody>
                        <tr>
                            <td>{{$admins->admin_id}}</td>
                            <td>{{$admins->admin_name}}</td>
                            <td>{{$admins->admin_email}}</td>
                            @if($admins->admin_level==0)
                                <td>Quản lý</td>
                            @elseif($admins->admin_level==1)
                                <td>Nhân viên kho</td>
                            @elseif($admins->admin_level==2)
                                <td>Nhân viên đơn hàng</td>
                            @elseif($admins->admin_level==3)
                                <td>Nhân viên CSKH</td>
                            @elseif($admins->admin_level==100)
                                <td>Chủ cửa hàng</td>
                            @endif
                            <td>
                                <a href="#" class="active">
                                    <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                                </a>
                                <a href="#" class="active">
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
