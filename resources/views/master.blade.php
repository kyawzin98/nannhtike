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
    <!-- Side bar -->
    @include('template1.sidebar')
    <!-- Change template color to black -->
    <script>
        /*
         *  Add sidebar classes (sidebar-mini sidebar-collapse sidebar-expanded-on-hover) in body tag
         *  you can remove this script tag and add classes directly to body
         *  this is only for demo
         */
        document.body.className += ' sidebar-mini' + ' sidebar-collapse' + ' theme-dark';
    </script>
    <!-- Toggle Button -->
    <a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
        <i></i>
    </a>
    <!-- End Toggle Button -->
    <div class="has-sidebar-left has-sidebar-tabs">
        <div class="container-fluid relative animatedParent animateOnce p-lg-5">

            @section('content')

            @show

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
@yield('script')
</body>
</html>