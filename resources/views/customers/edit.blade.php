@extends('layouts.web')

{{-- @section('title', 'Type product') --}}

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-3">
            {{--  <h1 class="h3 mb-2 text-gray-800 center"><a href="{{ route('products.index') }}"
            style="text-decoration: none; color: red;">
            Trang sản phẩm</a></h1> --}}
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
                    <h6 class="m-0 font-weight-bold text-primary">Sửa Thông Tin Khách Hàng</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: auto">
                        <form method="post" action="{{ action('CustomerController@update',  Auth::user()->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @include('partials.message')

                            <div class="form-group">
                                <label for="title">Tên Khách Hàng</label>
                                <input type="text" class="form-control" name="name" placeholder="Input Title" required
                                    value="{{ Auth::user()->name}} ">
                            </div>
                            <div class="form-group">
                                <label for="title">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" placeholder="Input Title"
                                    required value="{{ Auth::user()->address}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Thị Xã/Thành Phố</label>
                                <input type="text" class="form-control" name="city" placeholder="Input Title" required
                                    value="{{ Auth::user()->city}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Input Title" required
                                    value="{{ Auth::user()->phone}}">
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
