<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{ asset('') }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>


    <!-- Custom fonts for this template-->
    <link href="sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- CK editor 4 installed-->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <!-- Font Awesome-->
    <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="sb-admin-2/index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{--  <div class="sidebar-heading">
                Interface
            </div>  --}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{--  <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="{{ route('button') }}">Buttons</a>
            <a class="collapse-item" href="{{ route('card') }}">Cards</a>
    </div>
    </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{ route('color') }}">Colors</a>
    <a class="collapse-item" href="{{ route('border') }}">Borders</a>
    <a class="collapse-item" href="{{ route('animation') }}">Animations</a>
    <a class="collapse-item" href="{{ route('orther') }}">Other</a>
    </div>
    </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="{{ route('login') }}">Login</a>
    <a class="collapse-item" href="{{ route('signup') }}">Register</a>
    <a class="collapse-item" href="{{ route('forgotpassword') }}">Forgot Password</a>
    <div class="collapse-divider"></div>
    <h6 class="collapse-header">Other Pages:</h6>
    <a class="collapse-item" href="{{ route('error404') }}">404 Page</a>
    <a class="collapse-item" href="{{ route('blank') }}">Blank Page</a>
    </div>
    </div>
    </li> --}}

    <!-- Nav Item - Charts -->
    {{--  <li class="nav-item">
        <a class="nav-link" href="{{ route('chart') }}">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Charts</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{--  <li class="nav-item">
        <a class="nav-link" href="{{ route('table') }}">
    <i class="fas fa-fw fa-table"></i>
    <span>Tables</span></a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable1" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản Lý Sản Phẩm</span>
        </a>
        <div id="collapseTable1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{ route('products.index') }}">Sản phẩm</a>
                <a class="collapse-item" href="{{ route('typeproducts.index') }}">Loại sản phẩm</a>
                <a class="collapse-item" href="{{ route('brands.index') }}">Thương Hiệu</a>
                <a href=""></a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản Lý Bài Viết</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{ route('blogs.index') }}">Blogs</a>
                <a href=""></a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable3" aria-expanded="true"
            aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Quản Lý Khách Hàng</span>
        </a>
        <div id="collapseTable3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{ route('customers.index') }}">Danh Sách Khách Hàng</a>
                <a class="collapse-item" href="{{ route('orders.index') }}">Danh Sách Đơn Hàng</a>
                <a class="collapse-item" href="{{ route('orderdetails.index') }}">Đơn Hàng Chi Tiết</a>
                <a href=""></a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Log out</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
