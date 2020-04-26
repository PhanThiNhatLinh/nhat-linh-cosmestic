@include('partials.head')

<body>
    @include('partials.navuser')
    <main class="container-fluid">
        @yield('content')
    </main>
</body>

@include('partials.footer')
