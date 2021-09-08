<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Multiple Perspektif Dalam Identifikasi Profile User Dan Smartphone Dengan Metode Fuzzy Analytical Hierarchy
        Process ( F-AHP )</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Impelemntasi BPNN." name="Klasifikasi Menopause dengan BPNN" />
    <meta content="BPNN" name="azhmif" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/pict/neuron.png">


    <!-- third party css -->
    <link href="/assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive Table css -->
    <link href="/assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <style>
        .clickable {
            cursor: pointer;
        }

    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">




                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h6 class="m-0">
                                Welcome !
                            </h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="dripicons-user"></i>
                            <span>My Account</span>
                        </a>



                        <div class="dropdown-divider"></div>


                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>


            </ul>

            <ul class="list-unstyled menu-left mb-0">
                <li class="float-left">
                    <a href="/" class="logo">
                        <span class="logo-lg">
                            <img src="/pict/neuron.png" alt="" height="80">
                        </span>
                        <span class="logo-sm">
                            <img src="/pict/neuron.png" alt="" height="80">
                        </span>
                    </a>
                </li>
                <li class="float-left">
                    <a class="button-menu-mobile navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Navigation</li>
                        @if(Auth::user()->level == "0")
                        <li>
                            <a href="/" @yield('beranda')>
                                <i class="dripicons-meter"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                                <a href="/kriteria">
                                    <i class="mdi mdi-database"></i> <span> Kriteria </span>
                                </a>
                            </li>
                            <li>
                                    <a href="/profile/data">
                                        <i class="mdi mdi-database"></i> <span> Data profile </span>
                                    </a>
                                </li>
                                @endif
                                @if(Auth::user()->level == "1")
                        <li>
                            <a href="/profile">
                                <i class="mdi mdi-database"></i> <span> profile </span>
                            </a>
                        </li>

                        <li>
                            <a href="/spesifikasi">
                                <i class="mdi mdi-database"></i> <span> spesifikasi </span>
                            </a>
                        </li>
                        @endif
                        {{-- <li>
                            <a href="/alternatif/all">
                                <i class="mdi mdi-database"></i> <span> all alternatif</span>
                            </a>
                        </li> --}}
                        @if(Auth::user()->level == "0")
                        <li>
                                <a href="/alternatif">
                                    <i class="mdi mdi-database"></i> <span> alternatif</span>
                                </a>
                            </li>

                            <li>
                                <a href="/tambah_user">
                                    <i class="mdi mdi-database"></i> <span> tambah user</span>
                                </a>
                            </li>
                            @endif

                    </ul>

                </div>
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

                <!-- Start Content-->

                @yield('konten')
            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            2018 - 2019 &copy; Greeva theme by <a href="">Coderthemes</a>
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


    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <!-- Vendor js -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- datatable js -->
    <script src="/assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables/responsive.bootstrap4.min.js"></script>

    <script src="/assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="/assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="/assets/libs/datatables/buttons.flash.min.js"></script>
    <script src="/assets/libs/datatables/buttons.print.min.js"></script>

    <script src="/assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="/assets/libs/datatables/dataTables.select.min.js"></script>

    <!-- Datatables init -->
    <script src="/assets/js/pages/datatables.init.js"></script>

    <!-- Responsive Table js -->
    <script src="/assets/libs/rwd-table/rwd-table.min.js"></script>
    <!-- App js -->
    <script src="/assets/js/app.min.js"></script>
    <script>
        $(document).on('click', '.panel div.clickable', function (e) {
            var $this = $(this); //Heading
            var $panel = $this.parent('.panel');
            var $panel_body = $panel.children('.panel-body');
            var $display = $panel_body.css('display');

            if ($display == 'block') {
                $panel_body.slideUp();
            } else if ($display == 'none') {
                $panel_body.slideDown();
            }
        });

        $(document).ready(function (e) {
            var $classy = '.panel.autocollapse';

            var $found = $($classy);
            $found.find('.panel-body').hide();
            $found.removeClass($classy);
        });
        ''

    </script>
</body>

</html>
