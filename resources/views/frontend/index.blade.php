<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abdul-Gafur | Full Stack web developer | Personal Website</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{-- Vendor styles --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">

    {{-- Main styles --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
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

            <!-- experience Section -->
    <section id="experience" class="experience section">

        <!-- Section Title -->
        <div class="container section-title" >
          <h2>02. Where I have worked</h2>
        </div><!-- End Section Title -->
  
        <div class="container" >
  
          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#experience-tab-1">Cardiology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#experience-tab-2">Neurology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#experience-tab-3">Hepatology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#experience-tab-4">Pediatrics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#experience-tab-5">Eye Care</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="experience-tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Cardiology</h3>
                      <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                      <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="experience-tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Et blanditiis nemo veritatis excepturi</h3>
                      <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                      <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="experience-tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                      <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                      <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="experience-tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                      <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                      <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="experience-tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                      <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                      <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
      </section><!-- /experience Section -->

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
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
