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

            <section style="position: relative; background-color: #f1ffdd !important; padding-bottom: 150px">
    <img src="{{asset('website/assets/images/misc/tadvanopasanaa.webp')}}" alt="Background" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.09; pointer-events: none;">

    @if(empty($categoryName))
        <h2 class="p-0 m-0 text-center">
            <span class="text-uppercase id-color-2 m-0 wow fadeInUp" data-wow-delay=".2s" style="color:#e8a106; font-weight: 800">
                Programs & Events
            </span>
        </h2>
    @else
        <h2 class="p-0 m-0 text-center">
            <span class="text-uppercase id-color-2 m-0 wow fadeInUp" data-wow-delay=".2s" style="color:#e8a106; font-weight: 800">
                {{ $categoryName }}
            </span>
        </h2>
    @endif

    <div class="text-center">
        <img src="{{asset('website/assets/images/misc/heading-divider.webp')}}" alt="" width="40%" class="wow fadeInUp" data-wow-delay=".2s" style="margin-top: 10px; margin-bottom: 20px">
    </div>

    <div class="container">

        <div class="row">
            @php
            $allPrograms = $upcomingPrograms->merge($pastPrograms);
            @endphp

    @forelse ($allPrograms as $program)
    <div class="col-lg-6 col-md-12 col-sm-12" style="margin: 0px; padding: 0px">
        <div class="row" style="background-color: #354e33; border-radius: 10px; margin: 10px !important; position: relative;">
            <!-- Badge -->
            <span style="max-width: 100px;display: flex;justify-content: center;position: absolute; top: 15px; left: 15px; background: {{ \Carbon\Carbon::parse($program->date)->isFuture() ? '#e8a106' : '#ff4e4e' }}; color: #fff; font-weight: bold; padding: 5px 15px; border-radius: 20px; z-index: 2; font-size: 14px">
                {{ \Carbon\Carbon::parse($program->date)->isFuture() ? 'Upcoming' : 'Past' }}
            </span>
            <div class="col-lg-6 col-md-6 col-sm-12 m-0 p-0">
                <div class="program-card" style="width: 100%; height: 400px; overflow: hidden; display: flex; align-items: center; justify-content: center">
                    <img src="{{ $program->featured_image ? asset('storage/' . $program->featured_image) : asset('website/assets/images/background/program-placeholder.jpg') }}" alt="{{ $program->title }}" class="img-fluid event-image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px 0px 0px 10px">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 event-content">
                <h3 class="text-uppercase" style="color: #fff">{{ \Illuminate\Support\Str::limit(strip_tags($program->title), 30) }}</h3>
                <p>{!! \Illuminate\Support\Str::limit(strip_tags($program->description), 200) !!}</p>
                <div class="dt d-flex justify-content-between">
                    @if($program->date)
                    <p style="background-color: #e8a106; padding: 3px 10px; border-radius: 20px">
                        {{ \Carbon\Carbon::parse($program->date)->format('d-m-Y') }}
                    </p>
                    @endif
                    @if($program->time)
                    <p style="background-color: #e8a106; padding: 3px 10px; border-radius: 20px">
                        {{ \Carbon\Carbon::parse($program->time)->format('h:i A') }}
                    </p>
                    @endif
                </div>

                <a href="{{ route('programsDetail',$program->slug) }}" class="btn-main">Read More</a>
            </div>
        </div>
    </div>
    @empty
    <p class="p-4 text-center">No programs</p>
    @endforelse
</div>

    </div>
</section>

@endsection
