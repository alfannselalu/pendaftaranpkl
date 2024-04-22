<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Era Solution | PKL </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('pkl') }}/assets/images/favicon.ico"> 

        <!-- Bootstrap Css -->
        <link href="{{ asset('pkl') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('pkl') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        {{-- MY STYLE CSS --}}
        {{-- <link rel="stylesheet" href="/css/style.css"> --}}
        <style>
            .footer {
            background: #EFF2F7;
            color: white;
            margin-top: 25rem;
            box-sizing: border-box;


            .contact {
                ul {
                    list-style-type: none;
                }
                li a {
                    color: white;
                    transition: color 0.2s;
                    &:hover {
                        text-decoration: none;
                        color: #4180cb;
                    }
                }
            }
            .about-company {
                i {
                    font-size: 25px;
                }
                a {
                    color: white;
                    transition: color 0.2s;
                    &:hover {
                        color: #4180cb;
                    }
                }
            }
            .maps {
                i {
                    font-size: 18px;
                }
            }
        
        }
        .footer-title {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 500;
            font-size: 18px;
            line-height: 28px;
        }

        </style>

    </head>
    <body class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image:url('../images/3.jpg'); background-size: 100% 100% ; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">

        @include('home.navbar')

        @include('home.home')

         {{-- Footer --}}
         <footer>
            <div class="footer">
                <div class="mt-5 pt-5 pb-5 bg-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 text-light col-md-12 about-company">
                                <a class="navbar-brand" href="/">
                                    <img src="../images/logoEra.png" alt="Era Solution Logo" height="50" class="d-inline-block align-text-top">
                                </a>                                        
                                <p class="pr-lg-5 pr-md-0 text-light mt-3 pt-2 pb-2 fs-5">Software Developer for the Manufacturing Industry in Indonesia, developed specifically for the manufacturing industry to produce solutions that are reliable, integrated and woks.</p>
                                <p class="lh-3 fs-5"> EraSolution is one of Software Development & IT Solution companies in Indonesia which is experienced in the development of Manufacturing Software, especially Production Management Systems, Quality Control Management Systems and Computerized Maintenance Management Systems.</p>
                                <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
                            </div>
                            <div class="col-lg-4 text-light col-md-12 maps">
                                <h4 class="footer-title mt-lg-0 mt-4">CONTACT US</h4>
                                <p>Jl. Ruko Sentra Bisnis 1, RSA 1 No.56, Grand Galaxy City, Kota Bekasi, Jawa Barat 17147 - Indonesia</p>
                                <p class="mb-2 me-2 pe-5"><i class="fa fa-phone mr-2"></i> 021-82751380</p>
                                <a><i class="fa fa-envelope pe-2 mr-2"></i> info@erasolution.co.id</a>
                            </div>
                            <div class="col-lg-3 text-light col-md-12 contact">
                                <h4 class="footer-title mt-lg-0 mt-3">MAPS</h4>
                                <div class="d-flex align-items-stretch">
                                    <div id="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.901104672244!2d106.97073077409704!3d-6.276731761440482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c1e61d9990f%3A0xa816dc20f81927fa!2sPT%20ERA%20KUALITAS%20INFORMASI!5e0!3m2!1sid!2sid!4v1706065100291!5m2!1sid!2sid" width="100%" height="250" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <p class=""><small class="text-light-50 fs-5">© Copyright 2018. All Rights Reserved. Designed by EraSolution</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        
        {{-- End Footer --}}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('pkl') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('pkl') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('pkl') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('pkl') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('pkl') }}/assets/libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('pkl') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- dashboard init -->
    <script src="{{ asset('pkl') }}/assets/js/pages/dashboard.init.js"></script>

    </body>
</html>