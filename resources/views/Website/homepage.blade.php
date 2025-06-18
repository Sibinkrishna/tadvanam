@extends('Website.Layouts.app')
@section('title', 'Home')
@section('content')

            <section class="jarallax relative v-center">
                <img src="{{asset('website/assets/images/background/Banner-001.webp')}}" class="jarallax-img" alt="">
                <div class="container z-2">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="spacer-double d-lg-none d-sm-block"></div>
                            <div class="me-lg-3" style="margin-top: 50px;">
                                <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s" style="background-color: #f1ffdd !important;">Four Pillars Of</div>
                                <h1 class="id-color-2 text-border animate-text" style="color:#344535 !important;">
                                    Tadvanam
                                </h1>
                                <div class="row g-4 align-items-center">

                                    <div class="col-md-12">
                                        <div class="row g-3">
                                            <div class="col-md-6 wow fadeInLeft animate__animated animate__fadeInLeft moving-quotes" data-wow-delay=".1s">
                                                <div class="banner-box p-3 rounded-5" style="background-color: #f1ffdd !important;">
                                                    <h6 class="text-center"><b>Kenopanishad</b></h6>
                                                    <p style="font-size: 12px;padding: 0px !important;margin-bottom: 0px !important;text-align: center;">“That Brahman is called Tadvana, the Adorable of all; It should be worshipped by the name of Tadvana. All beings love Him who knows Brahman as such.” <span class="text-muted">(Chapter 4, Verse 6)</span></p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 wow fadeInUp animate__animated animate__fadeInUp moving-quotes-1" data-wow-delay=".2s">
                                                <div class="banner-box p-3 rounded-5" style="background-color: #f1ffdd !important;">
                                                    <h6 class="text-center"><b>Yogavasishta:</b></h6>
                                                    <p style="font-size: 12px;padding: 0px !important;margin-bottom: 0px !important;text-align: center;">“Deergha Swapnam Imam Vidheem”</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4 wow fadeInRight animate__animated animate__fadeInRight moving-quotes-2" data-wow-delay=".3s">
                                                <div class="banner-box p-3 rounded-5" style="background-color: #f1ffdd !important;">
                                                    <h6 class="text-center"><b>Sri Ramana Maharshi</b></h6>
                                                    <p style="font-size: 12px;padding: 0px !important;margin-bottom: 0px !important;text-align: center;">“God, guru, and the Self are the same”</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 wow fadeInDown animate__animated animate__fadeInDown moving-quotes-3" data-wow-delay=".4s">
                                                <div class="banner-box p-3 rounded-5" style="background-color: #f1ffdd !important;">
                                                    <h6 class="text-center"><b>Sri Ramakrishna Paramahamsa:</b></h6>
                                                    <p style="font-size: 12px;padding: 0px !important;margin-bottom: 0px !important;position: relative; z-index: 10;text-align: center;"> “Bhagawan, Bhagavata and Bhakta are same”</p>
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

            <section class="relative z-2" style="padding-bottom: 65px !important;">
                <div class="container">
                    <div class="row g-4 mt-100">
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 rounded-1" style="background-color:#f1ffdd !important;">
                                <img src="{{asset('website/assets/images/icons/icon-1.webp')}}" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3" style="color:#344535;">01</div>
                                <div>
                                    <h4 style="color:#344535;">Worship & Contemplation</h4>
                                    <p class="mb-0" style="color:#344535;">A serene space for inner worship and spiritual focus</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 rounded-1" style="background-color:#f1ffdd !important;">
                                <img src="{{asset('website/assets/images/icons/icon 2.webp')}}" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3" style="color:#344535;">02</div>
                                <div>
                                    <h4 style="color:#344535;">Retreat & Practice</h4>
                                    <p class="mb-0" style="color:#344535;">Meditation, yoga, and satsangs in a monastic setting.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="relative h-100 bg-color text-light padding30 rounded-1" style="background-color:#f1ffdd !important;">
                                <img src="{{asset('website/assets/images/icons/icon 3.webp')}}" class="w-50px mb-3" alt="">
                                <div class="abs m-3 top-0 end-0 p-2 rounded-2 mb-3" style="color:#344535;">03</div>
                                <div>
                                    <h4 style="color:#344535;">Service & Outreach</h4>
                                    <p class="mb-0" style="color:#344535;">Selfless service rooted in spiritual transformation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top no-bottom overflow-hidden" style="background-color: #f1ffdd;">
                <div class="container-fluid position-relative half-fluid">
                    <div class="container">
                        <div class="row">
                            <!-- Image -->
                            <div class="col-lg-6 position-lg-absolute left-half h-100">
                                <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                    <div class="player invert bg-color-2 no-border circle wow scaleIn"><span></span>
                                    </div>
                                </div>
                                <div class="image" data-bgimage="url({{asset('website/assets/images/icons/about-six-thumb.webp')}}) center"></div>
                            </div>
                            <!-- Text -->
                            <div class="col-lg-6 offset-lg-6">
                                <div class="spacer-single sm-hide"></div>
                                <div class="spacer-double"></div>
                                <div class="ps-lg-5">
                                    <div class="subtitle wow fadeInUp mb-3">TADVANAM</div>
                                    <h3 class="text-uppercase wow fadeInUp" data-wow-delay=".2s">A term meaning<span class="id-color-2" style="color:#bd840a;"> "Adorable" in Sanskrit</span>
                                    </h3>
                                    <p class="wow fadeInUp" style="text-align: justify;">Refers to a unique Vedic Brahmopasana rooted in the Kenopanishad of the Samaveda. The four Vedas extol the glory of Brahman using beautiful language and prescribe various Upasanas (spiritual practices) to attain it.
                                        Bhagavan Krishna declares in the Bhagavad Gita, "Among the Vedas, I am the Samaveda." The Kenopanishad originates from the Talavakara Brahmana of the Samaveda.</p>
                                    <p class="wow fadeInUp" style="text-align: justify;">In the Kenopanishad, the sixth mantra of the fourth chapter introduces the concept of Tadvanam. Here, Jagadamba Uma advises Indra to adopt this Brahmopasana. The story behind this mantra dates back to the Devasura war.
                                        The devas, having grown overconfident and proud of their strength, attributed their victory solely to their own abilities, neglecting the invisible blessings of Brahman.</p>
                                    <div class="spacer-10"></div>
                                    <!-- <a  class="btn-main fx-slide wow fadeInUp" href="contact.html"><span>Get In Touch</span></a> -->
                                </div>
                                <div class="spacer-single sm-hide"></div>
                                <div class="spacer-double"></div>

                            </div>
                            <img src="{{asset('website/assets/images/misc/silhouette-person-meditating-tree.png')}}" class="abs op-1 w-40 bottom-0" alt="" style="left:50%; transform: translateX(-50%);" />

                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container relative z-1">
                    <div class="row g-4 gx-5 align-items-center">

                        <div class="col-md-3">
                            <img src="{{asset('website/assets/images/misc/vivekanandha-img-1.webp')}}" class="w-100 rounded-1 wow zoomIn" alt="">
                        </div>

                        <div class="col-md-6 text-center">
                            <div class="subtitle id-color wow fadeInUp" data-wow-delay=".2s">VIVEKANANDA DARSHANIKA SAMAJAM
                            </div>
                            <h2 class="text-uppercase wow fadeInUp" data-wow-delay=".4s">Shaping Lives,<span class="id-color-2" style="color:#bd840a;"> Strengthening Society</span></h2>
                            <p class="wow fadeInUp text-justify" data-wow-delay=".6s" style="text-align: justify;">
                                <b>Vivekananda Darshanika Samajam (VDS)</b> is a registered trust, based in Palakkad, Kerala primarily focusing on activities for youth empowerment and national integration. Since its inception in 2008, Vivekananda Darshanika
                                Samajam has been actively engaged in various service and organizational activities, selflessly serving the community whenever the need arose.
                                <br>Through these endeavors, VDS remains dedicated to embodying the principles of compassion, service, and selflessness inspired by ideals of Swami Vivekananda. While the Tadvanam Ashramam reflects the spiritual face of
                                the organization.
                            </p>
                            <a class="btn-main wow fadeInUp" href="#" data-wow-delay=".6s" style="background-color:#bd840a;">Read More</a>
                        </div>

                        <div class="col-md-3">
                            <img src="{{asset('website/assets/images/misc/vivekanandha-img-2.webp')}}" class="w-100 rounded-1 wow zoomIn" alt="">
                        </div>
                    </div>
                </div>
                <img src="{{asset('website/assets/images/misc/silhouette-architecture-building-1.webp')}}" class="abs op-3 w-100 mx-0" alt="" style="left:50%; transform: translateX(-50%);" />

            </section>
            <section class="px-4" style="padding-top: 50px !important;">
                <div class="container">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="subtitle wow fadeInUp">Upcoming Events</div>
                            <h3 class="text-uppercase mb-4 wow fadeInUp" data-wow-delay=".2s">Our Events,
                                <span class="id-color-2" style="color:#bd840a;">Let's All Participate</span></h3>
                        </div>
                    </div>
                    <div class="row g-4  mt-3">
                        @foreach ($upcomingPrograms->sortByDesc('created_at')->take(3) as $upcoming )
                        <div class="col-lg-4">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".3s">
                                <a href="{{ route('programsDetail',$upcoming->slug) }}" class="abs w-100 h-100 z-5"></a>
                                <div style="width:100%;height:270px;overflow:hidden;">
                                    <img src="{{ $upcoming->featured_image ? asset('storage/' . $upcoming->featured_image) : asset('website/assets/images/background/program-placeholder.jpg') }}" alt="" style="width:100%;height:100%;object-fit:cover;">
                                </div>
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">{{ \Illuminate\Support\Str::limit(strip_tags($upcoming->description), 200) }}</div>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="mobile-event-box bg-blur d-flex m-4 p-1 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="mobile-event d-flex">
                                            <div class="me-5">
                                                Event Name
                                                <h6>{{ \Illuminate\Support\Str::limit(strip_tags($upcoming->title), 20) }}</h6>
                                            </div>
                                            <div>
                                                Location
                                                <h6>{{ $upcoming->location }}</h6>
                                            </div>
                                        </div>

                                        <div class="w-40px">
                                            <img src="{{asset('website/assets/images/misc/right-arrow.webp')}}" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom-1 abs w-100 h-40 bottom-0"></div>
                            </div>
                        </div>
                        @endforeach


                        <div class="spacer-20"></div>

                        <div class="col-lg-12 text-center">
                            <a class="btn-main wow fadeInUp" href="{{ route('programs') }}">View All Events</a>
                        </div>

                    </div>
                </div>
            </section>
            <section class="relative" style="padding-top: 0 !important; background-color: #f1ffdd;">
                <div class="container relative z-1">
                    <div class="row g-4 gx-5 align-items-center">
                        <div class="col-lg-6 p-3" style="background-color:#ffffff; border-radius: 20px;">
                            <div class="subtitle  wow fadeInUp">History</div>
                            <h2 class="text-uppercase mb-4 wow fadeInUp" data-wow-delay=".2s">Path of <span class="id-color-2" style="color:#bd840a;">monastic vision</span></h2>
                            <p class="wow fadeInUp">he history of Tadvanam originates from Vivekananda Darshanika Samajam (VDS), which began its journey in 2005 under the leadership of Sri Jayakumar Ramakrishnan...
                            </p>
                            <a class="btn-main btn-line wow fadeInUp" href="{{ route('vivekananda') }}" data-wow-delay=".6s" style="background-color:#bd840a;">Read More</a>
                        </div>

                        <div class="col-lg-6 p-3">
                            <div class="row g-4">
                                <div class="col-md-6 wow fadeInUp">
                                    <div class="relative h-100 bg-white text-dark padding30 rounded-1 p-0 overflow-hidden" style="min-height:150px;">
                                        <img src="{{asset('website/assets/images/Logo.png')}}" alt="" style="width:100%;height:100%;object-fit:contain;display:block;">
                                    </div>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <div class="relative h-100 bg-white text-dark padding30 rounded-1 p-0 overflow-hidden" style="min-height:150px;">
                                        <img src="{{asset('website/assets/images/misc/differece-six-thumb2.webp')}}" alt="" style="width:100%;height:100%;object-fit:cover;display:block;">
                                    </div>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <div class="relative h-100 bg-white text-dark padding30 rounded-1 p-0 overflow-hidden" style="min-height:150px;">
                                        <img src="{{asset('website/assets/images/misc/differece-six-thumb3.webp')}}" alt="" style="width:100%;height:100%;object-fit:cover;display:block;">
                                    </div>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <div class="relative h-100 bg-white text-dark padding30 rounded-1 p-0 overflow-hidden" style="min-height:150px;">
                                        <img src="{{asset('website/assets/images/misc/differece-six-thumb1.webp')}}" alt="" style="width:100%;height:100%;object-fit:cover;display:block;">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <img src="{{asset('website/assets/images/misc/silhouette-forest-1.webp')}}" class="abs op-3 w-100 bottom-0" alt="" style="left:50%; transform: translateX(-50%);" />

            </section>
            <section style="padding-top: 50px; padding-bottom: 50px;">
                <div class="container">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="subtitle wow fadeInUp">Programs</div>
                            <h3 class="text-uppercase mb-4 wow fadeInUp" data-wow-delay=".2s">Check Latest<span class="id-color-2" style="color:#bd840a;"> Blog Post</span></h3>
                        </div>
                    </div>
                    <div class="row g-4">
                        @foreach($programs as $program)
                        <div class="col-lg-6">
                            <div class="rounded-1 bg-light overflow-hidden">
                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <div class="auto-height relative" data-bgimage="url({{ $program->featured_image ? asset('storage/' . $program->featured_image) : asset('website/assets/images/background/program-placeholder.jpg') }})">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 relative">
                                        <div class="p-30 pb-60">
                                            <h4><a class="text-dark" href="blog-single.html">{{ \Illuminate\Support\Str::limit(strip_tags($program->title), 20) }}</a></h4>
                                            <p class="mb-0">{{ \Illuminate\Support\Str::limit(strip_tags($program->description), 200) }}</p>

                                            <div class="abs bottom-0 pb-20">
                                                <a href="{{ route('programsDetail',$program->slug) }}" clas="btn-1 btn-main">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- pagination begin -->
                        <div class="col-lg-12 pt-4 text-center">
                            <div class="d-inline-block">
                                <nav aria-label="Page navigation example">
                                    <a href="{{ route('programs') }}" class="btn-1 btn-main"> View All</a>
                                    {{-- <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                            </a>
                                        </li>
                                    </ul> --}}
                                </nav>
                            </div>
                        </div>
                        <!-- pagination end -->
                    </div>
                </div>
                <!-- Section bottom silhouette image -->
            </section>
            <section class="jarallax" style="padding-top: 0px;background-color: #f1ffdd;">
                <div class="container relative z-2">
                    <div class="row justify-content-center">
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-lg-8 text-center">
                                <div class="subtitle wow fadeInUp">Our Testimonial</div>
                                <h3 class="text-uppercase mb-2 wow fadeInUp" data-wow-delay=".2s">Voices of <span class="id-color-2" style="color:#bd840a;"> Transformation</span></h3>
                                <span style="padding-bottom: 30px !important;">Heartfelt reflections from those touched by the spiritual guidance, selfless service, and inspiring presence of Tadvanam.</span>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mt-3" style="background-color: #ebffce;padding: 20px; border-radius: 20px;">
                            <div class="owl-single-dots owl-carousel owl-theme">
                                <div class="item">
                                    <i class="icofont-quote-left fs-40 mb-4 wow fadeInUp id-color-2"></i>
                                    <h3 class="mb-4 wow fadeInUp fs-20">Being part of the retreat changed how I see myself and the world. It brought me closer to inner peace.</h3>
                                    <div class="wow fadeInUp">Ananya R</div>
                                    <div class="wow fadeInUp">Kochi</div>
                                </div>

                                <div class="item">
                                    <i class="icofont-quote-left fs-40 mb-4 wow fadeInUp id-color-2"></i>
                                    <h3 class="mb-4 wow fadeInUp fs-20">The teachings at Tadvanam helped me rediscover purpose and direction in life</h3>
                                    <div class="wow fadeInUp">Suresh M</div>
                                    <div class="wow fadeInUp">Coimbatore</div>
                                </div>

                                <div class="item">
                                    <i class="icofont-quote-left fs-40 mb-4 wow fadeInUp id-color-2"></i>
                                    <h3 class="mb-4 wow fadeInUp fs-20">I came for spiritual knowledge, but left with a deeper love for service and simplicity</h3>
                                    <div class="wow fadeInUp">Leela N</div>
                                    <div class="wow fadeInUp">Palakkad</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
