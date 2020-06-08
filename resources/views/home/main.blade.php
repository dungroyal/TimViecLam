<!DOCTYPE html>
<html lang="en">
    @include('home.element.head')
<body>
    @include('home.element.header')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('home.element.sitebar')
            </div>
            <div class="col-lg-9">
            @yield('content')
            </div>
        </div>
    </div>
    @include('home.element.footer')
</body>
    @include('home.element.scrip')
</html>