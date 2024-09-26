<!DOCTYPE html>
<html lang="en-US">
@include('front_end.layout.head')

<body>

    @include('front_end.layout.header')
    @yield('content')
    {{-- @include('cookie-consent::index') --}}
    {{-- @include('front_end.layout.disclaimer') --}}
    @include('front_end.layout.footer')
    @include('front_end.layout.script')
    @yield('custom-script')

</body>

</html>

