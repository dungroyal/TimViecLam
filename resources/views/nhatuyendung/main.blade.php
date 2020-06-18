<!DOCTYPE html>
<html lang="en">
@include('nhatuyendung.element.head')
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        @include('nhatuyendung.element.sitebar')
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container2">
        <!-- HEADER DESKTOP-->
        @include('nhatuyendung.element.header_desktop')
        <!-- END HEADER DESKTOP-->
        @yield('content')
    </div>
    </div>
    @include('nhatuyendung.element.script')
</body>
</html>
