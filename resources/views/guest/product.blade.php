@extends('layout.base')

@section('title','Sản phẩm')

@section('content2')
    <div class="product-box">
        <div class="p-left">
            <div class="big-img">
                <img src="/public/images/upload/{{$game->game_image}}" style="text-align: center" height="300px"
                     width="100px" alt="">
            </div>
        </div>

        <div class="p-right">
            <div class="url">
                <a href="{{'/home'}}">Trang chủ</a> > <a
                    href="{{'/category/'.$game->category_id}}">{{$game->category_name}}</a>
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
                @if($count-$out>0)
                    <p>Còn Hàng</p>
                @else
                    <p>Hết Hàng</p>
                @endif
            </div>
            <div class="pid">
                <p style="font-weight: bold">Số lượng: &nbsp</p>
                <p>{{$count-$out}}</p>
            </div>
            <div class="pcategory">
                <p style="font-weight: bold">Thể loại: &nbsp</p>
                <p>{{$game->category_name}}</p>
            </div>
            <div class="pproducer">
                <p style="font-weight: bold">Nhà sản xuất: &nbsp</p>
                <p>{{$game->producer_name}}</p>
            </div>
            <div class="p-price">{{number_format($game->game_price_out).' VNĐ'}}</div>
            <?php
            $customer_id = Session::get('customer_id');
            ?>
            <form action="{{URL::to('/cart_save/'.$customer_id)}}" method="POST">
                @csrf
                <div class="quantity">
                    <p>Số lượng :</p>
                    <input name="quantity" type="number" min="1" max="5" value="1">
                    <input name="product_id_hidden" type="hidden" value="{{$game->game_id}}">
                </div>
                <?php
                if ($count - $out > 0) {
                    if ($customer_id) {
                        echo '<div class="btn-box">
                <button type="submit" class="cart-btn"><i class="fa-solid fa-cart-plus"></i> Thêm vào Giỏ</button>
                 <div class="alert hide">
                    <span class="fas fa-exclamation-circle"></span>
                    <span class="msg">Thêm vào giỏ hàng thành công!</span>
                    <span class="close-btnn">
                        <span class="fas fa-times"></span>
                    </span>
                </div>
            </div>';
                    }
                    else {
                        echo '<div class="btn-box">
                <a href="/login"><button type="button" class="cart-btn"><i class="fa-solid fa-cart-plus"></i> Thêm vào Giỏ</button>
            </a></div>';
                    }
                }
                ?>
            </form>
        </div>
    </div>

    <div class="description">
        <div class="row">
            <div class="col-3 p-title">
                <h5>Chi tiết sản phẩm</h5>
            </div>

            <div class="col-8 p-info">
                <p>{!!$game->game_description!!}</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="comment">
            <h3>Bình luận</h3>
            <form action="#">
                {{--                <input type="hidden" name="customer_id" class="customer_id" value="{{$customer_id}}">--}}
                <textarea name="comment" class="comment_info" placeholder="Nhập nội dung bình luận"></textarea>
                <button type="button" class="send-comment"><i class="fa-solid fa-location-arrow"></i> Gửi bình luận
                </button>
            </form>
            <div id="notify_comment"></div>
            <form>
                @csrf
                <input type="hidden" name="game_id" class="game_id" value="{{$game->game_id}}">
                <div id="comment_show"></div>
            </form>
        </div>
    </div>
@endsection


