<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield("title","Untitled")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{url('css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{url('css/font.css')}}" type="text/css"/>
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/morris.css')}}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{url('css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('js/raphael-min.js')}}"></script>
    <script src="{{asset('js/morris.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{url('/admin/home')}}" class="logo">
                <img src="/images/gamingstore-logoo.png">
            </a>
        </div>
        <!--logo end-->

        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="/images/userr.png">
                        <span class="username">
                            <?php
                            $admin_id = Session::get('admin_id');
                            if($admin_id) {
                                $admin_name = Session::get('admin_name');
                                echo $admin_name;
                            }
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <?php
                        $admin_id = Session::get('admin_id');
                        ?>
                        <li><a href="{{url('/admin/profile/'.$admin_id)}}"><i class="far fa-address-card"></i> H??? s?? c?? nh??n</a></li>
                        <li><a href="{{url('/admin/security')}}"><i class="fas fa-lock"></i> C??i ?????t</a></li>
                        <li><a href="{{url('admin_logout')}}"><i class="fas fa-power-off"></i> ????ng xu???t</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="{{url('/admin/home')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Th???ng k??</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/home')}}">
                            <i class="fas fa-home"></i>
                            <span>Trang website</span>
                        </a>
                    </li>
                    <?php
                    $admin_level = Session::get('admin_level');
                    if($admin_level==0||$admin_level==1||$admin_level==100)
                        echo '<li class="sub-menu">
                        <a href="javascript:">
                            <i class="fas fa-gamepad"></i>
                            <span>Qu???n l?? s???n ph???m</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/categories"><i class="fas fa-list"></i>Th??? lo???i</a></li>
                            <li><a href="/admin/producers"><i class="fas fa-registered"></i>Nh?? s???n xu???t</a></li>
                            <li><a href="/admin/products"><i class="fas fa-archive"></i>S???n ph???m</a></li>
                            <li><a href=""><i class="fas fa-images"></i>H??nh ???nh</a></li>
                            <li><a href="/admin/coupons"><i class="fas fa-images"></i>M?? gi???m gi??</a></li>
                            <li><a href="/admin/warehouse"><i class="fa-solid fa-boxes-stacked"></i>Qu???n l?? kho</a></li>
                            <li><a href="/admin/warehouse_quantity"><i class="fas fa-store"></i>S??? l?????ng t???n kho</a></li>
                        </ul>
                    </li>';

//                    <li><a href="/admin/warehouse_inventory"><i class="fas fa-clipboard-check"></i>Ki???m k??</a></li>
//                            <li><a href="/admin/warehouse_number"><i class="fas fa-archive"></i>S??? l?????ng s???n ph???m</a></li>
                    ?>

                    <?php
                    $admin_level = Session::get('admin_level');
                    if($admin_level==0||$admin_level==2||$admin_level==3||$admin_level==100)
                        echo '<li class="sub-menu">
                         <a href="/admin/all_orders">
                            <i class="fas fa-cart-plus"></i>
                            <span>Qu???n l?? ????n h??ng</span>
                        </a>
                    </li>';
                    ?>

                    <?php
                    $admin_level = Session::get('admin_level');
                    if($admin_level==0||$admin_level==2||$admin_level==3||$admin_level==100)
                        echo '<li>
                        <a href="/admin/comment">
                            <i class="fas fa-comment-dots"></i>
                            <span>B??nh lu???n</span>
                        </a>
                    </li>';
                    ?>

                    <?php
                    $admin_level = Session::get('admin_level');
                    if($admin_level==0||$admin_level==100)
                        echo '<li class="sub-menu">
                        <a href="javascript:">
                            <i class="fas fa-users-cog"></i>
                            <span>Danh s??ch nh??n vi??n</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/admin/all-staff"><i class="fa-solid fa-list-ol"></i>Danh s??ch nh??n vi??n</a></li>
                            <li><a href="/admin/warehouse-staff"><i class="fa-solid fa-people-carry-box"></i>Nh??n vi??n kho</a></li>
                            <li><a href="/admin/order-staff"><i class="fa-solid fa-user-check"></i>Nh??n vi??n ????n h??ng</a></li>
                            <li><a href="/admin/care-staff"><i class="fa-solid fa-user-doctor"></i>Nh??n vi??n CSKH</a></li>
                        </ul>
                    </li>';
                    ?>

                    <?php
                    $admin_level = Session::get('admin_level');
                    if($admin_level==0||$admin_level==3||$admin_level==100)
                        echo '<li>
                        <a href="/admin/customer-list">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span>Danh s??ch kh??ch h??ng</span>
                        </a>
                    </li>';
                    ?>

                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('content')
        </section>
    </section>
    <!--main content end-->
</section>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src=""{{asset('js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('js/jquery.scrollTo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('js/my_chart.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- morris JavaScript -->
<script type="text/javascript">
    $('.comment_accept_btn').click(function (){
        var comment_status = $(this).data('comment_status');
        var comment_id = $(this).data('comment_id');
        var game_id = $(this).attr('id');
        if(comment_status==0){
            var alert= 'Duy???t th??nh c??ng';
        }
        else{
            var alert= 'H???y duy???t th??nh c??ng';
        }
        $.ajax({
            url:"{{url('/accept-comment')}}",
            method:"POST",
            data:{comment_status:comment_status, comment_id:comment_id, game_id:game_id},
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function (data){
                location.reload();
                $('#notify-comment').html('<span class="text text-alert">'+alert+'</span>')
            }
        });
    });

    $('.btn-reply-comment').click(function (){
        var comment_id = $(this).data('comment_id');
        var comment = $('.reply_comment_'+comment_id).val();
        var game_id = $(this).data('game_id');
        // alert(comment);
        // alert(comment_id);
        // alert(game_id);

        $.ajax({
            url:"{{url('/reply-comment')}}",
            method:"POST",
            data:{comment:comment, comment_id:comment_id, game_id:game_id},
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function (data){
                $('.reply_comment_'+comment_id).val('');
                $('#notify-comment').html('<span class="text text-alert">Tr??? l???i b??nh lu???n th??nh c??ng</span>')
            }
        });
    });

    // $( function() {
    //     $( "#datepicker" ).datepicker({
    //         prevText: "Th??ng tr?????c",
    //         nextText: "Th??ng sau",
    //         dateFormat: "yy-mm-dd",
    //         dayNamesMin: ["Ch??? nh???t", "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5","Th??? 6","Th??? 7"],
    //         duration: "slow"
    //     });
    // } );
    //
    // $( function() {
    //     $( "#datepicker2" ).datepicker();
    // } );

</script>
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
</script>
<!-- calendar -->
<script type="text/javascript" src="js/monthly.js"></script>
<script type="text/javascript">
    $(window).load( function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch(window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });


</script>
@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
@show
<!-- //calendar -->
</body>
</html>

