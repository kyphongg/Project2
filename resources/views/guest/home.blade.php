@extends('layout.base')

@section("title", "Gaming Store")

@section('content')
    <div class="my-slide">
        <div class="row">
            <div class="col-9">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="images/godOfwar.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="images/elden-ring.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/fifa23.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/demons-souls.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-3">
                <div class="col brand">
                    @foreach($cateMoPhong as $kw=>$cate)
                        <a href="{{'/category/'.$cate->category_id}}">
                            <img src="images/MoPhong.jpg">
                        </a>
                    @endforeach
                </div>

                <div class="col brandd">
                    @foreach($cateNhapVai as $kw=>$cate)
                        <a href="{{'/category/'.$cate->category_id}}">
                            <img src="images/NhapVai.jpg">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="my-content1">
        @foreach($cateHanhDong as $kw=>$cate)
            <a href="{{'/category/'.$cate->category_id}}">
                <img src="images/HanhDong.jpg">
            </a>
        @endforeach
        @foreach($catePhieuLuu as $kw=>$cate)
            <a href="{{'/category/'.$cate->category_id}}">
                <img src="images/PhieuLuu.jpg">
            </a>
        @endforeach
        @foreach($cateTheThao as $kw=>$cate)
            <a href="{{'/category/'.$cate->category_id}}">
                <img src="images/TheThao.jpg">
            </a>
        @endforeach
        @foreach($cateChienThuat as $kw=>$cate)
            <a href="{{'/category/'.$cate->category_id}}">
                <img src="images/ChienThuat.jpg">
            </a>
        @endforeach
    </div>
@endsection

@section('content2')
    <div class="featured">
        <div class="container">
            <div class="featured-heading">
                <h3 style="font-size: 22px;">Sản phẩm nổi bật</h3>
                <p style="font-style: italic;font-size: 14px;">Danh sách những sản phẩm theo xu hướng mà có thể bạn sẽ
                    thích</p>
            </div>
                <ul class="autoWidth" class="cs-hidden">
                    @forelse($game as $key => $all)
                    <li class="item-a">
                        <div class="featured-box">
                            <a href="{{url('/product/'.$all->game_id)}}">
                                <img src="/public/images/upload/{{$all->game_image}}" height="100" width="100" alt="">
                                <div class="p-title">
                                    <p>{{$all->game_name}}</p>
                                </div>
                                <div class="price">
                                    <p>{{number_format($all->price_out).' VNĐ'}}</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    @empty
                        <p>Rỗng</p>
                    @endforelse
                </ul>
        </div>
    </div>
    <div class="favorite">
        <div class="container">
            <div class="favorite-heading">
                <h3 style="font-size: 22px;">Sản phẩm bán chạy</h3>
                <p style="font-style: italic;font-size: 14px;">Danh sách những sản phẩm theo xu hướng mà có thể bạn sẽ
                    thích</p>
            </div>

            <ul class="autoWidth" class="cs-hidden">
                {{------------------1---------------------}}
                <li class="item-a">
                    <div class="favorite-box">
                        <a href="{{url('/product/')}}">
                            <img src="images/ps5(sp1).jpg">
                            <div class="p-title">
                                <p>Demon's Souls (PS5)</p>
                            </div>
                            <div class="price">
                                <p>1.350.000đ</p>
                            </div>
                        </a>
                    </div>
                </li>

                {{------------------2---------------------}}
                <li class="item-a">
                    <div class="favorite-box">
                        <a href="{{url('/product/')}}">
                            <img src="images/ps5(sp2).jpg">
                            <div class="p-title">
                                <p>God Of War: Ragnarok (PS5)</p>
                            </div>
                            <div class="price">
                                <p>1.350.000đ</p>
                            </div>
                        </a>
                    </div>
                </li>

                {{------------------3---------------------}}
                <li class="item-a">
                    <div class="favorite-box">
                        <a href="{{url('/product/')}}">
                            <img src="images/ps5(sp3).png">
                            <div class="p-title">
                                <p>Elden Ring (PS5)</p>
                            </div>
                            <div class="price">
                                <p>1.350.000đ</p>
                            </div>
                        </a>
                    </div>
                </li>

                {{------------------4---------------------}}
                <li class="item-a">
                    <div class="favorite-box">
                        <a href="{{url('/product/')}}">
                            <img src="images/ps5(sp4).jpg">
                            <div class="p-title">
                                <p>Grand Theft Auto V (PS5)</p>
                            </div>
                            <div class="price">
                                <p>1.350.000đ</p>
                            </div>
                        </a>
                    </div>
                </li>

                {{------------------5---------------------}}
                <li class="item-a">
                    <div class="favorite-box">
                        <a href="{{url('/product/')}}">
                            <img src="images/ps5(sp5).jpeg">
                            <div class="p-title">
                                <p>FIFA 23 (PS5)</p>
                            </div>
                            <div class="price">
                                <p>1.350.000đ</p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection
