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
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
{{--  <form action="{{ route('cart.check') }}" method="POST">
@csrf --}}
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th class="p-name">Tên sản phẩm</th>
                                <th>Giá cả</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(Auth::user())
                            @foreach (Cart::session(Auth::user()->id)->getContent() as $product)
                            {{-- <tr>
                                <td class="cart-pic first-row"><img src="data:image/jpg;base64,{{$item->model->image}}"
                            style="width:100px; height:100px" alt="{{$item->name}}"></td>
                            <td class="cart-title first-row">
                                <h5>{{ $item->name }}</h5>
                            </td>
                            <td class="p-price first-row">{{ number_format($item->price) }}</td>
                            <td class="qua-col first-row">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="{{ $item->quantity }}">
                                    </div>
                                </div>
                            </td>
                            <td class="total-price first-row">{{ number_format( $item->price * $item->quantity) }}
                            </td>
                            <td class="close-td first-row"><i class="ti-close"></i></td>
                            </tr> --}}
                            <tr>
                                <td class="cart-pic first-row"><img
                                        src="data:image/jpg;base64,{{$product->model->image}}"
                                        style="width:100px; height:100px" alt="{{$product->name}}"></td>
                                <td class="cart-title first-row">
                                    <h5>{{ $product->name }}</h5>
                                </td>
                                <td class="p-price first-row">{{ number_format($product->price) }}</td>

                                <td class="qua-col first-row">
                                    <form action="{{ route('cart.update') }}" method="post">
                                        @csrf
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{ $product->quantity }}" name="quantity">
                                            </div>
                                            <input type="hidden" name="productId" value="{{$product->id}}">
                                            <input type="submit" value="Update" class="primary-btn pd-cart"></a>
                                        </div>
                                    </form>
                                </td>
                                <td class="total-price first-row">
                                    {{ number_format( $product->price * $product->quantity) }}
                                </td>
                                <td>
                                    <form action="{{ route('cart.remove') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{$product->id}}">
                                        {{--  <button type="submit" value="Delete" class="btn btn-danger">Delete</button>  --}}

                                        <button type="submit" class="btn btn-danger btn-lg"><i
                                                class="ti-close"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <li class="w-icon active"><a href="/login" class="btn btn-lg"><i
                                        class="icon_bag_alt"></i></a>
                            </li>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-buttons">
                            <a href="/" class="primary-btn continue-shop">Tiếp tục mua hàng</a>

                        </div>
                        {{-- <div class="discount-coupon">
                            <h6>Discount Codes</h6>
                            <form action="#" class="coupon-form">
                                <input type="text" placeholder="Enter your codes">
                                <button type="submit" class="site-btn coupon-btn">Apply</button>
                            </form>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="cart-total">Tổng Tiền <span>{{ number_format(Cart::getTotal())}}</span>
                                </li>
                            </ul>
                            {{--  <button type="submit" class="proceed-btn">PROCEED TO CHECK OUT</button>  --}}
                            <a href="/cart-checkout" class="proceed-btn">Tiến Hành Đặt Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->

@endsection
