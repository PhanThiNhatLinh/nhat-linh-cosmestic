@extends('admin.layouts')

@section('title', 'Create')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 center"><a href="{{ route('typeproducts.index') }}"
            style="text-decoration: none; color: orange;">Trang Loại
            sản phẩm</a></h1>
    <p></p>
    <h2>Tạo sản phẩm</h2>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Thêm sản loại phẩm mới</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area" style="height: auto">
                        <form action="{{ action('TypeproductController@store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Mã loại sản phẩm</label>
                                <input type="text" class="form-control" name="product_type_id"
                                    placeholder="Input Title">
                            </div>
                            <div class="form-group">
                                <label for="title">Tên loại sản phẩm</label>
                                <input type="text" class="form-control" name="product_type_name"
                                    placeholder="Input Title">
                            </div>
                            <div class="form-group">
                                <label for="content">Mô tả loại sản phẩm</label>
                                <textarea name="description" class="form-control" placeholder="Input Content" cols="30"
                                    rows="10" id="content"></textarea>
                            </div>
                            <div class=" form-group">
                                <label for="group_code">Nhóm sản phẩm</label>
                                <select name="group_code" id="">
                                    @foreach ($groupproducts as $groupproduct)
                                    <option value="{{ $groupproduct->group_code }} ">{{ $groupproduct->group_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" value="Create" class="btn btn-primary">
                        </form>
                        <script>
                            CKEDITOR.replace('content');
                        </script>
                    </div>
                </div>
            </div>
        </div>

        @endsection
