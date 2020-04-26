@extends('layouts.web')
{{-- xài @extends là kế thừa tất cả các trang của layouts.app, và chỉ viết được văn bản trong các @yield của nó thôi, viết ngoài ko đc --}}
{{--  @section('title', 'Show post')  --}}
{{-- Nếu văn bản ngắn thì ko cần endsection mà phẩy rồi viết luôn --}}
@section('content')

<table class="table">
    <tr>
        <td>Mã SP</td>
        <td>So Luong</td>
    </tr>
    @foreach ($shows as $show )

    <tr>
        <td>{{ $show->product_type_id }}</td>
        {{-- <td>{{ $show->product_count }}</td> --}}
    </tr>
    @endforeach

</table>


@endsection
