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
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" 
                        href="/login" >
                        <img src="/assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                           LOGIN<i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
<br/><br/><br/><br/>
        <div class="content">
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
