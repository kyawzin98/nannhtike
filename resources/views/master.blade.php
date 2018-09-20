<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('template1.head')
    @yield('style')
</head>
<body class="light">

<!-- Pre loader -->
@include('template1.pre_loader')

<div id="app">
@include('template1.sidebar')
<!--Sidebar End-->
    <div class="has-sidebar-left">
        @include('template1.navbar')

        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort">
                @section('content')

                @show
            </div>
        </div>
    </div>
    <!-- Right Sidebar -->
@include('template1.right_sidebar')
<!-- /.right-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
    <div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
@include('template1.foot')
</body>
</html>