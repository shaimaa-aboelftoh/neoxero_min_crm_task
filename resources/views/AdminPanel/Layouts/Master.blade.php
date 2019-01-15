<!DOCTYPE html>
<html lang="{{trans('Admin.lang')}}" dir="{{trans('Admin.dir')}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/images/favicon.ico">
    <!-- App title -->
    <title>Zircos - Responsive Admin Dashboard Template</title>

    <!-- App css -->
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/custom-css{{trans('Admin.folderDir')}}/bootstrap.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/custom-css{{trans('Admin.folderDir')}}/core.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/custom-css{{trans('Admin.folderDir')}}/components.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/custom-css{{trans('Admin.folderDir')}}/icons.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/custom-css{{trans('Admin.folderDir')}}/pages.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/custom-css{{trans('Admin.folderDir')}}/menu.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/custom-css{{trans('Admin.folderDir')}}/responsive.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/assets/custom-css{{trans('Admin.folderDir')}}/custom.css"
          rel="stylesheet" type="text/css"/>
    <!-- Sweet Alert -->
    <link href="{{url('/')}}/ProjectAttachments/AdminAssets/plugins/custom-bootstrap-sweetalert{{trans('Admin.folderDir')}}/sweet-alert.css"
          rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="{{url('/')}}/ProjectAttachments/AdminAssets/plugins/switchery/switchery.min.css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/modernizr.min.js"></script>

    @yield('style')
</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="spinner-wrapper">
                <div class="rotator">
                    <div class="inner-spin"></div>
                    <div class="inner-spin"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{url('/')}}" class="logo"><span>Mini-CRM Task</span><i class="mdi mdi-cube"></i></a>
            <!-- Image logo -->
            <!--<a href="index.html" class="logo">-->
            <!--<span>-->
        <!--<img src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/images/logo.png" alt="" height="30">-->
            <!--</span>-->
            <!--<i>-->
        <!--<img src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/images/logo_sm.png" alt="" height="28">-->
            <!--</i>-->
            <!--</a>-->
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Navbar-left -->
                <ul class="nav navbar-nav navbar-left">

                    <!--
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                   class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="hidden-xs">
                        <a href="#" class="menu-item waves-effect waves-light">New</a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="dropdown-toggle menu-item waves-effect waves-light" href="#" aria-expanded="false">English
                            <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>-->
                </ul>

                <!-- Right(Notification) -->
                <ul class="nav navbar-nav navbar-right">

                {{--<li>
                    <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <span class="badge up bg-primary">4</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                        <li>
                            <h5>Notifications</h5>
                        </li>
                        <li>
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="user-list-item">
                                <div class="icon bg-danger">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="all-msgs text-center">
                            <p class="m-0"><a href="#">See all Notification</a></p>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                        <i class="mdi mdi-email"></i>
                        <span class="badge up bg-danger">8</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                        <li>
                            <h5>Messages</h5>
                        </li>
                        <li>
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-message-text-outline"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Patricia Beach</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-message-text-outline"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Connie Lucas</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-message-text-outline"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Margaret Becker</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="all-msgs text-center">
                            <p class="m-0"><a href="#">See all Messages</a></p>
                        </li>
                    </ul>
                </li>--}}

                <!-- <li>
                         <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                             <i class="mdi mdi-settings"></i>
                         </a>
                     </li>-->

                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown"
                           aria-expanded="true">
                            <img src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/images/avatar2.png"
                                 alt="user-img" class="img-circle user-img">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li>
                                <h5>{{auth()->user()->name}}</h5>
                            </li>

                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off m-r-5"></i> Logout
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                    <li>
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul> <!-- end navbar-right -->

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!--<div class="user-details">
                    <div class="overlay"></div>
                    <div class="text-center">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <div>
                            <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Daniel Syme <span class="mdi mdi-menu-down"></span></a>
                        </div>
                    </div>
                </div>-->

                <div class="dropdown" id="setting-dropdown">
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="mdi mdi-face-profile m-r-5"></i> Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="mdi mdi-account-settings-variant m-r-5"></i> Settings</a>
                        </li>
                        <li><a href="javascript:void(0)"><i class="mdi mdi-lock m-r-5"></i> Lock screen</a></li>
                        <li><a href="javascript:void(0)"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                    </ul>
                </div>

                @include('AdminPanel.Layouts.Menu')
            </div>

            <!-- Sidebar -->
            <div class="clearfix"></div>

            {{--  <div class="help-box">
                  <h5 class="text-muted m-t-0">For Help ?</h5>
                  <p class=""><span class="text-dark"><b>Email:</b></span> <br/> support@support.com</p>
                  <p class="m-b-0"><span class="text-dark"><b>Call:</b></span> <br/> (+123) 123 456 789</p>
              </div>--}}

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="m-t-20">
                @if(session('Success') != '')
                    <div class="alert alert-icon alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="mdi mdi-check-all"></i>
                        <strong>جيد ! </strong>{{session('Success')}}
                    </div>
                @endif

                @if(session('Faild') != '')
                    <div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <i class="mdi mdi-block-helper"></i>
                        <strong>عفواً ! </strong> {{session('Faild')}}
                    </div>
                @endif
            </div>

            @yield('content')

        </div> <!-- content -->

        <footer class="footer text-right">
            2018 © Shaimaa Abo Elftoh.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="mdi mdi-close-circle-outline"></i>
        </a>
        <h4 class="">Settings</h4>
        <div class="setting-list nicescroll">
            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Notifications</h5>
                    <p class="text-muted m-b-0">
                        <small>Do you need them?</small>
                    </p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">API Access</h5>
                    <p class="m-b-0 text-muted">
                        <small>Enable/Disable access</small>
                    </p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Auto Updates</h5>
                    <p class="m-b-0 text-muted">
                        <small>Keep up to date</small>
                    </p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Online Status</h5>
                    <p class="m-b-0 text-muted">
                        <small>Show your status to all</small>
                    </p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/jquery.min.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/detect.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/fastclick.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/jquery.blockUI.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/waves.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/jquery.slimscroll.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/jquery.scrollTo.min.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/plugins/switchery/switchery.min.js"></script>

<!-- Counter js  -->
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/plugins/counterup/jquery.counterup.min.js"></script>

{{--
<!-- Dashboard init -->
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/pages/jquery.dashboard.js"></script>
--}}

<!-- App js -->
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/jquery.core.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/js/jquery.app.js"></script>

<!-- Sweet-Alert  -->
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/plugins/custom-bootstrap-sweetalert{{trans('Admin.folderDir')}}/sweet-alert.min.js"></script>
<script src="{{url('/')}}/ProjectAttachments/AdminAssets/assets/pages/custom-jquery.sweet-alert.init{{trans('Admin.folderDir')}}.js"></script>

@yield('script')


</body>
</html>
