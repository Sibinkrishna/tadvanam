@extends('Website.Layouts.app')
@section('title', 'Governing-body')
@section('content')
<section id="subheader" class="relative jarallax text-light">
                <img src="{{asset('website/assets/images/background/breadcrumb.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Governing Body</li>
                            </ul>
                            <h1 class="text-uppercase">Governing Body</h1>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>
            <section class="main-bg" style="position: relative;">
                <img src="{{asset('website/assets/images/background/depiction.webp')}}" alt="Background" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.15; pointer-events: none;">

                <div class="container">
                    <div class="row g-4">
                        <!-- team begin -->
                        <!--<div class="col-lg-4 col-md-6 d-flex justify-content-center align-items-center align-content-center" style="z-index: 1;">-->
                        <!--    <div class="relative" style="width:100%; height:400px; overflow:hidden;">-->
                        <!--        <img src="{{asset('website/assets/images/team/founder.png')}}" class="w-100 rounded-10px" style="width:100%; height:100%; object-fit:cover; object-position:calc(60% - 0px) calc(40% - 0px);">-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="col-lg-4 col-md-6" style="z-index: 1;">-->
                        <!--    <div class="relative">-->
                        <!--        <div class="w-100">-->
                        <!--            <div class="d-flex justify-content-center align-items-center rounded-1 m-4 bg-white p-4">-->
                        <!--                <div>-->
                        <!--                    <h3 class="mb-0 text-center">JAYAKUMAR RAMAKRISHNAN</h3>-->
                        <!--                    <p class="mb-0 text-center">FOUNDER PRESIDENT</p>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p style="text-align:justify;">
                                Vivekananda Darshanika Samajam (VDS), the governing trust behind Tadvanam Ashramam, has its roots in a humble yet inspiring beginning. In 2006, it started its activities without any formal name, simply as the National Youth Day Celebration Committee. Its main mission was to celebrate Swami Vivekananda Jayanthi among the youth — especially students — and to organise competitions and events that spread Swami Vivekananda’s ideals and vibrant vision for India’s youth.

<br>In 2008, this dedicated work took a formal shape as a registered trust: Vivekananda Darshanika Samajam. Since then, the trust has been actively engaged in nurturing young minds and instilling in them a spirit of service, courage, and spiritual curiosity.

<br>In December 2020, a significant transformation took place — the trust’s work blossomed fully into its spiritual dimension as Tadvanam Ashramam, a sacred centre for sincere seekers and spiritual aspirants. From this point on, the trust has been functioning through two distinct wings:
- VDS (Youth Wing) — focuses on educational and youth-oriented programs, carrying forward the torch of Swami Vivekananda’s dynamic message.
- Tadvanam Ashramam (Spiritual Wing) — dedicated entirely to the inner path of tapas, study, and quiet service, providing guidance and a serene space for deeper spiritual living.

<br>Over the years, many sincere individuals have worked with the trust and contributed to its growth; naturally, many have also moved on. In the early days, everyone inspired by the ideals was welcomed wholeheartedly. As time passed and the organisation matured, certain boundaries became necessary to safeguard its spirit and vision. Today, only those genuinely devoted to its founding ideals are entrusted with the responsibility of serving as trustees.

<br>Below is the current Board of Members of Vivekananda Darshanika Samajam, upholding this noble mission and guiding its two wings with dedication and simplicity.

                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row g-4">
                        <h2 class="text-uppercase mb-4 wow fadeInUp text-center" data-wow-delay=".2s">EXECUTIVE
                            COMMITTEE</h2>
                        <p class="text-center mb-5 mt-0">The Executive Committee of Tadvanam Ashramam is a dedicated group of individuals
                            <!-- team begin -->
                            @foreach($governing_body as $member)
                            <div class="col-lg-3 col-md-6 mt-0">
                                <div class="relative">
                                    <div class="w-100">
                                        <div class="d-flex align-content-left align-items-center align-content-center rounded-1 m-2 bg-white p-4">
                                            <div>
                                                <h5 class="mb-0 text-center" style="text-transform: uppercase">{{ $loop->iteration }}. {{ $member->name }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </section>
@endsection
