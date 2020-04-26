@extends('admin.layouts')

@section('title', 'Create Products')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 center"><a href="{{ route('blogs.index') }}"
            style="text-decoration: none; color: orange;">Trang
            Blog</a></h1>
    <p></p>
    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            {{-- <div class="col-xl-8 col-lg-7"> --}}
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Thêm bài viết mới</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: auto">
                        <form method="post" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                            @csrf
                            @include('partials.message')

                            <div class="form-group @error('name') has-error has-feedback @enderror">

                                <label for="title">Tên bài viết</label>
                                <input type="text" class="form-control" name="name" placeholder="Input Title">

                            </div>

                            <div class="form-group @error('content') has-error has-feedback @enderror">

                                <label for="content">Nội dung</label>

                                <textarea class="form-control @error('content') is-invalid @enderror" name="content"
                                    id="description" required>{!! old('content') !!}</textarea>

                            </div>
                            <div class="form-group @error('file') has-error has-feedback @enderror">

                                <label for="image">Ảnh bài viết </label>
                                <input id="imgPost" type="file" name="image" class="form-control"
                                    onchange="readURL(event)">
                                <img id="zoom" src="#" alt="" srcset="" width="200" height="200">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>

                            <button class="btn btn-secondary"
                                onclick="window.history.go(-1); return false;">Cancle</button>
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
