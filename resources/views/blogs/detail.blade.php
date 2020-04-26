@extends('admin.layouts')

@section('title', 'Show Products')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 center"><a href="{{ route('blogs.index') }}"
            style="text-decoration: none; color: orange;">Trang
            sản phẩm</a></h1>
    <p></p>
    <!-- Content Row -->
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            {{-- <div class="col-xl-8 col-lg-7"> --}}
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $blog->name }}</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: auto">
                        <h2 class="text-center">{{ $blog->name }}</h2>
                        <p>{!! $blog->content !!}</p>

                        <br><br>
                        <i>
                            <span style="float:right">Người đăng: {{ $blog->user->name }}</span><br>
                        </i>
                    </div>
                </div>
            </div>
            {{-- </div> --}}

        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
