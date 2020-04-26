@extends('layouts.web')

{{-- @section('title', 'Type product') --}}

@section('content')

<body>
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="/front_end/img/banner1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Mỹ Phẩm Trang Điểm</span>
                            <h1>Bùng Nổ Giảm Giá Mùa Dịch</h1>
                            <p>Mùa dịch này chị em phụ nữ chúng mình sẽ có nhiều thời gian hơn để chăm sóc bản thân -
                                Hiểu được điều đó, LINH COSMETICS đã tổ chức chương trình khuyển mãi siêu bùng nổ!!!!!
                            </p>
                            <a href="/promotions" class="primary-btn">Xem Ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Giảm đến 50%</h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="/front_end/img/banner.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Chăm Sóc Tóc</span>
                            <h1>Bùng Nổ Giảm Giá Mùa Dịch</h1>
                            <p>Khuyến mãi siêu bùng nổ, mùa dịch vẫn xinh!!!!!!</p>
                            <a href="/promotions" class="primary-btn">Xem Ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Giảm đến 50%</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Women Banner Section Begin -->
    <section style="padding-top:100px" class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="/front_end/img/makeup1.jpg">
                        <h2 style="padding-top: 100px">ĐANG GIẢM GIÁ</h2>
                        <a href="/promotions">KHÁM PHÁ NGAY</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        {{-- <ul>
                            <li class="active">Clothings</li>
                            <li class="active">HandBag</li>
                            <li class="active">Shoes</li>
                            <li class="active">Accessories</li>
                        </ul> --}}
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach ($productpromotions as $productpromo )
                        <div class="product-item">
                            <div class="pi-pic">
                                <img style="width: 100px; height:200px"
                                    src="data:image/jpg;base64, {{$productpromo->image}}" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    {{-- <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a
                                            href="{{ route('showdetail', ['id' => $productpromo->STT ]) }}">+ Xem Sản
                                    Phẩm</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li> --}}
                                    @if(Auth::user())
                                    <form action="{{ route('cart.add') }}" method="post">
                                        @csrf
                                        <input type="hidden" type="text" value="1" name="quantity">
                                        <input type="hidden" name="productId" value="{{$productpromo->STT}}">
                                        <li class="w-icon active"><button type="submit"
                                                class="btn btn-warning btn-lg"><i class="icon_bag_alt"></i></button>
                                        </li>
                                    </form>
                                    @else
                                    <li class="w-icon active"><a href="/login" class="btn btn-lg"><i
                                                class="icon_bag_alt"></i></a>
                                    </li>
                                    @endif
                                    <li class="quick-view"><a
                                            href="{{ route('showdetail', ['id' => $productpromo->STT ]) }}">Chi
                                            Tiết</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="{{ route('showdetail', ['id' => $productpromo->STT ]) }}">
                                    <h5>{{$productpromo->product_name }}</h5>
                                </a>
                                <div class="product-price">
                                    {{number_format("$productpromo->price") }}
                                    <span>{{number_format("$productpromo->promotion") }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="/front_end/img/innis2.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Giảm Giá Tuần Này</h2>
                    <p>Kem Dưỡng INNISFREE đến từ Hàn Quốc </p>
                    <div class="product-price">
                        150.0000
                        <span>/VND</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>5</span>
                        <p>Ngày</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Giờ</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Phút</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Giây</p>
                    </div>
                </div>
                <a href="/typeproductdetail/2" class="primary-btn">Mua Ngay</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        {{-- <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul> --}}
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach ($newproducts as $newproduct)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img style="width: 100px; height:200px"
                                    src="data:image/jpg;base64, {{$newproduct->image}}" alt="">
                                <span>@if($newproduct->promotion !== 0)
                                    <div class="sale">Sale</div>
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
                                                class="btn btn-warning btn-lg"><i class="icon_bag_alt"></i></button>
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
                                <a href="{{ route('showdetail', ['id' => $newproduct->STT ]) }}">
                                    <h5>{{$newproduct->product_name}}</h5>
                                </a>
                                <div class="product-price">
                                    {{number_format("$newproduct->price")}}
                                    <span>@if($newproduct->promotion !== 0)
                                        {{number_format($newproduct->promotion)}}VND
                                        @endif</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="/front_end/img/makeup.jpg">
                        <h2 style="padding-top: 150px; color:black">SẢN PHẨM MỚI</h2>
                        <a style="color:black" href="/newproducts">KHÁM PHÁ NGAY</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><a href="{{ route('listblog') }}">Bí Quyết Làm Đẹp</a></h2>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ( $blogs as $blog )
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img style="width: 300px; height:300px" src="data:image/jpg;base64, {{$blog->image}}" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    May 4,2019
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="{{ route('showdetailblog', ['id' => $blog->id ]) }}">
                                <h4>{{ $blog->name }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="/front_end/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Miễn Phí Vận Chuyển</h6>
                                <p>Cho Tất Cả Các Đơn Hàng Từ 500.000 Đồng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="/front_end/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Giao Hàng </h6>
                                <p>Tất Cả Các Ngày Trong Tuần</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="/front_end/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Thanh Toán</h6>
                                <p>An Toàn, Nhanh Gọn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
