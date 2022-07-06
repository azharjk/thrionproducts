<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <title>Thrion Products</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('third_party/stisla-2.2.0/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('third_party/stisla-2.2.0/modules/fontawesome/css/all.min.css') }} ">

    <!-- Plugins -->
    <link rel="stylesheet"
        href="{{ asset('third_party/stisla-2.2.0/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('third_party/stisla-2.2.0/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('third_party/stisla-2.2.0/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('third_party/stisla-2.2.0/img/avatar/avatar-1.png') }}"
                                width="30" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('admin.dashboard') }}">Thrion Products</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">Tp</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Models</li>
                        <li class="dropdown">
                            <a href="{{ route('admin.product.index') }}" class="nav-link"><i
                                    class="fas fa-table"></i><span>Products</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('admin.order.index') }}" class="nav-link"><i
                                    class="fas fa-table"></i><span>Orders</span></a>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('admin.layouts.master.content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright © 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval
                        Azhar</a>
                </div>
                <div class="footer-right">
                    v2.0.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('third_party/stisla-2.2.0/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('third_party/stisla-2.2.0/modules/popper.js') }}"></script>
    <script src="{{ asset('third_party/stisla-2.2.0/modules/tooltip.js') }}"></script>
    <script src="{{ asset('third_party/stisla-2.2.0/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('third_party/stisla-2.2.0/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('third_party/stisla-2.2.0/modules/moment.min.js') }}"></script>
    <script src="{{ asset('third_party/stisla-2.2.0/js/stisla.js') }}"></script>

    <!-- Plugins -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('third_party/stisla-2.2.0/js/scripts.js') }}"></script>
    <script src="{{ asset('third_party/stisla-2.2.0/js/custom.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
