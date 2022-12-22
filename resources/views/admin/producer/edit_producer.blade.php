@extends('layout.admin_base')

@section('title', 'Sửa nhà sản xuất')

@section('content')
    <div class="table-agile-info">
        <h3>Sửa nhà sản xuất</h3>
        <div class="panel-body">
            @forelse($producer as $producers)
            <div class="position-center">
                <form role="form" action="{{url('/admin/update-producer/'.$producers->producer_id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên nhà sản xuất</label>
                        <input name="producer_name" value="{{$producers->producer_name}}" type="text" class="form-control" placeholder="Tên nhà sản xuất">
                    </div>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button>
                    <button type="submit" class="btn btn-info">Sửa</button>
                </form>
            </div>
            @empty
                <tr><td colspan="4">Danh sách rỗng</td></tr>
            @endforelse
        </div>
    </div>
@endsection
