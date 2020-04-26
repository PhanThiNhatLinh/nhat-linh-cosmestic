@extends('admin.layouts')
@section('title', 'Type product')

@section('content')
{{-- <a class="btn btn-primary" href="{{route('typeproducts.create')}}">Thêm sản loại phẩm mới</a> --}}
<p class="mb-4">
    <a href="{{ route('typeproducts.create') }}" class="btn btn-primary">Thêm sản loại phẩm mới</a>
</p>
<h2>Danh sách loại sản phẩm</h2>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
    </div>

    <div class="col-sm-12">@include('partials.message')</div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
                {{-- <table class="table table-striped table-bordered table-hover "> --}}
                <thead>
                    <th>Mã loại sản phẩm</th>
                    <th>Tên loại sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Nhóm sản phẩm</th>
                    <th>Người đăng</th>
                    <th>Thao tác</th>
                </thead>
                <tbody>
                    @foreach ($typeproducts as $typeproduct)
                    <tr>
                        <td>{{$typeproduct->product_type_id}}</td>
                        <td>{{$typeproduct->product_type_name}}</td>
                        <td>{!! $typeproduct->description !!}</td>
                        <td>{{$typeproduct->groupproduct->group_name}}</td>
                        <td>{{$typeproduct->user->name}}</td>
                        <td>
                            <a href="{{ route('typeproducts.edit', ['typeproduct' => $typeproduct]) }}"
                                class="btn btn-primary">Edit</a>
                            <form action="{{ route('typeproducts.destroy', ['typeproduct' => $typeproduct]) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endsection
