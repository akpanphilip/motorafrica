@extends('layout.main')
@section('content')
    <title>MotorAfrica | Historical Data</title>
    <style>
        .data-power-info {
            min-height: 350px;
        }
    </style>
    @include('section.hero-historical-data')

    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center reverse-col align-items-center">
                <div class="col-md-10 col-lg-6">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/historical-data-banner.png') }} class="img-geo-banner"
                            alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="swipe-in swipe-padding">
                        {{-- <p class="caption-caption">#Historical Data</p> --}}
                        <p class="caption-title-sm">
                            <span>
                                Extract valuable lessons from each journey to guide <a class="text-main-clr">smart
                                    choices</a>
                            </span>
                        </p>
                        <p class="caption-sub-title">
                            <span>
                                By utilizing history playback data, you can obtain access to intelligent API endpoints that
                                offer valuable insights into every trip undertaken by the vehicles in your fleet. This data
                                encompasses a wide range of services, enabling you to track and analyze the journey details
                                effectively.
                            </span>
                        </p>
                        <div class="sm-btn-center">
                            <a href="" class="swipe-btn">learn more</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="experience-section">
        <div class="container-padding">
            {{-- <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="info-100">
                        <p class="caption text-center">#Geo Fencing</p>
                        <p class="caption-title text-center">
                            <span class="block-display">Experience the next level of automation with Geofence.</span>
                        </p>
                        <p class="caption-sub-title text-center">
                            The geofence functionality enables you to establish virtual perimeters around your vehicle(s)
                            and
                            automate actions such as sending email notifications or imposing penalties for any breaches.
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>

        <div class="container-padding">

            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
                space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/incident-analysis.png') }} alt="">
                        <p class="data-power-title">Incident Analysis</p>
                        <p class="data-power-subtitle">Playback allows professionals to review past vehicle telemetry data
                            to analyze and understand past incidents, accidents, or operational issues, enabling them to
                            take corrective measures and prevent future occurrences.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/performance-evaluation.png') }} alt="">
                        <p class="data-power-title">Performance Evaluation</p>
                        <p class="data-power-subtitle">Professionals can use playback to assess vehicle and driver
                            performance, identify patterns, and make informed decisions to enhance overall operational
                            efficiency and safety.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/training-coaching.png') }} alt="">
                        <p class="data-power-title">Training and Coaching</p>
                        <p class="data-power-subtitle">Playback data can be utilized for training purposes, providing
                            real-life examples for coaching and improving driver behavior and adherence to safety protocols.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/compliance-regulation.png') }} alt="">
                        <p class="data-power-title">Compliance and Regulation</p>
                        <p class="data-power-subtitle">It aids in ensuring compliance with industry regulations and
                            standards by providing a clear historical record of vehicle operations and activities.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/maintenance-planning.png') }} alt="">
                        <p class="data-power-title">Maintenance Planning</p>
                        <p class="data-power-subtitle">It helps in planning vehicle maintenance schedules by identifying
                            usage patterns and potential stress points on the vehicle, ultimately extending the vehicle's
                            lifespan and reducing downtime.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/customer-service.png') }} alt="">
                        <p class="data-power-title">Customer Service</p>
                        <p class="data-power-subtitle"> Playback data can be utilized to address customer inquiries,
                            disputes, or claims by providing accurate historical information, and enhancing customer service
                            and satisfaction.
                        </p>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </div>

    <div class="transparent-historical-data">
        <div class="container-padding">
            <div class="impact-story impact-story-transparent m-100">
                <div class="impact-desc-sec">
                    <div class="impact-desc">
                        {{-- <p class="impact-caption">#Historical Data</p> --}}
                        <p class="impact-title">
                            See it in action
                        </p>
                        <p class="impact-details mb-4">
                            <span class="block-display">Gain valuable insights from each trip to make informed
                                decisions.</span>
                        </p>
                        <!--<button class="impact-btn">see a demo</button>-->
                        <a href="https://calendly.com/motorafrica_connect" target="_blank" class="impact-btn mt-4">see a demo</a>
                    </div>
                </div>
                <img src={{ asset('assets/images/laptop-historical-data.webp') }} class="impact-laptop" alt="">
            </div>
        </div>
    </div>


    <div class="container-padding">
        <div class="grid-assets m-100">
            <div class="asset-ins">
                <div class="asset-in">
                    <img src={{ asset('assets/images/track.png') }} class="asset-in-img" alt="">
                    <p class="asset-in-title">Track your assets in real time</p>
                    <a href="" class="swipe-btn mt-0">learn more</a>
                </div>
                <div class="asset-in">
                    <img src={{ asset('assets/images/monitor.png') }} class="asset-in-img" alt="">
                    <p class="asset-in-title">Monitor & manage vehicle health</p>
                    <a href="" class="swipe-btn mt-0">learn more</a>
                </div>
                <div class="asset-in">
                    <img src={{ asset('assets/images/automate.png') }} class="asset-in-img" alt="">
                    <p class="asset-in-title">Automate billing & payment</p>
                    <a href="" class="swipe-btn mt-0">learn more</a>
                </div>
                <div class="asset-in">
                    <img src={{ asset('assets/images/build.png') }} class="asset-in-img" alt="">
                    <p class="asset-in-title">Build bespoke mobility solutions</p>
                    <a href="" class="swipe-btn mt-0">learn more</a>
                </div>
            </div>
            <div class="historical-stand"></div>
        </div>
    </div>

    <div class="container-padding">
        <div class="signup-section justify-content-center">
            <div data-aos="fade-up" data-aos-duration="1500">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <p class="signup-title text-center">
                            Book a demo to get started.
                        </p>
                        <p class="signup-desc text-center">
                            To seamlessly integrate the history playback API into your product, we recommend booking a demo.
                            This will allow you to explore the capabilities of the API and understand how it can be tailored
                            to meet your specific requirements.

                        </p>
                        <div class="d-flex justify-content-center">
                            {{-- <button class="start-now-btn text-center">
                                start now
                            </button> --}}
                            <a href="https://calendly.com/motorafrica_connect" target="_blank" class="start-now-btn text-center">book a
                                demo</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @include('section.title-blog-post')


    @include('section.partners')
@endsection
