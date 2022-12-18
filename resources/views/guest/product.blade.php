@extends('layout.base')

@section('title','Sản phẩm')

@section('content2')
    <div class="product-box">
        <div class="p-left">
            <div class="big-img">
                <img src="images/ps5(sp1).jpg" alt="">
            </div>
        </div>

        <div class="p-right">
            <div class="url">Trang chủ > Hành Động</div>
            <div class="pname">Demon's Souls (PS5)
                <div class="p-favorite">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <div class="pid">
                <p style="font-weight: bold">Mã sản phẩm: &nbsp</p>
                <p>00001</p>
            </div>
            <div class="pstatus">
                <p style="font-weight: bold">Tình trạng: &nbsp</p>
                <p>Còn Hàng</p>
            </div>
            <div class="pcategory">
                <p style="font-weight: bold">Thể loại: &nbsp</p>
                <p> Hành Động, Nhập Vai</p>
            </div>
            <div class="p-price">1.350.000đ</div>
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
                <p>Game Demon's Souls cho PS5 đang bán tại nShop là phiên bản làm lại hoàn toàn của siêu phẩm cùng tên năm xưa trên PS3, cũng chính là tựa game khởi đầu cho thể loại siêu khó, chuyên "hành hạ" người chơi.
                    Demon's Souls PS5 không chỉ đẹp lộng lẫy, lột tả không khí nguy hiểm rợn người của thế giới trong đó, mà còn được cải tiến lại gameplay, nâng tầm trải nghiệm qua những tính năng mới chẳng hạn như "rung phản hồi" của tay cầm DualSense. Mỗi nhát chém trong game của bạn đều có cảm giác chân thực hơn hẳn.
                </p>
                <img src="images/demonsoul(2).jpg" style="text-align: center;width: 682px; height: 455px">
                <p>Đối mặt với với những chiến binh vĩ đại nhất thế giới - Tranh tài với người chơi khác thông qua những trận PvP kịch tính. Hoặc bạn cũng có thể hợp tác với họ để cùng giết quỷ đỡ nhọc nhằn hơn.</p>
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


