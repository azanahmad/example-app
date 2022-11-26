<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
@include('layout.navbar')

<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('layout.sidebar')

<!-- Content Wrapper. Contains page content -->
@yield('content')
<!-- /.content-wrapper -->

@include('layout.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->
@include('layout.js')
@yield('extra-js')
</body>
</html>
