@extends('admin.layout_master')

@section('main-header')
<div class="row my-4">
    <div class="col-md-4">
        <h3 class="text-muted">Danh mục <small class="text-primary">Edit</small></h3>
    </div>
</div>
@endsection

@section('main-content')
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
                <div class="col-md-8 mb-3">
                    <img src="{!!asset("storage/category/".$cate->thumbnail)!!}" id="preview" alt="cate image" class="img-fluid">
                </div>
                <input type="file" class="form-control" id="pre" name="thumbnail">
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
            <button type="reset" class="btn btn-danger" onclick="goBack()">Hủy</button>
        </form>
    </div>
@endsection

@section('main-script')
    <script>
          function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#pre").change(function(){
        readURL(this);
    });
    </script>
@endsection

