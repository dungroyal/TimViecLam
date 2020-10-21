<!DOCTYPE html>
<html lang="en">
@include('admin.element.head')
<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        @include('admin.element.sitebar')
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container2">
        <!-- HEADER DESKTOP-->
        @include('admin.element.header_desktop')
        <!-- END HEADER DESKTOP-->
        @yield('content')
    </div>
    </div>
    @include('admin.element.script')
</body>
</html>
