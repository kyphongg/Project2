@extends('layout.admin_base')

@section('title', 'Sản phẩm')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách Sản phẩm</h3>
        <a href="{{url('/admin/products_add')}}">
            <button><i class="fa-solid fa-plus"></i> Nhập SP mới</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 15px;">STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Thể loại</th>
                        <th>Nhà sản xuất</th>
                        <th>Mô tả</th>
                        <th>Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($game as $key => $all)
                    <tr>
                        <td>{{$all->game_id}}</td>
                        <td>{{$all->game_name}}</td>
                        <td><img src="/public/images/upload/{{$all->game_image}}" height="100" width="100" alt=""></td>
                        <td>{{$all->category_name}}</td>
                        <td>{{$all->producer_name}}</td>
                        <td>{{$all->game_description}}</td>
                        <td>
                            <a href="{{URL::to('/admin/edit-product/'.$all->game_id)}}" class="active" ui-toggle-class="">
                                <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
