@extends('layout.base')


@section('title','Danh mục sản phẩm')
@section('content')
    <div class="cart-p">
        <div class="cart-heading">
            @if($categoryName)
                <h3>{{$categoryName->category_name}}</h3>
            @endif
        </div>
    <div class="row row-cols-4">
            <div class="col product">
                <div class="sp-box">
                    <a href="{{url('/product/')}}">
                        <img src="/images/ps5(sp1).jpg">
                        <div class="p-title">
                            <p>Demon's Souls (PS5)</p>
                        </div>
                        <div class="price">
                            <p>1.350.000đ</p>
                        </div>
                    </a>
                </div>
            </div>
        <div class="col product">
            <div class="sp-box">
                <a href="{{url('/product/')}}">
                    <img src="/images/ps5(sp1).jpg">
                    <div class="p-title">
                        <p>Demon's Souls (PS5)</p>
                    </div>
                    <div class="price">
                        <p>1.350.000đ</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col product">
            <div class="sp-box">
                <a href="{{url('/product/')}}">
                    <img src="/images/ps5(sp1).jpg">
                    <div class="p-title">
                        <p>Demon's Souls (PS5)</p>
                    </div>
                    <div class="price">
                        <p>1.350.000đ</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col product">
            <div class="sp-box">
                <a href="{{url('/product/')}}">
                    <img src="/images/ps5(sp1).jpg">
                    <div class="p-title">
                        <p>Demon's Souls (PS5)</p>
                    </div>
                    <div class="price">
                        <p>1.350.000đ</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
