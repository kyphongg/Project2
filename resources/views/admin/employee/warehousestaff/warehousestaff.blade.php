@extends('layout.admin_base')

@section('title', 'Nhân viên kho')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách nhân viên kho</h3>
        <div class="panel panel-default">
            <div class="table-responsive" style="margin-top: 15px;">
                <table style="text-align: center;" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">ID</th>
                        <th>Tên nhân viên</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($warehouse as $key => $w)
                    <tr>
                        <td>{{$w->admin_id}}</td>
                        <td>{{$w->admin_name}}</td>
                        <td>{{$w->admin_email}}</td>
                        @if($w->admin_level==1)
                            <td>Nhân viên kho</td>
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
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
