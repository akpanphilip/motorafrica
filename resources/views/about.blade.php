@extends('layout.main')
@section('content')
    <title>MotorAfrica | About</title>
    <style>
        .about-link {
            font-weight: 700 !important;
            color: #08102E;
        }

        .caption-sub-title {
            font-size: 20px;
        }

        .side-two-in img {
            /* height: 300px; */
            /* width: 300px; */
        }
    </style>
    @include('section.hero-about')

    <div class="side-two">
        <div class="container-padding">
            <div class="row">
                <div class="col-md-10 col-lg-6">
                    <div class="side-two-in">
                        <p class="caption-title"><span>We Believe in <a class="text-main-clr">Africa</a></p>
                        <p class="caption-sub-title">
                            <span>
                                Motor Africa is a leading provider of integrated solutions for vehicle tracking and
                                management.
                            </span>
                            <span>
                                Our API empowers logistics, insurance, finance, and fleet management companies
                                to easily track and manage their vehicles' location, health, and performance through a
                                seamless integration.
                            </span>
                        </p>

                        {{-- <a href="" class="swipe-btn">learn more</a> --}}
                    </div>
                </div>
                <div class="col-md-10 col-lg-5 offset-lg-1">
                    <div class="side-two-in">
                        <img src={{ asset('assets/images/believe.webp') }} alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="side-two">
        <div class="container-padding">
            <div class="row reverse-col">
                <div class="col-md-10 col-lg-5">
                    <div class="side-two-in">
                        <img src={{ asset('assets/images/mission.webp') }} alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="side-two-in swipe-padding">
                        <p class="caption-title"><span>Our <a class="text-main-clr">Mission</a></p>
                        <p class="caption-sub-title larger-text">
                            <span>
                                To empower logistics, insurance, finance, and fleet management companies with our API,
                                enabling seamless tracking and management of vehicles' location, health, and performance.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="side-two">
        <div class="container-padding">
            <div class="row">
                <div class="col-md-10 col-lg-6">
                    <div class="side-two-in">
                        <p class="caption-title"><span>Vision</p>
                        <p class="caption-sub-title">
                            <span>
                                To be the leading provider of integrated solutions that optimize vehicle tracking and
                                management, revolutionizing the operations of logistics, insurance, finance, and fleet
                                management industries.
                            </span>
                        </p>

                        {{-- <a href="" class="swipe-btn">learn more</a> --}}
                    </div>
                </div>
                <div class="col-md-10 col-lg-5 offset-lg-1">
                    <div class="side-two-in">
                        <img src={{ asset('assets/images/hero-one-img.webp') }} alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-padding m-100">
        <div class="info-100">
            <p class="caption-title text-center">
                <span class="block-display">Corporate <a class="text-main-clr">Goals</a></span>
            </p>
        </div>
        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
            space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false">
            <swiper-slide>
                <div class="data-power-info">
                    <img src={{ asset('assets/images/enhanced_safety.webp') }} alt="">
                    <p class="data-power-title">Advancing Mobility</p>
                    <p class="data-power-subtitle">
                        Develop and maintain a cutting-edge API that offers comprehensive vehicle tracking and management
                        capabilities.
                    </p>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="data-power-info">
                    <img src={{ asset('assets/images/efficient-fleet-mgt.png') }} alt="">
                    <p class="data-power-title">Strategic Alliances</p>
                    <p class="data-power-subtitle">
                        Establish strong partnerships with logistics, insurance, finance, and fleet management companies to
                        expand our reach and impact.
                    </p>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="data-power-info">
                    <img src={{ asset('assets/images/detailed-recovery.png') }} alt="">
                    <p class="data-power-title">Dynamic Evolution</p>
                    <p class="data-power-subtitle">
                        Continuously innovate and enhance our offerings to meet the evolving needs of our customers.
                    </p>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="data-power-info">
                    <img src={{ asset('assets/images/customer_experience.webp') }} alt="">
                    <p class="data-power-title">Customer Success Excellence</p>
                    <p class="data-power-subtitle">
                        Provide exceptional customer service and support to ensure the success of our clients.
                    </p>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="data-power-info">
                    <img src={{ asset('assets/images/data_driven.webp') }} alt="">
                    <p class="data-power-title">Revolutionizing the Industry</p>
                    <p class="data-power-subtitle">
                        Drive industry-wide adoption of our API as the go-to solution for vehicle tracking and management.
                    </p>
                </div>
            </swiper-slide>
        </swiper-container>
    </div>

    @include('section.team')

    @include('section.partners')
@endsection
