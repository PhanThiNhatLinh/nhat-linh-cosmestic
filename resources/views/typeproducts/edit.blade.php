@extends('layouts.app')
@section('title', 'Create')
@section('content')
<h2>Tạo sản phẩm</h2>
<form action="{{ action('TypeproductController@update', ['typeproduct' => $typeproduct]) }}" method="post"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Mã loại sản phẩm</label>
        <input type="text" class="form-control" name="product_type_id" placeholder="Input Title"
            value="{{$typeproduct->product_type_id}}">
    </div>
    <div class="form-group">
        <label for="title">Tên loại sản phẩm</label>
        <input type="text" class="form-control" name="product_type_name" placeholder="Input Title"
            value="{{$typeproduct->product_type_name}}">
    </div>
    <div class="form-group">
        <label for="content">Mô tả loại sản phẩm</label>
        <textarea name="description" class="form-control" placeholder="Input Content" cols="30" rows="10" value=""
            id="content-ckeditor">{!! $typeproduct->description !!}</textarea>
    </div>
    <div class=" form-group">
        <label for="group_code">Nhóm sản phẩm</label>
        <select name="group_code" id="">
            @foreach ($groupproducts as $groupproduct)
            <option value="{{ $groupproduct->group_code }} ">{{ $groupproduct->group_name }}</option>
            @endforeach
        </select>
    </div>
    <input type="submit" value="Update" class="btn btn-primary">
</form>

<script>
    CKEDITOR.replace('content-ckeditor');
</script>
</div>
@endsection
