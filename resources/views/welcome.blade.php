<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Lab Komputer UIM</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">




    <!-- Icon Font Stylesheet -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- owl carousel style -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />

    <link href="{{ asset('assets/cssshome2/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/cssshome2/style.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/csshome1/style.css') }}" rel="stylesheet">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/csshome1/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/csshome1/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/csshome1/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/images/home-images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/csshome1/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/csshome1/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/csshome1/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!--header section start -->
    <div class="header_section">
        <div class="container">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="ml-5"><img src="{{ asset('assets/images/home-images/LOGO_UIM_.png') }}"
                                alt=""></h1>

                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=" fas fa-bars navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-nav ms-auto py-2 me-auto mb-2 mb-lg-0">

                            <a href="#" class="nav-item nav-link active" aria-current="page">Home</a>
                            <a href="#faq" class="nav-item nav-link">FAQ</a>

                            <a href="https://docs.google.com/spreadsheets/d/1WGViVDkjtWmwESRn0OJX7n2yw1H0v8t3/edit?usp=sharing&ouid=103651787152094325468&rtpof=true&sd=true"
                                class="nav-item nav-link" data-bs-toggle="dropdown">Jadwal Praktek</a>
                            <a href="https://www.youtube.com/watch?v=_M62F6pjIw8" class="nav-item nav-link"
                                data-bs-toggle="dropdown">Tutorial Upload</a>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>

                            <div class="nav-item dropdown">
                                @auth

                                    <a class="nav-link dropdown-toggle ml-3" data-bs-toggle="dropdown"><i
                                            class="far fa-user"></i> {{ auth()->user()->nama }}</a>
                                @else
                                    <a href="#" class="nav-link dropdown-toggle ml-3"
                                        data-bs-toggle="dropdown">Login</i></a>
                                @endauth

                                <div class="dropdown-menu m-0">
                                    @auth

                                        <a href="/profileUser" class="dropdown-item"><i class="far fa-user"></i> Akun
                                            Saya</a>
                                        <a href="/dashboard" class="dropdown-item"><i class="fas fa-columns"></i>
                                            Dashboard</a>
                                        <a href="#" class="dropdown-item"><i class="fas fa-lock"></i> Ganti
                                            Password</a>
                                        <a href="#" class="dropdown-divider"></a>
                                        <a href="{{ route('logout-user') }}" class="dropdown-item"><i
                                                class="fas fa-door-closed"></i>
                                            Logout</a>
                                    @else
                                        <a href="{{ route('login') }}" class="dropdown-item"><i
                                                class="fas fa-sign-in-alt"></i>
                                            Login</a>
                                        <a href="{{ route('register') }}" class="dropdown-item"><i
                                                class="fas fa-user-plus"></i>
                                            Register</a>
                                    @endauth


                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
        <!--banner section start -->
        <div class="banner_section layout_padding">
            <div id="my_slider">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="taital_main">
                                        <h4 class="banner_taital">LAB Komputer UIM</h4>

                                        <p class="banner_text">It is a long established fact that a reader will be
                                            distracted by
                                            the readable content of a page when looking at its layout. The point of
                                            using Lorem I
                                        </p>
                                        <div class="read_bt"><a href="#">Read More</a></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div><img src="{{ asset('assets/images/home-images/img-1.png') }}"
                                            class="image_1"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--banner section end -->
    </div>
    <!--header section end -->
    <!--about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image_2"><img src="{{ asset('assets/images/home-images/Questions-amico.png') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <h5 class="text-primary">FREQUENTLY ASKED QUESTIONS</h5>
                        <h1>Yang Sering Ditanyakan</h1>
                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    <b> Bagaimana cara melakukan pendaftaran?</b>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Jika menggunakan Komputer/Laptop, silahkan klik tombol <b>Login</b> kemudian
                                        pilih
                                        <b>Register</b> yang ada diatas kanan.
                                    </p>
                                    <p>Jika menggunakan HP, silahkan menekan tombol <i class="fas fa-bars mx-2"></i>
                                        yang ada
                                        diatas kanan kemudian pilih <b>Login</b> lalu <b>Register</b>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    <strong> Apa yang harus dilakukan apabila salah input form pendaftaran?</strong>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Silahkan menghubungi <strong>admin</strong> atau
                                    <strong>asisten</strong>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    <strong>Saya sudah mendaftar tapi kenapa belum bisa login?</strong>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"> Anda baru bisa login setelah diverifikasi oleh
                                    <strong>admin</strong> atau
                                    <strong>asisten</strong>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about section end -->
    <!--services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <!-- <h1 class="service_taital"><span class="our_text">Our</span> Services</h1>
            <p class="service_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p> -->
            <div class="services_section_2">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon_1"><img src="{{ asset('assets/images/home-images/icon-1.png') }}"></div>
                        <h4 class="design_text">Logo Design</h4>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                        <div class="icon_1"><img src="{{ asset('assets/images/home-images/icon-2.png') }}"></div>
                        <h4 class="design_text">Web Development</h4>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon_3"><img src="{{ asset('assets/images/home-images/icon-3.png') }}"></div>
                        <h4 class="design_text">Web Design</h4>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>

                    </div>
                    <div class="col-sm-4">
                        <div class="icon_1"><img src="{{ asset('assets/images/home-images/android (1).png') }}">
                        </div>
                        <h4 class="design_text">App Mobile Development</h4>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                        <div class="icon_1"><img src="{{ asset('assets/images/home-images/ai.png') }}"></div>
                        <h4 class="design_text">Robotics</h4>
                        <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--services section end -->
    <!--blog section start -->
    <div class="blog_section layout_padding">
        <div class="container">
            <h1 class="blog_taital"><span class="our_text">Contact</span>Us</h1>
            <p class="blog_text">Silahkan Menghubungi Kontak Yang Ada untuk Info Lebih Lanjut</p>
            <div class="services_section_2 layout_padding">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_main">
                            <div class="student_bg"><img src="images/img-3.png" class="student_bg"></div>
                            <div class="image_15">19<br>Feb</div>
                            <h4 class="hannery_text">There are many variations</h4>
                            <p class="fact_text">dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_main">
                            <div class="student_bg"><img src="images/img-4.png" class="student_bg"></div>
                            <div class="image_15">19<br>Feb</div>
                            <h4 class="hannery_text">There are many variations</h4>
                            <p class="fact_text">dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_main">
                            <div><img src="images/img-5.png" class="student_bg"></div>
                            <div class="image_15">19<br>Feb</div>
                            <h4 class="hannery_text">There are many variations</h4>
                            <p class="fact_text">dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog section end -->


    <!--footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="address_main">
                <div class="address_text"><a href="#"><img
                            src="{{ asset('assets/images/home-images/map-icon.png') }}"><span
                            class="padding_left_15">Universitas islam makassar</span></a></div>
                <div class="address_text"><a href="#"><img
                            src="{{ asset('assets/images/home-images/call-icon.png') }}"><span
                            class="padding_left_15">+7586656566</span></a></div>
                <div class="address_text"><a href="#"><img
                            src="{{ asset('assets/images/home-images/mail-icon.png') }}"><span
                            class="padding_left_15">labuim@gmail.com</span></a></div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="link_text">Useful link</h4>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="link_text">web design</h4>
                        <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaL oreadipiscing
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="link_text">social media</h4>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img
                                            src="{{ asset('assets/images/home-images/fb-icon.png') }}"></a></li>
                                <li><a href="#"><img
                                            src="{{ asset('assets/images/home-images/twitter-icon.png') }}"></a></li>
                                <li><a href="#"><img
                                            src="{{ asset('assets/images/home-images/linkedin-icon.png') }}"></a></li>
                                <li><a href="#"><img
                                            src="{{ asset('assets/images/home-images/youtub-icon.png') }}"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h4 class="link_text">Our Branchs</h4>
                        <p class="footer_text_1">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaLoreadipiscing
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--client section end -->
    <!--copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2023 All Right Reserved By <a href="https://html.design">Free Html
                    Templates</a> Distributed by: <a href="https://themewagon.com">ThemeWagon</a></p>
        </div>
    </div>
    <!--copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('assets/jshome/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/jshome/popper.min.js') }}"></script>
    <script src="{{ asset('assets/jshome/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/jshome/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/jshome/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/jshome/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/jshome/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('assets/jshome/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> --}}
    {{-- <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script> --}}
    {{-- <script src="{{ asset('assets/jshome/vendor/popper.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/jshome/bootstrap.min.js"></') }}"><script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
</body>

</html>
