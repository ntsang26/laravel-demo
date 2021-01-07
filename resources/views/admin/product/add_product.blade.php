@extends('admin.layout_master')

@section('main-header')
<div class="row my-4">
    <div class="col-md-4">
        <h3 class="text-muted">Sản phẩm<small class="text-primary">Thêm mới</small></h3>
    </div>
    <div class="col-md-8 text-right">
        <button type="button" class="btn btn-primary">
            <a href="{!! route('admin.product.cate.getList') !!}" class="text-white text-decoration-none">
                Danh mục
            </a>
        </button>
    </div>
</div>
@endsection

@section('main-content')
    <div class="d-flex justify-content-center my-3">
        <form class="col-8" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="sale_off">Danh mục</label>
                <select class="custom-select">
                    <option value="1">Có</option>
                    <option value="2">Không</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="price">Giá sản phẩm</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="thumbnail">Hình ảnh sản phẩm</label>
                <input type="file" class="form-control" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="sale_off">Khuyến mãi</label>
                <select class="custom-select">
                    <option value="1">Có</option>
                    <option value="2">Không</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection

