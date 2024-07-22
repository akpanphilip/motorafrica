@extends('layout.main')
@section('content')
    <title>MotorAfrica | Logistics and Delivery</title>

    {{-- @include('section.hero-logistics-and-delivery') --}}

    {{-- @include('section.how-it-works-car-subcription') --}}

    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row reverse-col justify-content-center align-items-center">
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/logistics1.webp') }} class="img-geo-banner"
                            alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span class="block-display">
                                Be in control of
                            </span>
                            <span class="block-display">
                                your <a class="text-main-clr">logistic</a> business.
                            </span>
                        </p>
                        <p class="caption-sub-title">
                            <span>
                                Connected vehicle data has the potential to supercharge logistics businesses by
                                revolutionizing their operations and driving significant improvements in efficiency,
                                productivity, and customer satisfaction. Here are some key ways in which connected vehicle
                                data can benefit the logistics industry.
                            </span>
                        </p>
                        {{-- <div class="sm-btn-center">
                            <a href="" class="swipe-btn">learn more</a>

                        </div> --}}
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
                            <span class="block-display">kickstart the optimization process</span>
                        </p>
                        <p class="caption-sub-title text-center p-0">
                            Boost business potential with Motor Africa data integration for operational optimization.
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
                        <img src={{ asset('assets/images/real__time.webp') }} alt="">
                        <p class="data-power-title">Real-Time Fleet Visibility</p>
                        <p class="data-power-subtitle">
                            Connected vehicle data provides real-time visibility into the location, status, and performance
                            of each vehicle in the fleet. This enables logistics businesses to monitor and track their
                            vehicles, ensuring optimal utilization, proactive maintenance, and effective resource
                            allocation.

                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/predictive_maintenace.webp') }} alt="">
                        <p class="data-power-title">Predictive Maintenance</p>
                        <p class="data-power-subtitle">
                            Connected vehicle data allows for predictive maintenance by monitoring the health and
                            performance of vehicles in real time. By analyzing data on engine diagnostics, mileage, and
                            other parameters, logistics businesses can proactively schedule maintenance activities,
                            minimizing breakdowns and costly repairs.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/route.webp') }} alt="">
                        <p class="data-power-title">Route Optimization</p>
                        <p class="data-power-subtitle">
                            By leveraging connected vehicle data, logistics businesses can optimize routes based on
                            real-time traffic conditions, road closures, and weather updates. This helps in reducing fuel
                            consumption, minimizing delivery delays, and maximizing overall operational efficiency.

                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/enhanced_safety.webp') }} alt="">
                        <p class="data-power-title">Enhanced Safety and Compliance</p>
                        <p class="data-power-subtitle">
                            Connected vehicle data enables logistics businesses to monitor driver behavior, such as speeding
                            or harsh braking, promoting safer driving practices. Additionally, it helps ensure compliance
                            with regulations by tracking hours of service, driver logs, and vehicle inspections.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/customer_experience.webp') }} alt="">
                        <p class="data-power-title">Improved Customer Experience</p>
                        <p class="data-power-subtitle">
                            Connected vehicle data enables logistics businesses to provide customers with accurate and
                            real-time information on delivery status, estimated arrival times, and potential delays. This
                            transparency enhances customer satisfaction, builds trust, and allows for better customer
                            communication.

                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/data_driven.webp') }} alt="">
                        <p class="data-power-title">Data-Driven Decision-Making</p>
                        <p class="data-power-subtitle">
                            Connected vehicle data provides valuable insights for data-driven decision-making. By analyzing
                            historical and real-time data on routes, delivery times, and vehicle performance, logistics
                            businesses can identify trends, optimize operations, and make informed strategic decisions.

                        </p>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/inventory_management.webp') }} alt="">
                        <p class="data-power-title">Efficient Inventory Management</p>
                        <p class="data-power-subtitle">
                            Connected vehicle data can be integrated with inventory management systems, enabling real-time
                            tracking of goods and optimizing inventory levels. This ensures efficient order fulfillment,
                            reduces stockouts, and minimizes carrying costs.
                        </p>
                    </div>
                </swiper-slide>

            </swiper-container>

        </div>
    </div>

    <div class="container-padding">
        <div class="signup-section justify-content-center">
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <p class="signup-title text-center">
                            Book a demo to get started.
                        </p>
                        <p class="signup-desc text-center">
                            To seamlessly integrate the Motor Africa-connected data into your existing operations, we
                            recommend booking a demo. This will allow you to explore the capabilities of the API and
                            understand how it can be tailored to meet your specific requirements.
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="https://calendly.com/motorafrica_connect" target="_blank"
                                class="start-now-btn text-center">book a
                                demo</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- @include('section.experience') --}}

    {{-- @include('section.partners') --}}

    @include('section.title-blog-post')
@endsection
