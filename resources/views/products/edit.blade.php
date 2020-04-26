@extends('admin.layouts')

@section('title', 'Edit Products')

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
                    <div class="chart-area" style="height: auto">
                        <form method="post" action="{{ action('ProductController@update',['product'=>$product]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @include('partials.message')

                            <div class="form-group">
                                <label for="title">Mã sản phẩm</label>
                                <input type="text" class="form-control" name="product_code" placeholder="Input Title"
                                    value="{{$product->product_code}}">
                            </div>
                            <div class="form-group">
                                <label for="title">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Input Title"
                                    value="{{$product->product_name}}">
                            </div>
                            <div class=" form-group">
                                <label for="product_type_id">Thương Hiệu </label>
                                <select name="product_type_id" id="" class="form-control">
                                    @foreach ($typeproducts as $typeproduct)
                                    <option value="{{ $typeproduct->product_type_id }}"
                                        {{ $product->typeproduct->product_type_id == $typeproduct->product_type_id ? 'selected' : '' }}>
                                        {{ $typeproduct->product_type_name }}
                                        @endforeach
                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="brand_id">Thương Hiệu </label>
                                <select name="brand_id" id="" class="form-control">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->brand_id }}"
                                        {{ $product->brand->brand_id == $brand->brand_id ? 'selected' : '' }}>
                                        {{ $brand->brand_name }}
                                        @endforeach
                                </select>
                            </div>
                            {{-- <div class=" form-group">
                        <label for="brand_id">Thương Hiệu</label>
                        <select name="brand_id_update" id="" class="form-control">
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->brand_id }} ">{{ $brand->brand_name }}</option>
                            @endforeach
                            </select>
                    </div> --}}

                    <div class="form-group">
                        <label for="title">giá cả</label>
                        <input type="text" class="form-control" name="price" placeholder="Input Title"
                            value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Giá Khuyến mãi</label>
                        <input type="text" class="form-control" name="promotion" placeholder="Input Title"
                            value="{{$product->promotion}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Số hàng hiện có</label>
                        <input type="text" class="form-control" name="enstock" placeholder="Input Title"
                            value="{{$product->enstock}}">
                    </div>

                    <div class="form-group">
                        <label for="content">Mô tả sản phẩm</label>
                        <textarea name="description" class="form-control" placeholder="Input Content" cols="30"
                            rows="10" id="description">{!! $product->product_code !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Ảnh sản Phẩm </label>
                        <input id="imgPost" type="file" name="image_product_update" class="form-control"
                            onchange="readURL(event)">
                        <img id="zoom" src="#" alt="" srcset="" width="200" height="200">
                        <br>ảnh cũ
                        <p><img src="data:image/jpg;base64, {{$product->image}}" style="width:100px; height:100px"
                                alt="{{$product->image}}"></p>
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
