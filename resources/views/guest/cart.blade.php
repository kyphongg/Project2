@extends('layout.base')

@section('title', 'Giỏ Hàng')

@section('content')
    <div class="cart-p">
        <div class="cart-heading">
            <h3>Giỏ hàng</h3>
        </div>
        <div class="cart-body">
            <table class="table table-bordered table-hover table-striped">
                <?php
                    $content = Cart::content();
                    $customer = Session::get('customer_id');
                ?>
                <thead>
                    <tr>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($content as $v)
                    <tr>
                        <td><img src="/public/images/upload/{{$v->options->images}}" alt=""></td>
                        <td>{{$v->name}}</td>
                        <form action="{{URL::to('/update_cart_quantity/'.$customer)}}" method="POST">
                            @csrf
                            <td>
                                <input type="number" min="1" max="5" value="{{$v->qty}}" name="quantity_cart" style="width: 40px; height: 40px; padding-left: 13px;">
                                <input type="hidden" value="{{$v->rowId}}" name="rowId_cart" class="btn btn-default btn-sm">
                                <input type="submit" value="Cập nhật" name="update_quantity" class="btn btn-primary update-quantity" style="margin-bottom: 5px; margin-left: 5px;">
                            </td>
                        </form>
                        <td>{{number_format($v->price * $v->qty).' VNĐ'}}</td>
                        <td><a href="/cart_delete/{{$v->rowId}}/{{$customer}}" style="text-decoration: none;;" class="btn btn-danger"><i class="fa-solid fa-ban" style="color: white;"></i> Xóa sản phẩm</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="cart-price">
            <table>
                <tr>
                    <td style="font-weight: bold;">Tổng giá sản phẩm:</td>
                    <td>{{Cart::priceTotal(0).' VNĐ'}}</td>
                </tr>
{{--                <tr>--}}
{{--                    <td style="font-weight: bold;">Thuế:</td>--}}
{{--                    <td style="padding-left: 20px;">{{Cart::tax(0).' VNĐ'}}</td>--}}
{{--                </tr>--}}
                <tr>
                    <td style="font-weight: bold;">Phí vận chuyển:</td>
                    <td style="padding-left: 40px;">Miễn Phí</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Tổng thành tiền:</td>
                    <td>{{Cart::total(0).' VNĐ'}}</td>
                </tr>
            </table>

        </div>
        <div class="two-btn">
            <div class="row">
                <div class="col">
                    <a href={{url("/home")}}>
                        <button class="btn btn-secondary btn-back">Tiếp tục mua hàng</button>
                    </a>
                </div>
                <div class="col">
                    <a href={{url("/payment/$customer")}}>
                        <button class="btn btn-secondary btn-next">Thanh toán</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
