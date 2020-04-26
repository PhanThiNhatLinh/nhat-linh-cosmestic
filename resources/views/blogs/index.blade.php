@extends('admin.layouts')

@section('title', 'Dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <p class="mb-4">
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Tạo bài viết mới</a>
        {{-- <a href="{{ route('products.trash') }}" class="btn btn-danger">Thùng rác</a> --}}
    </p>
    <p class="mb-4">
        <a href="#" class="btn btn-primary">Bài viết đã xóa</a>
        {{-- <a href="{{ route('products.trash') }}" class="btn btn-danger">Thùng rác</a> --}}
    </p>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Bài Viết</h6>
        </div>

        <div class="col-sm-12">@include('partials.message')</div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã bài viết</th>
                            <th>Tên bài viết</th>
                            <th>Nội Dung</th>
                            <th>Hình Ảnh</th>
                            <th>Người đăng</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Mã bài viết</th>
                            <th>Tên bài viết</th>
                            <th>Nội Dung</th>
                            <th>Hình Ảnh</th>
                            <th>Người đăng</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($blogs as $key => $blog)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->name}}</td>
                            <td><a href="{{ route('blogs.show', $blog->id) }}">Chi tiết</a></td>
                            <td>
                                <p><img src="data:image/jpg;base64, {{$blog->image}}" style="width:100px; height:100px"
                                        alt="{{$blog->image}}"></p>
                            </td>
                            <td>{{$blog->user->name}}</td>
                            <td><a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-edit" title="Sửa"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('blogs.destroy', ['blog' => $blog]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fa fa-backspace"></i></button>
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
