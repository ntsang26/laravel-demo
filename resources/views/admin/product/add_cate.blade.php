@extends('admin.layout_master')

@section('main-header')
<div class="row my-4">
    <div class="col-md-4">
        <h3 class="text-muted">Danh mục <small class="text-primary">Thêm mới</small></h3>
    </div>
</div>
@endsection

@section('main-content')
    <div class="d-flex justify-content-center my-3">
        <form class="col-8" method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên danh mục *</label>
                <input type="text" class="form-control" name="name" value="{!! old("name") !!}">
            </div>
            <div class="form-group">
                <label for="thumbnail">Hình ảnh danh mục *</label>
                <input type="file" class="form-control" name="thumbnail">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <button type="reset" class="btn btn-danger">Hủy</button>
        </form>
    </div>
@endsection

@section('main-script')
    <script>

    </script>
@endsection

