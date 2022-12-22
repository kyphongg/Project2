@extends('layout.admin_base')

@section('title', 'Thêm thể loại')

@section('content')
    <div class="table-agile-info">
        <h3>Thêm thể loại</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{url('/admin/categories_add')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input name="categoryName" type="text" class="form-control" placeholder="Tên thể loại">
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-plus"></i> Thêm thể loại mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection
