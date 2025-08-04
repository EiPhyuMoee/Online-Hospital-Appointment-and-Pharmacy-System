<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('admin-assets')}}/css/styles.css" rel="stylesheet" />
    <!-- Add this in your admin.master layout file -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anon
    ymous"></script>

</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    @include('admin.include.header')
    <!-- Navbar-->
</nav>
<div id="layoutSidenav">
    @include('admin.include.left-sidebar')
    <div id="layoutSidenav_content">
        <main style="padding-left: 10px; padding-top: 10px;">
            @yield('content')
        </main>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin-assets')}}/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin-assets')}}/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('admin-assets')}}/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{asset('admin-assets')}}/js/datatables-simple-demo.js"></script>

</body>
</html>
