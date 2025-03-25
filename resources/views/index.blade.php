<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tzamun</title>
  <meta content="" name="Tzamun - IT Solutions & Business Services">
  <meta name="description" content="Tzamun - IT Solutions & Business Services">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta content="" name="ZRTHEMES">

  <!-- Favicons -->
  <link href="{{ asset('storage/favicon.png') }}" rel="icon">
  <link href="{{ asset('storage/favicon.png') }}" rel="apple-touch-icon">

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Carlito:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carlito:ital,wght@0,400;0,700;1,400;1,700&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="assets/stylesheets/styles.css" rel="stylesheet">


</head>

<body>

  <header id="header" class="header d-flex align-items-center sticked stikcy-menu" style="position: fixed;
    top: 0;
    right: 0;
    left: 0;
    height: 90px;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset('storage/logo-black.png') }}" alt="logo" class="logo-default">

        <img src="{{ asset('storage/tzamun-logo.png') }}" alt="logo" class="logo-sticky">
      </a>
      <nav id="navbar" class="navbar">
        <ul class="{{ app()->getLocale() == 'ar' ? 'rtl-nav' : 'ltr-nav' }}">
            <li class="active"><a href="#"><i class="menu-logo bi bi-house"></i> {{ __('messages.home') }}</a></li>
            @if($settings && $settings->show_services_section)
            <li><a href="#services"><i class="menu-logo bi bi-tools"></i>{{ __('messages.services') }}</a></li>
            @endif
            @if($settings && $settings->show_about_us_section)
            <li><a href="#featured"><i class="menu-logo bi bi-person-lines-fill"></i>{{ __('messages.about_us') }}</a></li>
            @endif
            @if($settings && $settings->show_teams_section)
            <li><a href="#team"><i class="menu-logo bi bi-people-fill"></i>{{ __('messages.team') }}</a></li>
            @endif
            @if($settings && $settings->show_partner_section)
            <li><a href="#partners"><i class="menu-logo bi bi-people"></i>{{ __('messages.partners') }}</a></li>
            @endif
            @if($settings && $settings->show_contact_us_section)
            <li><a href="#contact"><i class="menu-logo bi bi-envelope"></i>{{ __('messages.contact') }}</a></li>
            @endif
            @if(app()->getLocale() == 'en')
            <li><a href="{{ route('switch-language', 'ar') }}"><i class="menu-logo bi bi-translate"></i>العربية</a></li>
        @else
            <li><a href="{{ route('switch-language', 'en') }}"><i class="menu-logo bi bi-translate"></i>English</a></li>
        @endif
            <li class="menu-social">
              <span class="follow-menu">{{ __('messages.follow-us') }}</span>
              @foreach($social_links as $link)
                  <a class="follow-menu-nav" href="{{ $link->url }}"><i class="{{ $link->icon }}"></i></a>
              @endforeach
            </li>
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
        @if($settings && $settings->show_services_section)

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
                      <div class="icon service-icon"><i class="{{ $service->icon }}"></i></div>
                      <h4 class="title"><a href="" class="stretched-link">{{ $locale == 'ar' ? $service->title_ar : $service->title_en }}</a></h4>
                      <p>{{ $locale == 'ar' ? $service->description_ar : $service->description_en }}</p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!-- End Service Section -->
        @endif
        @if($settings && $settings->show_services_section)
        <!-- aboutus -->
        <section>
            <div class="container" id="featured">
                <div class="section-header" data-aos="fade-up" data-aos-delay="100">
                  <h2>{{ __('messages.about_us') }}</h2>
                  <p> {{ $locale == 'ar' ? $about->header_ar : $about->header_en }} </p>
                </div>
            <div class="row">
              <!-- start  left -->
              <div class="col-md-4 p-5 p-sm-5 ">
                <div class="list-wrap" data-aos="fade-up" data-aos-delay="100">
                  <div class="description">
                    <h4>{{ $locale == 'ar' ? $about->vision_ar : $about->vision_en }}</h4>
                    <p>{{ $locale == 'ar' ? $about->vision_description_ar : $about->vision_description_en }}</p>
                  </div>
                    <div class="icon">
                      {{-- <img src="assets/images/icons/icon-2.svg" alt="icon"> --}}
                    </div>
                </div>
              </div>
              <!-- end  left -->
              
              <!-- start  center -->
              <div class="col-md-4 p-4 p-sm-5 center">
                <div class="list-center-wrap" data-aos="fade-up" data-aos-delay="100">
                  <div class="center-icon">
                    <img src={{ !empty($about->logo) ? asset('storage/'.$about->logo) : asset('images/features.jpg') }} alt="icon">

                  </div>
                </div>
              </div>
              <!-- end  center -->
              <!-- start  right -->
              <div class="col-md-4 p-5 p-sm-5 ">
                <div class="list-wrap" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon">
                    {{-- <img src="assets/images/icons/icon-1.svg" alt="icon"> --}}
                  </div>
                  <div class="description">
                    <h4>{{ $locale == 'ar' ? $about->mission_ar : $about->mission_en }} </h4>
                    <p>{{ $locale == 'ar' ? $about->mission_description_ar : $about->mission_description_en }}</p>
                  </div>
              </div>
              </div>
              <!-- end  right -->
            </div>
            
          </div>
        </section>
         <!-- about us -->
         @endif
                  <div class="swiper-pagination" style="display: none;"></div>
                </div>
              </div>

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
          @if($settings && $settings->show_partner_section)
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
            @endif
               <!--  Our Team Section  -->
               @if($settings && $settings->show_teams_section)
              <section id="team" class="team sections-bg">
                <div class="container aos-init aos-animate" data-aos="fade-up">

                  <div class="section-header">
                    <h2>Team</h2>
                  </div>

                  <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                      {{-- @dd($team_members) --}}
                      @foreach ( $team_members as $member)
                          <div class="member">
                            <img src="{{ asset($member->image) }}" class="img-fluid" alt="">
                            <h4>{{$member->name}}</h4>
                            <span>{{$member->job_title}}</span>
                            <div class="social">
                              <a href="{{$member->twitter}}"><i class="bi bi-twitter"></i></a>
                              <a href="{{$member->facebook}}"><i class="bi bi-facebook"></i></a>
                              <a href="{{$member->linkedin}}"><i class="bi bi-linkedin"></i></a>
                              <a href="{{$member->instagram}}"><i class="bi bi-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      @endforeach

                    {{-- <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
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
                    </div><!-- End Team Member --> --}}

                  </div>

                </div>
              </section>
              @endif
              <!-- End Our Team Section -->
              
              @if($settings && $settings->show_discuss_section)
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
              @endif
              
              <!-- Start Contact Section -->
              @if($settings && $settings->show_contact_us_section)
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
                            <div class="single-contact-info-box {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                              <div class="contact-info">
                                <h6>{{ __('messages.address') }}:</h6>
                                <p>{{ app()->getLocale() == 'ar' ? $contact->location_ar : $contact->location_en }}</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="single-contact-info-box {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
                              <div class="contact-info">
                                <h6>{{ __('messages.Call') }}:</h6>
                                <p>{{$contact->phone_1}} </p>
                                <p>{{$contact->phone_2}}</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="single-contact-info-box {{ app()->getLocale() == 'ar' ? 'text-right' : '' }}">
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
              @endif
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
                            <a href="/" class="logo d-flex align-items-center">
                              <img src="{{ asset('storage/logo-black.png') }}" alt="{{ __('messages.tzamun') }}">
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
                            <li><a href="#services" class="service_logo">{{ $locale == 'ar' ? $service->title_ar : $service->title_en }}</a></li>
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
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        var header = document.getElementById("header");
    
        // Function to toggle sticky class
        function toggleSticky() {
          console.log(window.scrollY);
            if (window.scrollY > 50) {
                header.classList.add("sticked");
            } else {
                header.classList.remove("sticked");
            }
        }
    
        // Run once on page load
        toggleSticky();
    
        // Run on scroll
        window.addEventListener("scroll", toggleSticky);
    });
    </script>
    


</body></html>