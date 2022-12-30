@extends('layout.admin_base')

@section('title', 'Thể loại')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách nhân viên CSKH</h3>
        <div class="panel panel-default">
            <div class="table-responsive" style="margin-top: 15px;">
                <table style="text-align: center;" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">STT</th>
                        <th>Tên nhân viên</th>
                        <th>Email</th>
                        <th>Chức vụ</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lâm</td>
                        <td>lam@admin.com</td>
                        <td>Nhân viên CSKH</td>
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
                </table>
            </div>
        </div>
@endsection
