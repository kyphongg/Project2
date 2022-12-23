@extends('layout.admin_base')

@section('title', 'Thêm nhà sản xuất')

@section('content')
    <div class="table-agile-info">
        <h3>Thêm nhà sản xuất</h3>
        <div class="panel-body">
            <div class="position-center">
                <form role="form" action="{{url('/admin/producers_add')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên nhà sản xuất</label>
                        <input name="producerName" type="text" class="form-control" placeholder="Tên nhà sản xuất">
                    </div>
                    <a href="{{URL::to('/admin/producers')}}"><button type="button" class="btn btn-info" ><i class="fa-solid fa-arrow-left-long"></i> Quay lại</button></a>
                    <button type="submit" class="btn btn-info"><i class="fa-solid fa-plus"></i> Thêm NSX mới</button>
                </form>
            </div>

        </div>
    </div>
@endsection
