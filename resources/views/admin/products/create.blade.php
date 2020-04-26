@extends('admin.layouts')

@section('title', 'Create Products')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 center"><a href="{{ route('product.index') }}"
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
                    <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm mới</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: auto">
                        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            @include('partials.message')

                            <div class="form-group @error('name') has-error has-feedback @enderror">

                                <label for="title">Mã sản phẩm</label>
                                <input type="text" class="form-control" name="product_code" placeholder="Input Title">

                            </div>

                            <div class="form-group @error('name') has-error has-feedback @enderror">

                                <label for="title">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="product_name" placeholder="Input Title">

                            </div>

                            <div class="form-group @error('name') has-error has-feedback @enderror">

                                <label for="product_type_id">Loại sản phẩm</label>
                                <select name="product_type_id" id="" class="form-control">
                                    @foreach ($typeproducts as $typeproduct)
                                    <option value="{{ $typeproduct->product_type_id }} ">
                                        {{ $typeproduct->product_type_name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group @error('name') has-error has-feedback @enderror">

                                <label for="brand_id">Thương Hiệu</label>
                                <select name="brand_id" id="" class="form-control">
                                    @foreach ($brands as $brand)
                                    <option value="{{ $brand->brand_id }} ">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group @error('content') has-error has-feedback @enderror">

                                <label for="content">Mô tả sản phẩm</label>

                                <textarea class="form-control @error('content') is-invalid @enderror" name="description"
                                    id="content-ckeditor" required>{!! old('content') !!}</textarea>

                            </div>

                            <div class=" form-group @error('unit_price') has-error has-feedback @enderror">

                                <label for="title">giá cả</label>
                                <input type="text" class="form-control" name="price" placeholder="Input Title">

                            </div>

                            <div class="form-group @error('promotion_price') has-error has-feedback @enderror">

                                <label for="title">Giá Khuyến mãi</label>
                                <input type="text" class="form-control" name="promotion" placeholder="Input Title">

                            </div>

                            <div class="form-group @error('unit') has-error has-feedback @enderror">

                                <label for="title">Số hàng hiện có</label>
                                <input type="text" class="form-control" name="enstock" placeholder="Input Title">

                            </div>

                            <div class="form-group @error('file') has-error has-feedback @enderror">

                                <label for="image">Ảnh sản Phẩm </label>
                                <input id="imgPost" type="file" name="image_product" class="form-control"
                                    onchange="readURL(event)">
                                <img id="image_product" src="#" alt="" srcset="" width="200" height="200">

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
<script>
    CKEDITOR.replace('content-ckeditor');
    function readURL(event) {
  if (event.target.files && event.target.files[0]) {
    let reader = new FileReader();
    reader.onload = function () {
      let output = document.getElementById('image_product');
      output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  }
}
</script>

@endsection
