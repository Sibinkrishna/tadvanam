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
            <section style="background-color: #f1ffdd !important; position: relative;">
                <img src="{{asset('website/assets/images/misc/tadvanopasanaa.webp')}}" alt="Background" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.09; pointer-events: none;">

                <div class="container">
                    <div class="row g-4 gx-5">


                        <div class="col-lg-8">
                            <div class="row g-4 gx-5" style="background-color: rgba(255, 255, 255, 0.555); border-radius: 20px;">
                                <div class="col-lg-12">
                                    <h2><span class="id-color-1">{{ $program->title }}</span></h2>
                                    <div class="row mb-3" style="font-size: 16px; color: #ff9900;">
                                        @if($program->location)
                                        <div class="col-12 col-md-auto mb-2 mb-md-0 d-flex align-items-center">
                                            <i class="icofont-location-pin id-color-2 me-2"></i> {{ $program->location }}
                                        </div>
                                        @endif
                                        <div class="col-12 col-md-auto d-flex align-items-center">

                                            @if($program->date)
                                                <i class="icofont-calendar id-color-2 me-2"></i> {{ \Carbon\Carbon::parse($program->date)->format('d-M-y') }},
                                            @endif
                                            @if($program->time)
                                                {{ \Carbon\Carbon::parse($program->time)->format('h:i A') }}
                                            @endif
                                        </div>
                                        <div class="col-12 col-md-auto d-flex align-items-center">
                                             <a href="" class="btn-1 btn-main" data-bs-toggle="modal" data-bs-target="#enquiry-modal" title="Enquiry"> join Us</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 even-detail-content">
                                   {!! $program->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-0">
                            <div class="me-lg-3">
                                <div class="row g-4" style="background-color: rgba(255, 255, 255, 0.555); border-radius: 20px;margin: 10px; padding-bottom:50px ;">
                                    <div class="col-lg-12">
                                        <h3 class="text-center">Upcoming Events</h3>
                                        <div class="spacer-20"></div>
                                        <ul class="no-style">
                                            @foreach ($upcomingPrograms as $upcoming)
                                            <a href="{{ route('programsDetail',$upcoming->slug) }}">
                                            <li class="p-2">
                                                <div class="d-flex justify-content-between">
                                                    <span>{{ $upcoming->title }}</span>
                                                    <span>{{ $upcoming->date->format('M d, Y') }}</span>
                                                </div>
                                                <hr class="my-2">
                                            </li>
                                            </a>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @if($program->programgalleries)
                                    <h3 class="text-center">Gallery</h3>
                                    @endif
                                    @foreach ($program->programgalleries as $image )
                                    <div class="col-lg-4 text-center">
                                        <a href="{{ asset('storage/'.$image->image) }}" class="image-popup d-block hover">
                                            <div class="relative overflow-hidden rounded-10" style="width:100px; height:100px; margin:auto;">
                                                <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                                    <h4 class="mb-0 hover-scale-in-3">View</h4>
                                                </div>
                                                <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                                <img src="{{ asset('storage/'.$image->image) }}" class="img-fluid hover-scale-1-2" alt="" style="width:100%; height:100%; object-fit:cover;">
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <h3 class="p-0 mt-5 text-center"><span class="text-uppercase id-color-2 m-0 wow fadeInUp" data-wow-delay=".2s" style="color:#e8a106; font-weight: 800;">Upcoming Events</span></h3>
                        <div class="text-center">
                            <img src="{{asset('website/assets/images/misc/heading-divider-1.png')}}" alt="" width="10%" class="wow fadeInUp" data-wow-delay=".2s" style="margin-top:-15px; margin-bottom: 20px;">
                        </div>
                        <!-- project item begin -->
                        <div class="col-12">
                            <!-- Swiper Slider container -->
                            <div class="swiper-container" id="programs-slider" style="position:relative;">
                                <div class="swiper-wrapper">
                                    <!-- Slide 1 -->
                                    @foreach ($upcomingPrograms as $upcoming )
                                    <div class="swiper-slide">
                                        <div class="relative">
                                            <div class="hover overflow-hidden text-light">
                                                <a href="{{ route('programsDetail', $upcoming->slug) }}" class="abs w-100 h-100 z-5"></a>
                                                <img src="{{ asset('storage/' . $upcoming->featured_image) }}" class="hover-scale-1-1 w-100" alt="">
                                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                                    <div class="mb-3" style="text-align: justify;">
                                                        {!! \Illuminate\Support\Str::limit(strip_tags($program->description), 100) !!}
                                                    </div>
                                                </div>
                                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                                    <div class="m-4">
                                                        <div class="d-flex">
                                                            <div class="me-5">
                                                                <h4 class="mb-1">{{ \Illuminate\Support\Str::limit(strip_tags($upcoming->title), 20) }}</h4>
                                                                @if($upcoming->location)
                                                                <span>{{ $upcoming->location }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gradient-trans-dark-top abs w-100 h-50 top-0 op-6"></div>
                                                <div class="w-40px abs end-0 bottom-0 m-4">
                                                    <img src="{{asset('website/assets/images/misc/right-arrow.webp')}}" class="w-100 position-relative" style="z-index: 2;" alt="">
                                                </div>
                                                <div style="position:absolute;left:0;right:0;bottom:0;height:50%;z-index:1;pointer-events:none;background:linear-gradient(to top,rgb(0, 0, 0),rgba(0, 0, 0, 0.068)); "></div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Slide 2 -->


                                </div>
                                <!-- Swiper navigation buttons -->
                                <div class="swiper-button-prev" style="position:absolute;left:10px;top:50%;z-index:10;color:#fff !important;"></div>

                                <div class="swiper-button-next" style="position:absolute;right:10px;top:50%;z-index:10;color:#fff !important;"></div>

                                <!-- Swiper pagination -->
                                <!-- <div class="swiper-pagination mt-5"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
