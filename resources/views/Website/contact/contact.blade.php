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
                                <li class="active">Contact Us</li>
                            </ul>
                            <h1 class="text-uppercase">Tadvanam</h1>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>

            <section>
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h3 class="wow fadeInUp">Join Us</h3>
                            <div class="p-4 rounded-10px">
                                <form name="contactForm" id="contact_form" class="position-relative z1000" method="post" action="{{ route('volunteer.send') }}">
                                    @csrf
                                    <div class="field-set">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="age" id="age" class="form-control" placeholder="Age" required>
                                    </div>

                                    <div class="field-set">
                                        <select name="gender" class="form-control">
                                            <option value="" readonly>-- Gender --</option>
                                            <option value="male">Male</option>
                                            <option value="fmale">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="field-set">
                                        <input type="text" name="education" id="education" class="form-control" placeholder="Education" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                                    </div>

                                    <div class="field-set">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                                    </div>

                                    <div class="field-set mb20">
                                        <textarea name="message" id="message" class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="field-set mb20">
                                    @if(session('success'))
                                    <div style="color: green">{{ session('success') }}</div>
                                        @endif
                                        @if(session('error'))
                                            <div style="color: red">{{ session('error') }}</div>
                                        @endif
                                    </div>
                                    <div id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                    </div>
                                </form>

                            </div>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-lg-6">
                            <div class="rounded-1 main-bg overflow-hidden">
                                <div class="row g-2">
                                    <div class="col-sm-3">
                                        <div class="auto-height relative donate" style="background-image: url('{{asset('website/assets/images/misc/donate.png')}}'); background-size: contain!important; background-position: center; border-radius: 8px; min-height: 300px;"></div>
                                    </div>
                                    <div class="col-sm-9 relative">
                                        <div class="p-30">
                                            <h3 style="font-weight: 700">DONATE</h3>
                                            <!-- <div class="fw-bold text-dark"><i class="icofont-clock-time me-2 id-color-2"></i>W</div>
                                            Monday - Friday 08.00 - 18.00 -->

                                            <div class="spacer-20"></div>

                                            <div class="fw-bold text-dark">
                                                <i class="icofont-bank-alt me-2 id-color-2"></i>A/c No : 67267070261
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="fw-bold text-dark">
                                                <i class="icofont-user-alt-3 me-2 id-color-2"></i>A/c Name : VIVEKANANDA DARSHANIKA SAMAJAM
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="fw-bold text-dark">
                                                <i class="icofont-bank-alt me-2 id-color-2"></i>Bank: State Bank of India
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="fw-bold text-dark">
                                                <i class="icofont-building-alt me-2 id-color-2"></i>Branch : Puthur, Palakkad
                                            </div>
                                            <div class="spacer-20"></div>
                                            <div class="fw-bold text-dark">
                                                <i class="icofont-ui-v-card me-2 id-color-2"></i>IFSC code : SBIN0070723
                                            </div>

                                        </div>
                                    </div>
                                    <div class="fw-bold text-dark text-center p-10 m-10">All donations to Ashramam are exempted from income tax under 80G</div>

                                </div>
                            </div>
                            <div class="rounded-1 main-bg overflow-hidden mt-5">
                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <div class="auto-height relative" style="background-image: url('{{asset('website/assets/images/misc/silhouette-person-meditating-tree.png')}}'); background-size: cover; background-position: center; border-radius: 8px; min-height: 300px;"></div>
                                    </div>
                                    <div class="col-sm-6 relative">
                                        <div class="p-30">
                                            <!-- <div class="fw-bold text-dark"><i class="icofont-clock-time me-2 id-color-2"></i>W</div>
                                            Monday - Friday 08.00 - 18.00 -->

                                            <div class="spacer-20"></div>

                                            <div class="fw-bold text-dark"><i class="icofont-location-pin me-2 id-color-2"></i>Location</div>
                                            Tadvanam Ashramam, Kurumugham, Kalladikode, Palakka - 678597

                                            <div class="spacer-20"></div>

                                            <div class="fw-bold text-dark"><i class="icofont-phone me-2 id-color-2"></i>Call Us</div>
                                            9400 16 83 16, 85 8999 8585

                                            <div class="spacer-20"></div>

                                            <div class="fw-bold text-dark"><i class="icofont-envelope me-2 id-color-2"></i>Send a Message</div>
                                            tadvanamashramam@gmail.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
@endsection
