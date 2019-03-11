<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Idbookstore</title>

    <link rel="shortcut icon" href="{{URL::asset('img/IDBOOK_ico2.ico')}}" >
    <link rel="stylesheet" href="{{ URL::asset('css/bulma.min.css') }}">
    <style>
        :root {
            --cc-bg-color: #333;
            --left-bg-color: rgba(247,169,33,0.8);
            --right-bg-color: rgba(29, 143, 240, 0.8);
            --hover-width: 75%;
            --other-width: 25%;
            --speed: 1000ms;
        }

        html,
        body {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
        }


        .cc {
            position: relative;
            width: 100%;
            height: 100%;
            background: var(--cc-bg-color);
        }

        .split {
            position: absolute;
            width: 50%;
            height: 100%;
            overflow: hidden;
            background: url("{{asset('img/bghome2.jpg')}}") center center no-repeat;
        }

        .split div {
            position: absolute;
            left: 50%;
            top: 20%;
            transform: translateX(-50%);
            white-space: nowrap;
            
        }

        .split.left {
            left: 0;
            background-size: cover;
        }

        .split.left:before {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            background: var(--left-bg-color);
        }

        .split.right {
            right: 0;
            background-size: cover;
        }

        .split.right:before {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            background: var(--right-bg-color);
        }

        .split.right div {
            text-align: right;
        }

        .split.left,
        .split.right,
        .split.right:before,
        .split.left:before {
            transition: var(--speed) all ease-in-out;
        }

        .hover-left .left {
            width: var(--hover-width);
        }

        .hover-left .right {
            width: var(--other-width);
        }

        .hover-left .right:before {
            z-index: 2;
        }


        .hover-right .right {
            width: var(--hover-width);
        }

        .hover-right .left {
            width: var(--other-width);
        }

        .hover-right .left:before {
            z-index: 2;
        }

        .logo {
            width: 100%;
            left: 36%;
            position: absolute;
            top: 10px;
            z-index: 10;

        }

        .logo figure {
            width: 300px;
            padding: 5px 15px;
            border-radius: 10px;
        }

        @media only screen and (max-width: 768px) {
            .logo {
                top: 0;
                left: 0;
                width: 100%;
                background: white;
                padding: 10px;
            }

            .logo figure {
                width: 150px;
                -webkit-filter: drop-shadow(0px 0px 0px #333);
                filter: drop-shadow(0px 0px 0px #333);
            }
        }
    </style>
</head>

<body>
    <div class="logo">
        <figure class="image">
            <img src="{{asset('img/IDBOOK_PNk.png')}}" alt="">
        </figure>
    </div>
    <div class="cc is-hidden-touch">
        <div class="split left">
            <div>
                <p class="has-text-white is-size-6-touch">
                    <i class="fas fa-book fa-5x"></i>
                </p>
                <br>
                <h1 class="title has-text-white is-size-4-touch">Book</h1>
                <br>
                <h2 class="subtitle has-text-white is-size-4 is-size-5-touch">For you a book writer<br>
                    and want to publish your book easily.</h2>
                <a href="/author" class="button is-large is-danger is-inverted is-outlined">

                    <span class="icon">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span>Go To</span>
                </a>
            </div>
        </div>
        <div class="split right">
            <div>
                <p class="has-text-white is-size-6-touch">
                    <i class="fas fa-shopping-cart fa-5x"></i>
                </p>
                <br>
                <h1 class="title is-size-4-touch has-text-white">Store</h1>
                <br>
                <h2 class="subtitle is-size-4 is-size-5-touch has-text-white">For you a reader and search for<br>
                    interactive digital books online.</h2>
                <a href="/home" class="button is-large is-info is-inverted is-outlined">
                    <span>Go To</span>
                    <span class="icon">
                        <i class="fas fa-arrow-right"></i>
                    </span>

                </a>
            </div>
        </div>
    </div>
    <!-- for mobile -->
    <div class="is-hidden-desktop" style="margin-top:50px">
        <div class="columns is-gapless">
            <div class="column">
                <div class="section" style="text-align: center;background:linear-gradient(rgba(247,169,33,0.8),rgba(247,169,33,0.8)),url('{{asset('img/bghome2.jpg')}}'); background-size: cover;">

                    <br>
                    <h1 class="title has-text-white is-size-3-touch">Book</h1>
                    <br>
                    <h2 class="subtitle has-text-white is-size-5-touch">For you a book writer<br>
                        and want to publish your book easily.</h2>
                    <a href="/author" class="button is-large is-danger is-inverted is-outlined">

                        <span class="icon">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span>Go To</span>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="section has-background-info has-text-white" style="text-align: center;background:linear-gradient(rgba(29,143,240,0.8),rgba(29,143,240,0.8)),url('{{asset('img/bghome2.jpg')}}'); background-size: cover;">

                    <h1 class="title is-size-3-touch has-text-white">Store</h1>
                    <br>
                    <h2 class="subtitle is-size-5-touch has-text-white">For you a reader and search for<br>
                        interactive digital books online.</h2>
                    <a href="/home" class="button is-large is-info is-inverted is-outlined">
                        <span>Go To</span>
                        <span class="icon">
                            <i class="fas fa-arrow-right"></i>
                        </span>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <script defer src="{{ URL::asset('js/fontawesome.js') }}"></script>
    <script>
        const left = document.querySelector(".left");
        const right = document.querySelector(".right");
        const cc = document.querySelector(".cc");

        left.addEventListener("mouseenter", () => {
            cc.classList.add("hover-left");
        });

        left.addEventListener("mouseleave", () => {
            cc.classList.remove("hover-left");
        });

        right.addEventListener("mouseenter", () => {
            cc.classList.add("hover-right");
        });

        right.addEventListener("mouseleave", () => {
            cc.classList.remove("hover-right");
        });
    </script>
</body>

</html>