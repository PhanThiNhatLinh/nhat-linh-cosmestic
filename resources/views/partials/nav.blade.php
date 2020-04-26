<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    nhatlinh.cosmetics@gmail.com
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    +0888889999
                </div>
            </div>
            <div class="ht-right">
                @if(!Auth::user())
                <a href="/register" class="login-panel"><i class="fa fa-user"></i>Đăng Ký</a>
                <a href="/login" class="login-panel"><i class="fa fa-user"></i>Đăng Nhập</a>

                @else
                <a href="/dashboard" class="login-panel"><i class="fa fa-user"></i>Dashboard</a>
                <a href="{{ route('logout') }}" class="login-panel"><i class="fa fa-user"></i>Log out</a>
                <a href="/login" class="login-panel"><i class="fa fa-user"></i>{{ Auth::user()->email }}</a>
                @endif

                {{-- <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                        <option value='yt' data-image="/front_end/img/flag-1.jpg" data-imagecss="flag yt"
                            data-title="English">
                            Tiếng Anh</option>
                        <option value='yu' data-image="/front_end/img/flag-2.jpg" data-imagecss="flag yu"
                            data-title="Bangladesh">Tiếng Đức </option>
                    </select>
                </div> --}}
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/">
                            <img src="/front_end/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <form action="{{ route('search') }}" method="get">
                            @csrf
                            <div class="input-group">
                                <input name="search" type="text" placeholder="What do you need?">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        {{-- @if(!Auth::user())
                        @else --}}
                        @if(Auth::user())
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <span> {{ (Cart::session(Auth::user()->id)->getTotalQuantity()) }} </span>
                            </a>
                            {{-- @endif --}}
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            {{-- @if(!Auth::user())
                                            @else --}}
                                            @foreach (Cart::session(Auth::user()->id)->getContent() as $item)
                                            <tr>
                                                <td class="si-pic"><img
                                                        src="data:image/jpg;base64,{{$item->model->image}}"
                                                        style="width:50px; height:50px" alt="{{$item->name}}"></td>
                                                <td class="si-text">
                                                    <div class="product-selected">
                                                        <p>{{ number_format($item->price) }} x {{$item->quantity }}</p>
                                                        <h6>{{$item->name }}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <form action="{{ route('cart.remove') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="productId" value="{{$item->id}}">
                                                        {{--  <button type="submit" value="Delete" class="btn btn-danger">Delete</button>  --}}

                                                        <button type="submit" class="btn btn-danger btn-lg"><i
                                                                class="ti-close"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            {{-- @endif --}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>Tổng: </span>
                                    <h5>{{ number_format(Cart::getTotal())}} VND</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{ route('cart.view') }}" class="primary-btn view-card">XEM GIỎ HÀNG</a>
                                    <a href="{{ route('cart.checkout') }}" class="primary-btn checkout-btn">ĐẶT HÀNG</a>
                                </div>
                            </div>
                        </li>
                        <li class="cart-price">{{ number_format(Cart::getTotal())}}</li>
                    </ul>
                    @else
                    <li class="cart-icon"><a href="#">
                            <i class="icon_bag_alt"></i>
                            <span>0</span>
                        </a>
                        <div class="cart-hover">
                            <div class="select-items">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Chưa Có Sản Phẩm Nào Trong Giỏ Hàng - Đăng Nhập Để Mua Hàng</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="select-total">
                                <span>total:</span>
                                <h5>0 VND</h5>
                            </div>
                            <div class="select-button">
                                <a href="{{ route('cart.view') }}" class="primary-btn view-card">XEM GIỎ HÀNG</a>
                                <a href="{{ route('cart.checkout') }}" class="primary-btn checkout-btn">ĐẶT HÀNG</a>
                            </div>
                        </div>
                    </li>
                    <li class="cart-price">0 VND</li>

                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container-fluid">
            {{-- <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>Nhóm Sản Phẩm</span>
                    <ul class="depart-hover">
                        @foreach ($groupproducts as $groupproduct)
                        <li class="active"><a href="#">{{$groupproduct->group_name}}</a></li>
            @endforeach
            </ul>
        </div>
    </div> --}}
    <nav class="nav-menu mobile-menu">
        <ul>
            @foreach ( $groupproducts as $groupproduct )
            <li><a
                    href="{{ route('groupproducts.show', ['groupproduct' => $groupproduct]) }}">{{ $groupproduct->group_name }}</a>
                <ul class="dropdown">
                    @foreach ($groupproduct->typeproduct as $type)
                    <li><a
                            href="{{ route('typeproducts.show', ['typeproduct' => $type]) }}">{{$type->product_type_name}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    </div>
    </div>
</header>
