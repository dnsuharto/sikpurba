<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dropify.min.css') }}">
        <!-- Styles -->
       
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                         @if(!Auth::check())
                        
                    <!-- Kalo tidak login  -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('HomeController@index') }}">Home <span class="sr-only" >(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('LoginController@login') }}">Login</a>
                        </li>
                        @else
                        @php
                            $staff = Auth::user();
                        @endphp

                     <!-- Kalo login  -->
                        @if($staff->role == 'staff_tu')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('StaffTu\DashboardController@index') }}">Dashboard <span class="sr-only" >(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('StaffTu\StaffController@index') }}">STAFF<span class="sr-only" >(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('StaffTu\PengunjungController@index') }}">PENGUNJUNG<span class="sr-only" >(current)</span></a>
                        </li>
                        @endif

                      <!-- Tombol Dashboard -->
                        @if($staff->role == 'staff_peraga')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('StaffPeraga\DashboardController@index') }}">Dashboard <span class="sr-only" >(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('StaffPeraga\DashboardController@pengajuan') }}">Tambah Pengajuan <span class="sr-only" >(current)</span></a>
                        </li>
                        @endif

                        @if($staff->role == 'staff_dokumen')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('StaffDokumen\DashboardController@index') }}">Dashboard <span class="sr-only" >(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('StaffDokumen\KoleksiController@index') }}">Data Koleksi <span class="sr-only" >(current)</span></a>
                        </li>
                        
                        @endif


                        @if($staff->role == 'kepala_museum')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('KepalaMuseum\DashboardController@index') }}">Dashboard <span class="sr-only" >(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('KepalaMuseum\KoleksiController@index') }}">Koleksi<span class="sr-only" >(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('KepalaMuseum\PengajuanController@index') }}">Pengajuan<span class="sr-only" >(current)</span></a>
                        </li>
                        @endif
                        

                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('LoginController@logout') }}">Logout</a>
                        </li
                    @endif
                </ul>
            </div>
        </nav>
        @yield('body')
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}?v=baru"></script>

        <script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/dropify.js') }}"></script>

        @section('script')

        @show
    </body>
</html>
