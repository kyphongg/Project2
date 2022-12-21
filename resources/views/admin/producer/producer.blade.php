@extends('layout.admin_base')

@section('title', 'Nhà sản xuất')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách nhà sản xuất của sản phẩm</h3>
        <a href="{{url('/admin/producers_add')}}">
            <button><i class="fa-solid fa-plus"></i>Thêm NSX</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">STT</th>
                        <th>Tên nhà sản xuất</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><span class="text-ellipsis">PS5</span></td>
                        <td>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                            </a>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-xmark" style="font-size: 25px; color: #D9534F;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PS4</td>
                        <td>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                            </a>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-xmark" style="font-size: 25px; color: #D9534F;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Nintendo</td>
                        <td>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                            </a>
                            <a href="#" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-xmark" style="font-size: 25px; color: #D9534F;"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
