@extends('layout.main')
@section('content')
    <title>MotorAfrica | Integrated Payment Services</title>
    <style>
        .data-power-info {
            min-height: 350px;
        }
    </style>

    @include('section.hero-integrated-payment')

    <div class="experience-section">
        <div class="container-padding">
            <div class="experience-counts">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="experience">
                            <p class="experience-count"><span class="counter" id="counter1">100</span> bn</p>
                            <p class="experience-title">Live data points</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="experience">
                            <p class="experience-count"><span class="counter" id="counter2">700</span> m+</p>
                            <p class="experience-title">Trip data processed</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="experience">
                            <p class="experience-count">$<span class="counter" id="counter3">440</span> k</p>
                            <p class="experience-title">Processed via billing</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="experience">
                            <p class="experience-count"><span> <span class="counter" id="counter4">500</span>
                                </span>m</p>
                            <p class="experience-title">Miles of driving data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="experience-section">
        <div class="container-padding">
            <div class="info-100">
                <p class="caption-title text-center">
                    <span class="block-display">
                        Use cases for our embedded finance API
                    </span>
                </p>
            </div>
        </div>

        <div class="container-padding">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
                space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/car-violence.png') }} alt="">
                        <p class="data-power-title">Car subscription businesses</p>
                        <p class="data-power-subtitle">Integrate our API to efficiently manage rental fees and asset control
                            for defaulting customers, simplifying financial operations.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/car-violation.png') }} alt="">
                        <p class="data-power-title">Geofence violation fees</p>
                        <p class="data-power-subtitle">Set up geofences around work zones and charge violation fees when
                            drivers breach the rules, promoting adherence to regulations.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/driver-rewards.png') }} alt="">
                        <p class="data-power-title">Driver rewards</p>
                        <p class="data-power-subtitle">Implement driver reward programs by automating the calculation and
                            distribution of rewards, improving driver satisfaction and performance.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/micro-lending.png') }} alt="">
                        <p class="data-power-title">Micro-lending</p>
                        <p class="data-power-subtitle">Use our API to collect loan repayments for individuals who have taken
                            loans against their vehicles as collateral, streamlining the repayment process and reducing
                            delinquency risks.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/geo-violation.png') }} alt="">
                        <p class="data-power-title">Operational violation fees</p>
                        <p class="data-power-subtitle">Seamlessly collect fees when drivers exceed predetermined speed
                            limits, ensuring compliance and promoting safe driving practices.
                        </p>
                    </div>
                </swiper-slide>

            </swiper-container>
        </div>
    </div>

    <div class="container-padding">
        <div class="reporting-dashboard m-100">
            <img src={{ asset('assets/images/reporting-dashboard.png') }} class="img-fluid" alt="">
        </div>
    </div>

    <div class="home-swipe">
        <div class="container-padding">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/integrated-payment-banner.webp') }} class="img-geo-banner"
                            alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span class="text-main-clr">Integrated</span>
                            <span class="block-display">Payment Services...</span>
                        </p>
                        <p class="caption-sub-title">
                            <span>By leveraging our embedded finance API, fleet operators can simplify their business
                                operations, reduce manual effort, enhance efficiency, and focus on their core operations.
                            </span>
                            <span>
                                Whether it's managing rental fees, enforcing penalties, rewarding drivers, or collecting
                                loan repayments, our API offers a versatile solution for optimizing financial processes in
                                the fleet management industry.

                            </span>
                        </p>

                        <div class="sm-btn-center">
                            <a href="https://calendly.com/motorafrica_connect" target="_blank" class="swipe-btn">book a
                                demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('section.impact-story')
    @include('section.title-blog-post')

    @include('section.partners')
    @include('section.book-demo-modal')
@endsection
