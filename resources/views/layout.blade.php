<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name') }}</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('themes/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('themes/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/dropify.min.css') }}">
        <!-- Styles -->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">

        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="{{ asset('') }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>SIK</b>P</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>SIK</b>PURBA</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            @if(Auth::check())
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('themes/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ Auth::user()->nama }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="{{ asset('themes/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                        <p>
                                            {{ Auth::user()->nama }}
                                            <small>Staff sejak, {{ date('m Y', strtotime(Auth::user()->created_at)) }}</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="{{ action('LoginController@logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        @if(!Auth::check())
                            <li class="header">MENU UTAMA</li>
                            <li><a href="{{ action('HomeController@index') }}"><i class="fa fa-home"></i><span>Home</span></a></li>
                            <li><a href="{{ action('LoginController@login') }}"><i class="fa fa-lock"></i><span>Login</span></a></li>
                        @else
                            @php
                                $staff = Auth::user();
                            @endphp
                            <li class="header">MENU UTAMA</li>

                            <!-- STAFF TU-->
                            @if($staff->role == 'staff_tu')
                            <li>
                                <a href="{{ action('StaffTu\DashboardController@index') }}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('StaffTu\StaffController@index') }}">
                                    <i class="fa fa-user"></i> <span>Staff</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('StaffTu\PengunjungController@index') }}">
                                    <i class="fa fa-group"></i> <span>Pengunjung</span>
                                </a>
                            </li>
                            @endif

                            <!-- STAFF PERAGA-->
                            @if($staff->role == 'staff_peraga')
                            <li>
                                <a href="{{ action('StaffPeraga\DashboardController@index') }}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('StaffPeraga\DashboardController@pengajuan') }}">
                                    <i class="fa fa-file"></i> <span>Pengajuan</span>
                                </a>
                            </li>
                            @endif

                            <!-- STAFF DOKUMEN-->
                            @if($staff->role == 'staff_dokumen')
                            <li>
                                <a href="{{ action('StaffDokumen\DashboardController@index') }}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('StaffDokumen\KoleksiController@index') }}">
                                    <i class="fa fa-file"></i> <span>Koleksi</span>
                                </a>
                            </li>
                            @endif

                            <!-- KEPALA MUSEUM-->
                            @if($staff->role == 'kepala_museum')
                            <li>
                                <a href="{{ action('KepalaMuseum\DashboardController@index') }}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('StaffDokumen\KoleksiController@index') }}">
                                    <i class="fa fa-file"></i> <span>Koleksi</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ action('KepalaMuseum\PengajuanController@konfirmasi') }}">
                                    <i class="fa fa-file"></i> <span>Pengajuan</span>
                                </a>
                            </li>
                            @endif

                        @endif
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

        
            <div class="content-wrapper">
                @yield('body')
            </div>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright &copy; 2019 <a href="{{ asset('') }}">{{ config('app.name') }}</a>.</strong> All rights
                reserved.
            </footer>
        </div>

        <script type="text/javascript" src="{{ asset('js/jquery.js') }}?v=baru"></script>

        <!-- jQuery 3 -->
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- SlimScroll -->
        <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('themes/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('themes/js/demo.js') }}"></script>
        <script>
            $(document).ready(function () {
              $('.sidebar-menu').tree()
            })
        </script>

        <script type="text/javascript" src="{{ asset('js/dropify.js') }}"></script>

    </body>
</html>
