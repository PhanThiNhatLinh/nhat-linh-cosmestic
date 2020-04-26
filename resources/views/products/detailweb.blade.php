@extends('layouts.web')

@section('title', 'Show Products')

@section('content')

<!-- Begin Page Content -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Cửa Hàng</a>
                    <span>Chi Tiết</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Loại Sản Phẩm</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-tommy">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
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
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                </div>
                <div class="filter-widget">
                    {{-- <h4 class="fw-title">Size</h4> --}}
                    <div class="fw-size-choose">
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Towel</a>
                        <a href="#">Shoes</a>
                        <a href="#">Coat</a>
                        <a href="#">Dresses</a>
                        <a href="#">Trousers</a>
                        <a href="#">Men's hats</a>
                        <a href="#">Backpack</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img src="data:image/jpg;base64, {{$product->image}}"
                                style="width:500px; height:500px; text-align:center" alt="{{$product->product_name}}">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="img/product-single/product-1.jpg"><img
                                        src="img/product-single/product-1.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="img/product-single/product-2.jpg"><img
                                        src="img/product-single/product-2.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img
                                        src="img/product-single/product-3.jpg" alt=""></div>
                                <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img
                                        src="img/product-single/product-3.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>oranges</span>
                                <h3>{{ $product->product_name }}</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <p>{!! $product->description !!}</p>
                                <h4>{{ number_format($product->price) }}
                                    <span> @if($product->promotion !== 0)
                                        {{number_format($product->promotion)}}VND
                                        @endif</span></h4>
                            </div>
                            <h4>Số Lượng:</h4>
                            @if(Auth::user())
                            <form action="{{ route('cart.add') }}" method="post">
                                @csrf
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" name="quantity">
                                    </div>
                                    <input type="hidden" name="productId" value="{{$product->STT}}">
                                    <input type="submit" value="Giỏ Hàng" class="primary-btn pd-cart">
                                </div>
                            </form>
                            @else
                            <form action="/login" method="get">
                                @csrf
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" name="quantity">
                                    </div>
                                    <input type="hidden" name="productId" value="{{$product->STT}}">
                                    <input type="submit" value="Giỏ Hàng" class="primary-btn pd-cart">
                                </div>
                            </form>
                            @endif
                            <ul class="pd-tags">
                                <li><span>Các loại sản phẩm khác</span>: More Accessories, Wallets & Cases</li>
                                <li><span>TAGS</span>: Clothing, T-shirt, Woman</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Mã sản phẩm : {{ $product->product_code }}</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPTION</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2" role="tab">SPECIFICATIONS</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-3" role="tab">Customer Reviews (02)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>Mô Tả Sản Phẩm</h5>

                                            <p>{!! $product->description !!}</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="img/product-single/tab-desc.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Customer Rating</td>
                                            <td>
                                                <div class="pd-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>(5)</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Giá</td>
                                            <td>
                                                <div class="p-price">{{ $product->price }}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Add To Cart</td>
                                            <td>
                                                <div class="cart-add">+ add to cart</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Kho</td>
                                            <td>
                                                <div class="p-stock">{{ $product->enstock }} trong giỏ hàng</div>
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="p-catagory">Weight</td>
                                            <td>
                                                <div class="p-weight">1,3kg</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Size</td>
                                            <td>
                                                <div class="p-size">Xxl</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Color</td>
                                            <td><span class="cs-color"></span></td>
                                        </tr> --}}
                                        <tr>
                                            <td class="p-catagory">Mã sản phẩm : </td>
                                            <td>
                                                <div class="p-code">{{ $product->product_code }}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                    <h4>2 Comments</h4>
                                    <div class="comment-option">
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="img/product-single/avatar-1.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="img/product-single/avatar-2.png" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5>Roy Banks <span>27 Aug 2019</span></h5>
                                                <div class="at-reply">Nice !</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="personal-rating">
                                        <h6>Your Ratind</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h4>Leave A Comment</h4>
                                        <form action="#" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Messages"></textarea>
                                                    <button type="submit" class="site-btn">Send message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
