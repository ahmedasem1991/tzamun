<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TZAMUN</title>
  <meta content="TZAMUN is one of the top Software company. We believe that technology plays vital role for growing people and businesses.That’s why we always try to help people in achieving their objectives by using best technologies and solutions." name="descriptison">
  <meta content="TZAMUN is one of the top Software company. We believe that technology plays vital role for growing people and businesses.That’s why we always try to help people in achieving their objectives by using best technologies and solutions." name="keywords">

  <!-- Favicons -->
  <link href="https://tzamun.sa/assets/images/favicon.png" rel="icon">
  <link href="https://tzamun.sa/assets/images/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Maxim - v2.2.0
  * Template URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo {{ app()->getLocale() == 'ar' ? 'mr-left' : 'mr-auto' }}">
         
        <h1 class="text-light"><a href="#"> <img src="https://tzamun.sa/assets/images/logo.png" > </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="{{ app()->getLocale() == 'ar' ? 'rtl-nav' : 'ltr-nav' }}">
            <li class="active"><a href="#">{{ __('messages.home') }}</a></li>
            <li><a href="#about">{{ __('messages.about_us') }}</a></li>
            <li><a href="#portfolio">{{ __('messages.partners') }}</a></li>
            <li><a href="#success">{{ __('messages.success') }}</a></li>

            <li><a href="#services">{{ __('messages.services') }}</a></li>
            {{-- <li><a href="#team">{{ __('messages.team') }}</a></li> --}}
            <li><a href="#contact">{{ __('messages.contact') }}</a></li>
        
            <!-- Language Switcher: Show Arabic if in English & Show English if in Arabic -->
            @if(app()->getLocale() == 'en')
                <li><a href="{{ route('switch-language', 'ar') }}">العربية</a></li>
            @else
                <li><a href="{{ route('switch-language', 'en') }}">English</a></li>
            @endif
        </ul>
        
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background: url('{{ asset('storage/' . $hero->background_image) }}') center center;  background-size: cover;
  position: relative;">
    <div class="container text-center {{ $locale == 'ar' ? 'text-md-right' : 'text-md-left' }}" data-aos="fade-up">
      <h1>{{ $locale == 'ar' ? $hero->title_ar : $hero->title_en }}</h1>
      <br>
      <h2>{{ $locale == 'ar' ? $hero->description_ar : $hero->description_en }}</h2>
      <a href="#about" class="btn-get-started scrollto">{{ __('messages.get_started') }}</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
          <center> <img src="tlogo.png" style=" " class="img-fluid" alt=""></center> 
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0 {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
            <h3 data-aos="fade-up">{{ __('messages.about_us') }}</h3>
            <p data-aos="fade-up">
              {{ $locale == 'ar' ? $about->header_ar : $about->header_en }}            </p>
            <div class="icon-box" data-aos="fade-up">
             @php if(app()->getLocale() == 'en'): @endphp
              <i class="bx bx-receipt"></i>
              @php endif; @endphp
              <h4>{{ $locale == 'ar' ? $about->vision_ar : $about->vision_en }} </h4>
              <p>{{ $locale == 'ar' ? $about->vision_description_ar : $about->vision_description_en }} </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              @php if(app()->getLocale() == 'en'): @endphp
              <i class="bx bx-cube-alt"></i>
              @php endif; @endphp
              <h4>{{ $locale == 'ar' ? $about->mission_ar : $about->mission_en }} </h4>
              <p>{{ $locale == 'ar' ? $about->mission_description_ar : $about->mission_description_en }} </p>
              </div>

            {{-- <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              @php if(app()->getLocale() == 'en'): @endphp
              <i class="bx bx-cube-alt"></i>
              @php endif; @endphp

              <h4>Team of skilled professionals</h4>
              <p>We develop an excellent team of IT professionals to meet future challenges.</p>
            </div> --}}

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


   
    <section id="portfolio" class="portfolio section-bg"> 
       <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div id="trustedcustomers" runat="server" class="section-title text-center pb-25">

                    <h3 class="title" style="color:#005e9c;font-weight:900"></h3><h3 class="title" style="color:#005e9c;font-weight:900">Our Partners</h3>


                </div>
            </div>
        </div> <!-- row -->

        <div class="row justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">    
                    <div class="carousel-item">
                        <div class="row d-flex flex-wrap p-5">
                          @foreach ($partners as $i=> $partner)
                          @if ($i>3)
                            <div class="col-6 col-md-3 p-5"><img src="{{$partner->logo}}"  class="d-block w-100"></div>
                          @endif
                          @endforeach
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="row d-flex flex-wrap p-5">
                          @foreach ($partners as $i=> $partner)
                          @if ($i<4)
                            <div class="col-6 col-md-3 p-5"><img src="{{$partner->logo}}"  class="d-block w-100"></div>
                          @endif
                          @endforeach
                          
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style=" margin-right: -5%;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        
        </div>
    </div>
    </section>
    <!-- ======= Steps Section ======= -->
    <section id="success" class="steps">
      <div class="container">

        <div class="row no-gutters {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
          <h1 class="col-md-12 text-center" style="margin-bottom: 25px;">{{ __('messages.success_stories') }}</h1>
          @foreach ($successStories as $i => $story)
          <div class="col-lg-6 col-md-6 content-item" style="{{ $i % 2 == 0 && app()->getLocale() == 'ar' ? 'border-left: 1px solid #d4e9e6;' : '' }} {{ $i % 2 == 0 && app()->getLocale() == 'en' ? 'border-right: 1px solid #d4e9e6;' : '' }} " data-aos="fade-in" data-aos-delay="100">
            <span><img src="{{$story->logo}}" style="margin: auto; display: block;"></span>
            <h4>{{ $locale == 'ar' ? $story->name_ar : $story->name_en }}</h4>
            <p>{{ $locale == 'ar' ? $story->description_ar : $story->description_en }}</p>
          </div>
          @endforeach
          

        

        </div>

      </div>
    </section><!-- End Steps Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('messages.services') }}</h2>
          <p>{{ __('messages.services_header') }}</p>
        </div>

        <div class="row">
          @foreach ($services as $i=>$service)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                    <div class="icon-box icon-box-pink">
                        <div class="icon" style="color:{{($i % 2 == 0)? '#28ba9b !important;' : '#1876b0 !important;'}}"><i class="{{ $service->icon }}"></i></div>
                        <h4 class="title">
                            <a href="">{{ $locale == 'ar' ? $service->title_ar : $service->title_en }}</a>
                        </h4>
                        <p class="description">
                            {{ $locale == 'ar' ? $service->description_ar : $service->description_en }}
                        </p>
                    </div>
                </div>
            @endforeach
          {{-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-react"></i></div>
              <h4 class="title"><a href="">Enterprise Software Development</a></h4>
              <p class="description">We provide full range of custom software development services to bring your ideas to life. Our turnkey solutions are custom-designed to fit into your enterprise software ecosystem. Anything you can dream up, from a custom desktop application to a global app, we can build it.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-laptop"></i></div>
              <h4 class="title"><a href="">Web Development</a></h4>
              <p class="description">We create beautifully designed web apps precisely tailored to your situation. From providing Software as a Service to creating custom software to support your customers, our Web App team will get you up and running.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-mobile"></i></div>
              <h4 class="title"><a href="">Mobile Apps Development</a></h4>
              <p class="description">Consumers spend nearly a quarter of their day on their mobile phone – and 92% of that time is spent using apps. Your app needs to be brilliantly designed and intuitive to have a shot at getting anyone’s attention.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">UI/UX</a></h4>
              <p class="description">Good user experiences are very important to us for every software we create. By basing our software on human-centered design principles, we ensure your users get the best experience, and you get the best return on investment.</p>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Services Section -->

   
    {{-- <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                  <h4>Web Solutions</h4>
                  <p>Our web development team creates intuitive user experiences wrapped up in beautiful designs. Everything we create is custom and precisely made to your specification. Our award-winning web apps have found the best deals for travelers, enabled businesses to maximize their ROI, and more.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-2">
                  <h4>Mobile APPs</h4>
                  <p>Our team builds nimble and elegant apps for all smartphone platforms. Our engineers work closely with you to understand your specifications and develop apps that provide an intuitive end user experience. Our ongoing support ensures your app is ever-ready for your users.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-3">
                  <h4>Data Integration</h4>
                  <p>Our powerful data mining techniques, including automated and semi-automated data scraping and analysis services, accelerate data analysis. We specialize in creating custom models that collect data, apply the most effective analysis techniques, and convert it into actionable insights.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-toggle="tab" href="#tab-4">
                  <h4>Enterprise Solutions</h4>
                  <p>Our IT company understands your need for a reliable and consistent partner in providing quality solutions to your customers. Work with us, and we guarantee to deploy all of our resources to effectively address your concerns. Entrust your needs to us. You can expect us to provide you with nothing less than outstanding solutions that you won’t find elsewhere.</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/features-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/features-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="images/data.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="images/sol.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section --> --}}



    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section>End Testimonials Section -->


    {{-- <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>TZAMUN team is comprised of industry experts who are passionate about their work, have excelled in their field, and have an extensive background in a wide variety of applications. Our team delivers a full-range of skill -sets to meet your needs up and down the stack, including strategic planners, project management professionals (PMP), and tactical specialists.
              Their telecommunication and IT intelligence supports midsize to large enterprise businesses. This group of talented professionals has been responsible for the satisfaction, retention and growth of our base of clients.</p>
        </div>

        <div class="row">

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <img src="images/avatar.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Adel Samoum</h4>
                  <span>Chairman</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="images/avatar.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Haseeb Ahmed</h4>
                  <span>IT Head</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="images/avatar.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Syed Wahhabuddin Ahmed</h4>
                  <span>SR. Project Manager</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section --> --}}

    {{-- <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>We have compiled frequently asked questions on this page. For other questions and more information, please <a href="#contact">Contact Us</a>.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">What can you help me with? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                With whatever we can. Preparing cost analysis, establishing team roles, creating roadmaps. Defining business goals, key business values, target users, main features, prioritizing. We can find you similar projects that are already active on the market to benchmark against. We can assist you with creating user personas, mock-ups, user stories, time frame, establishing project status and preparing project estimation. We'll be happy to outline project specification, prepare wireframes, details concerning integrations with external services, API documentation, required features list.
                <br>
                In terms of project development we prepare server-side architecture, front end, back end, graphic and UX design, and create back-office consoles.
                <br>
                We are also happy to advise our customers in terms of budgeting, scheduling, risk management, and business model creation.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Should I create a mobile or a web app? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                Both have their benefits and flaws. Mobile apps are surely more expensive but can provide you with many more data collecting, monetisation capabilities than web applications. Progressive Web Apps are a good compromise between a mobile and web app.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">What do I need to know before contacting you? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                Well, the most important thing to know is what do you want to accomplish. Why do I need this software? What for? What should it do? Having a clear vision in mind is crucial when ordering a software application. You don't want to spend many months developing it with us without being sure what you need.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">How much time will it take for you to make my app? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                To give you a precise answer we must prepare a project scope and create a budget. We shall tell you how much of that scope can be completed within the budget and we'll be able to estimate how long will it take after at least a month of work. Don't worry, if you're not happy with our work after two weeks you can retract from the project with no penalties, this is our trial period and we believe that any reliable software house should give you one.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">How do you guarantee product quality? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                We evaluate the result after every two weeks, we test our work (we conduct both development and acceptance tests), we present it to you, we apply your feedback so you know you get what you are paying for.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">How can I be sure you work at my project as much as you declare? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                We thoroughly monitor our developers and control how much time they spend on each task down to the exact minute. We use Harvest software and Redmine to track time spent on your project.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">What if I come to you with a product that I want to improve? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                We’ll be more than happy to help you with that. Beginning with a UX Audit (if applicable) through improving your system architecture and adding new features.
                </p>
              </div>
            </li>


            

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>{{ __('messages.contact') }}</h2>
          <p>{{ __('messages.Feel_free_to_contact_us_for_any_inquiries_or_Information') }}</p>
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4 class="{{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">{{ __('messages.Location') }} :</h4>
                <p class="{{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">{{ app()->getLocale() == 'ar' ? $contact->location_ar : $contact->location_en }}</p>
              </div>

              <div class="email mt-4">
                <i class="icofont-envelope"></i>
                <h4 class="{{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">{{ __('messages.Email') }} :</h4>
                <p class="{{ app()->getLocale() == 'ar' ? 'text-right' : '' }}" style="direction: ltr;">{{$contact->email}}</p>
              </div>

              <div class="phone mt-4">
                <i class="icofont-phone"></i>
                <h4 class="{{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">{{ __('messages.Call') }}:</h4>
                <p class="{{ app()->getLocale() == 'ar' ? 'text-right' : '' }}" style="direction: ltr;">{{$contact->phone_1}}</p>
                <p class="{{ app()->getLocale() == 'ar' ? 'text-right' : '' }}" style="direction: ltr;"> {{$contact->phone_2}}</p>
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <iframe style="border:0; width: 100%; height: 320px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.355569971955!2d39.19788998505808!3d21.57203948570655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d13d579fd91f%3A0x69327f8b17ab479c!2sAlawadiliah%20Information%20Technology!5e0!3m2!1sar!2seg!4v1596021500612!5m2!1sar!2seg" frameborder="0" allowfullscreen></iframe>
          </div>

          
        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="contact-us" method="post" role="form" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('messages.your_name') }}" data-rule="minlen:4" data-msg="{{ __('messages.min_4') }}" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('messages.your_email') }}" data-rule="email" data-msg="{{ __('messages.valid_mail') }}" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="subject" class="form-control" id="subject" placeholder="{{ __('messages.subject') }}" data-rule="minlen:4" data-msg="{{ __('messages.min_4') }}" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="{{ __('messages.your_phone') }}" data-rule="minlen:9" data-msg="{{ __('messages.min_9_num') }}" />
                  <div class="validate"></div>
                </div>
              </div>
            


              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="{{ __('messages.write_4_us') }}" placeholder="{{ __('messages.message') }}"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">{{ __('messages.loading') }}</div>
                <div class="error-message"></div>
                <div class="sent-message">{{ __('messages.contact_success') }}</div>
              </div>
              <div class="text-center"><button type="submit">{{ __('messages.send_message') }}</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top {{ app()->getLocale() == 'ar' ? 'text-right' : 'text-left' }}">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info" style="{{ app()->getLocale() == 'ar' ? 'padding-left: 20%;' : 'padding-right: 20%;' }} ">
              <h3>{{ __('messages.tzamun') }}</h3>
              <p><strong>{{ __('messages.Location') }}:</strong> {{ app()->getLocale() == 'ar' ? $contact->location_ar : $contact->location_en }}<br>
                <strong>{{ __('messages.Call') }}:</strong> {{$contact->phone_1}} - {{$contact->phone_2}}<br>
                <strong>{{ __('messages.email') }}:</strong> {{$contact->email}}<br>
              </p>
              <!-- <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div> -->
            </div>
          </div>


          <div class="col-lg-2 col-md-6 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">{{ __('messages.home') }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">{{ __('messages.about_us') }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">{{ __('messages.partners') }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#success">{{ __('messages.success') }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">{{ __('messages.services') }}</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">{{ __('messages.contact') }}</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>{{ __('messages.services') }}</h4>
            <ul>
              @foreach ($services as $i=>$service)
                <li><i class="bx bx-chevron-right"></i> <a href="#services">{{ $locale == 'ar' ? $service->title_ar : $service->title_en }}</a></li>
              @endforeach

            </ul>
          </div>

           <div class="col-lg-4 col-md-6 footer-newsletter">
            <!-- <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="{{ __('messages.subscribe') }}">
            </form>

          </div> 

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; {{ __('messages.copy_right') }}
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/ -->
        <!-- Designed by <a href="#">tzamun</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>