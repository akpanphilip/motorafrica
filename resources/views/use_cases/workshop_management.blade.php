@extends('layout.main')
@section('content')
    <title>MotorAfrica | Workshop Management</title>

    @include('section.hero_workshop_mgt')


    <div class="experience-section">
        <div class="container-padding">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="info-100">
                        <p class="caption-title text-center">
                            <span class="block-display">Revolutionizing Workshop Success</span>
                        </p>
                        <p class="caption-sub-title text-center p-0">
                            Discover how Motor Africa's fleet automation software can empower your workshop to succeed
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
                        <img src={{ asset('assets/images/enhanced_safety.webp') }} alt="">
                        <p class="data-power-title">Effortless Integration</p>
                        <p class="data-power-subtitle">
                            Motor Africa's software seamlessly integrates with fleet management systems, facilitating effective collaboration and streamlining communication between workshops and fleet operators.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/real__time.webp') }} alt="">
                        <p class="data-power-title">Efficient Maintenance Scheduling</p>
                        <p class="data-power-subtitle">
                            Motor Africa's software automates maintenance scheduling, ensuring timely servicing, minimizing downtime, and prolonging vehicle longevity for workshops managing precise schedules.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/predictive_maintenace.webp') }} alt="">
                        <p class="data-power-title">Advanced Reporting and Analytics</p>
                        <p class="data-power-subtitle">
                            Motor Africa's fleet automation software provides workshops with detailed reporting and analytics, enabling analysis of key performance indicators to enhance efficiency.
                        </p>
                    </div>
                </swiper-slide>
              
               

            </swiper-container>

        </div>
    </div>


    <div class="home-swipe pt-4 pb-4 bg-white">
        <div class="container-padding">
            <div class="row justify-content-center reverse-col">
                <div class="col-md-10 col-lg-4">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/car_subscription2.webp') }} alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-8">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span class="block-display">Fleet automation can open up various opportunities for workshops, such as -</span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Increased Revenue:</b> Fleet automation can lead to increased business opportunities for
                                workshops by attracting fleet operators looking for reliable maintenance partners. This can
                                result in a steady stream of business and revenue for the workshop.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Enhanced Reputation:</b> By utilizing fleet automation software, workshops can improve
                                their efficiency, accuracy, and service quality. This can help build a positive reputation
                                in the industry, attracting more clients and fostering long-term relationships.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Expansion of Services:</b> Fleet automation can enable workshops to expand their service
                                offerings to cater specifically to fleet maintenance needs. This may include tailored
                                maintenance packages, specialized services, or extended operating hours to accommodate fleet
                                schedules.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Access to Data Insights:</b> Fleet automation software provides workshops with valuable
                                data insights and analytics on maintenance trends, vehicle performance, and operational
                                efficiency. By leveraging this data, workshops can make informed decisions, implement
                                preventive maintenance strategies, and optimize their services.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Competitive Advantage:</b> Implementing fleet automation can give workshops a competitive
                                edge in the market by offering advanced services, faster turnaround times, and improved
                                customer satisfaction. This can help workshops stand out from competitors and attract more
                                business.
                            </span>
                        </p>

                        <p class="caption-title-xsm mt-4">
                            Experience the transformative power of Motor Africa's fleet automation software and elevate your
                            workshop management to new heights. Embrace innovation, efficiency, and success with Motor
                            Africa
                        </p>
                        <div class="mt-4">
                            <a href="/contact-us" class="start-now-btn">Book A Demo</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- @include('section.how-it-works') --}}


{{-- @include('section.advert') --}}

    @include('section.title-blog-post')


    {{-- @include('section.partners') --}}
@endsection
