@extends('admin.layouts')

@section('title', 'Dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <p class="mb-4">
        <a href="{{ route('brands.create') }}" class="btn btn-primary">Tạo thương hiệu mới</a>
        {{-- <a href="{{ route('products.trash') }}" class="btn btn-danger">Thùng rác</a> --}}
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Thương Hiệu Sản phẩm</h6>
        </div>

        <div class="col-sm-12">@include('partials.message')</div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 12px;">
                    <thead>
                        <th>Mã thương hiệu</th>
                        <th>Tên thương hiệu</th>
                        <th>Nơi ra đời</th>
                        <th>Mô tả</th>
                        <th>Logo</th>
                        <th>Người đăng</th>
                        <th>Thao tác</th>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{$brand->brand_id}}</td>
                            <td>{{$brand->brand_name}}</td>
                            <td>{{$brand->country}}</td>
                            <td>{!! $brand->description !!}</td>
                            <td>
                                <p><img src="data:image/jpg;base64, {{$brand->image}}" style="width:100px; height:100px"
                                        alt="{{$brand->image}}"></p>
                            </td>
                            <td>{{$brand->user->name}}</td>
                            <td>
                                <a href="{{ route('brands.edit', ['brand' => $brand]) }}"
                                    class="btn btn-primary">Edit</a>
                                <form action="{{ route('brands.destroy', ['brand' => $brand]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
@endsection
