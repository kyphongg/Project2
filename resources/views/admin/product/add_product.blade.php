@extends('layout.admin_base')

@section('title', 'Thêm sản phẩm')

@section('content')
    <div class="table-agile-info">
        <h3>Nhập sản phẩm mới</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{url('/admin/products_save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="product_name" placeholder="Tên sản phẩm" required="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Hình ảnh sản phẩm</label>
                        <input type="file" name="product_image">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Thể loại</label>
                        <select name="category_id" class="form-control m-bot15">
                            @foreach($category_id as $key => $cate)
                            <option value="{{$cate->category_id}}">{{$cate->category_id}}: {{$cate->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nhà sản xuất</label>
                        <select name="producer_id" class="form-control m-bot15">
                            @foreach($producer_id as $key => $pro)
                                <option value="{{$pro->producer_id}}">{{$pro->producer_id}}: {{$pro->producer_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        <textarea id="editor" name="product_description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá nhập</label>
                        <input type="text" class="form-control" name="product_price_in" placeholder="Giá nhập" required="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá bán</label>
                        <input type="text" class="form-control" name="product_price_out" placeholder="Giá bán" required="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Trạng thái</label>
                        <select name="product_status" class="form-control m-bot15">
                            <option value="0">Nổi bật</option>
                            <option value="1">Mới</option>
                            <option value="2">Ẩn</option>
                        </select>
                    </div>

                    <a href="{{URL::to('/admin/products')}}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button></a>
                    <button type="submit" class="btn btn-info" name="add_product"><i class="fa-solid fa-plus"></i> Nhập SP mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection

    @section('js')
        @parent
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    @endsection
