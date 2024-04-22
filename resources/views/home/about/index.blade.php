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
        <link rel="stylesheet" href="/css/style.css">

        <style>
            /* Gaya CSS untuk responsivitas dan mempercantik tampilan */
            .feature-box {
                box-sizing: border-box;
                /* width: 100%; */
                padding: 0 15px;
                margin-bottom: 35px;
            }
        
            .feature-box-wrapper {
                border: 1px solid #eaeaea;
                width: 321px;
                height: 252px;
                box-shadow: 0 15px 44px 0 rgba(171, 171, 171, 0.1);
                transition: all 0.55s ease 0s;
                margin-bottom: 15px;
                padding-top: 40px;
                padding-left: 0px;
                /* padding: 40px 30px; */
                border-radius: 5px;
                animation-name: pulse;
            }
        
            .feature-box-icon {
                margin: 0 0 35px;
                border: 1px solid #eaeaea;
                color: white;
                height: 100px;
                width: 100px;
                font-size: 50px;
                box-shadow: 0 6px 12px #efefef;
                word-break: break-all;
                background-image: linear-gradient(-150deg, #00bcd4 35%, #00bcd4 65%);
                display: inline-block;
                line-height: 1;
                transition: all 0.35s ease;
                text-align: center !important;
                border-radius: 50% !important;
                font-weight: 300;
                letter-spacing: .1px;
                background-color: #00bcd4;
            }
        
            .feature-box-icon span {
                line-height: 2;
                font-weight: 900;
                -webkit-font-smoothing: antialiased;
                display: inline-block;
                font-style: normal;
                font-variant: normal;
                font-variant-ligatures: normal;
                font-variant-caps: normal;
                font-variant-numeric: normal;
                font-variant-east-asian: normal;
                font-variant-alternates: normal;
                font-variant-position: normal;
                text-rendering: auto;
                font-size: 50px;
                color: #ffffff;
                font-family: Hind;
                font-weight: 300;
                font-size: 50px;
                /* line-height: 28px; */
                letter-spacing: .1px;
            }
        
            .feature-box-title {
                margin-bottom: 5px;
                word-break: break-word;
                word-break: break-all;
                text-align: center !important;
            }

            .footer {
            background: #EFF2F7;
            color: white;
            margin-top: 12rem;
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
    <body class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-color:#ffffff; background-size: 100% 100% ; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">

        @include('home.navbar')

            {{-- Header --}}
                <header id="page-title" class="page-title-wrap">
                    <div class="page-title-wrap-inner" style="color: #fff; background-color:#00bcd4; background-image:url('../images/5.jpg'); background-repeat: no-repeat; background-position: center center; background-size:auto; padding-top: 105px; padding-bottom: 105px;">
                        <span class="page-title-overlay" style="height: 0%; width: 0%; top:0; left:0;"></span>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-title-inner">
                                        <div class="pull-center">
                                            <h1 class="page-title d-flex justify-content-center" style="margin-bottom: 15px; text-transform:capitalize; word-break:break-all; font-family: Poppins; font-size:3.5rem; font-weight:600; line-height:55px;">About Us</h1>
                                            <div id="breadcumb" class="breadcumb d-flex justify-content-center pt-2" style="background:transparent; margin:0; padding:0; border:none; font-size:1rem; display:block;">
                                                <a href="/" style="text-decoration: none; outline:none; cursor: pointer; color:#fff"> Home / </a>
                                                <span class="current" style="padding-left: 5px">About Us</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                {{-- End Header --}}
                {{-- Content --}}
                <div class="counsell-content-inner bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 page-has-no-sidebar">
                                <div id="primary" class="content-area clearfix">
                                    <div id="page-251" class="post-251 page type-page status-publish hentry">
                                        <div class="entry-content">
                                            {{-- Content 1 --}}
                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1535467314920" style="position: relative; top:5rem;">
                                                <div class="container">
                                                    <div class="row" >
                                                        <div class="wpb_column vc_column_container col-sm-12 col-lg-6 col-md-6 order-1 order-lg-1">
                                                            <div class="vc_column-inner vc_custom_1530864208792">
                                                            <div class="wpb-wrapper">
                                                                <div class="section-title-wrapper margin-top-40 text-left shortcode-rand-14 counsell-inline-css" style="display: block; margin-top:20px;">
                                                                    <div class="title-wrap" style="margin-top: 40px; text-align:left !important;">
                                                                        <span class="sub-title" style="color: #00bcd4; font-weight:900; font-size: 16px; line-height: 28px; letter-spacing: .1px;">About Our Company</span>
                                                                        <h2 class="section-title mt-2" style="text-transform: none; position:relative; padding-bottom:30px; color: #252525; font-family: Poppins; font-weight: 600; font-size: 32px; line-height: 40px;">We Provide High Quality Consultation Service</h2>
                                                                    </div>
                                                                    <div class="section-description"></div>
                                                                </div>
                                                                <div class="wpb_text_column wpb_content_element" style="margin-bottom: 35px">
                                                                    <div class="wpb-wrapper">
                                                                        <p style="display: block; font-size:16px; margin-block-start: 1em; margin-block-end: 1em; margin-inline-start: 0px; margin-inline-end: 0px; color: #636363; font-weight: 300; font-size: 16px; line-height: 28px; letter-spacing: .1px;">
                                                                            EraSolution is a corporate brand from PT. Era Kualitas Informasi that focuses on the fields of Software Development, ISO Certification, and Training.
                                                                            <br>
                                                                            With the support of professional and experienced personnel in their field, EraSolution will strive to become a partner for the development needs of your company's business.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container col-sm-12 col-lg-6 col-md-6 order-2 order-lg-2">
                                                        <div class="vc_collum-inner" style="box-sizing: border-box; padding-left: 7.5px; padding-right: 7.5px width: 100%;">
                                                            <div class="wpb-wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_center text-center">
                                                                    <figure class="wpb_wrapper vc_figure" style="display: inline-block; vertical-align: top; margin: 0; max-width: 100%;">
                                                                        <div class="vc_single_image-wrapper vc_box_border_grey" style="display: inline-block; vertical-align: top; max-width: 100%; height:auto;">
                                                                            <img width="550" height="400" src="../images/4.jpg" alt="Eras">
                                                                        </div>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--End Content 1 --}}
                                            {{-- Content 2 --}}
                                            <div class="vc_row wpb_row vc_row-fluid sc_bg_b vc_custom_1631604998937 vc_row-o-content-middle vc_row-flex" style="position: relative; top:10rem">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="wpb_column vc_column_container col-sm-12 col-lg-5 col-md-5 order-1 order-lg-1">
                                                            <div class="vc_collum-inner" style="box-sizing: border-box; padding-left: 7.5px; padding-right: 7.5px width: 100%;">
                                                                <div class="wpb-wrapper">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center text-center">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper vc_box_border_grey mx-auto">
                                                                                <img width="406" height="320" src="../images/2.jpg" alt="Eras">
                                                                            </div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wpb_column vc_column_container col-sm-12 col-lg-6 col-md-6 order-2 order-lg-2">
                                                            <div class="vc_column-inner vc_custom_1530864208792">
                                                                <div class="wpb-wrapper" style="position: relative; bottom:1rem; left:1rem;">
                                                                    <div class="section-title-wrapper margin-bottom-40 text-left shortcode-rand-14 counsell-inline-css" style="display: inline-block; margin-bottom:1rem;">
                                                                        <div class="title-wrap" style="text-align:left !important;">
                                                                            <span class="sub-title" style="color: #00bcd4; font-weight:900; font-size: 16px; line-height: 28px; letter-spacing: .1px;">Our Vision Mission</span>
                                                                            <h2 class="section-title mt-2" style="text-transform: none; background:#00bcd4;  position: relative; width: 50px; border-radius: 5px; height: 5px; top: 2rem;"</h2>
                                                                        </div>
                                                                        <div class="section-description"></div>
                                                                    </div>
                                                                    <div class="wpb_text_column wpb_content_element" style="margin-top: 1.5rem">
                                                                        <div class="wpb-wrapper">
                                                                            <p>
                                                                                <strong style="font-weight: bolder; color: #636363; font-weight: 300; font-size: 16px; line-height: 28px; letter-spacing: .1px;">VISION</strong>
                                                                            </p>
                                                                            <ul style="position: relative; right:1rem; color: #636363; font-weight: 300; font-size: 16px; line-height: 28px; letter-spacing: .1px;">Become a partner for all business sectors that are always innovating</ul>
                                                                            <p>
                                                                                <strong style="font-weight: bolder; color: #636363; font-weight: 300; font-size: 16px; line-height: 28px; letter-spacing: .1px;">MISSION</strong>
                                                                            </p>
                                                                            <ul>
                                                                                <li style="list-style: none;">
                                                                                    <ul style="list-style-type: circle;">
                                                                                        <li style="position: relative; right:2rem; color: #636363; font-weight: 300; font-size: 16px; line-height: 28px; letter-spacing: .1px;">Providing the best service to provide solutions in business control in a more effective and efficient manner.</li>
                                                                                        <li style="position: relative; right:2rem; color: #636363; font-weight: 300; font-size: 16px; line-height: 28px; letter-spacing: .1px;">Provide highly workable and useful solutions for customers according to customer specifications.</li>
                                                                                        <li style="position: relative; right:2rem; color: #636363; font-weight: 300; font-size: 16px; line-height: 28px; letter-spacing: .1px;">Focus on building customer satisfaction and continuous improvement.</li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            </div>
                                            {{--End Content 2 --}}
                                            {{-- Content 3 --}}
                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1535467323155" style="position: relative; top:10rem;">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-6">
                                                                    <div class="vc_column-inner">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="section-title-wrapper text-left shortcode-rand-18 counsell-inline-css">
                                                                                <div class="title-wrap">
                                                                                    <h3 class="section-title">Why Choose Us? </h3>
                                                                                    <h2 class="section-title mt-2" style="text-transform: none; background:#00bcd4;  position: relative; width: 50px; border-radius: 5px; height: 5px; top: 1.5rem;"</h2>
                                                                                </div>
                                                                                <div class="section-description"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-6">
                                                                    <div class="vc_column-inner">
                                                                        <div class="wpb-wrapper"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="container" style="position: relative; top:4.5rem; right:1rem;">
                                                                <div class="row">
                                                                    <!-- Icon Pertama -->
                                                                    <div class="col-sm-12 col-lg-4 col-md-12 feature-box">
                                                                        <div class="feature-box-wrapper pulse feature-box-style-2 text-center shortcode-rand-19 counsell-inline-css">
                                                                            <div class="feature-box-icon text-center rounded-circle theme-color-bg theme-hcolor-bg">
                                                                                <span class="mdi mdi-stamper"></span>
                                                                            </div>
                                                                            <div class="feature-box-title">
                                                                                <h4 class="section-title">Registered</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                                    <!-- Icon Kedua -->
                                                                    <div class="col-sm-12 col-lg-4 col-md-12 feature-box">
                                                                        <div class="feature-box-wrapper pulse feature-box-style-2 text-center shortcode-rand-19 counsell-inline-css">
                                                                            <div class="feature-box-icon text-center rounded-circle theme-color-bg theme-hcolor-bg">
                                                                                <span class="mdi mdi-flask"></span>
                                                                            </div>
                                                                            <div class="feature-box-title">
                                                                                <h4 class="section-title">Experience</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                                    <!-- Icon Ketiga -->
                                                                    <div class="col-sm-12 col-lg-4 col-md-12 feature-box">
                                                                        <div class="feature-box-wrapper pulse feature-box-style-2 text-center shortcode-rand-19 counsell-inline-css">
                                                                            <div class="feature-box-icon text-center rounded-circle theme-color-bg theme-hcolor-bg">
                                                                                <span class="mdi mdi-account-tie"></span>
                                                                            </div>
                                                                            <div class="feature-box-title">
                                                                                <h4 class="section-title">Professional</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                                    <!-- Icon Keempat -->
                                                                    <div class="col-sm-12 col-lg-4 col-md-12 feature-box">
                                                                        <div class="feature-box-wrapper pulse feature-box-style-2 text-center shortcode-rand-19 counsell-inline-css">
                                                                            <div class="feature-box-icon text-center rounded-circle theme-color-bg theme-hcolor-bg">
                                                                                <span class="mdi mdi-account-group"></span>
                                                                            </div>
                                                                            <div class="feature-box-title">
                                                                                <h4 class="section-title">Collaboration</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                                    <!-- Icon Kelima -->
                                                                    <div class="col-sm-12 col-lg-4 col-md-12 feature-box">
                                                                        <div class="feature-box-wrapper pulse feature-box-style-2 text-center shortcode-rand-19 counsell-inline-css">
                                                                            <div class="feature-box-icon text-center rounded-circle theme-color-bg theme-hcolor-bg">
                                                                                <span class="mdi mdi-source-branch"></span>
                                                                            </div>
                                                                            <div class="feature-box-title">
                                                                                <h4 class="section-title">Guarantee</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                                    <!-- Icon Keenam -->
                                                                    <div class="col-sm-12 col-lg-4 col-md-12 feature-box">
                                                                        <div class="feature-box-wrapper pulse feature-box-style-2 text-center shortcode-rand-19 counsell-inline-css">
                                                                            <div class="feature-box-icon text-center rounded-circle theme-color-bg theme-hcolor-bg">
                                                                                <span class="mdi mdi-book-account"></span>
                                                                            </div>
                                                                            <div class="feature-box-title">
                                                                                <h4 class="section-title">Good Document</h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Of Icon -->
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--End Content 3 --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Content --}}
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
                                        <p><i class="fa fa-envelope pe-2 mr-2"></i> info@erasolution.co.id</p>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <!-- apexcharts -->
    <script src="{{ asset('pkl') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- dashboard init -->
    <script src="{{ asset('pkl') }}/assets/js/pages/dashboard.init.js"></script>

    </body>
</html>