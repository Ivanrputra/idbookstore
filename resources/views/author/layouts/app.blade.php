<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Idbookstore - Interactive Digital Book') }}</title>

    <link rel="shortcut icon" href="{{URL::asset('img/IDBOOK_ico2.ico')}}" >
    <link rel="stylesheet" href="{{ URL::asset('css/bulma.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/sweetalert.css') }}">
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <style>
        html,
        body {
            background-color: #f5f5f5;
        }

        .afterheader {
            margin-top: 70px;
        }

        .navbar {
            border-top: 6px solid #fb2;
        }
    </style>
</head>

<body>
    <nav class="navbar is-white is-fixed-top">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img src="{{ asset('img/IDBOOK_sm.png') }}" alt="idbookstore">
                    &nbsp; <strong>AUTHOR</strong>
                </a>

                <div class="navbar-burger burger" data-target="navMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">

                </div>
                <div class="navbar-end">
                        <a href="#" class="navbar-item">

                            <span class="icon">
                                <i class="fas fa-user-circle"></i>
                            </span>
                            <span>{{ Auth::guard('authors')->user()->name }}</span>
                        </a>
                    <!-- hide if don't have session login -->
                    <a href="{{ url('/author/logout') }}" class="navbar-item">

                        <span>Logout</span>
                        <span class="icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="afterheader">
        <div class="container">
            <div class="columns">
                <div class="column is-2">
                    <aside class="menu is-hidden-mobile" style="position: fixed">
                        <p class="menu-label">
                            General
                        </p>
                        <ul class="menu-list">
                            <li>
                                <a href="{{ url('/author/home') }}">
                                    <span class="icon">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </span>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <p class="menu-label">
                            Book
                        </p>
                        <ul class="menu-list">
                            <li>
                                <a href="{{ url('/author/upload') }}">
                                    <span class="icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span>Upload</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/author/listbuku') }}">
                                    <span class="icon">
                                        <i class="fas fa-list"></i>
                                    </span>
                                    <span>List</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/author/listdocs') }}">
                                    <span class="icon">
                                        <i class="fas fa-list"></i>
                                    </span>
                                    <span>List Docs</span>
                                </a>
                            </li>
                        </ul>
                        
                        <p class="menu-label">
                            Download Template
                        </p>
                        <ul class="menu-list">
                            <li>
                                <a href="{{ url('/author/downtemplatecover')}}">
                                    <span class="icon">
                                        <i class="fas fa-file-image"></i>
                                    </span>
                                    <span>Cover</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/author/downtemplateepub')}}">
                                    <span class="icon">
                                        <i class="fas fa-book"></i>
                                    </span>
                                    <span>EPUB</span>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="column is-10">
                    @yield('content')
                    <br>
                    <footer class="footer has-background-light">
                        <div class="content has-text-centered">
                            <p>
                                <strong>&copy; {{ date('Y') }} Idbookstore. All rights reserved.</strong>
                            </p>
                            <img src="{{ asset('img/logoum1.png') }}" alt="" style="width:auto;height:50px;">
                            <img src="{{ asset('img/logoum2.png') }}" alt="" style="width:auto;height:50px;">
                            <img src="{{ asset('img/inkubis.png') }}" alt="" style="width:auto;height:50px;">

                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('fontawesome/js/fontawesome.min.js') }}"></script>
    <script src="{{ URL::asset('fontawesome/js/all.min.js') }}"></script>
    <script src="{{ URL::asset('js/app.js')}}"></script>
    <script src="{{ URL::asset('js/script.js')}}"></script>
<script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
<!-- Include this after the sweet alert js file -->
@include('sweet::alert')
</body>

</html>