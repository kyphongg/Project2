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
                    @forelse($producer as $producers)
                        <tbody>
                        <tr>
                            <td>{{$producers->producer_id}}</td>
                            <td>{{$producers->producer_name}}</td>
                            <td>
                                <a href="{{URL::to('/admin/edit-producer/'.$producers->producer_id)}}" class="active" ui-toggle-class="">
                                    <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                                </a>
                                <a onclick="return confirm('Xoá ?')" href="{{URL::to('/admin/delete-producer/'.$producers->producer_id)}}" class="active" ui-toggle-class="">
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
