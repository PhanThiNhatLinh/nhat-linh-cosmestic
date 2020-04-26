@include('partials.head')

<body>
    @include('partials.nav')
    @include('partials.message')
    <main class="container-fluid">
        @yield('content')
    </main>
</body>

@include('partials.footer')
