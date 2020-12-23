<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Reconnect') }}</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
             <nav class="navbar-custom">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a class="logo" href="{{ url('/') }}">
                        <span>
                            <img src="assets/images/reconnect11.png" alt="logo-small" width="200" height="70">
                        </span>
                    </a>
                </div>
    
                <ul class="list-unstyled topbar-nav float-right mb-0">

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline nav-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                Notifications (6789)
                            </h6>
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                    <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" a href="{{ route('logout') }}" class="" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>    
                </ul>
    

            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <div class="page-wrapper-img">
            <div class="page-wrapper-img-inner">
                <div class="sidebar-user media">                    
                    <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
                    <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                    <div class="media-body">
                        <h5 class="text-light">{{ Auth::user()->name }}</h5>
                        <ul class="list-unstyled list-inline mb-0 mt-2">
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('logout') }}" class="" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i>
                                    
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>                    
                </div>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            
                            <h4 class="page-title mb-2"><i class="mdi mdi-monitor mr-2"></i>Dashboard</h4>  
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Reconnect</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>                                      
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
                <!-- end page title end breadcrumb -->
            </div><!--end page-wrapper-img-inner-->
        </div><!--end page-wrapper-img-->
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Navbar Custom Menu -->
                <div class="navbar-custom-menu">
                    
                    <div class="container-fluid">
                        <div id="navigation">
                            <!-- Navigation Menu-->
                            <ul class="navigation-menu list-unstyled">
    
                                <li class="has-submenu">
                                    <a href="#">
                                        <i class="mdi mdi-monitor"></i>
                                        Dashboard
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Dashboard</a></li>
                                    </ul>
                                </li>
    
                                <li class="has-submenu">
                                    <a href="#"><i class="fa fa-user"></i>Manage User</a>
                                    <ul class="submenu">
                                        <li><a href="app-chat.html">Create Users</a></li>
                                        <li><a href="app-calendar.html">Create Permission</a></li>
                                        <li><a href="app-contact-list.html">Create Roles</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-book-open-page-variant"></i>Graduate Management</a>
                                    <ul class="submenu">
                                        <li><a href="{{Route ('graduates.create')}}">Entry Graduate</a></li>
                                        <li><a href="{{Route ('graduates.index')}}">View Graduate</a></li>
                                        <li><a href="app-calendar.html">Medical Treatment</a></li>
                                        <li><a href="app-contact-list.html">Therapy Sessions</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-contact-mail"></i>Job Orientation</a>
                                    <ul class="submenu">
                                        <li><a href="app-chat.html">Available Jobs</a></li>
                                        <li><a href="app-calendar.html">Job Recommendation</a></li>
                                    </ul>
                                </li>

                                <li class="has-submenu">
                                    <a href="#"><i class="mdi mdi-buffer"></i>Report</a>
                                    <ul class="submenu">
                                        <li><a href="">Inform</a></li>
                                        <li><a href="app-chat.html">All Reports</a></li>
                                        <li><a href="app-calendar.html">Report To Police</a></li>
                                    </ul>
                                </li>
    
                                
                            <!-- End navigation menu -->
                        </div> <!-- end navigation -->
                    </div> <!-- end container-fluid -->
                </div>
                <!-- end left-sidenav-->
            </div>

            
            @yield('content')

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>