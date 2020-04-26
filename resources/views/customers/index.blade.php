@extends('admin.layouts')

@section('title', 'Dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <p class="mb-4">
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Tạo bài viết mới</a>
    </p>
    <p class="mb-4">
        <a href="#" class="btn btn-primary">Bài viết đã xóa</a>
    </p> --}}
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh Sách Khách Hàng</h6>
        </div>

        <div class="col-sm-12">@include('partials.message')</div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã Khách Hàng</th>
                            <th>Tên Khách Hàng</th>
                            <th>Email</th>
                            <th>Số Điện Thoại</th>
                            <th>Địa Chỉ</th>
                            <th>Thành Phố/Tỉnh</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Mã Khách Hàng</th>
                            <th>Tên Khách Hàng</th>
                            <th>Email</th>
                            <th>Số Điện Thoại</th>
                            <th>Địa Chỉ</th>
                            <th>Thành Phố/Tỉnh</th>
                            <th>Xóa</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($customers as $key => $customer)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$customer->customer_id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->city}}</td>
                            <td>
                                <form action="{{ route('customers.destroy', ['customer' => $customer]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Bạn chắc chắn muốn xóa khách hàng {{$customer->name}} ?')"
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
