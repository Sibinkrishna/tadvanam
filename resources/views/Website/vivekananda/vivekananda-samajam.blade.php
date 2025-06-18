@extends('Website.Layouts.app')
@section('title', 'tadvanopasana')
@section('content')

            <section id="subheader" class="relative jarallax text-light">
                <img src="{{asset('website/assets/images/background/breadcrumb.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Tadvanam</li>
                            </ul>
                            <h1 class="text-uppercase">Tadvanam</h1>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>
            <section style="position: relative; background-color: #f1ffdd !important; padding-bottom: 150px;">
                <img src="{{asset('website/assets/images/misc/tadvanopasanaa.webp')}}" alt="Background" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.09; pointer-events: none;">

                <div class="container">
                    <h2 class="p-0 m-0 text-center"><span class="text-uppercase id-color-2 m-0 wow fadeInUp" data-wow-delay=".2s" style="color:#e8a106; font-weight: 800;">Vivekananda Darshanika
                                Samajam</span></h2>
                    <div class="text-center">
                        <img src="{{asset('website/assets/images/misc/heading-divider.webp')}}" alt="" width="40%" class="wow fadeInUp" data-wow-delay=".2s" style="margin-top: 10px; margin-bottom: 20px;">
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="rounded-1 bg-body w-90 overflow-hidden wow zoomIn">
                                    <img src="{{asset('website/assets/images/misc/swami-vivekananda.webp')}}" class="w-70 jarallax wow scaleIn" alt="">
                                </div>
                                <div class="rounded-1 bg-body w-50 abs mb-min-50 end-0 bottom-0 z-2 overflow-hidden shadow-soft wow zoomIn" data-wow-delay=".2s">
                                    <img src="{{asset('website/assets/images/misc/vivekanandha-img-3.webp')}}" class="w-100 wow scaleIn" data-wow-delay=".2s" alt="">
                                </div>
                            </div>
                            @foreach ($program_vivekanandas as $program)
                            <div class="view-btn" style="display:flex; justify-content:center;text-align:center; margin-top:100px;">
                                <a class="btn-1 btn-main" href="{{ route('programs.byCategory',$program->id) }}">view all Programs</a>
                            </div>
                            @endforeach

                        </div>
                        <div class="col-lg-6 vivekananda-text">
                            <div class="ps-lg-3">
                                <p class="wow fadeInUp" data-wow-delay=".6s" style="text-align: justify;">
                                    Vivekananda Darshanika Samajam (VDS) is a registered trust, based in Palakkad, Kerala primarily focusing on activities for youth empowerment and national integration. Since its inception in 2008, Vivekananda Darshanika Samajam has been actively engaged
                                    in various service and organizational activities, selflessly serving the community whenever the need arose. </p>
                                <p class="wow fadeInUp" data-wow-delay=".76s" style="text-align: justify;">
                                    Through these endeavors, VDS remains dedicated to embodying the principles of compassion, service, and selflessness inspired by ideals of Swami Vivekananda. While the Tadvanam Ashramam reflects the spiritual face of the organization, the Samajam is focused
                                    on public programs and collaborations. Some key milestones in the activities of the Samajam are being given.
                                </p>
                                <div class="accordion" id="vdsAccordion">
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Vande Vivekanandam: Commemorating 150th birth anniversary of Swami Vivekananda
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#vdsAccordion">
                                            <div class="accordion-body">
                                                In 2013, Vivekananda Darshanika Samajam organized a series of activities to commemorate the 150th birth anniversary of Swami Vivekananda under a committee of 150 eminent personalities, headed by Sri. Palat Mohandas IAS, former chief secretary of Kerala.
                                                The year-long celebrations culminated in a grand event at Palakkad, attended by over 1,000 youngsters, and was inaugurated by Metro Man E. Sreedharan.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Samarpanam: Commemorating 150th birth anniversary of Sister Nivedita
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#vdsAccordion">
                                            <div class="accordion-body">
                                                Vivekananda Darsanika Samajam's year-long celebrations, 'Samarpanam', in 2016-17, were a tribute to Sister Nivedita's 150th birth anniversary. An organizing committee was formed by VDS in this regard, which was headed by Dr. M. Lakshmi Kumari, the Chairman
                                                of Vivekananda Kendra Vedic Vision Foundation The concluding ceremony of 'Samarpanam' featured a symbolic gesture, where India's gift to Ireland was graciously received by Hon. Mr. Peter McIvor, Deputy Head
                                                of Mission at the Embassy of Ireland. This poignant moment highlighted the strong bond between India and Ireland, as well as the enduring legacy of Sister Nivedita.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Flood Relief Activities
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#vdsAccordion">
                                            <div class="accordion-body">
                                                The Samajam has also been actively involved in providing relief efforts during times of natural disasters. In 2018 and 2019, VDS participated in flood relief and landslide relief efforts in Wayanad and Kottayam, providing aid and support to affected communities.
                                                More recently, in 2024, the Samajam again actively participated in relief activities during the floods in Wayanad.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Activities during Pandemic
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#vdsAccordion">
                                            <div class="accordion-body">
                                                During the COVID-19 pandemic, the VDS established a helpline for food and medicine, distributed sanitary equipment to public and private stakeholders, and organized a community kitchen, under the project ‘Annadhanam’ at Palakkad. The community kitchen
                                                served food to over 57,000 people during a 30-day period, demonstrating the Samajam's commitment to serving the community and upholding the ideals of Swami Vivekananda.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
            </section>
            @endsection
