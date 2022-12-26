<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","Untitled")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header id="header">
    <div class="head_link">
        <a href="{{url('/home')}}">
            <img src="/images/gamingstore-logoo.png" alt="LogoImage">
        </a>
        <form METHOD="GET" class="search-form">
            <input type="text" placeholder="Tìm kiếm sản phẩm...">
            <button class="btn" type="button">
                <i class="bi bi-search" style="color: white"></i>
            </button>
        </form>
        <div class="icon">
            <img src="/images/user (2).png" alt="UserImage" onclick="toggleMenu()">
                <?php
                $customer_id = Session::get('customer_id');
                $admin_id = Session::get('admin_id');
                if ($customer_id) {
                    $customer_name = Session::get('customer_name');
                    echo '<a href="/profile/'.$customer_id.'">';
                    echo $customer_name;
                    echo '</a>';
                    echo '<div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <a href="/profile/'.$customer_id.'" class="sub-menu-link">
                        <p>Quản lý tài khoản</p>
                    </a>
                    <a href="/orders" class="sub-menu-link">
                        <p>Lịch sử đơn hàng</p>
                    </a>
                    <a href="/security" class="sub-menu-link">
                        <p>Mật khẩu</p>
                    </a>
                    <a href="/customer_logout" class="sub-menu-link">
                        <p>Đăng xuất</p></a>
                </div>
            </div>';
                }
                elseif($admin_id){
                    $admin_name = Session::get('admin_name');
                    echo '<a href="/admin/home">';
                    echo $admin_name;
                    echo '</a>';
                }
                else{
                    echo '<a href="/login">Đăng nhập/Đăng ký</a>';
                }
                ?>
            <a class="cart" href="{{url('/cart')}}">
                <img src="/images/shopping-cart.png" alt="UserImage">
                Giỏ hàng (0)
            </a>
            <?php
            if($admin_id){
                echo '<a class="cart" href="/admin/home">
                <img src="/images/gear.png" alt="UserImage">Quản lý
            </a>';
            }
            else{
                echo '<a class="cart" href="/admin/login">
                <img src="/images/gear.png" alt="UserImage">Quản lý
            </a>';
            }
            ?>
        </div>
    </div>

    <div class="head_menu">
        <div class="row">
            <div class="col">
                <div class="dropdown_menu">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/images/category (1).png" alt="UserImage" style="width: 30px;height: 30px;">
                        Danh mục sản phẩm
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Chiến thuật</a></li>
                        <li><a class="dropdown-item" href="#">Nhập vai</a></li>
                        <li><a class="dropdown-item" href="#">Thể thao</a></li>
                        <li><a class="dropdown-item" href="#">Phiêu lưu</a></li>
                        <li><a class="dropdown-item" href="#">Hành động</a></li>
                        <li><a class="dropdown-item" href="#">Mô phỏng</a></li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="icon-menu">
                    <a class="introduction" href="{{url('/home')}}">
                        <img src="/images/introduction.png" alt="UserImage">
                        Giới thiệu
                    </a>
                    <a class="news" href="{{url('/home')}}">
                        <img src="/images/newspaper.png" alt="UserImage">
                        Tin tức
                    </a>
                    <a class="Hiring" href="{{url('/home')}}">
                        <img src="/images/hiring.png" alt="UserImage">
                        Tuyển dụng
                    </a>
                    <a class="support" href="{{url('/home')}}">
                        <img src="/images/headphones.png" alt="UserImage">
                        Hỗ trợ
                    </a>
                </div>
            </div>
        </div>
    </div>

</header>

<div id="body">
    <div class="container">
        @yield('content')
    </div>
    @yield('content2')
</div>

<footer id="footer">
    <div class="container">
        <div class="my-footer">
            <div class="row">
                <div class="col">
                    <h5>Giới Thiệu</h5>
                    <a href="{{url('/home')}}"><p>Thông tin về Gaming store</p></a>
                    <a href="{{url('/home')}}"><p>Điều khoản dịch vụ</p></a>
                    <a href="{{url('/home')}}"><p>Chính sách bảo mật</p></a>
                </div>

                <div class="col">
                    <h5>Tài Khoản</h5>
                    <a href="{{url('/home')}}"><p>Đăng Nhập</p></a>
                    <a href="{{url('/home')}}"><p>Đăng Ký</p></a>
                </div>

                <div class="col">
                    <h5>Liên hệ</h5>
                    <a href="{{url('/home')}}"><p>Hotline 0123456789</p></a>
                    <a href="{{url('/home')}}"><p>Hỗ trợ</p></a>
                    <a href="{{url('/home')}}"><p>Chat với CSKH</p></a>
                </div>

                <div class="col">
                    <img src="/images/copyright.png" alt="UserImage">
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('.autoWidth').removeClass('cS-hidden');
            }
        });
    });

    let subMenu = document.getElementById("subMenu");
    function toggleMenu(){

        subMenu.classList.toggle("open-menu");
    }

</script>
</body>
</html>
