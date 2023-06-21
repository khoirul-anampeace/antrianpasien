<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Antrian Pasien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('assets/img/hospital-logo.png') }}">

    <!-- third party css -->
    <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
    <!-- third party css end -->
    <!-- Datatables css -->
    <link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="{{ asset('css/vendor/ico') }}" type="text/css"> --}}

    <!-- App css -->
    <link href="{{ url('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{ url('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">

    <!-- style -->
    <link rel="stylesheet" href="{{ url('css/styleAdmin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-0b4e4dJyOBVh1iUOpJnWcH7jjDWfJtUzRDLvTzJ9DfQGWvCtzDQ+YJBPHJfh7Uq8UZUf5D45M4Tco8CH3N+5Iw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"  />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>



<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="{{ url('/dashboard') }}" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{ asset('assets/img/logoweb.png') }}" alt="" height="45">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assets/img/hospital-logo.png') }}" alt="" height="45">
                </span>
            </a>

            <!-- LOGO -->
            <a href="{{ url('/dashboard') }}" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="{{ asset('assets/img/hospital-logo.png') }}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assets/img/hospital-logo.png') }}" alt="" height="16">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ url('/dashboard') }}" class="side-nav-link">
                            {{-- <i class="uil-home-alt"></i> --}}
                            {{-- <i class="fa-regular fa-house" style="color: white;"></i> --}}
                            <i class='bx bxs-home'></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                            aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class='bx bxs-book-bookmark'></i>
                            <!-- <span class="badge bg-success float-end">4</span> -->
                            <span>Antrian Poli</span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ url('/bookantriansekarang') }}">Antrian Sekarang</a>
                                </li>
                                <li>
                                    <a href="{{ url('/bookantrianselesai') }}">Antrian Selesai</a>
                                </li>
                                <li>
                                    <a href="{{ url('/book') }}">Semua Book</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- <li class="side-nav-item">
                        <a href="{{ url('/book') }}" class="side-nav-link">
                            <i class='bx bxs-book'></i>
                            <span>Semua Book</span>
                        </a>
                    </li> --}}
                    <li class="side-nav-item">
                        <a href="{{ url('/pasien') }}" class="side-nav-link">
                            <i class='bx bxs-user'></i>
                            <span>Pasien</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('/dokter') }}" class="side-nav-link">
                            <i class='bx bxs-universal-access'></i>
                            <span>Dokter</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('/poli') }}" class="side-nav-link">
                            <i class='bx bxs-leaf'></i>
                            <span>Poli</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('/pembayaran') }}" class="side-nav-link">
                            <i class='bx bxs-credit-card-front'></i>
                            <span>Pembayaran</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{ url('/admin') }}" class="side-nav-link">
                            <i class='bx bxs-shield-alt-2'></i>
                            <span>Admin</span>
                        </a>
                    </li>
                </ul>
                <!-- End Sidebar -->
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        <?php
                        
                        ?>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ asset('assets/img/admin.jpg') }}" alt="user-image"
                                        class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">
                                        {{ auth()->user()->name }}
                                    </span>
                                    <span class="account-position">Admin</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Action</h6>
                                </div>
                                <!-- item-->
                                <a href="{{ url('sesi/logout') }}" class="dropdown-item notify-item">
                                    <i class='bx bxs-log-out-circle'></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class='bx bx-menu' style="color: #fff"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <!-- <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Search</button>
                            </div>
                        </form> -->
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Puskesmas Sukapura
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- bundle -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- third party js -->
    <!-- <script src="../assets/js/vendor/Chart.bundle.min.js"></script> -->
    <!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
    <script src="{{ asset('assets/js/Chart.js') }}"></script>
    <script src="{{ asset('assets/js/pages/demo.chartjs.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- third party js ends -->


    <!-- demo app -->
    <script src="{{ asset('assets/js/pages/demo.dashboard-analytics.js') }}"></script>
    <!-- end demo js-->


    <!-- third party js -->
    <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('js/pages/demo.datatable-init.js') }}"></script>
    <!-- end demo js-->
</body>

</html>
