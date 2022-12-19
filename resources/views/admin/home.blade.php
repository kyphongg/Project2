@extends('layout.admin_base')


@section('content')
    <h1>Đây là trang chủ</h1>
    <?php
    $admin_id = Session::get('admin_id');
    if($admin_id) {
        $admin_name = Session::get('admin_name');
        echo '<h2>';
        echo 'Xin chào ';
        echo $admin_name;
        echo '</h2>';
    }
    ?>
@endsection
