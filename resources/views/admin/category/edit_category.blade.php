@extends('layout.admin_base')

@section('title', 'Thêm thể loại')

@section('content')
    <div class="table-agile-info">
        <h3>Sửa thể loại</h3>
        <div class="panel-body">
            @forelse($category as $categories)
            <div class="position-center">
                <form role="form" action="{{url('/admin/update-category/'.$categories->category_id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên thể loại</label>
                        <input name="category_name" value="{{$categories->category_name}}" type="text" class="form-control" placeholder="Tên thể loại">
                    </div>
                    <a href="{{URL::to('/admin/categories')}}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button></a>
                    <button type="submit" class="btn btn-info">Sửa</button>
                </form>
            </div>
            @empty
                <tr><td colspan="4">Danh sách rỗng</td></tr>
            @endforelse
        </div>
    </div>
@endsection
