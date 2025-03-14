<!DOCTYPE html>
<html lang="zxx">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tzamun</title>
  <meta content="" name="Tzamun - IT Solutions & Business Services">
  <meta name="description" content="Tzamun - IT Solutions & Business Services">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="" name="ZRTHEMES">

  <!-- Favicons -->
  <link href="https://tzamun.sa/assets/images/favicon.png" rel="icon">
  <link href="https://tzamun.sa/assets/images/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&amp;family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&amp;display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/stylesheets/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="old_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/stylesheets/styles.css" rel="stylesheet">


</head>

<body>

  <header id="header" class="header d-flex align-items-center sticked stikcy-menu">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="https://tzamun.sa/assets/images/logo.png" alt="logo">
      </a>
      <nav id="navbar" class="navbar">
        <ul class="{{ app()->getLocale() == 'ar' ? 'rtl-nav' : 'ltr-nav' }}">
            <li class="active"><a href="#">{{ __('messages.home') }}</a></li>
            <li><a href="#services">{{ __('messages.services') }}</a></li>
            <li><a href="#featured">{{ __('messages.about_us') }}</a></li>
            {{-- <li><a href="#success">{{ __('messages.success') }}</a></li> --}}
            <li><a href="#partners">{{ __('messages.partners') }}</a></li>
            <li><a href="#contact">{{ __('messages.contact') }}</a></li>
            @if(app()->getLocale() == 'en')
            <li><a href="{{ route('switch-language', 'ar') }}">العربية</a></li>
        @else
            <li><a href="{{ route('switch-language', 'en') }}">English</a></li>
        @endif
          {{-- <li><a href="index.html" class="">Home</a></li>
          <li><a href="services.html" class="">Services</a></li>
          <li><a href="portfolio.html" class="">Portfolio</a></li>
          <li><a href="testimonials.html" class="">Testimonials</a></li>
          <li><a href="team.html" class="">Team</a></li>
          <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="packages.html">Pricing</a></li>
              <li><a href="faqs.html">FAQs</a></li>
              <li><a href="privacy-policy.html">Terms &amp; Conditions</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
              <li><a href="blogs.html">Blogs</a></li>
              <li><a href="blog-details.html">Blog Detail Page</a></li>
            </ul>
          </li>
          <li><a href="blogs.html">News</a></li> --}}
        </ul>
      </nav><!-- .navbar -->
      {{-- <a href="contact.html" class="btn-get-started hide-on-mobile">Get Quotes</a> --}}
      <button id="darkmode-button"><i class="bi bi-moon-fill"></i></button>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header>
  <!-- End Header -->

  <!--  Hero Section  -->
  <section id="hero" class="hero sticked-header-offset">

    <div id="particles-js"></div>
    <div id="repulse-circle-div"></div>
    <div class="container position-relative">
      <div class="row gy-5 aos-init aos-animate">
        <div class="col-lg-7 offset-lg-5 dark-bg order-lg-1 d-flex flex-column justify-content-start {{ $locale == 'ar' ? 'text-right' : 'text-left' }} caption">
          <h2 data-aos="fade-up">{{ $locale == 'ar' ? $hero->title_ar : $hero->title_en }}</span></h2>
          <p data-aos="fade-up" data-aos-delay="400">{{ $locale == 'ar' ? $hero->description_ar : $hero->description_en }}</p>
          <div class="social" data-aos="fade-up" data-aos-delay="600">
            @foreach($social_links as $link)
                <a href="{{ $link->url }}"><i class="{{ $link->icon }}"></i></a>
            @endforeach
            {{-- <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a> --}}
          </div>
          <div class="d-flex justify-content-start">
            <a href="#services" class="btn-get-started" data-aos="fade-up" data-aos-delay="1000">{{ __('messages.get_started') }}</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">
        <!-- Start Service Section -->
        <div id="services" class="section">
          <div class="top-icon-box position-relative">
            <div class="container position-relative">
              <div class="section-header">
                <h2>{{ __('messages.services') }}</h2>
                <p>{{ __('messages.services_header') }}</p>
              </div>
              <div class="row gy-4">
                @foreach ($services as $service)
                <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                      <div class="icon"><i class="{{ $service->icon }}"></i></div>
                      <h4 class="title"><a href="" class="stretched-link">{{ $locale == 'ar' ? $service->title_ar : $service->title_en }}</a></h4>
                      <p>{{ $locale == 'ar' ? $service->description_ar : $service->description_en }}</p>
                    </div>
                  </div>
                @endforeach
               
                {{-- <!--End Icon Box -->
      
                <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-server"></i></div>
                    <h4 class="title"><a href="" class="stretched-link">Web Hosting</a></h4>
                    <p>Hassle-free web hosting with powerful performance and unlimited possibilities.</p>
                  </div>
                </div>
                <!--End Icon Box -->
      
                
          
      
      
                <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="bx bx-cloud-download"></i></div>
                    <h4 class="title"><a href="" class="stretched-link">Cloud Server</a></h4>
                    <p>Reliable, scalable, and secure cloud server solutions tailored for your business needs.</p>
                  </div>
                </div> --}}
                <!--End Icon Box -->
      
