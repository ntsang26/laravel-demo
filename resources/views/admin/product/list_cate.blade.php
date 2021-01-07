@extends('admin.layout_master')

@section('main-header')
    <div class="row my-4">
        <div class="col-md-4">
            <h3 class="text-muted">Dòng sản phẩm <small class="text-primary">Danh sách</small></h3>
        </div>
        <div class="col-md-8 text-right">
            <button type="button" class="btn btn-primary">
                <a href="{!! route('admin.product.cate.getAddCate') !!}"
                   class="text-white text-decoration-none"
                >
                    Thêm mới
                </a>
            </button>
        </div>
    </div>
@endsection

@section('main-content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col-1">#</th>
            <th scope="col-5">Tên danh mục</th>
            <th scope="col-3">Thao tác</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($cate as $item)
            <tr>
                <th scope="row">{!! $item->id !!}</th>
                <td>{!! $item->name !!}</td>
                <td>
                    <a href="{!! route('admin.product.cate.getEditCate', $item->id) !!}">
                        Chỉnh sửa
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    </table>
@endsection