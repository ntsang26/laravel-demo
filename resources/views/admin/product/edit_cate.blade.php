@extends('admin.layout_master')

@section('main-header')
<div class="row my-4">
    <div class="col-md-4">
        <h3 class="text-muted">Danh mục <small class="text-primary">Edit</small></h3>
    </div>
</div>
@endsection

@section('main-content')
    <?php $cate = $data['cate']; ?> 
    <div class="d-flex justify-content-center my-3">
        <form class="col-8" method="post" action="" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="cateId" value="{!! $cate->id !!}">
            <div class="form-group">
                <label for="name">Tên danh mục *</label>
                <input type="text" class="form-control" placeholder="Tên danh mục" name="name" value="{!! $cate->name !!}">
            </div>
            <div class="form-group">
                <label for="thumbnail">Hình ảnh danh mục *</label>
                <input type="file" class="form-control" name="thumbnail" value="{!! $cate->name !!}">
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
            <button type="reset" class="btn btn-danger" onclick="goBack()">Hủy</button>
        </form>
    </div>
@endsection

