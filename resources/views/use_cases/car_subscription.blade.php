@extends('layout.main')
@section('content')
    <title>MotorAfrica | Car Subscription</title>
    @include('section.hero-car-subscription')
    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center reverse-col align-items-center">
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/car_subscription1.webp') }} class="img-geo-banner" alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span>
                                Unlock Seamless Car Subscriptions in Africa <br> with Motor Africa's Cloud
                            </span>
                        </p>
                        <p class="caption-sub-title">
                            <span>
                                Welcome to the new era of car ownership in Africa, where the traditional barriers are
                                replaced with flexible, hassle-free car subscriptions tailored to the dynamic needs of
                                businesses and individuals across diverse industries. Motor Africa's cutting-edge cloud
                                technology is revolutionizing the way vehicles are accessed and managed on the continent.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-6">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span class="block-display">Why Choose <br> Motor Africa's Cloud?</span>
                        </p>
                        <p class="caption-sub-title">
                            At Motor Africa, we understand the transformative power of cloud-based solutions in enhancing
                            mobility and business opportunities. Our cloud platform is more than just a service – it's a
                            gateway to a new era of automotive convenience.
                        </p>
                        <p class="caption-sub-title">
                            Whether you're starting a car subscription business for your own vehicles or a fleet management
                            enterprise that leases cars on behalf of vehicle owners for ride-hailing, private, or corporate
                            use, we offer a comprehensive tech stack to help you get up and running in no time.
                            {{-- Businesses and hosts are choosing Motor Africa for the following reasons: --}}

                        </p>
                        {{-- <p class="caption-title-xsm mb-4">
                            Here's what you can expect:
                        </p> --}}
                    </div>
                </div>
                <div class="col-md-10 col-lg-5 offset-lg-1">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/car_subscription2.webp') }} alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="experience-section">
        <div class="container-padding">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="info-100">
                        <p class="caption-title text-center">
                            <span class="block-display">Features of Motor Africa’s Car Subscription Cloud Service</span>
                        </p>
                        <p class="caption-sub-title text-center">
                            Discover the comprehensive features that set Motor Africa's Car Subscription Cloud Service
                            apart, revolutionizing vehicle fleet management across Africa
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-padding">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
                space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/enhanced-security.png') }} alt="">
                        <p class="data-power-title">Flexible Subscription Plans</p>
                        <p class="data-power-subtitle">
                            Choose from a variety of tailored plans to suit diverse business needs and customer preferences,
                            whether short-term rentals or long-term leases.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/theft-prevention.png') }} alt="">
                        <p class="data-power-title">Effortless Fleet Management</p>
                        <p class="data-power-subtitle">
                            Centralized platform to monitor vehicle data, track usage, and schedule maintenance, ensuring
                            optimal performance and minimal downtime.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/improved-asset-mgt.png') }} alt="">
                        <p class="data-power-title">Integrated Payment Solutions</p>
                        <p class="data-power-subtitle">
                            Simplify billing and payment processes with secure, efficient payment methods, providing
                            convenience for subscribers and your business
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/route-optimization.png') }} alt="">
                        <p class="data-power-title">Real-time Vehicle Tracking</p>
                        <p class="data-power-subtitle">
                            Ensure accountability and security with live vehicle location monitoring, enabling proactive
                            fleet management and enhanced safety.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/personalized-customer.png') }} alt="">
                        <p class="data-power-title">Comprehensive Customer Support</p>
                        <p class="data-power-subtitle">
                            Dedicated team providing timely assistance and resolving issues promptly, delivering exceptional
                            service.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/efficient-fleet-mgt.png') }} alt="">
                        <p class="data-power-title">Advanced Analytics and Reporting</p>
                        <p class="data-power-subtitle">Gain valuable insights to optimize operations, improve service
                            delivery, and maximize profitability.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/compliance.png') }} alt="">
                        <p class="data-power-title">Scalability and Customization</p>
                        <p class="data-power-subtitle">Scale your fleet and customize plans to meet evolving market demands
                            and operational requirements.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/compliance.png') }} alt="">
                        <p class="data-power-title">Compliance and Regulatory Support</p>
                        <p class="data-power-subtitle">Navigate regulatory requirements seamlessly, ensuring peace of mind
                            and operational continuity.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/compliance.png') }} alt="">
                        <p class="data-power-title">Continuous Innovation and Updates</p>
                        <p class="data-power-subtitle">
                            Benefit from the latest automotive technology and cloud service advancements, with access to
                            APIs for custom experiences.
                        </p>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </div>

    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center align-items-center reverse-col">

                <div class="col-md-10 col-lg-6">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span class="block-display">Experience the Difference with Motor Africa</span>
                        </p>
                        <p class="caption-sub-title">
                            Join leading businesses across Africa in transforming mobility with MotorAfrica’s Car
                            Subscription Cloud Service. Discover how our innovative solutions can optimize your fleet
                            management, enhance customer satisfaction, and drive business growth. Contact us today to
                            schedule a consultation and unlock the full potential of launching a seamless car subscription
                            with Motor Africa.
                        </p>
                        <p class="caption-sub-title">
                            Register a Cloud account with the button below

                        <div class="mt-2">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeg-k44jmwNm3k6qhpshN0rS8nylv7Cx_ZUcodccJaHsHY1mg/viewform?usp=send_form
"
                                class="start-now-btn">
                                Apply
                                <i class='bx bx-chevron-right'></i>
                            </a>
                        </div>

                        </p>


                    </div>
                </div>
                <div class="col-md-10 col-lg-5 offset-lg-1">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/car_subscription2.webp') }} alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- @include('section.experience') --}}

    {{-- @include('section.partners') --}}

    {{-- @include('section.title-blog-post') --}}
    @include('section.blog')
@endsection
