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
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">

    {{-- Main styles --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
</head>

<body>
    <div class="app">
        {{-- header starts --}}
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div
                class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

                <a href="{{ route('homepage') }}" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">Ghafcodes</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#about" class="active">01. About</a></li>
                        <li><a href="#experience">02. Experience</a></li>
                        <li><a href="#projects">03. Work</a></li>
                        <li><a href="#reviews">04. Reviews</a></li>
                        <li><a href="contact">05. Contact</a></li>
                        {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="#">Dropdown 1</a></li>
                      <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                          <li><a href="#">Deep Dropdown 1</a></li>
                          <li><a href="#">Deep Dropdown 2</a></li>
                          <li><a href="#">Deep Dropdown 3</a></li>
                          <li><a href="#">Deep Dropdown 4</a></li>
                          <li><a href="#">Deep Dropdown 5</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Dropdown 2</a></li>
                      <li><a href="#">Dropdown 3</a></li>
                      <li><a href="#">Dropdown 4</a></li>
                    </ul>
                  </li> --}}
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>
        </header>
        <!-- header area ends -->

        <!-- HERO AREA START -->
        <section id="hero about" class="hero section dark-background">
            <img src="{{ asset('assets/frontend/images/hero-bg-2.jpg') }}" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('assets/frontend/images/hero-right.svg') }}" class="img-fluid animated"
                            alt="">
                    </div>

                    <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in" data-aos-delay="100">
                        <h2>Abdul-Gafur Saeed</h2>
                        <p>I'm a <span class="typed"
                                data-typed-items="Web Developer, Laravel Developer, PHP Developer, SQL Developer">Software
                                Developer</span><span class="typed-cursor typed-cursor--blink"></span></p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section>
        <!-- HERO SECTIN END -->

        <!-- ABOUT SECTION START -->
        <section>
            <div class="about-area pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 valign" data-aos="fade-right">
                            <div class="content mb-50">
                                <div class="section-head text-left mb-30">
                                    <h1>ABOUT ME</h1>
                                    <span class="span"></span>
                                </div>
                                <p>I'm a software developer specializing in web development, building exceptional
                                    frontend and backend web experiences. I'm from Ghana. Currently, I'm expanding my skill set into Artificial Intellgence (AI) and Machine Learning (ML) to pioneer AI-driven applications and I'm actively
                                    seeking job opportunities that align with ny passion for innovative technology solutions.</p>
                                <a href="#" class="btn mt-30">Download CV</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="about-hero-img">
                                <img data-tilt="" class="img-fluid lazy loaded"
                                    src="{{ asset('assets/frontend/images/myself.jpeg') }}"
                                    data-src="{{ asset('assets/frontend/images/myself.jpeg') }}"
                                    alt="frontend/img/about/1.jpg" data-was-processed="true"
                                    style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="skills-animation content mb-50">
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
        <section id="experience" class="experience section" >

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>02. Experience</h2>
                <div><span>Where I have</span> <span class="description-title">Worked</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade">

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#experience-tab-1">Paahibu
                                    Space</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#experience-tab-2">Namibra Inc</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#experience-tab-3">Nifty Global
                                    Systems</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#experience-tab-4">Nonihub</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="experience-tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Software Developer @ Paahibu Space</h3>
                                        <p class="fst-italic">2021 - Present</p>
                                        <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint.
                                            Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est
                                            repellat minima eveniet eius et quis magni nihil.</p>
                                        <div class="work-skills">
                                            <ul>
                                                <li>Bootstrap</li>
                                                <li>PHP</li>
                                                <li>Javascript</li>
                                                <li>Python</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="experience-tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Namibra Inc</h3>
                                        <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente
                                            dila parde sonata raqer a videna mareta paulona marka</p>
                                        <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                            reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et
                                            velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto
                                            madirna desera vafle de nideran pal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="experience-tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Nifty Global Systems</h3>
                                        <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non
                                            enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat
                                            perferendis aut</p>
                                        <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                            quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima
                                            molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam.
                                            Soluta et harum voluptatem optio quae</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="experience-tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Nonihub</h3>
                                        <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure
                                            voluptas iure porro quis delectus</p>
                                        <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam
                                            necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in
                                            consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam
                                            quia a laborum inventore</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /experience Section -->

        {{-- projects section --}}
        <section class="projects" id="projects">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>03. Works</h2>
                <div><span>Some Things I have</span> <span class="description-title">Built</span></div>
            </div><!-- End Section Title -->

            <div class="projects container" data-aos="fade" data-aos-delay="100">
                {{-- project 1 --}}
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-6">
                        <div class="project-content">
                            <h2 class="title">My POS</h2>
                            <ul class="stacks-used">
                                <li>HTML</li>
                                <li>Bootstrap</li>
                                <li>Javascript</li>
                                <li>PHP</li>
                                <li>CodeIgniter</li>
                            </ul>
                            <p class="fst-italic">Inventory and Point Of Sale software</p>
                            <p>MyPOS is built with PHP CodeIgniter, MyPOS is a versatile point of sale solution for various businesses, including pharmacies, cosmetics stores, supermarkets, and more.
                                Key features include Inventory management, Point of Sale (POS), Transaction reporting and User management
                                </p>
                            <div class="d-flex">
                                <a href="#">code <i class="fab fa-github"></i></a>
                                <a href="#">Website <i class="fab fa-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 project-image">
                        <img src="{{ asset('assets/frontend/images/projects/project1.jpeg') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
                {{-- project 2 --}}
                <div class="row" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-6 project-image">
                        <img src="{{ asset('assets/frontend/images/projects/project1.jpeg') }}" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-lg-6">
                        <div class="project-content">
                            <h2 class="title">Lorut SHS Management System</h2>
                            <ul class="stacks-used">
                                <li>HTML/CSS</li>
                                <li>Javascript</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>Laravel</li>
                            </ul>
                            <p class="fst-italic">A comprehensive SMS to streamline administrative tasks and enhance student management for educational institutions.</p>
                            <p>This system enables administrators to efficiently manage student records, track attendance, grades, and fees, as well as communicate with parents and teachers. Key features include Student information management, Exam management, Fee management, SMS, Email messaging and reporting</p>
                            <div class="d-flex">
                                <a href="#">code <i class="fab fa-github"></i></a>
                                <a href="#">Website <i class="fab fa-link"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- project 3 --}}
                <div class="row" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-6">
                        <div class="project-content">
                            <h2 class="title">OC Tutorial College Website</h2>
                            <ul class="stacks-used">
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Javascript</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>SEO</li>
                            </ul>
                            <p class="fst-italic">Omission and Comissions tutorial College Website and Admin CMS</p>
                            <p>OCTC is a tutorial college serving the legal needs of students desirous of studying law & for those studying law to improve upon the content received from their various faculties and schools to enable them get into the professional law course to become lawyers.</p>
                            <div class="d-flex">
                                <a href="#">code <i class="fab fa-github"></i></a>
                                <a href="#">Website <i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 project-image">
                        <img src="{{ asset('assets/frontend/images/projects/project1.jpeg') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>

                {{-- project 4 --}}
                <div class="row" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-6">
                        <div class="project-content">
                            <h2 class="title">ChatDocs</h2>
                            <ul class="stacks-used">
                                <li>HTML/CSS</li>
                                <li>Javascript</li>
                                <li>MySQL</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>System analyst</li>
                                <li>Infrasture analyst</li>
                                <li>Project manager</li>
                                <li>security analyst</li>
                            </ul>
                            <p class="fst-italic">A Web based platform that leverages AI to enable users chat with their documents</p>
                            <p>A web platform that leverages artificial intelligence to transform how users interact with documents. It enables users to engage in real-time, interactive conversations with their content, making document handling more dynamic and efficient.</p>
                            <div class="d-flex">
                                <a href="#">code <i class="fab fa-github"></i></a>
                                <a href="#">Website <i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 project-image">
                        <img src="{{ asset('assets/frontend/images/projects/project1.jpeg') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>

                {{-- project 5 --}}
                <div class="row" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-6">
                        <div class="project-content">
                            <h2 class="title">High Ranking Academy webiste and SMS</h2>
                            <ul class="stacks-used">
                                <li>HTML/CSS</li>
                                <li>Javascript</li>
                                <li>MySQL</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>System analyst</li>
                            </ul>
                            <p class="fst-italic">High Ranking Academy school website and School Management System</p>
                            <p>A comprehensive SMS to enhance student management for educational institutions.</p>
                            <p>This system enables administrators to efficiently manage student records, track attendance, grades, and fees, as well as communicate with parents and teachers. </p>
                            <div class="d-flex">
                                <a href="#">code <i class="fab fa-github"></i></a>
                                <a href="#">Website <i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 project-image">
                        <img src="{{ asset('assets/frontend/images/projects/project1.jpeg') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>


            </div>

        </section>

        <!-- Reviews Section -->
    <section id="reviews" class="reviews section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>04. Reviews</h2>
          <div><span>What Co-workers and Employers</span> <span class="description-title">Say</span></div>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 1
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="review-item">
                  <p>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('assets/frontend/images/profile.png') }}" class="review-img" alt="">
                    <h3>Hiqmat Sungdeme Saani</h3>
                    <h4>Ceo &amp; Founder</h4>
                  </div>
                </div>
              </div><!-- End review item -->
  
              <div class="swiper-slide">
                <div class="review-item">
                  <p>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('assets/frontend/images/profile.png') }}" class="review-img" alt="">
                    <h3>Ayishetu Saeed</h3>
                    <h4>COO @ Paahibu Space</h4>
                  </div>
                </div>
              </div><!-- End review item -->
  
              <div class="swiper-slide">
                <div class="review-item">
                  <p>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('assets/frontend/images/profile.png') }}" class="review-img" alt="">
                    <h3>Mohammed Amiin</h3>
                    <h4>Co Founder @ Namiba Inc</h4>
                  </div>
                </div>
              </div><!-- End review item -->
  
              <div class="swiper-slide">
                <div class="review-item">
                  <p>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{ asset('assets/frontend/images/profile.png') }}" class="review-img" alt="">
                    <h3>Benson </h3>
                    <h4>Freelancer</h4>
                  </div>
                </div>
              </div><!-- End review item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
      </section><!-- /Reviews Section -->


      <!-- Contact Section -->
    <section id="contact" class="contact">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <div><span>Contact</span> <span class="description-title">Me</span></div>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-4">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-location-dot flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Bomiyiri, Wa-UWR, Ghana</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-phone flex-shrink-0"></i>
                <div>
                  <h3>Call or WhatsApp</h3>
                  <p>+233 54 732 2637</p>
                </div>
              </div><!-- End Info Item -->
  
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="far fa-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Me</h3>
                  <p><a href="mailto:abdulgfurshaattir@gmail.com">abdulgafurshaattir@gmail</a></p>
                </div>
              </div><!-- End Info Item -->
  
            </div>
  
            <div class="col-lg-8">
              <form action="{{ route('frontend.contact') }}" method="post" class="php-email-form" id="php-email-form" data-aos="fade-up" data-aos-delay="200" enctype="multipart/form-data">
                @csrf
                <div class="error-message"></div>

                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>
  
                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>
  
                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>
  
                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="btn-wrapper">
                    <button type="submit" id="get_in_touch_submit_btn" class="boxed-btn">Submit
                        Now</button>
                    <div class="ajax-loading-wrap hide">
                        <div class="sk-fading-circle">
                            <div class="sk-circle1 sk-circle"></div>
                            <div class="sk-circle2 sk-circle"></div>
                            <div class="sk-circle3 sk-circle"></div>
                            <div class="sk-circle4 sk-circle"></div>
                            <div class="sk-circle5 sk-circle"></div>
                            <div class="sk-circle6 sk-circle"></div>
                            <div class="sk-circle7 sk-circle"></div>
                            <div class="sk-circle8 sk-circle"></div>
                            <div class="sk-circle9 sk-circle"></div>
                            <div class="sk-circle10 sk-circle"></div>
                            <div class="sk-circle11 sk-circle"></div>
                            <div class="sk-circle12 sk-circle"></div>
                        </div>
                    </div>
                </div>
  
                </div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
  
      </section><!-- /Contact Section -->

      {{-- Footer starts --}}
      <section class="footer">
       <p> &copy; <b>Ghaf Portfolio Website</b> All Rights Reserved <br>
        Designed with &hearts; by Abdul-Gafur</p>
      </section>

    </div>

    <!-- js here -->
    <script src="{{ asset('assets/frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/animate-heading.js') }}"></script>
    {{-- <script src="{{ asset('assets/frontend/js/particles.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/frontend/js/particles-custom.js') }}"></script> --}}
    <script src="{{ asset('assets/frontend/js/jquery.nav.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/animate-heading.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>


    @include('frontend.partials.inline-script')
    
</body>

</html>
