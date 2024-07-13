<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abdul-Gafur | Full Stack web developer | Personal Website</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Main styles --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    {{-- Vendor styles --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
</head>

<body>
    <div class="app">
        {{-- header starts --}}
        <header id="home">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 align-items-center">
                            <div class="logo">
                                <a href=""><img src="" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10">

                            <div class="header-btn f-right">
                                <a target="_blank" href="#" class="btn">Hire Me</a>
                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li class="active"><a href="#about">About</a></li>
                                        <li class=""><a href="#experience">Experience</a></li>
                                        <li class=""><a href="#work">Work</a></li>
                                        <li class=""><a href="#reviews">Reviews</a></li>
                                        <li class=""><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area ends -->

        <!-- HERO AREA START -->
        <section>
            <div class="hero-area" style="background-color: black">
                <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"
                        width="2494" height="1376"></canvas></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <div class="hero-content text-center">
                                    <div class="typing-head">
                                        <h3>I Am</h3>
                                    </div>
                                    <div class="hero-loading-content">
                                        <h1 class="cd-headline clip is-full-width">
                                            <span class="cd-words-wrapper" style="width: 404.32px;">
                                                <b class="is-visible">Web Developer</b>
                                                {{-- <b class="is-hidden">Laravel Developer</b>
                                                <b class="is-hidden">Full Stack Developer</b> --}}
                                            </span>
                                        </h1>
                                    </div>
                                    <div class="hero-social-link">


                                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>

                                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>

                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>

                                        <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
                                    </div>
                                </div>
                                <a href="#about">
                                    <div class="animation-mouse">
                                        <div class="mouse"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HERO SECTIN END -->

        <!-- ABOUT SECTION START -->
        <section id="about">
            <div class="about-area pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 valign">
                            <div class="content mb-50">
                                <div class="section-head text-left mb-30">
                                    <h1>ABOUT ME</h1>
                                    <span class="span"></span>
                                </div>
                                <p>I'm a software developer specializing in web development, building exceptional
                                    frontend and backend web experiences. I'm from Ghana. Currently, I'm exploring on AI
                                    an Machine Learning to build AI drivered applications and am also actively
                                    searching for a job opportunity.</p>
                                <a href="#" class="btn mt-30">Download CV</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-hero-img">
                                <img data-tilt="" class="img-fluid lazy loaded" src="{{ asset('assets/frontend/images/myself.jpeg') }}" data-src="{{ asset('assets/frontend/images/myself.jpeg') }}"
                                    alt="frontend/img/about/1.jpg" data-was-processed="true"
                                    style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="content mb-50">
                                <div class="skills-head-type">
                                    <h1>My Skills.</h1>
                                </div>
                                <div class="skills-progress-bar">
                                    <div class="single-progress-bar">
                                        <div class="progressbar-label">
                                            <h5>Html <span class="f-right">95%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar w-95" role="progressbar" aria-valuenow="95"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="progressbar-label">
                                            <h5>Css <span class="f-right">90%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar w-90" role="progressbar" aria-valuenow="90"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="progressbar-label">
                                            <h5>Js <span class="f-right">60%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar w-60" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="progressbar-label">
                                            <h5>Python <span class="f-right">70%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar w-70" role="progressbar" aria-valuenow="80"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-progress-bar">
                                        <div class="progressbar-label">
                                            <h5>PHP <span class="f-right">80%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar w-80" role="progressbar" aria-valuenow="80"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION END -->

    </div>


        <!-- js here -->
        <script src="{{ asset('assets/frontend/js/animate-heading.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/animate-heading.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/particles.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/particles-custom.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/tilt.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.nav.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    
        <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.smoothscroll.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>
