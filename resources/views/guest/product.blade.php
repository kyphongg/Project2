@extends('layout.base')

@section('title','Sản phẩm')

@section('content2')
    <div class="product-box">
        <div class="p-left">
            <div class="big-img">
                <img src="/public/images/upload/{{$game->game_image}}" style="text-align: center" height="300px" width="100px" alt="">
            </div>
        </div>

        <div class="p-right">
            <div class="url">
                <a href="{{'/home'}}">Trang chủ</a> > <a href="{{'/category/'.$game->category_id}}">{{$game->category_name}}</a>
            </div>
            <div class="pname"> {{$game->game_name}}
                <div class="p-favorite">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <div class="pid">
                <p style="font-weight: bold">Mã sản phẩm: &nbsp</p>
                <p>{{$game->game_id}}</p>
            </div>
            <div class="pstatus">
                <p style="font-weight: bold">Tình trạng: &nbsp</p>
                <p>Còn Hàng</p>
            </div>
            <div class="pcategory">
                <p style="font-weight: bold">Thể loại: &nbsp</p>
                <p>{{$game->category_name}}</p>
            </div>
            <div class="pproducer">
                <p style="font-weight: bold">Nhà sản xuất: &nbsp</p>
                <p>{{$game->producer_name}}</p>
            </div>
            <div class="p-price">{{$game->price_out}}đ</div>
            <div class="quantity">
                <p>Số lượng :</p>
                <input type="number" min="1" max="5" value="1">
            </div>
            <div class="btn-box">
                <button class="cart-btn"><i class="fa-solid fa-cart-plus"></i> Thêm vào Giỏ</button>
            </div>
        </div>
    </div>

    <div class="description">
        <div class="row">
            <div class="col-3 p-title">
                <h5>Chi tiết sản phẩm</h5>
            </div>

            <div class="col-8 p-info">
                <p>{{$game->game_description}}
                </p>
                <img src="/public/images/upload/{{$game->game_image}}" style="text-align: center" height="682px" width="455px" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="comment">
            <h3>Bình luận</h3>
            <p>Thời gian phản hồi trung bình: 5p</p>
            <form action="#">
                <textarea name="comment" placeholder="Nhập nội dung bình luận"></textarea>
                <button type="submit"><i class="fa-solid fa-location-arrow"></i>Gửi bình luận</button>
            </form>
        </div>
    </div>
@endsection


