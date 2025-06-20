@extends('Website.Layouts.app')
@section('title', 'Our Centers')
@section('content')
<section id="subheader" class="relative jarallax text-light">
                <img src="{{asset('website/assets/images/background/breadcrumb.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb">
                                <li><a href="#">Home</a></li>
                                <li class="">About</li>
                                <li class="active">Our Centers</li>
                            </ul>
                            <h1 class="text-uppercase">Tadvanam</h1>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>
            <section class="main-bg" style="position: relative;">
                <img src="{{asset('website/assets/images/background/depiction.webp')}}" alt="Background" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; object-fit: contain; z-index: 0; opacity: 0.15; pointer-events: none;">

                <div class="container relative z-1">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class=" rounded-1 overflow-hidden wow zoomIn">
                                                <img src="{{ asset('website/assets/images/services/center-1.webp')}}" class="w-100 wow scaleIn" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row g-4">
                                        <div class="spacer-single sm-hide"></div>

                                        <div class="col-lg-12">
                                           <div class=" rounded-1 overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                                <img src="{{ asset('website/assets/images/services/center-2.webp')}}" class="w-100 wow scaleIn" alt="" data-wow-delay=".3s">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".2s">Tadvanam</div>
                            <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".4s">Our Ashramam  <span class="id-color-2">Centres</span></h2>
                            <p class="wow fadeInUp text-justify" style="text-align: justify" data-wow-delay=".6s">Tadvanam Ashramam is rooted in two sanctuaries — one embraced by the timeless forest, the other nestled within the quiet pulse of town life. Each offers a unique doorway for sincere seekers to draw closer to truth, stillness, and the living tradition of Tadvanam.</p>
                            <h3>1. Headquarters — Kalladikodan Hill</h3>
                            <p class="wow fadeInUp text-justify" style="text-align: justify" data-wow-delay=".6s">Where silence breathes and the forest listens.
                            The headquarters of Tadvanam Ashramam crowns the Kalladikodan hill, deep within the Western Ghats near Kalladikode. Here, far from modern noise, seekers find a space for undisturbed meditation and tapas, surrounded by ancient trees and the quiet presence of wildlife. In this sacred solitude, one can taste the timeless atmosphere once cherished by India’s forest sages.
                            </p>
                            <h4>View Location on Google Maps: <a href="https://maps.app.goo.gl/cHjEFGNei1bHTBv99?g_st=com.google.maps.preview.copy" target="_blank" style="color:rgb(0, 0, 0) ">Click here</a></h4>
                            <h3 class="mt-4">2. Town Centre — Malampuzha II, Kanjirakadavu</h3>
                            <p class="wow fadeInUp text-justify" style="text-align: justify" data-wow-delay=".6s">
                                Where wisdom flows gently into daily life.<br>
                                Our Town Centre, located in Malampuzha II at Kanjirakadavu near Palakkad town, serves as Tadvanam Ashramam’s accessible community hub. Here, Sri Jayakumar Ramakrishnan (Sri Jayettan) mostly resides — welcoming visitors, sharing guidance, and continuing his quiet sadhana in simplicity. This centre invites those who wish to taste the fragrance of authentic Upanishadic wisdom without venturing far into the forest.
                            </p>
                            <h4>View Location on Google Maps: <a href="https://maps.app.goo.gl/4NdLCTavt4WEpn768?g_st=com.google.maps.preview.copy" target="_blank" style="color:rgb(0, 0, 0) ">Click here</a></h4>

                            {{-- <div class="row">
                                <div class="col-lg-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9535817987676!2d76.67703259999999!3d10.8148643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba86f003f5c69d1%3A0xe0b31ac9b4e6fdb6!2zVEFEVkFOQU0gQVNIUkFNQU0uIChQYWxha2thZCBDaXR5KSDgtKTgtKbgtY3gtLXgtKjgtIIg4LSG4LS24LWN4LSw4LSu4LSC!5e0!3m2!1sen!2sin!4v1750401547460!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </div>
                            </div> --}}
                        </div>
                        <div class="col-lg-12">
                            <h3>Together, these two centres embody Tadvanam’s vision</h3>
                            <ul>
                                <li>The wild hills offer silence for deep seekers.</li>
                                <li>The town centre extends the same fragrance into the heart of community life.</li>
                            </ul>
                            <h3>May all who come find what they truly seek.</h3>
                             <p>Alongside these, we also hold a vision for a future centre in Ahmedabad, Gujarat, with the aspiration to share Tadvanam’s ideals and serve the community through spiritual classes and selfless service. This dream is gently taking shape, and we warmly welcome well-wishers and like-minded hearts in Gujarat — especially in and around Ahmedabad — to connect with us and become part of this unfolding journey.</p>
                        </div>
                    </div>
                </div>
            </section>

@endsection
