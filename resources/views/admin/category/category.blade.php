@extends('layout.admin_base')

@section('title', 'Thể loại')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách thể loại sản phẩm</h3>
        <a href="{{url('/admin/categories_add')}}">
            <button><i class="fa-solid fa-plus"></i>Thêm thể loại</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">STT</th>
                        <th>Tên thể loại</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    @forelse($category as $categories)
                        <tbody>
                        <tr>
                            <td>{{$categories->category_id}}</td>
                            <td>{{$categories->category_name}}</td>
                            <td>
                                <a href="{{URL::to('/admin/edit-category/'.$categories->category_id)}}" class="active" ui-toggle-class="">
                                    <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                                </a>
                                <a onclick="return confirm('Xoá ?')" href="{{URL::to('/admin/delete-category/'.$categories->category_id)}}" class="active" ui-toggle-class="">
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
