<!DOCTYPE html>
<html lang="en">
@include('partials.head')
@yield('styles')
<body>
@include('partials.nav')
<div class="container-fluid">
    @yield('loading')
    @yield('content')
    @include('flashy::message')
</div>
@include('partials.footer')
@include('partials.js')
@yield('script')
</body>
</html>
