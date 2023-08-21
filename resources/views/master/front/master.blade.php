<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Revolve - Personal Magazine blog Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- theme meta -->
    <meta name="theme-name" content="revolve" />

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('/')}}website/images/favicon.ico" type="image/x-icon">

    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Themify -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/slick-carousel/slick.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/plugins/magnific-popup/magnific-popup.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
</head>
<body>

<header class="header-top bg-grey justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-4 text-center d-none d-lg-block">
                <a class="navbar-brand " href="{{route('home')}}">
                    <img src="{{asset('/')}}website/images/logo.png" alt="" class="img-fluid">
                </a>
            </div>

            <div class="col-lg-8 col-md-12">
                <nav class="navbar navbar-expand-lg navigation-2 navigation">
                    <a class="navbar-brand text-uppercase d-lg-none" href="#">
                        <img src="{{asset('/')}}website/images/logo.png" alt="" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul id="menu" class="menu navbar-nav mx-auto">
                            <li class="nav-item ">
                                <a class="nav-link " href="{{route('home')}}" id="" role="button" >
                                    Home
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('blog-category')}}" id="" role="button" >
                                    Blog Category
                                </a>

                            </li>

                            <li class="nav-item">
                                <a href="{{route('contact-page')}}" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>


                    </div>
                </nav>
            </div>


        </div>
    </div>
</header>

@yield('body')

{{--FOOTER--}}
<section class="footer-2 section-padding gray-bg pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="subscribe-footer text-center">
                    <div class="form-group mb-0">
                        <h2 class="mb-3">Subscribe Newsletter</h2>
                        <p class="mb-4">Subscribe my Newsletter for new blog posts , tips and info.<p>
                        <div class="form-group form-row align-items-center mb-0">
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="col-sm-3">
                                <a href="#" class="btn btn-dark ">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm mt-5 pt-4 border-top">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline footer-socials-2 text-center">
                        <li class="list-inline-item"><a href="#">Privacy policy</a></li>
                        <li class="list-inline-item"><a href="#">Support</a></li>
                        <li class="list-inline-item"><a href="#">About</a></li>
                        <li class="list-inline-item"><a href="#">Contact</a></li>
                        <li class="list-inline-item"><a href="#">Terms</a></li>
                        <li class="list-inline-item"><a href="#">Category</a></li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="copyright text-center ">
                        @ copyright all reserved to <a href="https://themefisher.com/">themefisher.com</a>-2019
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--END FOOTER--}}

<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="{{asset('/')}}website/plugins/jquery/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script src="{{asset('/')}}website/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}website/plugins/bootstrap/js/popper.min.js"></script>
<!-- Owl caeousel -->
<script src="{{asset('/')}}website/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('/')}}website/plugins/slick-carousel/slick.min.js"></script>
<script src="{{asset('/')}}website/plugins/magnific-popup/magnific-popup.js"></script>
<!-- Instagram Feed Js -->
<script src="{{asset('/')}}website/plugins/instafeed-js/instafeed.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{asset('/')}}website/plugins/google-map/gmap.js"></script>
<!-- main js -->
<script src="{{asset('/')}}website/js/custom.js"></script>


</body>
</html>
