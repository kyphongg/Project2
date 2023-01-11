@extends('layout.admin_base')

@section('title', 'Sản phẩm')

@section('content')
    <div class="table-agile-info">
        <h3>Danh sách Sản phẩm</h3>
        <a href="{{url('/admin/products_add')}}">
            <button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Nhập sản phẩm mới</button>
        </a>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th style="text-align: center;width: 240px;">Tên sản phẩm</th>
                        <th style="width: 50px;">Hình ảnh</th>
                        <th style="text-align: center;width:190px;">Thể loại</th>
                        <th style="width:200px;">Nhà sản xuất</th>
                        <th style="text-align: center;width:220px;">Mô tả</th>
                        <th style="text-align: center;width: 150px;">Giá nhập</th>
                        <th style="text-align: center;width: 150px;">Giá bán</th>
                        <th style="width: 180px;">Trạng thái</th>
                        <th style="width: 170px;">Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($game as $key => $all)
                    <tr>
                        <td style="text-align: center;">{{$all->game_id}}</td>
                        <td>{{$all->game_name}}</td>
                        <td ><img src="/public/images/upload/{{$all->game_image}}" height="80" width="80" alt=""></td>
                        <td>{{$all->category_name}}</td>
                        <td style="text-align: center;">{{$all->producer_name}}</td>
                        <td style="display:block; display:-webkit-box; line-height: 100px; width:220px; height: 100px;overflow: hidden; text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:3;-webkit-box-orient: vertical;">{!!$all->game_description!!}</td>
                        <td style="text-align: center;">{{number_format($all->game_price_in).'đ'}}</td>
                        <td style="text-align: center;">{{number_format($all->game_price_out).'đ'}}</td>
                        @if($all->game_status==0)
                            <td style="text-align: center;">Nổi bật</td>
                        @else
                            <td style="text-align: center;">Mới</td>
                        @endif
                        <td style="text-align: center;">
                            <a  href="{{URL::to('/admin/edit-product/'.$all->game_id)}}" class="active" ui-toggle-class="">
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

@section('js')
    @parent
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
