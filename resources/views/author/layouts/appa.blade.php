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
                            <a class="navbar-item" href="{{ url('/author/register') }}">
                                Register
                            </a>
                            <a class="navbar-item" href="{{ url('/author') }}">
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
    <br><br>
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

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('fontawesome/js/fontawesome.min.js') }}"></script>
    <script src="{{ URL::asset('fontawesome/js/all.min.js') }}"></script>
</body>
</html>