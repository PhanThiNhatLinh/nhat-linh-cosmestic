@extends('admin.layouts')

@section('title', 'Edit Brands')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-3">
            <h1 class="h3 mb-2 text-gray-800 center"><a href="{{ route('products.index') }}"
                    style="text-decoration: none; color: red;">
                    Trang sản phẩm</a></h1>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            {{-- <div class="col-xl-8 col-lg-7"> --}}
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Sửa sản phẩm</h6>
                </div>
                <div class="card-body">
                    <form action="{{ action('BrandController@update',['brand'=>$brand]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Mã thương hiệu</label>
                            <input type="text" class="form-control" name="brand_id" placeholder="Input Title"
                                value="{{$brand->brand_id}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Tên thương hiệu</label>
                            <input type="text" class="form-control" name="brand_name" placeholder="Input Title"
                                value="{{$brand->brand_name}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Nơi ra đời</label>
                            <input type="text" class="form-control" name="country" placeholder="Input Title"
                                value="{{$brand->country}}">
                        </div>
                        <div class="form-group">
                            <label for="content">Mô tả loại sản phẩm</label>
                            <textarea name="description" class="form-control" placeholder="Input Content" cols="30"
                                rows="10" id="content" value="">{!! $brand->description !!}</textarea>
                        </div>
                        <div class=" form-group">
                            <label for="image">Logo</label>
                            <input id="imgPost" type="file" name="image_update" class="form-control"
                                onchange="readURL(event)">
                            <img id="zoom" src="#" alt="" srcset="" width="200" height="200">
                            <br>ảnh cũ
                            <p><img src="data:image/jpg;base64, {{$brand->image}}" style="width:100px; height:100px"
                                    alt="{{$brand->image}}"></p>
                        </div>
                        <input type="submit" value="Update" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
