@extends('layout.main')
@section('content')
    <title>MotorAfrica | Online Tracking</title>

    @include('section.hero-online-tracking')


    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center reverse-col align-items-center">
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/utilize-high-precise.webp') }} alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            Use current & precise aggregated insights for <a class="text-main-clr">informed decision-making</a>.
                        </p>
                        <p class="caption-sub-title">
                            Motor Africa's API integrates real-time vehicle location data, automating business processes for
                            improved ETA predictions. It supports efficient transportation and delivery operations by
                            optimizing routes and enhancing overall operational efficiency.
                        </p>
                        <div class="center-botton-sm">
                            <a href="" class="swipe-btn">learn more</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="see-in-action-section ">
        <div class="container-padding">
            <div class="impact-story m-100">
                {{-- p-80 --}}
                <div class="impact-desc-sec">
                    <div class="impact-desc">
                        {{-- <p class="impact-caption">#Online Tracking</p> --}}
                        <p class="impact-title">
                            See it in action
                        </p>
                        <p class="impact-details mb-4">
                            <span>Explore the transformative power of real-time insights in revolutionizing decision-making
                                and
                                enhancing the quality of life, work, and travel
                                experiences.</span>
                        </p>
                        <br>
                        <!--<button class="impact-btn">see a demo</button>-->
                        <a href="https://calendly.com/motorafrica_connect" target="_blank" class="impact-btn mt-4">book a demo</a>

                    </div>
                </div>
                <img src={{ asset('assets/images/laptop-1.webp') }} class="impact-laptop" alt="">
            </div>
        </div>
    </div>

    {{-- <div class="title-blog-section bg-light-gray p-120">
        <div class="container-padding">
            <div class="info-100">
                <p class="caption-title mb-100 text-center">
                    <span class="block-display">Motor Africa is helping motorists</span>
                    <span class="block-display">unlock funding and optimize their</span>
                    <span class="block-display">mobility services</span>
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post-col transparent" data-aos="fade-up" data-aos-easing="linear">
                        <div class="blog-post-col-img">
                            <img src={{ asset('assets/images/private-subscribes.png') }} class="img-fluid w-100"
                                alt="">
                        </div>
                        <div class="blog-post-col-in">
                            <p class="blog-post-col-title">Motor Card for private subscribers</p>
                            <p class="blog-post-col-desc">Offering motorists the ability to access loan for essential needs
                                while also taking full control of their car's safety and fleet management needs</p>
                            <button class="blog-post-btn btn-100">learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post-col transparent" data-aos="fade-up" data-aos-easing="linear">
                        <div class="blog-post-col-img">
                            <img src={{ asset('assets/images/bolt-goodies.png') }} class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-post-col-in">
                            <p class="blog-post-col-title">Unlock all the goodies that comes with Bolt</p>
                            <p class="blog-post-col-desc">Offering motorists the ability to access loan for essential needs
                                while also taking full control of their car's safety and fleet management needs</p>
                            <button class="blog-post-btn btn-100">learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post-col transparent" data-aos="fade-up" data-aos-easing="linear">
                        <div class="blog-post-col-img">
                            <img src={{ asset('assets/images/corporate-subscribers.png') }} class="img-fluid w-100"
                                alt="">
                        </div>
                        <div class="blog-post-col-in">
                            <p class="blog-post-col-title">Motor Card for Corporate subscribers</p>
                            <p class="blog-post-col-desc">Offering motorists the ability to access loan for essential needs
                                while also taking full control of their car's safety and fleet management needs</p>
                            <button class="blog-post-btn btn-100">learn more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    @include('section.title-blog-post')

    @include('section.partners')
@endsection
