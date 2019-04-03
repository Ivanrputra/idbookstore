<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{URL::asset('img/IDBOOK_ico2.ico')}}">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Idbookstore</title>

	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{URL::asset('landingpage/css/linearicons.css')}}">
		<link rel="stylesheet" href="{{URL::asset('landingpage/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('landingpage/css/animate.css')}}">
		<link rel="stylesheet" href="{{URL::asset('landingpage/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{URL::asset('landingpage/css/main.css')}}">
</head>

<body>
    <div id="top"></div>
    <!-- Start Header Area -->
    <header class="default-header">
        <div class="sticky-header">
            <div class="container">
                <div class="header-content d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="#top" class="smooth"><img class="sticky-logo" src="{{URL::asset('img/IDBOOK_PNk.png')}}" alt=""></a>
                    </div>
                    <div class="right-bar d-flex align-items-center">
                        <nav class="d-flex align-items-center">
                            <ul class="main-menu">
                                <li><a href="#top">Home</a></li>
                                <li><a href="#description">Description</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#team">Team</a></li>
                            </ul>
                            <a href="#" class="mobile-btn" style="color:#333"><span class="lnr lnr-menu"></span></a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Banner Area -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen justify-content-center align-items-center">
                <div class="col-lg-8">
                    <div class="banner-content text-center">
                        <h1 class="text-white">
                            Welcome to Idbookstore
                            <i class="fa fa-book"></i>
                        </h1>
                        <h4 class="text-white">Interactive Digital Book and Store</h4>
                        <a href="#features" class="smooth primary-btn banner-btn">Explore Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <!-- Start About Area -->
    <section id="description" class="section-half gray-bg" style="padding-top:150px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center">
                        <p class="text-uppercase">Description</p>
                        <h3><b>Idbookstore</b> is the first digital book publisher in Indonesia based on disruptive media learning using augmented reality and virtual environment technology.</h3>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- End About Area -->
    <!-- Start Product Area -->
    <section id="services" class="title-bg section-half">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="product-area-title text-center">
                        <p class=" text-uppercase">Why Choose Us</p>
                        <h2 class="h1">We ensure perfect quality digital <br> book for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product">
                        <div class="icon">
                            <span class="lnr lnr-hand"></span>
                        </div>
                        <div class="desc">
                            <h4>Interactive Media</h4>
                            <p>Provide various kinds of interactive media such as audio, video, and augmented reality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product">
                        <div class="icon">
                            <span class="lnr lnr-book"></span>
                        </div>
                        <div class="desc">
                            <h4>EPUB Explorer</h4>
                            <p><br>Still using EPUB for create a good performance book</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product">
                        <div class="icon">
                            <span class="lnr lnr-store"></span>
                        </div>
                        <div class="desc">
                            <h4>Smart Marketplace</h4>
                            <p>Using a book marketplace platform with deep learning technology</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product">
                        <div class="icon">
                            <span class="lnr lnr-smile"></span>
                        </div>
                        <div class="desc">
                            <h4>Easy and Cheaper</h4>
                            <p><br>Easy to create a book and low cost for you</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Product Area -->
    
    <!-- Start Digital Studio -->
    <section id="features" class="studio-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="background:rgb(247,169,33);padding:30px 0">
                    <div class="row">
                        <div class="col-lg-6" align="center">
                            <img src="img/writing.png" style="width:200px;" alt="">
                        </div>
                        <div class="col-lg-6" align="center">
                                <br>
                                <h2 class="h1 text-white text-uppercase mb-20">Writer</h2>
                                <p class="text-white mb-30">For you a book writer <br> and want to publish your book easily.</p>
                                <a href="{{url('/author')}}" class="primary-btn border-white btnblue text-white d-inline-flex align-items-center">Go write<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="padding:30px 50px">
                    <div class="row">
                        <div class="col-lg-6" align="center">
                            <img src="img/shelf.png" style="width:200px" alt="">
                        </div>
                        <div class="col-lg-6" align="center">
                            <br>
                            <h2 class="h1 text-white text-uppercase mb-20">Book Store</h2>
                            <p class="text-white mb-30">For you a reader and search for <br> interactive digital books online.</p>
                        <a href="{{url('/home')}}" class="primary-btn border-white text-white d-inline-flex align-items-center">Go buy<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Digital Studio -->

    <!-- Start shuffle Area -->
    <section id="protfolio">




        <div id="filter-content" class="row no-gutters mt-70">
    
        </div>
    </section>
    <!-- End shuffle Area -->



    <!-- Start Team member Area -->
    <section id="team">
        <div class="container">
            <div class="row justify-content-center" style="margin-top:50px">
                <div class="col-lg-8">
                    <div class="product-area-title text-center">
                        <p class="text-uppercase">Creative People</p>
                        <h2 class="h1">Team work builds trust and <br> trust builds growth</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{URL::asset('img/dicki.jpeg')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">Informatics <br> Student of Universitas Negeri Malang</p>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Dicki Dwi Prasetya</a></h5>
                            <p>Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{URL::asset('img/ivan.jpeg')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">Informatics <br> Student of Universitas Negeri Malang</p>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Ivan Reynaldi Putra</a></h5>
                            <p>Backend Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{URL::asset('img/fandi.jpg')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">Informatics <br> Student of Universitas Negeri Malang</p>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">M. Fandi Arfabuma</a></h5>
                            <p>Frontend Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{URL::asset('img/eko.jpeg')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">Informatics <br> Student of Universitas Negeri Malang</p>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Ahmad Eko Prastiyo</a></h5>
                            <p>Graphic Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{URL::asset('img/aji.jpeg')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">Informatics <br> Student of Universitas Negeri Malang</p>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Sulton Aji Kurniawan</a></h5>
                            <p>AR Media Developer</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-sm-6">
                    <div class="single-member">
                        <div class="thumb relative" style="background: url({{URL::asset('img/maulia.jpeg')}});">
                            <div class="overlay overlay-member d-flex flex-column justify-content-end align-items-center">
                                <p class="text-white">Informatics <br> Student of Universitas Negeri Malang</p>
                            </div>
                        </div>
                        <div class="desc text-center">
                            <h5 class="text-uppercase"><a href="#">Maulia Wijiyanti Hidayah</a></h5>
                            <p>Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team member Area -->

    
    
    <footer class="section-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="text-white text-uppercase mb-20">About Idbookstore</h6>
                        <p class="text-white"><b>Idbookstore</b> is the first digital book publisher in Indonesia based on disruptive media learning using augmented reality and virtual environment technology.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="text-white text-uppercase mb-20">Address</h6>
                        <p class="text-white ">Universitas Negeri Malang, <br> Jalan Semarang No. 5 Malang 65145</p>
                        <h6 class="text-white text-uppercase mb-20">Contact</h6>
                        <p class="text-white ">idbookstore3@gmail.com<br>085645311955</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="text-white text-uppercase mb-20">Navigation Links</h6>
                        <div class="d-flex">
                            <ul class="footer-nav">
                                    <li><a href="#top">Home</a></li>
                                    <li><a href="#description">Description</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#team">Team</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="text-white text-uppercase mb-20">Supported by</h6>
                        <div class="footer-img">
                            <img src="{{URL::asset('img/logoumpng.png')}}" alt="">
                            <img src="{{URL::asset('img/inkubis.png')}}" alt="">
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <div class="footer-bottom d-flex justify-content-between align-items-center">
                <p class="footer-text m-0">Copyright &copy; 2018  |  All rights reserved to <a href="#">Idbookstore.</p>
                <div class="footer-social d-flex align-items-center">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{URL::asset('landingpage/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{URL::asset('landingpage/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('landingpage/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('landingpage/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL::asset('landingpage/js/jquery.sticky.js')}}"></script>
    <script src="{{URL::asset('landingpage/js/mixitup.min.js')}}"></script>
    <script src="{{URL::asset('landingpage/js/main.js')}}"></script>
</body>

</html>