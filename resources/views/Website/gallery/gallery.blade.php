@extends('Website.Layouts.app')
@section('title', 'Home')
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
            <section class="relative main-bg" style="position: relative; padding-bottom: 150px;">
                <img src="{{asset('website/assets/images/misc/tadvanopasanaa.webp')}}" alt="Background" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.09; pointer-events: none;">
                <h2 class="p-0 m-0 text-center"><span class="text-uppercase id-color-2 m-0 wow fadeInUp text-green" data-wow-delay=".2s" style="font-weight: 800;">Gallery</span></h2>
                <div class="text-center">
                    <img src="{{asset('website/assets/images/misc/heading-divider.webp')}}" alt="" width="40%" class="wow fadeInUp" data-wow-delay=".2s" style="margin-top: 10px; margin-bottom: 20px;">
                </div>
                <div class="container">
                    <!-- Category Buttons -->
                    <div class="text-center mb-4">
                        <button class="btn-1 btn-outline-success mx-1 gallery-filter active" data-filter="all" style="border: 1px solid green; border-radius: 10px;min-width: 100px;box-shadow: 0px 0px 11px 1px #0000003d;">All</button>
                        @foreach($albums as $album)
                            <button class="btn-1 btn-outline-success mx-1 gallery-filter" data-filter="album-{{ $album->id }}" style="border: 1px solid green; border-radius: 10px;min-width: 100px;box-shadow: 0px 0px 11px 1px #0000003d;">{{ $album->title }}</button>
                        @endforeach
                    </div>
                    <div class="row g-4">
                        @foreach($albums as $album)
                            @foreach($album->images as $index => $image)
                                <div class="col-lg-3 text-center gallery-item wow fadeInUp" data-category="album-{{ $album->id }}" data-wow-delay="{{ 0.1 * $index }}s">
                                    <a href="{{ asset('storage/' . $image->image_path) }}" class="image-popup d-block hover">
                                        <div class="relative overflow-hidden rounded-10" style="width: 300px; height: 250px; margin: 0 auto;">
                                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                                <h4 class="mb-0 hover-scale-in-3">View</h4>
                                            </div>
                                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                                            <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid hover-scale-1-2" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </section>
            <script>
                    document.querySelectorAll('.gallery-filter').forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            document.querySelectorAll('.gallery-filter').forEach(b => b.classList.remove('active'));
                            btn.classList.add('active');
                            const filter = btn.getAttribute('data-filter');
                            document.querySelectorAll('.gallery-item').forEach(function(item) {
                                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                                    item.style.display = '';
                                } else {
                                    item.style.display = 'none';
                                }
                            });
                        });
                    });
                </script>
     @endsection
