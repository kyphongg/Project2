@extends('layout.base')


@section('title','Kết quả tìm kiếm')
@section('content')
    <div class="cart-p">
        <div class="cart-heading">
            <h3>Kết quả tìm kiếm</h3>
        </div>
        <?php
        $message = Session::get('message');
        if($message){
            echo $message;
        }else{
            echo '<div class="row row-cols-4">
        @forelse($search_product as $key=>$game)
            <div class="col product">
                <div class="sp-box">
                    <a href="/product/$game->game_id">
                        <img src="/public/images/upload/{{$game->game_image}}" style="text-align: center" height="300px" width="100px" alt="">
                        <div class="p-title">
                            <p>{{$game->game_name}}</p>
                        </div>
                        <div class="price">
                            <p>number_format($game->game_price_out)VNĐ</p>
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <p style="margin-left: 15px;">Không có sản phẩm tìm kiếm</p>
        @endforelse
            </div>';
        }
        ?>


{{--        <div class="row row-cols-4">--}}
{{--            @forelse($search_product as $key=>$game)--}}
{{--            <div class="col product">--}}
{{--                <div class="sp-box">--}}
{{--                    <a href="{{url('/product/'.$game->game_id)}}">--}}
{{--                        <img src="/public/images/upload/{{$game->game_image}}" style="text-align: center" height="300px" width="100px" alt="">--}}
{{--                        <div class="p-title">--}}
{{--                            <p>{{$game->game_name}}</p>--}}
{{--                        </div>--}}
{{--                        <div class="price">--}}
{{--                            <p>{{number_format($game->game_price_out).' VNĐ'}}</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @empty--}}
{{--                <p style="margin-left: 15px;">Không có sản phẩm tìm kiếm</p>--}}
{{--            @endforelse--}}
{{--        </div>--}}

@endsection
