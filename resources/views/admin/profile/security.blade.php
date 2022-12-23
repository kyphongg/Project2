@extends('layout.admin_base')

@section('title', 'Thay đổi mật khẩu')

@section('content')
    <div class="table-agile-info">
        <h3 style="margin-bottom: 15px;">Thay đổi mật khẩu</h3>
        <div class="security">
                <div class="changePassword">
                    <form action="" class="password-change">
                        <div class="form-group">
                            <input type="password">
                            <label for="">Mật khẩu mới</label>
                        </div>
                        <div class="form-group">
                            <input type="password">
                            <label for="">Nhập lại mật khẩu mới</label>
                        </div>
                        <button class="passwordbtn-update">Cập nhật</button>
                    </form>
                </div>
        </div>
@endsection
