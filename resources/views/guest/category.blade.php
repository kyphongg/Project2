@extends('layout.base')


@section('title','Danh mục sản phẩm')
@section('content')
    <div class="cart-p">
        <div class="cart-heading">
                <h3>{{$categoryName->category_name}}</h3>
        </div>

    <div class="row row-cols-4">
        @forelse($gameCate as $game)
            <div class="col product">
                <div class="sp-box">
                    <a href="{{url('/product/'.$game->game_id)}}">
                        <img src="/public/images/upload/{{$game->game_image}}" style="text-align: center" height="300px" width="100px" alt="">
                        <div class="p-title">
                            <p>{{$game->game_name}}</p>
                        </div>
                        <div class="price">
                            <p>{{number_format($game->game_price_out).' VNĐ'}}</p>
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <p>Rỗng</p>
        @endforelse
    </div>

     {{ $gameCate -> links('guest.my_pagination') }}



@endsection
