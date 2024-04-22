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
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    
        <!-- Bootstrap Css -->
        <link href="{{ asset('pkl') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('pkl') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        {{-- MY STYLE CSS --}}
        <link href="{{ asset('pkl') }}/assets/css/frontend.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-color:#ffffff; background-size: 100% 100% ; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">

    @include('home.navbar')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Contact</h2>
            </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                <div class="row no-gutters mb-5">
                    <div class="col-md-7">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4">Message</h3>
                        <div id="form-message-warning" class="mb-4"></div>
                        <div id="form-message-success" class="mb-4">
                    
                        </div>
                        <form name="contactForm" class="contactForm content100-form validate-form" action="
                        #">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="name">Full Name</label>
                                <input
                                type="text"
                                class="form-control  wrap-input100 validate-input" data-validate = "Name is required"
                                name="name"
                                id="name_id"
                                placeholder="Name"
                                />
                            </div>
                        
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label class="label" for="email">Email Address</label>
                                <input type="email" class="form-control wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" name="email" id="email_id" placeholder="Email"/>
                            </div>
                            
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="label" for="subject">Subject</label>
                                <input type="text" class="form-control wrap-input100 validate-input" data-validate = "Subject is required" name="subject" id="subject_id" placeholder="Subject"/>
                            </div>
                            
                            </div>
                            <div class="col-md-12">
                                <div class="form-group wrap-input100 validate-input" data-validate = "Message is required">
                                    <label class="label" for="#">Message</label>
                                    <textarea name="message" class="form-control" id="message_id" cols="30" rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary" onclick="sendMail();"/>
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-stretch">
                        <div id="map">
                            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.901104672244!2d106.97073077409704!3d-6.276731761440482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c1e61d9990f%3A0xa816dc20f81927fa!2sPT%20ERA%20KUALITAS%20INFORMASI!5e0!3m2!1sid!2sid!4v1706065100291!5m2!1sid!2sid" width="500"height="581" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                        </div>
                    </div>
                </div>
                <div class="row ml-3">
                    <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                        <div
                        class="icon d-flex align-items-center justify-content-center"
                        >
                        <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="text">
                        <p>
                            <span>Address:</span> Jl. Ruko Sentra Bisnis 1, RSA 1
                            No.56, Grand Galaxy City, Kota Bekasi, Jawa Barat 17148
                            -Indonesia
                        </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                        <div
                        class="icon d-flex align-items-center justify-content-center"
                        >
                        <span class="fa fa-phone"></span>
                        </div>
                        <div class="text">
                        <p>
                            <span>Phone:</span>
                            <a href="tel://1234567920"> 021-82751380</a>
                        </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                        <div
                        class="icon d-flex align-items-center justify-content-center"
                        >
                        <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text">
                        <p>
                            <span>Email:</span>
                            <a href="mailto:info@yoursite.com"
                            >info@erasolution.co.id</a
                            >
                        </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="dbox w-100 text-center">
                        <div
                        class="icon d-flex align-items-center justify-content-center"
                        >
                        <span class="fa fa-globe"></span>
                        </div>
                        <div class="text">
                        <p>
                            <span>Website</span>
                            <a href="#">https://erasolution.co.id</a>
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

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
