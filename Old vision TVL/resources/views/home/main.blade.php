<!DOCTYPE html>
<html lang="en">
    @include('home.element.head')
<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @include('home.element.header')
    @yield('content')
    @include('home.element.footer')
    @include('home.element.script')
</body>
</html>