{{--       
                <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="500">
                  <div class="icon-box">
                    <div class="icon"><img src="assets/images/icons/service-secure.svg" alt="icon"></div>
                    <h4 class="title"><a href="" class="stretched-link">Data Secuity</a></h4>
                    <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div> --}}
                <!--End Icon Box -->
      
              </div>
            </div>
          </div>
        </div>
        <!-- End Service Section -->

        <!-- Featured -->
        <section>
          <div class="container" id="featured">
              <div class="section-header" data-aos="fade-up" data-aos-delay="100">
                <h2>{{ __('messages.about_us') }}</h2>
                <p> {{ $locale == 'ar' ? $about->header_ar : $about->header_en }} </p>
              </div>
          <div class="row">
            <!-- start  left -->
            <div class="col-md-4 p-5 p-sm-5 left">
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="description">
                  <h4>{{ $locale == 'ar' ? $about->vision_ar : $about->vision_en }}</h4>
                  <p>{{ $locale == 'ar' ? $about->vision_description_ar : $about->vision_description_en }}</p>
                </div>
                  <div class="icon">
                    <img src="assets/images/icons/icon-2.svg" alt="icon">
                  </div>
              </div>
              
              {{-- <div class="list-wrap" data-aos="fade-up" data-aos-delay="400">
                <div class="description">
                  <h4>Products</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                  <div class="icon">
                    <img src="assets/images/icons/icon-2.svg" alt="icon">
                  </div>
            </div>
              
              
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="500">
                <div class="description">
                  <h4>Approach</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="icon">
                  <img src="assets/images/icons/icon-3.svg" alt="icon">
                </div>
              </div> --}}
            </div>
            <!-- end  left -->
            
            <!-- start  center -->
            <div class="col-md-4 p-4 p-sm-5 center">
              <div class="list-center-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="center-icon">
                  <img src="assets/images/features.jpg" alt="icon">
                </div>
              </div>
            </div>
            <!-- end  center -->
            <!-- start  right -->
            <div class="col-md-4 p-5 p-sm-5 right">
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="icon">
                  <img src="assets/images/icons/icon-1.svg" alt="icon">
                </div>
                <div class="description">
                  <h4>{{ $locale == 'ar' ? $about->mission_ar : $about->mission_en }} </h4>
                  <p>{{ $locale == 'ar' ? $about->mission_description_ar : $about->mission_description_en }}</p>
                </div>
            </div>
              
              {{-- <div class="list-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="icon">
                  <img src="assets/images/icons/icon-5.svg" alt="icon">
                </div>
                <div class="description">
                  <h4>Delivery</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
              
              
              <div class="list-wrap" data-aos="fade-up" data-aos-delay="500">
                <div class="icon">
                  <img src="assets/images/icons/icon-6.svg" alt="icon">
                </div>
                <div class="description">
                  <h4>Support</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div> --}}
            </div>
            <!-- end  right -->
          </div>
          
        </div>
    </section>
    <!-- Featured -->


    <!-- Portfolio Section -->
    {{-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App Design</li>
              <li data-filter=".filter-product">App Development</li>
              <li data-filter=".filter-branding">Branding</li>
              <li data-filter=".filter-books">It Solutions</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/images/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/images/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets/images/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/images/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/images/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/images/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets/images/portfolio/product-4.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/images/portfolio/product-4.jpg" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="assets/images/portfolio/product-5.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/images/portfolio/product-5.jpg" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="assets/images/portfolio/product-6.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/images/portfolio/product-6.jpg" class="img-fluid" alt=""></a>
              </div>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section> --}}
    <!-- End Portfolio Section -->

    <!-- Start Pricing Section -->
    {{-- <div class="pricing section">
      <div class="container-fluid">
        <div class="container">
          <div class="section-header">
            <h2>Pricing Plans</h2>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card text-center">
                <div class="title">
                  <h2>Basic</h2>
                </div>
                <div class="price">
                  <h4><sup>$</sup>25</h4>
                </div>
                <div class="option">
                  <ul>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Unlimited GB Space</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> 30 Domain Names</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free SSL</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Daily Backup</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free Templates</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free Email</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> 10 Databases</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Unlimited Email Address</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Live Support</li>
                  </ul>
                </div>
                <a href="#">Order Now</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card text-center">
                <div class="title">
                  <h2>Standard</h2>
                </div>
                <div class="price">
                  <h4><sup>$</sup>50</h4>
                </div>
                <div class="option">
                  <ul>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Unlimited GB Space</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> 30 Domain Names</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free SSL</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Daily Backup</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free Templates</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free Email</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> 10 Databases</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Unlimited Email Address</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Live Support</li>
                  </ul>
                </div>
                <a href="#">Order Now</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card text-center">
                <div class="title">
                  <h2>Premium</h2>
                </div>
                <div class="price">
                  <h4><sup>$</sup>100</h4>
                </div>
                <div class="option">
                  <ul>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Unlimited GB Space</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> 30 Domain Names</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free SSL</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Daily Backup</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free Templates</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Free Email</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> 10 Databases</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Unlimited Email Address</li>
                    <li><i class="bi bi-check-circle" aria-hidden="true"></i> Live Support</li>
                  </ul>
                </div>
                <a href="#">Order Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- End Pricing Section -->


    <!--  Testimonials Section  -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{ __('messages.success_stories') }}</h2>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach ($successStories as $story)

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center info-box">
                      <img src="assets/images/testimonials/testimonial-1.jpg" class="testimonial-img flex-shrink-0"
                        alt="">
                      <div>
                        <h3>{{ $locale == 'ar' ? $story->name_ar : $story->name_en }}</h3>
                        <h4>CFO</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      {{ $locale == 'ar' ? $story->description_ar : $story->description_en }}
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>              
              </div>
            </div><!-- End testimonial item -->
            @endforeach

            {{-- <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="assets/images/testimonials/testimonial-2.jpg" class="testimonial-img flex-shrink-0"
                      alt="">
                    <div>
                      <h3>Afa Rose</h3>
                      <h4>Web Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="assets/images/testimonials/testimonial-3.jpg" class="testimonial-img flex-shrink-0"
                      alt="">
                    <div>
                      <h3>Keena Lara</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="assets/images/testimonials/testimonial-4.jpg" class="testimonial-img flex-shrink-0"
                      alt="">
                    <div>
                      <h3>Fizzi Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div> --}}
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section --> 


    <!--  Start Counter Section  -->
    @if($settings && $settings->show_analysis_section)
    <div id="stats-counter" class="call-to-action stats-counter section">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-4">
            <div class="stats-item d-flex flex-column align-items-center">
              <div class="icon circle"><img src="assets/images/icons/happy-clients.svg" alt="icon"></div>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><span>Happy Clients</span> consequuntur quae diredo</p>
            </div><!-- End Stats Item -->
            </div>
            <div class="col-lg-4">
            <div class="stats-item d-flex flex-column align-items-center">
              <div class="icon circle"><img src="assets/images/icons/complete-projects.svg" alt="icon"></div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><span>Completed Projects</span> adipisci atque quia aut</p>
            </div><!-- End Stats Item -->
            </div>
            <div class="col-lg-4">
            <div class="stats-item d-flex flex-column align-items-center">
              <div class="icon circle"><img src="assets/images/icons/hours-support.svg" alt="icon"></div>
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1" class="purecounter"></span>
              <p><span>Hours Of Support</span> aut commodi quaerat</p>
            </div><!-- End Stats Item -->
          </div>
        </div>
      </div>
    </div>
    @endif
    <!--  End Counter Section  -->

    <!--  Clients Section  -->
    <div id="partners" class="clients section">
      <div class="container" data-aos="zoom-out">
  
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            @foreach ($partners as $partner)
            <div class="swiper-slide"><img src="{{ asset('storage/' . $partner->logo) }}" class="img-fluid" alt=""></div>

            @endforeach
          </div>
        </div>
  
      </div>
    </div>
    <!-- End Clients Section -->


    <!--  Our Team Section  -->
    {{-- <section id="team" class="team sections-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2>Team</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/images/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Jhone Bi</h4>
              <span>Application Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/images/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Sani Awesome</h4>
              <span>Social Media</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/images/team/team-3.jpg" class="img-fluid" alt="">
              <h4>Andrio Willi</h4>
              <span>Content Writer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/images/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Afa Jonson</h4>
              <span>Business Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section> --}}
    <!-- End Our Team Section -->


    <!--  Frequently Asked Questions Section  -->
    {{-- <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>FAQ's</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-1">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    What is web domain and hosting?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-2">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Which server is best for websites linux or windows?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-3">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Google cloud or Amazon server which one is best and fast?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq-content-4">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    Why Organic SEO is important for all businesses?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                    exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                    autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                    vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                  </div>
                </div>
              </div><!-- # Faq item-->
            </div>
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Frequently Asked Questions Section -->


    <!--  Call To Action Section  -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center aos-init aos-animate" data-aos="zoom-out">
         <div class="row gy-4">
          <div class="col-lg-12">
              <h3>{{ __('messages.discuss_project') }}</h3>
              <p>{{ __('messages.discuss_project_desc') }}</p>
              <a class="cta-btn" href="mailto:{{$contact->email}}">{{ __('messages.contact') }}</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Call To Action Section -->

{{-- 
    <!--  Recent Blog Posts Section  -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Blogs</h2>
          <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="row gy-4">
          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Domain & Hosting</p>
              <h2 class="title">
                <a href="blog-details.html">How to host website on any hosting provider?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">William Bla</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Feb 1, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Advertisement</p>
              <h2 class="title">
                <a href="blog-details.html">How to create add on google adwords?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Jobi Ret</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Oct 5, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->

          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/images/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>
              <p class="post-category">Marketing</p>
              <h2 class="title">
                <a href="blog-details.html">What is digital marketing and why is important?</a>
              </h2>
              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-author">Main Dow</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Dec 22, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section --> --}}

    <!-- Start Contact Section -->
    <div id="contact" class="contact-section section">
      <div class="section-header">
        <h2>{{ __('messages.contact') }}</h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12" data-aos="fade-right">
            <div class="contact-information-box-3">
              <div class="row">
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6>{{ __('messages.address') }}:</h6>
                      <p>{{ app()->getLocale() == 'ar' ? $contact->location_ar : $contact->location_en }}</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6>{{ __('messages.Call') }}:</h6>
                      <p>{{$contact->phone_1}} </p>
                      <p>{{$contact->phone_2}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="single-contact-info-box">
                    <div class="contact-info">
                      <h6>{{ __('messages.email') }}:</h6>
                      <p>{{$contact->email}}</p>
                      {{-- <p>email@example.com</p> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12" data-aos="fade-left">
            <div class="contact-form-box contact-form contact-form-3">
              <div class="form-container-box">
                <form class="contact-form form" id="ajax-contact" method="post" action="{{ route('contact-us.store') }}">
                    @csrf
                  <div class="controls">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-input-box">
                          <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('messages.your_name') }}*"
                            required="required" data-error="{{ __('messages.min_4') }}">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-input-box">
                          <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('messages.your_email') }}*"
                            required="required" data-error="{{ __('messages.valid_mail') }}">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group form-input-box">
                        <input type="text" class="form-control" name="phone" id="phone" required="required" placeholder="{{ __('messages.your_phone') }}" data-rule="minlen:9" data-error="{{ __('messages.min_9_num') }}" />
                          <div class="validate"></div>
                        </div>
                    </div>
                      <div class="col-md-12">
                        <div class="form-group form-input-box">
                          <input type="text" class="form-control" name="subject" placeholder="{{ __('messages.subject') }}"
                            required="required">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group form-input-box">
                          <textarea class="form-control" id="message" name="message" rows="7"
                            placeholder="{{ __('messages.write_4_us') }}" required="required"
                            data-error="{{ __('messages.message') }}"></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                      <div class="col-md-12 mt-2">
                        <button type="submit" data-text="Send Message">{{ __('messages.send_message') }}</button>
                      </div>
                      <div class="messages">
                        <div class="alert alert alert-success alert-dismissable alert-dismissable hidden"
                          id="msgSubmit"><button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">&times;</button> {{ __('messages.contact_success') }}</div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Section -->


  </main><!-- End #main -->

  <!--  Footer  -->
  <footer id="footer" class="footer-section {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}" >
    <div class="container">
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html" class="logo d-flex align-items-center">
                              <img src="https://tzamun.sa/assets/images/logo.png" alt="{{ __('messages.tzamun') }}">
                            </a>
                        </div>
                        {{-- <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                            elit,Lorem ipsum dolor sit amet.</p>
                        </div> --}}
                        <div class="footer-social-icon">
                            <span>{{ __('messages.follow-us') }}</span>
                            @foreach($social_links as $link)
                                <a href="{{ $link->url }}" class="{{ $link->name }}"><i class="{{ $link->icon }}"></i></a>
                            @endforeach
                          
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                      <div class="service-widget footer-widget">
                        <div class="footer-widget-heading">
                            <h3>{{ __('messages.services') }}</h3>
                        </div>
                          <ul class="list">
                            @foreach ($services as $service)
                            <li><a href="#services">{{ $locale == 'ar' ? $service->title_ar : $service->title_en }}</a></li>
                            @endforeach
                            
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                      <div class="service-widget footer-widget">
                        <div class="footer-widget-heading">
                            <h3>{{ __('messages.Pages') }}</h3>
                        </div>
                          <ul class="list">
                            <li class="active"><a href="#">{{ __('messages.home') }}</a></li>
                            <li><a href="#services">{{ __('messages.services') }}</a></li>
                            <li><a href="#featured">{{ __('messages.about_us') }}</a></li>
                            {{-- <li><a href="#success">{{ __('messages.success') }}</a></li> --}}
                            <li><a href="#partners">{{ __('messages.partners') }}</a></li>
                            <li><a href="#contact">{{ __('messages.contact') }}</a></li>
{{--                             
                            <li><a href="about.html">About</a></li>
                            <li><a href="packages.html">Pricing</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="porfolio.html">Portfolio</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="blogs.html">Blogs</a></li>
                            <li><a href="blogs-details.html">Blog Details</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="privacy-policy.html">Terms & Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li> --}}
                          </ul>
                      </div>
                  </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="contact-widget footer-widget">
                        <div class="footer-widget-heading">
                            <h3>{{ __('messages.contact') }}</h3>
                        </div>
                          <div class="footer-text">
                              <p><i class="bi bi-geo-alt-fill mr-15"></i> {{ app()->getLocale() == 'ar' ? $contact->location_ar : $contact->location_en }}</p>
                              <p><i class="bi bi-telephone-inbound-fill mr-15"></i>{{$contact->phone_1}}</p>
                              <p><i class="bi bi-envelope-fill mr-15"></i>{{$contact->email}}</p>
                          </div>
                    </div>
                    {{-- <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don't miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="bi bi-telegram"></i></button>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
           
        </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center active">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/javascripts/jquery.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/javascripts/plugins.js"></script>
  <script src="assets/javascripts/purecounter_vanilla.js"></script>
  <script src="assets/javascripts/validator.min.js"></script>
  <script src="assets/javascripts/contactform.js"></script>
  <script src="assets/javascripts/particles.min.js"></script>
  <script src="assets/javascripts/script.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Template Main JS File -->
  <script src="assets/javascripts/main.js"></script>



</body></html>