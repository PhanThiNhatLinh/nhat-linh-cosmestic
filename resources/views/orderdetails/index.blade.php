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
            <h6 class="m-0 font-weight-bold text-primary">Danh Sách Đơn Hàng Chi Tiết</h6>
        </div>

        <div class="col-sm-12">@include('partials.message')</div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                    style="font-size: 12px;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã Đơn Hàng</th>
                            <th>Mã Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng Sản Phẩm</th>
                            <th>Giá Mỗi Sản Phẩm</th>
                            <th>Tổng tiền Sản Phẩm</th>
                            <th>Tình Trạng Đơn Hàng</th>
                            <th>Ngày Tạo Đơn</th>
                            <th>Ngày Chỉnh Sửa đơn</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Mã Đơn Hàng</th>
                            <th>Mã Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng Sản Phẩm</th>
                            <th>Giá Mỗi Sản Phẩm</th>
                            <th>Tổng tiền Sản Phẩm</th>
                            <th>Tình Trạng Đơn Hàng</th>
                            <th>Ngày Tạo Đơn</th>
                            <th>Ngày Chỉnh Sửa đơn</th>
                            <th>Xóa</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($orderdetails as $key => $orderdetail)
                        <tr>
                            <td>{{$orderdetail->id}}</td>
                            <td>{{$orderdetail->id_bill}}</td>
                            <td>{{$orderdetail->id_product}}</td>
                            <td>{{$orderdetail->name_products}}</td>
                            <td>{{$orderdetail->quantity}}</td>
                            <td>{{$orderdetail->unit_price}}</td>
                            <td>{{$orderdetail->total_price}}</td>
                            <td>
                                <div class="form-group">
                                    <a href="{{ route('orderdetail.status', ['orderdetail' => $orderdetail->id]) }}">
                                        <input type="checkbox" id="male" name="hot"
                                            {{ $orderdetail->status == true ? 'checked' : '' }}>
                                        Đã xác nhận đơn hàng
                                    </a>
                                </div>
                            </td>
                            <td>{{$orderdetail->created_at}}</td>
                            <td>{{$orderdetail->updated_at}}</td>
                            <td>
                                <form action=" {{ route('orderdetails.destroy', ['orderdetail' => $orderdetail]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        onclick="return confirm('Bạn chắc chắn muốn xóa đơn hàng {{$orderdetail->id}} ?')"
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
