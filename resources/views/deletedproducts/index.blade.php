@extends('admin.layouts')

@section('title', 'Dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sản phẩm đã xóa</h6>
        </div>

        <div class="col-sm-12">@include('partials.message')</div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 12px;">
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
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($deletedproducts as $key => $deletedproduct)

                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$deletedproduct->product_code}}</td>
                            <td>{{$deletedproduct->product_name}}</td>
                            <td>{{$deletedproduct->typeproduct->product_type_name}}</td>
                            <td>{{$deletedproduct->brand->brand_name}}</td>
                            <td>{{$deletedproduct->price}}</td>
                            <td>{{$deletedproduct->promotion}}</td>
                            <td>
                                <div class="form-group">
                                    <a href="{{ route('product.hot', ['product' => $deletedproduct->STT]) }}">
                                        <input type="checkbox" id="male" name="hot"
                                            {{ $deletedproduct->hot == true ? 'checked' : '' }}>
                                        Sản phẩm nổi bật
                                    </a>
                                </div>
                            </td>
                            <td>{{$deletedproduct->enstock}}</td>
                            <td><a href="{{ route('products.show', $deletedproduct->STT) }}">Chi tiết</a></td>
                            <td>
                                <p><img src="data:image/jpg;base64, {{$deletedproduct->image}}"
                                        style="width:100px; height:100px" alt="{{$deletedproduct->image}}"></p>
                            </td>
                            <td>{{$deletedproduct->user->name}}</td>

                            {{-- <td><a href="{{ route('products.edit', ['product' => $deletedproduct]) }}"
                            class="btn btn-info btn-sm">
                            <i class="fa fa-edit" title="Sửa"></i></a>
                            </td> --}}
                            <td>
                                <form action="{{ route('restoreProduct') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $deletedproduct->STT }}">
                                    <button type="submit"
                                        onclick="return confirm('Do you want restore {{$deletedproduct->product_name}} ?')"
                                        class="btn btn-danger btn-sm"><i class="fa fa-backspace"></i></button>
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
