<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 00:10:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/favicon.ico">

    <title>Crypto Admin - Responsive Bootstrap Admin HTML Templates + Bitcoin Dashboards + ICO </title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('dash/css/vendors_css.css') }}">
    <!--amcharts -->
    <link href="https://www.amcharts.com/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('dash/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/skin_color.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="hold-transition dark-skin theme-primary sidebar-mini fixed">

<div class="wrapper">
{{--    <div id="loader"></div>--}}

    <header class="main-header dark-skin">
        <div class="d-flex align-items-center logo-box justify-content-start">
            <!-- Logo -->
            <a href="{{ route('index') }}" class="logo">
                <!-- logo-->
                <div class="logo-mini w-30">
                    <span class="light-logo"><img src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/logo-letter.png" alt="logo"></span>
                    <span class="dark-logo"><img src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/logo-letter.png" alt="logo"></span>
                </div>
                <div class="logo-lg">
                    <span class="light-logo"><img src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/logo-dark-text.png" alt="logo"></span>
                    <span class="dark-logo"><img src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/logo-light-text.png" alt="logo"></span>
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item">
                        <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                            <i data-feather="align-left"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-primary-light" title="Full Screen">
                            <i data-feather="maximize"></i>
                        </a>
                    </li>


                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="User">
                            <i data-feather="user"></i>
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="route('logout')"
                                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <i class="ti-lock text-muted me-2"></i> Logout</a>
                                </form>

                            </li>
                        </ul>
                    </li>



                </ul>
            </div>
        </nav>
    </header>

    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 100%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li>
                            <a href="currency_exchange.html">
                                <i class="fas fa-tachometer-alt"></i>
                                <span style="margin-left: -15px;">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="currency_exchange.html">
                                <i class="fas fa-arrow-down"></i>
                                <span style="margin-left: -15px;">Deposit</span>
                            </a>
                        </li>
                        <li>
                            <a href="currency_exchange.html">
                                <i class="far fa-arrow-alt-circle-up"></i>
                                <span style="margin-left: -15px;">Withdraw</span>
                            </a>
                        </li>
                        <li>
                            <a href="currency_exchange.html">
                                <i class="fas fa-history"></i>
                                <span style="margin-left: -15px;">Transactions</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="pie-chart"></i>
                                <span>Initial Coin Offering</span>
                                <span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="ico_distribution_countdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Countdown</a></li>
                                <li><a href="ico_roadmap_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Roadmap/Timeline</a></li>
                                <li><a href="ico_progress.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bar</a></li>
                                <li><a href="ico_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Details</a></li>
                                <li><a href="ico_listing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ICO Listing</a></li>
                                <li><a href="ico_filter.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ICO Listing - Filters</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="sidebar-widgets">
                        <div class="copyright text-center m-25">
                            <p><strong class="d-block">{{ env('APP_NAME') }}</strong> © {{ Date('Y') }} All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://themeforest.net/item/crypto-admin-responsive-bootstrap-4-admin-html-templates/21604673" target="_blank">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2022 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
    </footer>


    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->




<!-- Vendor JS -->
<script src="{{ asset('dash/js/vendors.min.js') }}"></script>
<script src="{{ asset('dash/js/pages/chat-popup.js') }}"></script>
<script src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/assets/icons/feather-icons/feather.min.js"></script>

<script src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
<script src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/assets/vendor_components/Flot/jquery.flot.js"></script>
<script src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/assets/vendor_components/Flot/jquery.flot.resize.js"></script>
<script src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/assets/vendor_components/Flot/jquery.flot.pie.js"></script>
<script src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/assets/vendor_components/Flot/jquery.flot.categories.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/gauge.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/amstock.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/plugins/dataloader/dataloader.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/patterns.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>
<script src="https://crypto-admin-templates.multipurposethemes.com/sass/bs5/assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>

<!-- Crypto Admin App -->
<script src="{{ asset('dash/js/template.js') }}"></script>
<script src="{{ asset('dash/js/pages/dashboard32.js') }}"></script>
<script src="{{ asset('dash/js/pages/dashboard32-chart.js') }}"></script>
<script src="{{ asset('dash/js/pages/widget-flot-charts.js') }}"></script>

</body>

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 00:10:14 GMT -->
</html>
