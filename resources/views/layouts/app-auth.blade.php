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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
</head>
<body>
    <nav class="navbar is-light">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <span class="icon">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span>Back</span>
                </a>
                <div class="navbar-burger burger is-active" data-target="navbarTop">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        
            <div id="navbarTop" class="navbar-menu">
                <div class="navbar-start">
                    
                </div>
                <div class="navbar-end">
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
        
                </div>
        
            </div>
        </nav>

        @yield('content')

        <footer class="footer has-background-white">
                <div class="content has-text-centered">
                    <p>
                        <strong>&copy; {{ date('Y') }} Idbookstore. All rights reserved.</strong>
                    </p>
                    <img src="{{ asset('img/logoum1.png') }}" alt="" style="width:auto;height:50px;">
                    <img src="{{ asset('img/logoum2.png') }}" alt="" style="width:auto;height:50px;">
                    <img src="{{ asset('img/inkubis.png') }}" alt="" style="width:auto;height:50px;">
                </div>
              </footer>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</body>

</html>
