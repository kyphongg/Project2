@extends('layout.admin_base')

@section('title', 'Sửa sản phẩm')

@section('content')
    <div class="table-agile-info">
        <h3>Cập nhật thông tin sản phẩm</h3>
        <div class="panel-body">
            <div class="position-center">
                @foreach($game as $key => $all)
                <form role="form" action="{{url('/admin/update-product/'.$all->game_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="product_name" value="{{$all->game_name}}" required="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Hình ảnh sản phẩm</label>
                        <input type="file" name="product_image">
                        <img src="/public/images/upload/{{$all->game_image}}" height="100" width="100" alt="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Thể loại</label>
                        <select name="category_id" class="form-control m-bot15">
                            @foreach($category_id as $b => $cate)
                                @if($cate->category_id==$all->category_id)
                                    <option selected value="{{$cate->category_id}}">{{$cate->category_id}}: {{$cate->category_name}}</option>
                                @else
                                    <option value="{{$cate->category_id}}">{{$cate->category_id}}: {{$cate->category_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhà sản xuất</label>
                        <select name="producer_id" class="form-control m-bot15">
                            @foreach($producer_id as $a => $pro)
                                @if($pro->producer_id==$all->producer_id)
                                    <option selected value="{{$pro->producer_id}}">{{$pro->producer_id}}: {{$pro->producer_name}}</option>
                                @else
                                    <option value="{{$pro->producer_id}}">{{$pro->producer_id}}: {{$pro->producer_name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        <textarea class="form-control " name="product_description" required="">{{$all->game_description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Trạng thái</label>
                        <select name="product_status" class="form-control m-bot15">
                            <option value="0">Nổi bật</option>
                            <option value="1">Mới</option>
                        </select>
                    </div>

                    @endforeach
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button>
                    <button type="submit" class="btn btn-info" name="add_product">Sửa</button>
                </form>
            </div>

        </div>
    </div>
@endsection
