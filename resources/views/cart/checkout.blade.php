@extends('layouts.web')
{{-- xài @extends là kế thừa tất cả các trang của layouts.app, và chỉ viết được văn bản trong các @yield của nó thôi, viết ngoài ko đc --}}
{{--  @section('title', 'Show post')  --}}
{{-- Nếu văn bản ngắn thì ko cần endsection mà phẩy rồi viết luôn --}}
@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action=" {{ route('cart.check') }}" method="POST" class="checkout-form">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    {{-- <div class="checkout-content">
                        <a href="/login" class="content-btn">Đăng nhập để mua hàng</a>
                    </div> --}}
                    <h4>Thông Tin Khách Hàng</h4>
                    @if(Auth::user())
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fir">Tên Khách Hàng</label>
                            <input type="text" id="fir" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Địa chỉ giao hàng<span>*</span></label>
                            <input type="text" id="town" value="{{ Auth::user()->address }}">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Thị xã / Thành Phố<span>*</span></label>
                            <input type="text" id="town" value="{{ Auth::user()->city }}">
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email Address<span>*</span></label>
                            <input type="text" id="email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="text" id="phone" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="col-lg-12">
                            <div class="create-item">
                                <label for="acc-create">
                                    Chỉnh sửa thông tin khách hàng
                                    <a href="{{ route('customers.edit', Auth::user()->id)}}"
                                        class="btn btn-info btn-sm">
                                        <i class="fa fa-edit" title="Thay đổi thông tin khách hàng"></i></a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Họ và Tên</th>
                            <th>Địa chỉ</th>
                            <th>Thị xã/Thành Phố</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(Auth::user())
                        <tr>
                            <td>{{ Auth::user()->name }}</td>
                <td>{{ Auth::user()->address }}</td>
                <td>{{ Auth::user()->city }}</td>
                <td>{{ Auth::user()->phone }}</td>
                <td>{{ Auth::user()->email }}</td>
                </tr>
                </tbody>
                </table>
                <a href="{{ route('customers.edit', Auth::user()->id)}}" class="btn btn-info btn-sm">
                    <i class="fa fa-edit" title="Thay đổi thông tin khách hàng"></i></a> --}}
                <div class="col-lg-6">
                    {{-- <form action=" {{ route('cart.check') }}" method="POST" class="checkout-form">
                    @csrf --}}
                    <div class="place-order">
                        <h4>Sản phẩm đặt hàng</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Sản Phẩm <span>Tổng</span></li>

                                @foreach (Cart::session(Auth::user()->id)->getContent() as $item)
                                <li class="fw-normal">{{$item->name }} x {{ $item->quantity }}
                                    <span>{{ number_format( $item->price * $item->quantity) }}</span></li>
                                @endforeach
                                {{-- @endif --}}
                                <li class="fw-normal">Phí Giao Hàng (Đồng giá) <span>
                                        {{ number_format(40000) }}</span>
                                </li>
                                {{--  <li class="fw-normal">Subtotal <span>{{Cart::getTotal()}}</span></li> --}}
                                <li class="total-price">Tổng
                                    <span>{{ number_format(Cart::getTotal() + 40000)}}</span>
                                </li>
                            </ul>
                            {{--  <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Thanh Toán trực tiếp
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Thanh Toán qua thẻ
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>  --}}
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Đặt Hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div style="padding-left:300px">
            <form action="{{ route('cart.clear') }}" method="post">
                @csrf
                <input type="submit" value="Xóa Giỏ Hàng" class="btn btn-danger"></a>
            </form>
        </div>
    </div>
</section>
@else
<div class="checkout-content">
    <a href="/login" class="content-btn">Đăng nhập để mua hàng</a>
</div>
@endif
<!-- Shopping Cart Section End -->
@endsection
