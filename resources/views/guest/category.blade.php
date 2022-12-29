@extends('layout.base')


@section('title','Danh mục sản phẩm')
@section('content')
    <div class="cart-p">
        <div class="cart-heading">
                <h3>{{$game->category_name}}</h3>
        </div>

    <div class="row row-cols-4">
            <div class="col product">
                <div class="sp-box">
                    <a href="{{url('/product/'.$game->game_id)}}">
                        <img src="/public/images/upload/{{$game->game_image}}" style="text-align: center" height="300px" width="100px" alt="">
                        <div class="p-title">
                            <p>{{$game->game_name}}</p>
                        </div>
                        <div class="price">
                            <p>{{$game->price_out}}đ</p>
                        </div>
                    </a>
                </div>
            </div>
    </div>

@endsection
