@extends('Website.Layouts.app')
@section('title', 'tadvanam')
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
<section style="position: relative; background-color: #f1ffdd !important;">
    <img src="{{asset('website/assets/images/misc/depiction-yoga.webp')}}" alt="Background"
        style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.09; pointer-events: none;">

    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 class="text-uppercase mb-4 wow fadeInUp mb-0 p-0" data-wow-delay=".2s"
                    style="margin-bottom: 0px !important;">What is</h5>
                <h1 class="p-0 m-0"><span class="text-uppercase id-color-2 m-0 wow fadeInUp" data-wow-delay=".2s"
                        style="color:#e8a106; font-weight: 800;">Tadvanam</span></h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12" style="border-left: 4px solid #e8a106; padding-left: 24px;">
                <p class="wow fadeInUp" data-wow-delay=".2s" style="text-align: justify;">Tadvanam, a term meaning
                    "adorable" in Sanskrit, refers to a unique Vedic Brahmopasana rooted in the Kenopanishad of the
                    Samaveda. The four Vedas extol the glory of Brahman using beautiful language and prescribe various
                    Upasanas
                    (spiritual practices) to attain it. Bhagavan Krishna declares in the Bhagavad Gita, "Among the
                    Vedas, I am the Samaveda." The Kenopanishad originates from the Talavakara Brahmana of the Samaveda.
                </p>

                <p class="wow fadeInUp" data-wow-delay=".3s" style="text-align: justify;">In the Kenopanishad, the sixth
                    mantra of the fourth chapter introduces the concept of Tadvanam. Here, Jagadamba Uma advises Indra
                    to adopt this Brahmopasana. The story behind this mantra dates back to the Devasura war. The
                    devas, having grown overconfident and proud of their strength, attributed their victory solely to
                    their own abilities, neglecting the invisible blessings of Brahman.
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <p class="wow fadeInUp" data-wow-delay=".2s" style="text-align: justify;">To reform the Devas, Brahman
                    appeared before them in the guise of Yaksha. Agnideva and Vayudeva, despite their immense power,
                    failed the simple tests set by Yaksha and retreated. Humiliated by their setbacks, Indra, the king
                    of the devas, approached Yaksha but was unable to perceive even Yaksha's image.
                </p>
                <p class="wow fadeInUp" data-wow-delay=".3s" style="text-align: justify;">Completely dismayed, Indra
                    surrendered his ego and began meditating and praying. Goddess Uma then appeared, blessing him with
                    enlightenment and imparting the knowledge of brahma vidya, specifically Tadvanam. An artwork by
                    Artist
                    Madanan, inspired by this concept, is featured on the homepage of this website.
                </p>
            </div>
        </div>
    </div>

</section>
@endsection
