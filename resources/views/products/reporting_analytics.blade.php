@extends('layout.main')
@section('content')
    <title>MotorAfrica | Reporting & Analytics</title>
    <style>
        .data-power-info {
            min-height: 350px;
        }
    </style>

    <div class="bg-analytics">
        @include('section.hero-report-analytics')

        <div class="container-padding">
            <div class="reporting-dashboard m-100 mb-0">
                <img src={{ asset('assets/images/reporting-dashboard.webp') }} class="img-fluid" alt="">
            </div>
        </div>
    </div>
    @include('section.experience')


    <div class="experience-section">
        <div class="container-padding">
            <div class="info-100">
                <p class="caption-title text-center">
                    <span class="block-display">Transform <a class="text-main-clr">Vehicle Data</a> into</span> <span class="block-display">Actionable
                        Insights with <a class="text-main-clr">Motor Africa</a></span>
                </p>
                <p class="caption-sub-title text-center">
                    <span>Step into the future of intelligent fleet management with our Reporting & Analytics Center.</span>
                    <span>Unleash the power of data-driven decision-making, as we transform raw information into</span>
                    <span>actionable insights for your vehicles.</span>
                </p>
            </div>
        </div>

        <div class="container-padding">

            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
                space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/real-time-data-access.png') }} alt="">
                        <p class="data-power-title">Real-time data access and visualization</p>
                        <p class="data-power-subtitle">Monitor your fleet's performance in real time with our interactive
                            dashboards and customizable reports.</p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/detailed-vehicle-access.png') }} alt="">
                        <p class="data-power-title">Detailed vehicle insights</p>
                        <p class="data-power-subtitle">Gain insights into individual vehicle performance, including fuel
                            consumption, mileage, and driver behavior.</p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/trip-analysis.png') }} alt="">
                        <p class="data-power-title">Trip analysis</p>
                        <p class="data-power-subtitle">Analyze trip data to identify patterns, optimize routes, and reduce
                            fuel costs.</p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/maintenance-schedule.png') }} alt="">
                        <p class="data-power-title">Maintenance scheduling</p>
                        <p class="data-power-subtitle">Proactively schedule maintenance based on real-time data to avoid
                            costly breakdowns.</p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/api-integration.png') }} alt="">
                        <p class="data-power-title">API integration</p>
                        <p class="data-power-subtitle">Access and integrate your vehicle data with your existing business
                            systems.</p>
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

    <div class="transparent-report">
        <div class="container-padding">
            <div class="impact-story impact-story-transparent m-100">
                {{-- p-80 --}}
                <div class="impact-desc-sec">
                    <div class="impact-desc">
                        <p class="impact-title">
                            <span class="block-display">Actionable Intelligence</span> <span class="block-display">for
                                Efficiency</span>
                        </p>
                        <p class="impact-details mb-4">
                            <span>Our Analytics Center provides actionableintelligence. Helping you
                                optimizeoperational efficiency, and make strategicdecisions that drives success</span>
                        </p>
                        
                        <!--<button class="impact-btn">see a demo</button>-->
                        <br>
                         <a href="https://calendly.com/motorafrica_connect" target="_blank" class="impact-btn mt-4">see a demo</a>
                    </div>
                </div>
                <img src={{ asset('assets/images/laptop-reporting.webp') }} class="impact-laptop" alt="">
            </div>
        </div>
    </div>

    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center reverse-col align-items-center">
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/visualize.webp') }} class="img-geo-banner" alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span class="block-display"><a class="text-main-clr">Visualize</a> Your Fleet's</span>
                            <span class="block-display">Performance</span>
                        </p>
                        <p class="caption-sub-title">
                            <span>Motor Africa’s intuitive reporting tools allow you
                                to visualize your fleet's performance at a glance.
                                Dive into comprehensive charts and graphs,
                                gaining a deeper understanding of everything
                                from operationals efficiency to maintenance
                                trends.</span>
                        </p>
                        <a href="" class="swipe-btn">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('section.title-blog-post')

    @include('section.partners')
@endsection
