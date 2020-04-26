@extends('admin.layouts')

@section('title', 'Dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <p class="mb-4">
        <a href="{{ route('product.create') }}" class="btn btn-primary">Tạo sản phẩm mới</a>
        <a href="{{ route('product.trash') }}" class="btn btn-danger">Thùng rác</a>
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
        </div>

        <div class="col-sm-12">@include('partials.message')</div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 14.5px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã loại sản phẩm</th>
                            <th>Mã thương hiệu</th>
                            <th>Giá cả</th>
                            <th>Khuyến mãi</th>
                            <th>Sản phẩm nổi bật</th>
                            <th>Lượng hàng hiện có</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th>
                            <th>Người đăng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã loại sản phẩm</th>
                            <th>Mã thương hiệu</th>
                            <th>Giá cả</th>
                            <th>Khuyến mãi</th>
                            <th>Sản phẩm nổi bật</th>
                            <th>Lượng hàng hiện có</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th>
                            <th>Người đăng</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($products as $key => $product)

                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$product->product_code}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->typeproduct->product_type_name}}</td>
                            <td>{{$product->brand->brand_name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->promotion}}</td>
                            <td>
                                <div class="form-group">
                                    <a href="{{ route('product.hot', ['product' => $product->STT]) }}">
                                        <input type="checkbox" id="male" name="hot"
                                            {{ $product->hot == true ? 'checked' : '' }}>
                                        Sản phẩm nổi bật
                                    </a>
                                </div>
                            </td>
                            <td>{{$product->enstock}}</td>
                            <td>{!! $product->description !!}</td>
                            <td>
                                <p><img src="data:image/jpg;base64, {{$product->image}}"
                                        style="width:100px; height:100px" alt="{{$product->image}}"></p>
                            </td>
                            <td>{{$product->user->name}}</td>

                            <td><a href="{{ route('products.edit', ['product' => $product]) }}"
                                    class="btn btn-info btn-sm">
                                    <i class="fa fa-edit" title="Sửa"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('products.destroy', ['product' => $product]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Do you want delete {{$product->product_name}} ?')"
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"
                                            title="Xóa"></i></button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
