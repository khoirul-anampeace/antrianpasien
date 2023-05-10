<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Antrian Pasien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('img/hospital-logo.png') }}">

    <!-- third party css -->
    <link href="{{ asset('css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- Datatables css -->
    <link href="{{ asset('css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{ asset('css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href=".?page=dashboard" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="../assets/images/logomerpati.png" alt="" height="45">
                </span>
                <span class="logo-sm">
                    {{-- <img src="../assets/images/logomerpati_sm.png" alt="" height="45"> --}}
                </span>
            </a>

            <!-- LOGO -->
            <a href=".?page=dashboard " class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="{{ asset('img/hospital-logo.png') }}" alt="" height="16">
                </span>
                <span class="logo-sm">
                    {{-- <img src="{{ asset('img/hospital-logo.png') }}" alt="" height="16"> --}}
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href=".?page=dashboard" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                            aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-table"></i>
                            <!-- <span class="badge bg-success float-end">4</span> -->
                            <span>Transaksi BPJS</span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href=".?page=transaksiBaruLepasKunci">Transaksi Baru</a>
                                </li>
                                <li>
                                    <a href=".?page=pengembalianLepasKunci">Jadwal Pasien</a>
                                </li>
                                <li>
                                    <a href=".?page=semuaLepasKunci">Semua Transaksi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                            aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-table"></i>
                            <!-- <span class="badge bg-success float-end">4</span> -->
                            <span>Transaksi Umum</span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href=".?page=transaksiBaruDenganDriver">Transaksi Baru</a>
                                </li>
                                <li>
                                    <a href=".?page=pengembalianDenganDriver">Jadwal Pasien</a>
                                </li>
                                <li>
                                    <a href=".?page=semuaDenganDriver">Semua Transaksi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a href=".?page=semuaTransaksi" class="side-nav-link">
                            <i class="uil-table"></i>
                            <span>Semua Transaksi</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href=".?page=customer" class="side-nav-link">
                            <i class="uil-users-alt"></i>
                            <span>Pasien</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href=".?page=mobil" class="side-nav-link">
                            <i class="uil-car"></i>
                            <span>Dokter</span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href=".?page=driver" class="side-nav-link">
                            <i class="uil-users-alt"></i>
                            <span></span>
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
                                    <img src="" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Anam</span>
                                    <span class="account-position">Admin</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
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

    <!-- bundle -->
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('js/pages/demo.dashboard.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('js/pages/demo.dashboard.js') }}"></script>
    <!-- end demo js-->
</body>

</html>
