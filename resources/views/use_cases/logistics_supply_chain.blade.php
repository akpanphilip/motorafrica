@extends('layout.main')
@section('content')
    <title>MotorAfrica | Logistic & Supply Chain</title>

    @include('section.hero_logistics_delivery')

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
                            <span class="block-display">Here's how Motor Africa's fleet automation cloud service can
                                revolutionize logistics & supply chain management -</span>
                        </p>

                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Versatile Telemetry GPS Devices:</b> Motor Africa provides logistics and supply chain
                                operators
                                with the flexibility to deploy various types of telemetry GPS devices, allowing for precise
                                tracking and monitoring of vehicles, shipments, and assets across the supply chain. This
                                diverse range of devices ensures optimal performance and customized solutions for different
                                operational needs.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Value-Added Services:</b> Motor Africa's fleet automation cloud service offers
                                value-added
                                services specifically designed to benefit logistics and supply chain managers. These
                                services may include route optimization, predictive maintenance alerts, real-time inventory
                                tracking, and customized reporting functionalities. These additional services enhance
                                operational capabilities and decision-making processes.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Comprehensive Data Insights:</b> Motor Africa's fleet automation cloud service empowers
                                logistics and supply chain managers with comprehensive data insights through advanced
                                analytics and reporting tools. By analyzing key performance metrics, trends, and patterns,
                                operators can make informed decisions, optimize processes, and drive continuous improvement
                                across their supply chain operations.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Enhanced Operational Visibility:</b> With Motor Africa's solution, logistics and supply
                                chain managers gain enhanced operational visibility through real-time tracking, monitoring,
                                and reporting capabilities. This visibility allows for proactive management of shipments,
                                improved resource allocation, and better coordination of logistics activities to ensure
                                timely deliveries and customer satisfaction.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Streamlined Task Management:</b> Motor Africa's fleet automation cloud service
                                streamlines task management processes for logistics operators by automating tasks such as
                                order processing, scheduling, and inventory management. This automation reduces manual
                                errors, increases operational efficiency, and facilitates seamless workflow management
                                within the supply chain.
                            </span>
                        </p>
                        <p class="caption-title-xsm mt-4">
                            By leveraging Motor Africa's fleet automation cloud service, logistics, and supply chain
                            operators can drive innovation, improve operational efficiency, enhance decision-making
                            processes, and deliver value-added services that optimize their logistics operations and ensure
                            competitiveness in the industry.
                        </p>
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
