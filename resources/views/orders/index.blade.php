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
            <h6 class="m-0 font-weight-bold text-primary">Danh Sách Đơn Hàng</h6>
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
                            <th>Mã Khách Hàng</th>
                            <th>Ngày Đặt Hàng</th>
                            <th>Tổng Tiền</th>
                            {{--  <th>Tình Trạng Đơn Hàng</th>  --}}
                            <th>Ngày tạo đơn</th>
                            <th>Ngày chỉnh sửa đơn</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Mã Đơn Hàng</th>
                            <th>Mã Khách Hàng</th>
                            <th>Ngày Đặt Hàng</th>
                            <th>Tổng Tiền</th>
                            {{--  <th>Tình Trạng Đơn Hàng</th>  --}}
                            <th>Ngày tạo đơn</th>
                            <th>Ngày chỉnh sửa đơn</th>
                            <th>Xóa</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($orders as $key => $order)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->id_customer}}</td>
                            <td>{{$order->date_order}}</td>
                            <td>{{$order->total}}</td>
                            {{--  <td>
                                <div class="form-group">
                                    <a href="{{ route('order.status', ['order' => $order->id]) }}">
                            <input type="checkbox" id="male" name="hot" {{ $order->status == true ? 'checked' : '' }}>
                            Đã xác nhận đơn hàng
                            </a>
            </div>
            </td> --}}
            <td>{{$order->created_at}}</td>
            <td>{{$order->updated_at}}</td>
            <td>
                <form action=" {{ route('orders.destroy', ['order' => $order]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa đơn hàng {{$order->id}} ?')"
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
