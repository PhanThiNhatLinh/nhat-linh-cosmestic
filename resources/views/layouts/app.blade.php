@include('partials.headadmin')

<body>
    @include('partials.navadmin')
    @include('partials.message')
    <main class="container-fluid">
        @yield('content')
    </main>
</body>

{{-- @include('partials.footer') --}}
