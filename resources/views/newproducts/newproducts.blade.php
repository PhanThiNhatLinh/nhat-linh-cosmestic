@extends('layouts.web')
{{-- xài @extends là kế thừa tất cả các trang của layouts.app, và chỉ viết được văn bản trong các @yield của nó thôi, viết ngoài ko đc --}}
{{--  @section('title', 'Show post')  --}}
{{-- Nếu văn bản ngắn thì ko cần endsection mà phẩy rồi viết luôn --}}
@section('content')

<body>
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Sản Phẩm Mới</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center">Sản Phẩm Mới Trong Tháng</h2>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">

                    <div class="filter-widget">
                        <h4 class="fw-title">Thương Hiệu</h4>
                        @foreach ($newproducts as $newproduct )
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                <label for="bc-calvin">
                                    {{$newproduct->brand->brand_name}}
                                    <input type="checkbox" id="{{$newproduct->brand->brand_id}}">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Giá</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Lọc</a>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Kem dưỡng</a>
                            <a href="#">Chống Nắng</a>
                            <a href="#">Son Lì</a>
                            <a href="#">Son Kem</a>
                            <a href="#">Phấn Mắt</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Show 01- 09 Of 36 Product</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach ($newproducts as $newproduct )
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="data:image/jpg;base64, {{$newproduct->image}}"
                                            style="width:300px; height:300px" alt="">
                                        <span>@if($newproduct->promotion !== 0)
                                            <div class="sale pp-sale">Sale</div>
                                            @endif</span>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            @if(Auth::user())
                                            <form action="{{ route('cart.add') }}" method="post">
                                                @csrf
                                                <input type="hidden" type="text" value="1" name="quantity">
                                                <input type="hidden" name="productId" value="{{$newproduct->STT}}">
                                                <li class="w-icon active"><button type="submit"
                                                        class="btn btn-warning btn-lg"><i
                                                            class="icon_bag_alt"></i></button>
                                                </li>
                                            </form>
                                            @else
                                            <li class="w-icon active"><a href="/login" class="btn btn-warning btn-lg"><i
                                                        class="icon_bag_alt"></i></a>
                                            </li>
                                            @endif
                                            <li class="quick-view"><a
                                                    href="{{ route('showdetail', ['id' => $newproduct->STT ]) }}">Chi
                                                    Tiết</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        {{-- <div class="catagory-name">{{$product->typeproduct->product_type_name}}
                                    </div> --}}
                                    <a href="{{ route('showdetail', ['id' => $newproduct->STT ]) }}">
                                        <h5>
                                            {{$newproduct->product_name}}
                                        </h5>
                                    </a>
                                    <div class="product-price">
                                        {{ number_format("$newproduct->price")}} VND
                                        <span>@if($newproduct->promotion !== 0)
                                            {{number_format($newproduct->promotion)}}VND
                                            @endif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
@endsection
