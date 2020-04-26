{{-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">Logo</a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Chăm sóc da</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Chăm sóc tóc</a>
        </li>
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
<li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@endguest
</ul>
</nav> --}}
{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Chăm sóc da</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Chăm sóc tóc</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Chăm sóc cơ thể</a>
        </li>

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest

    </ul>
</div>
</div>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-success mb-4">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-anchor mr-2"></i><strong>Linh Cosmetic</strong> Kit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-2"
            aria-controls="navbarNavDropdown-2" aria-expanded="false" aria-label="Toggle navigation" style=""><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-2">
            <ul class="navbar-nav mr-auto">
                @foreach ($groupproducts as $groupproduct )
                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle"
                        href="https://designrevision.com" id="navbarDropdownMenuLink-2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">{{ $groupproduct->group_name }}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-2">
                        @foreach ( $groupproduct->typeproduct as $product )
                        <a class="dropdown-item" href="#">{{ $product->product_type_name }}</a>
                        @endforeach

                    </div>
                    @endforeach
                </li>

                {{--        ========================================= --}}

                {{--
                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle"
                        href="https://designrevision.com" id="navbarDropdownMenuLink-2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">CHĂM SÓC TÓC</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-2">
                        <a class="dropdown-item" href="#">Dầu gội</a><a class="dropdown-item" href="#">Dầu xả</a><a
                            class="dropdown-item" href="#">Marketing</a><a class="dropdown-item"
                            href="#">Development</a>
                        <a class="dropdown-item" href="#">Development</a><a class="dropdown-item"
                            href="#">Development</a>
                    </div>
                </li>
                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle"
                        href="https://designrevision.com" id="navbarDropdownMenuLink-2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">CHĂM SÓC CƠ THỂ</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-2">
                        <a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Development</a><a
                            class="dropdown-item" href="#">Marketing</a>
                    </div>
                </li>
                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle"
                        href="https://designrevision.com" id="navbarDropdownMenuLink-2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">TRANG ĐIỂM </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-2">
                        <a class="dropdown-item" href="#">Design</a><a class="dropdown-item" href="#">Development</a><a
                            class="dropdown-item" href="#">Marketing</a>
                    </div>
                </li>
            </ul> --}}
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
        </div>
    </div>
</nav>
