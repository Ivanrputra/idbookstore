<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Idbookstore - Interactive Digital Book') }}</title>
    <link rel="shortcut icon" href="{{URL::asset('img/IDBOOK_ico2.ico')}}" >
    <link rel="stylesheet" href="{{ URL::asset('css/bulma.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/all.min.css') }}">

    <style type="text/css">
        
        .withslickcolumn {
            width: 200px;
            padding: 2px;
            
        }

        .afterheader {
            margin-top: 50px;
        }

        .ribbon {
            z-index: 10; 
            position: absolute;
            margin: 0;
            padding: 17px;
            background-color: #97c040;
        }

        @media only screen and (max-width: 768px) {
            .afterheader {
                margin-top: 25px;
            }
            .ribbon {
                z-index: 10; 
                position: absolute;
                margin: 0;
                padding: 12px;
                background-color: #97c040;
                
            }
        }
    </style>
</head>

<body>
    <!-- ####### Navbar ########## -->
    <nav class="navbar is-info is-fixed-top">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}" style="background:#b7dffa;padding:5">
                <img src="{{URL::asset('img/IDBOOK_sm.png')}}" style="display: inline-block; height: 30px;">
            </a>
            <div class="navbar-item is-hidden-desktop">
                <form action="" role="search">
                    <div class="field has-addons">
                        <div class="control has-icons-left is-small"> <!-- + .is-loading jika ingin ada proses pencarian -->
                            <input class="input is-rounded is-small" type="text" placeholder="Search for Books, Author and more" name="q">
                            <span class="icon is-left">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-default is-rounded is-small">
                                <span class="icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                        <a class="navbar-item is-active" href="{{ url('/home') }}">
                            Home
                        </a>
                        <a class="navbar-item" href="{{ url('/mylibrary') }}">
                            My Library
                        </a>
                        <div class="navbar-item is-hidden-touch">
                            <form action="" role="search">
                                <div class="field has-addons">
                                    <div class="control has-icons-left"> <!-- + .is-loading jika ingin ada proses pencarian -->
                                        <input class="input is-rounded" style="width: 400px" type="text" placeholder="Search for Books, Author and more" name="q">
                                        <span class="icon is-left">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                    <div class="control">
                                        <button type="submit" class="button is-default is-rounded">
                                            <span class="icon">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            <div class="navbar-end">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <a class="navbar-item" href="{{ url('/register') }}">
                        Register
                    </a>
                    <a class="navbar-item" href="{{ url('/login') }}">
                        <span>
                            Login
                        </span>
                        <span class="icon">
                            <i class="fas fa-sign-in-alt"></i>
                        </span>
                    </a>
                @elseif (Auth::check())
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span>
                                {{ Auth::user()->name }}
                            </span>
                        </a>
                        <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="{{ url('/home') }}">
                                Home
                            </a>
                            <a class="navbar-item" href="#">
                                Profil
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <div class="columns afterheader">
        <!-- sidebar for desktop -->
        <div class="column is-2 has-background-white" style="padding: 20px 0 0 30px">
            <aside class="menu is-hidden-mobile has-background-white" style="position: fixed">
                <p class="menu-label">
                    Categories
                </p>
                <ul class="menu-list">
                    <li><a href='/kategori/Biographies'>Biographies</a></li>
                    <li><a href='/kategori/Business'>Business & Investment</a></li>
                    <li><a href='/kategori/Child'>Child Book</a></li>
                    <li><a href='/kategori/Comic'>Comic</a></li>
                    <li><a href='/kategori/Cook'>Cook, Food & Drink</a></li>
                    <li><a href='/kategori/Fiction'>Fiction & Literature</a></li>
                    <li><a href='/kategori/Health'>Health, Mind & Body</a></li>
                    <li><a href='/kategori/History'>History</a></li>
                    <li><a href='/kategori/Religious'>Religious & Spiritual</a></li>
                    <li><a href='/kategori/Romance'>Romance</a></li>
                    <li><a href='/kategori/Technique'>Technique</a></li>
                </ul>
            </aside>
        </div>
        <div class="column is-10">
            @yield('content')
        </div>
    </div>
    <br>
    <footer class="footer has-background-light">
        <div class="content has-text-centered">
            <p>
                <strong>&copy; {{ date('Y') }}</strong>
            </p>
            <img src="{{ asset('img/logoum1.png') }}" alt="" style="width:auto;height:50px;">
            <img src="{{ asset('img/logoum2.png') }}" alt="" style="width:auto;height:50px;">
            <img src="{{ asset('img/inkubis.png') }}" alt="" style="width:auto;height:50px;">
            <img src="{{ asset('img/IDBOOK_PN.png') }}" alt="" style="width:auto;height:50px;">
        </div>
    </footer>
    
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/slick.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script src="{{ URL::asset('fontawesome/js/fontawesome.min.js') }}"></script>
    <script src="{{ URL::asset('fontawesome/js/all.min.js') }}"></script>
    
    
    <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
    
</body>

</html>