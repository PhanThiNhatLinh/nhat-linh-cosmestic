@extends('admin.layouts')

@section('title', 'Create Brand')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 center"><a href="{{ route('products.index') }}"
            style="text-decoration: none; color: orange;">Trang
            sản phẩm</a></h1>
    <p></p>
    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            {{-- <div class="col-xl-8 col-lg-7"> --}}
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h2>Tạo thương hiệu sản phẩm</h2>
                    <form action="{{ action('BrandController@store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Mã thương hiệu</label>
                            <input type="text" class="form-control" name="brand_id" placeholder="Input Title">
                        </div>
                        <div class="form-group">
                            <label for="title">Tên thương hiệu</label>
                            <input type="text" class="form-control" name="brand_name" placeholder="Input Title">
                        </div>
                        <div class="form-group">
                            <label for="title">Nơi ra đời</label>
                            <input type="text" class="form-control" name="country" placeholder="Input Title">
                        </div>
                        <div class="form-group">
                            <label for="content">Mô tả loại sản phẩm</label>
                            <textarea name="description" class="form-control" placeholder="Input Content" cols="30"
                                rows="10" id="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image Post</label>
                            <input id="imgPost" type="file" name="image_post" class="form-control"
                                onchange="readURL(event)">
                            <img id="zoom" src="#" alt="" srcset="" width="200" height="200">
                        </div>
                        <input type="submit" value="Create" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
