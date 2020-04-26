@extends('admin.layouts')

@section('title', 'Edit Products')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-3">
            <h1 class="h3 mb-2 text-gray-800 center"><a href="{{ route('blogs.index') }}"
                    style="text-decoration: none; color: red;">
                    Trang blog</a></h1>
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
                    <h6 class="m-0 font-weight-bold text-primary">Sửa bài viết</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: auto">
                        <form method="post" action="{{ action('BlogController@update',['blog'=>$blog]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @include('partials.message')

                            <div class="form-group">
                                <label for="title">Tên bài viết</label>
                                <input type="text" class="form-control" name="name" placeholder="Input Title"
                                    value="{{$blog->name}}">
                            </div>
                            <div class="form-group">
                                <label for="content">Nội dung bài viết</label>
                                <textarea name="content" class="form-control" placeholder="Input Content" cols="30"
                                    rows="10" id="description">{!! $blog->content !!}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Ảnh bài viết </label>
                                <input id="imgPost" type="file" name="image_update" class="form-control"
                                    onchange="readURL(event)">
                                <img id="zoom" src="#" alt="" srcset="" width="200" height="200">
                                <br>ảnh cũ
                                <p><img src="data:image/jpg;base64, {{$blog->image}}" style="width:100px; height:100px"
                                        alt="{{$blog->image}}"></p>
                            </div>

                            <button type="submit" class="btn btn-primary">Sửa đổi</button>

                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy
                                bỏ</button>
                        </form>

                    </div>
                </div>
            </div>
            {{-- </div> --}}

        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection


{{--  <div class=" form-group">
                                        <input type="radio" id="male" name="hot" value="{{$product->hot}}">
<label for="true">Sản phẩm nổi bật</label><br>
<input type="radio" id="female" name="hot" value="{{$product->hot}}">
<label for="false">Không phải sản phẩm nổi bật</label><br>
</div> --}}
