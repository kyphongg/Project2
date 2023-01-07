@extends('layout.admin_base')

@section('title', 'Bình luận')

@section('content')
    <div class="table-agile-info">
        <h3>Bình luận của khách hàng</h3>
        <div id="notify-comment"></div>
        <div class="panel panel-default">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 30px;">Duyệt</th>
                        <th style="width: 150px;">Tên khách hàng</th>
                        <th style="width: 300px;">Bình luận</th>
                        <th style="width: 125px;">Ngày bình luận</th>
                        <th>Sản phẩm</th>
                        <th style="width: 50px;">Tùy biến</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comment as $key => $comm)
                        <tr>
                            <td style="text-align: center;">
                            @if($comm->comment_status ==1)
                                <input type="button" data-comment_status="0" data-comment_id="{{$comm->comment_id}}" id="{{$comm->game_id}}" class="btn btn-primary btn-md comment_accept_btn" value="Duyệt">
                            @else
                                <input type="button" data-comment_status="1" data-comment_id="{{$comm->comment_id}}" id="{{$comm->game_id}}" class="btn btn-danger btn-md comment_accept_btn" value="Hủy Duyệt">
                            @endif
                            </td>
                            <td style="text-align: center;">{{$comm->customer_name}}</td>
                            <td style="">{{$comm->comment_info}}
                                @if($comm->comment_status ==0)
                                <br><textarea class="form-control reply_comment_{{$comm->comment_id}}" rows="5"></textarea>
                                <br><button class="btn-reply-comment" data-game_id="{{$comm->game_id}}" data-comment_id="{{$comm->comment_id}}">Trả lời</button>
                                @endif
                            </td>
                            <td style="text-align: center;">{{$comm->created_at}}</td>
                            <td style="">{{$comm->game_name}}</td>
                            <td style="text-align: center;">
                                <a  href="#" class="active" ui-toggle-class="">
                                    <i class="fa-solid fa-square-pen" style="font-size: 25px; color: #5CB85C;"></i>
                                </a>
                                <a onclick="return confirm('Xoá ?')" href="#" class="active" ui-toggle-class="">
                                    <i class="fa-solid fa-square-xmark" style="font-size: 25px; color: #D9534F;"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
