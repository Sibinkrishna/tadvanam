<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('website/assets/images/Logo.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('title')" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">

     <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('title')-Tadvanam" />
      <meta property="og:image" content="{{asset('website/assets/images/Logo.png')}}" />
      <meta property="og:type" content="website" />
      <meta property="og:site_name" content="Tadvanam" />
    <!-- CSS Files
        ================================================== -->

    <link href="{{ asset('website/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('website/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('website/assets/css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('website/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('website/assets/css/coloring.css')}}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{ asset('website/assets/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        <div class="loader-overlay" id="loader">
    <div class="loader-content">
      <img src="{{asset('website/assets/images/background/1095028_102-removebg-preview.png')}}" alt="Swamiji" class="swamiji-image" />
      <div class="dot-loader">
      </div>
      <p>Loading... Tadvanam</p>
    </div>
  </div>
        <!-- preloader end -->

        <!-- header begin -->
        <header class="header-light transparent" style="background-color: #fff !important;">
            <div id="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between xs-hide">
                                <div class="d-flex">
                                    <div class="topbar-widget me-3"><a href="tel:94001 68316"><i class="icofont-phone"></i>+91 94001 68316</a> <a href="tel:85899 98585"  style="margin-top: 8px !important;"><i class="iicofont-phone"></i>+91 85899 98585</a></div>
                                    <div class="topbar-widget me-3"><a href="#"><i
                                                class="icofont-location-pin"></i>Tadvanam Ashramam, Kurumugham,
                                            Kalladikkode, Palakkad –
                                            678597</a></div>
                                    <div class="topbar-widget me-3"><a href="mailto:tadvanamashramam@gmail.com"><i
                                                class="icofont-envelope"></i>tadvanamashramam@gmail.com</a></div>
                                </div>

                                <div class="d-flex">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a>
                                        <a href="#"><i class="fa-brands fa-pinterest fa-lg"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo">
                                    <a href="{{route('home')}}">
                                        <img class="logo-main" src="{{asset('website/assets/images/Logo.png')}}" alt="">
                                        <img class="logo-scroll" src="{{asset('website/assets/images/Logo.png')}}" alt="">
                                        <img class="logo-mobile" src="{{asset('website/assets/images/Logo.png')}}" alt="">
                                    </a>
                                </div>
                                <!-- logo end -->
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <!-- mainemenu begin -->
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="{{ route('home') }}">Home</a></li>
                                    <li><a class="menu-item" href="#">About Us</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('tadvanam-about') }}">History</a></li>
                                            <li><a class="menu-item" href="{{ route('tadvanam-governing-body') }}">Governing Body</a></li>
                                            <li><a class="menu-item" href="{{ route('tadvanam-founder') }}">Our Founder</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="#">Tadvanam</a>
                                        <ul>
                                            <li><a class="menu-item" href="{{ route('tadvanam') }}">About</a></li>
                                            <li><a class="menu-item" href="{{ route('tadvanopasana') }}">Tadvanopasana</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('vivekananda') }}">Vivekananda Darshanika
                                            Samajam</a></li>
                                    <li><a class="menu-item" href="{{ route('programs') }}">Programs & Events</a>
                                        <ul>
                                             @foreach ($categories as $category)
                                                <li><a class="menu-item" href="{{ route('programs.byCategory', $category->id) }}">{{ $category->name }}</a></li>
                                            @endforeach
                                            {{-- <li><a class="menu-item" href="">Upcoming</a></li>
                                            <li><a class="menu-item" href="#">Tadvanam</a></li>
                                            <li><a class="menu-item" href="#">Vivekananda Darshanika Samajam</a></li> --}}
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                                <!-- mainmenu end -->
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="#" class="btn-main" data-bs-toggle="modal" data-bs-target="#enquiry-modal" title="Enquiry">Join Us</a>
                                    <span id="menu-btn"></span>
                                </div>

                                <div id="btn-extra">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>
            @yield('content')
        </div>
        <!-- Enquiry Popup Modal -->
        <div id="enquiry-modal" class="modal fade" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('volunteer.send') }}">
                @csrf
                <div class="modal-body">
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="enquiry-name" class="form-label mb-0">Name</label>
                                <input type="text" class="form-control" id="enquiry-name" name="name" required>
                            </div>
                            <div class="col-6">
                               <label for="enquiry-phone" class="form-label mb-0">Phone</label>
                                <input type="tel" class="form-control" id="enquiry-phone" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="enquiry-email" class="form-label mb-0">Email</label>
                                <input type="email" class="form-control" id="enquiry-email" name="email" required>
                            </div>
                            <div class="col-6">
                                <label for="enquiry-age" class="form-label mb-0">Age</label>
                                <input type="number" class="form-control" id="enquiry-age" name="age" min="1" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="enquiry-education" class="form-label mb-0">Education</label>
                                <input type="text" class="form-control" id="enquiry-education" name="education" required>
                            </div>
                            <div class="col-6">
                                <label for="enquiry-gender" class="form-label mb-0">Gender</label>
                                <select class="form-select" id="enquiry-gender" name="gender" required>
                                    <option value="" selected disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="enquiry-message" class="form-label mb-0">Message</label>
                        <textarea class="form-control" id="enquiry-message" name="message" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn-1 btn-main">Send Enquiry</button>
                </div>
                </form>
            </div>
            </div>
        </div>

        <!-- Enquiry Button (fixed at bottom right) -->
        {{-- <button type="button" class="btn btn-danger rounded-circle shadow"
            style="position: fixed; bottom: 30px; right: 30px; z-index: 1050; width: 60px; height: 60px;"
            data-bs-toggle="modal" data-bs-target="#enquiry-modal" title="Enquiry">
            <i class="icofont-envelope" style="font-size: 1.5rem;"></i>
        </button> --}}
        <!-- footer begin -->
        <footer class="section-dark">
            <div class="container relative z-2">
                <div class="row gx-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-image" style="background-color: rgb(241, 255, 221); padding: 20px; text-align: center; border-radius:20px">
                    <img src="{{asset('website/assets/images/Logo.png')}}" class="w-50" alt="Logo">
                </div>
                        <div class="spacer-20"></div>
                        <p style="text-align: justify;">The Ashramam intends to study and assimilate this knowledge, welcoming anyone interested in
                            Tadvanopasana
                        </p>
                            <div class="social-icons mb-sm-30">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>

                    </div>
                    <div class="col-lg-3 col-sm-12 order-lg-1 order-sm-2">
                        <div class="widget">
                            <h5>Quick Links</h5>
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('tadvanam-about') }}">About</a></li>
                                <li><a href="{{ route('vivekananda') }}">Vivekananda Darshanika</a></li>
                                <li><a href="{{ route('programs') }}">Our Events & programs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 order-lg-1 order-sm-2">
                        <div class="widget">
                            <h5>Events Links</h5>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a class="menu-item" href="{{ route('programs.byCategory', $category->id) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 order-lg-2 order-sm-1">
                        <div class="widget">

                            <div class="fw-bold text-white"><i class="icofont-location-pin me-2 id-color-2"></i>Office
                                Location
                            </div>
                            Tadvanam Ashramam, Kurumugham, Kalladikkode, Palakkad – 678597
                            <div class="spacer-20"></div>
                            <div class="fw-bold text-white"><i class="icofont-phone me-2 id-color-2"></i>Phone</div>
                            <a href="tel:94001 68316">+91 94001 68316</a>, <a href="tel:85899 98585">+91 85899 98585</a>
                            <div class="spacer-20"></div>
                            <div class="fw-bold text-white"><i class="icofont-envelope me-2 id-color-2"></i>Send a
                                Message
                            </div>
                            <a href="mailto:tadvanamashramam@gmail.com">tadvanamashramam@gmail.com</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    Copyright © 2025 Tadvanam. All rights reserved. Powered By<a href="https://tricetechnologies.in/" target="_blank" style="margin-left:5px"> Trice Technologies </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{asset('website/assets/images/misc/silhuette-1-black.webp')}}" class="abs bottom-0 op-3" alt="">
        </footer>
        <!-- footer end -->
    </div>

    <!-- overlay content begin -->
    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="{{asset('website/assets/images/Logo.png')}}" class="w-150px" alt=""
                style="background-color:#e9eae5; padding: 20px;border-radius: 5px;">

            <div class="spacer-30-line"></div>

            <h5>Quick Links</h5>
            <ul class="no-style">
                 <li><a href="{{ route('home') }}">Home</a></li>
                 <li><a href="{{ route('tadvanam-about') }}">About</a></li>
                 <li><a href="{{ route('vivekananda') }}">Vivekananda Darshanika</a></li>
                 <li><a href="{{ route('programs') }}">Our Events & programs</a></li>
                 <li><a href="{{ route('programs') }}">Upcoming Events</a></li>
            </ul>

            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>
            <div><i class="icofont-phone me-2 op-5"></i><a href="tel:94001 68316">+91 94001 68316</a>, <a href="tel:85899 98585">+91 85899 98585</a></div>
            <div><i class="icofont-location-pin me-2 op-5"></i>Tadvanam Ashramam, Kurumugham, Kalladikkode, Palakkad –
                678597
            </div>
            <div><i class="icofont-envelope me-2 op-5"></i><a href="mailto:tadvanamashramam@gmail.com">tadvanamashramam@gmail.com</a></div>

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p style="text-align: justify;">The Ashramam intends to study and assimilate this knowledge, welcoming anyone interested in Tadvanopasana
            </p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <!-- overlay content end -->


    <!-- Javascript Files
        ================================================== -->
    <script src="{{ asset('website/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('website/assets/js/designesia.js')}}"></script>
    <link rel="stylesheet " href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css " />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js "></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var slider = document.querySelector('#programs-slider .swiper-wrapper');
            var slides = slider ? slider.children.length : 0;

            // If only 2 slides, duplicate them to allow proper looping
            if (slides === 2) {
                var first = slider.children[0].cloneNode(true);
                var second = slider.children[1].cloneNode(true);
                slider.appendChild(first);
                slider.appendChild(second);
            }

            new Swiper('#programs-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    },
                    1200: {
                        slidesPerView: 3
                    }
                }
            });
        });
    </script>
    <script>
        window.addEventListener("load", function () {
  const loader = document.getElementById("loader");
  const content = document.querySelector(".main-content");

  setTimeout(() => {
    loader.style.display = "none";
    content.style.display = "block";
  }, 2500); // Change duration if needed
});

    </script>
</body>

</html>
