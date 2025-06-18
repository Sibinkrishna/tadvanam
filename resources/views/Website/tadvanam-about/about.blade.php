@extends('Website.Layouts.app')
@section('title', 'About')
@section('content')
            <section id="subheader" class="relative jarallax text-light">
                <img src="{{asset('website/assets/images/background/breadcrumb.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                            <h1 class="text-uppercase">About Us</h1>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>
            <section>
                <!-- <img src="{{asset('website/assets/images/Logo.png')}}" alt="" class="logo-animate" style="width:120px; display:block; margin:0 auto 30px auto;"> -->
                <div class="container relative z-1">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6" style="position: relative;">
                            <!-- Background image using img tag -->
                            <img src="{{asset('website/assets/images/misc/black-tree-silhouette.webp')}}" alt="About Background" style="position: absolute; left: 50%;transform: translateX(-50%); bottom:0; width: 100%; height: 100%; z-index: 0; border-radius: 8px; opacity: 0.09;">
                            <div class="subtitle wow fadeInUp mb-3" style="position: relative; z-index: 1;">History</div>
                            <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".2s" style="position: relative; z-index: 1;">
                                <span class="id-color-2" style="color:#f0aa00 ;">Tadvanam</span> The Soul of Our Mission
                            </h2>
                            <p class="wow fadeInUp" style="text-align: justify; position: relative; z-index: 1;">
                                The history of Tadvanam originates from Vivekananda Darshanika Samajam (VDS), which began its journey in 2005 under the leadership of Sri Jayakumar Ramakrishnan, a young spiritual seeker inspired by the blessings of Sriman A.B. Shanmukhan of Vijnana Ramaneeyashramam
                                and Swami Mridanandaji Maharaj of Sri Ramakrishna Math. Alongside a group of like-minded youngsters, Sri Jayakumar Ramakrishnan undertook a mission to disseminate Swami Vivekananda's selfless and nation-building ideals
                                through diverse programs. Registered as a charitable trust in 2008, VDS has undertaken numerous projects, garnering national and international recognition for their spiritual and social impact. In acknowledgment of its
                                exemplary work, the late Dr. (Prof.) K.K. Velukkutty donated the Sahithi Building in Palakkad to VDS. <br> The founder, Sri Jayakumar Ramakrishnan, renounced his career in the Department
                                of Civil Judiciary and now leads an ascetic life. His continued involvement marked the beginning of the Samajam’s second phase, in Tadvanam. In 2020, on Gurupurnima day, 'TADVANAM ASHRAMAM' was established, followed by
                                a declaration at Shri Adi Shankaracharya Temple in Srinagar in 2021. The ashram serves as the Principal Centre of VDS. A small hermitage was constructed by members at the top of Kalladikode hills in Palakkad district.<br>                                The term 'Tadvanam' is rooted in the Kenopanishad and refers to a unique and supreme Upanishad Vidya. The Ashramam intends to study and assimilate this knowledge, welcoming anyone interested in Tadvanopasana.

                            </p>
                        </div>

                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <img src="{{asset('website/assets/images/misc/about-img-1.webp')}}" class="w-100 rounded-1 wow zoomIn" alt="">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="rounded-1 relative bg-color-2 text-light p-4 logo-animate">
                                                <img src="{{asset('website/assets/images/icons/tree.png')}}" class="abs abs-middle w-60px" alt="">
                                                <div class="de_count ps-80 wow fadeInUp">
                                                    <h2 class="mb-0 fs-32"><span class="timer" data-to="550" data-speed="3000"></span>+</h2>
                                                    <span class="op-7">Sacred Spaces Created</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="rounded-1 relative bg-color-2 text-light p-4 logo-animate">
                                                <img src="{{asset('website/assets/images/icons/happy.png')}}" class="abs abs-middle w-60px" alt="">
                                                <div class="de_count ps-80 wow fadeInUp">
                                                    <h2 class="mb-0 fs-32"><span class="timer" data-to="850" data-speed="3000"></span>+</h2>
                                                    <span class="op-7">Souls Served</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="{{asset('website/assets/images/misc/about-image-2.webp')}}" class="w-100 rounded-1 wow zoomIn" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>

@endsection
