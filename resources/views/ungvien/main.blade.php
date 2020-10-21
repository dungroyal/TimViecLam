<!DOCTYPE html>
<html lang="en">
@include('ungvien.element.head')
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        @include('ungvien.element.sitebar')
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container2">
        <!-- HEADER DESKTOP-->
        @include('ungvien.element.header_desktop')
        <!-- END HEADER DESKTOP-->
        @yield('content')
    </div>
    </div>
    @include('ungvien.element.script')
</body>
</html>
