<!DOCTYPE html>
<html lang="en">
@include('partials.head')
@yield('styles')
<body>
@include('partials.account.nav')
<div class="container-fluid">
    @yield('content')
    @include('flashy::message')
</div>
@include('partials.footer')
@include('partials.js')
@yield('script')
</body>
</html>
