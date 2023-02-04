
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simonev Dokrenda </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('template_pengunjung3')}}/assets/images/tanahdatar.png" type="image/x-icon">
    <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('template_pengunjung3')}}/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('template_pengunjung3')}}/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('template_pengunjung3')}}/assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('template_pengunjung3')}}/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template_pengunjung3')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('template_pengunjung3')}}/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <script type="text/javascript" src="{{asset('template_pengunjung3')}}/assets/js/jquery-3.5.1.min.js"></script>







</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <div class="mobile-search waves-effect waves-light">
                        <div class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="index.html">
                        <h6>Simonev Dokrenda</h6>
                    </a>
                    <a class="mobile-options waves-effect waves-light">
                        <i class="ti-more"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                        </li>
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="ti-fullscreen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="user-profile header-notification">
                            <a href="#!" class="waves-effect waves-light">
                                <img src="{{asset('template_pengunjung3')}}/assets/images/avatar-blank.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>Administrator</span>
                                <i class="ti-angle-down"></i>
                            </a>
                            <ul class="show-notification profile-notification">
                                <li class="waves-effect waves-light">
                                    <a href="#!">
                                        <i class="ti-settings"></i> Settings
                                    </a>
                                </li>
                                <li class="waves-effect waves-light">
                                    <a href="user-profile.html">
                                        <i class="ti-user"></i> Profile
                                    </a>
                                </li>

                                <li class="waves-effect waves-light">
                                    <a href="auth-lock-screen.html">

                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">

                                               <i class="ti-lock"></i> {{ __('Logout') }}
                                            </x-dropdown-link>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="">
                            <div class="main-menu-header">
                                <img class="img-80 img-radius" src="{{asset('template_pengunjung3')}}/assets/images/avatar-blank.jpg" alt="User-Profile-Image">
                                <div class="user-details">
                                    <span id="more-details">Administrator<i class="fa fa-caret-down"></i></span>
                                </div>
                            </div>

                            <div class="main-menu-content">
                                <ul>
                                    <li class="more-details">
                                        <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                                        <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-15 p-b-0">
                            <form class="form-material">
                                <div class="form-group form-primary">
                                    <input type="text" name="footer-email" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Data</label>
                                </div>
                            </form>
                        </div>
                        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                <a href="berandaadmin" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>

                        </ul>

                        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Data</div>
                        <ul class="pcoded-item pcoded-left-item">

                            <li class="pcoded-hasmenu active pcoded-trigger">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Data Master</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    @if (Auth::user()->role=="1")
                                    <li class=" ">
                                        <a href="urusanadmin" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Data Urusan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    @endif
                                    <li class=" ">
                                        <a href="bidangurusanadmin" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Data Bidang Urusan</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="sample-page.html" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Data Program</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <div class="pcoded-navigation-label" data-i18n="nav.category.other">Other</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu ">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Logout</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Sistem Infromasi Monitoring dan Evaluasi Dokumen Perencanaan Daerah</h5>
                                        <h6 class="m-b-10">Pemerintah Kabupaten Tanah Datar</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="berandaadmin"> <i class="fa fa-home"></i> </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">

                                                    @yield('content')
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
</div>



    <script type="text/javascript" src="{{asset('template_pengunjung3')}}/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('template_pengunjung3')}}/assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="{{asset('template_pengunjung3')}}/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('template_pengunjung3')}}/assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="{{asset('template_pengunjung3')}}/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('template_pengunjung3')}}/assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="{{asset('template_pengunjung3')}}/assets/js/SmoothScroll.js"></script>
    <script src="{{asset('template_pengunjung3')}}/assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<script src="{{asset('template_pengunjung3')}}/assets/js/pcoded.min.js"></script>
<script src="{{asset('template_pengunjung3')}}/assets/js/vertical-layout.min.js "></script>
<script src="{{asset('template_pengunjung3')}}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('template_pengunjung3')}}/assets/js/script.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>



</body>

</html>
