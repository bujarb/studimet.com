<!DOCTYPE html>
<html lang="en">
@include('partials.admin.head')
<body>
    <div id="wrapper">
        @include('partials.admin.nav')
        <div id="page-wrapper">
            @include('partials.admin.popup')
            @yield('content')
            @include('flashy::message')
        </div>
    </div>
    @include('partials.admin.js')
    @yield('scripts')

</body>
</html>
