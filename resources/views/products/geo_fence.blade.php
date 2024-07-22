@extends('layout.main')
@section('content')
    <title>MotorAfrica | Geo-Fence</title>

    @include('section.hero-geo-fence')

    <style>
        .swiper-pagination-bullet-active {
            /* opacity: var(--swiper-pagination-bullet-opacity, 1); */
            background: red !important;
        }

        .data-power-info {
            min-height: 400px;
        }
    </style>

    <div class="experience-section">
        <div class="container-padding">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="info-100">
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
            </div>
        </div>

        <div class="container-padding">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="3"
                space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/enhanced-security.png') }} alt="">
                        <p class="data-power-title">Enhanced Security</p>
                        <p class="data-power-subtitle">Geofencing enables real-time monitoring of vehicle movement within
                            designated areas. If a vehicle deviates from its authorized route or enters a restricted zone,
                            alerts can be triggered to prompt immediate action, such as notifying authorities or disabling
                            the vehicle remotely.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/theft-prevention.png') }} alt="">
                        <p class="data-power-title">Theft Prevention and Recovery</p>
                        <p class="data-power-subtitle">Geofencing can help prevent vehicle theft by setting virtual
                            boundaries. If a vehicle is taken beyond the defined geofence, alarms can be activated, and the
                            vehicle's location can be tracked, assisting in its recovery.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/improved-asset-mgt.png') }} alt="">
                        <p class="data-power-title">Improved Asset Management</p>
                        <p class="data-power-subtitle">Geofencing allows businesses to efficiently manage their vehicle
                            fleet by tracking the location of vehicles and ensuring they are being used within authorized
                            areas. This helps prevent unauthorized use, misuse, or loss of assets.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/route-optimization.png') }} alt="">
                        <p class="data-power-title">Route Optimization</p>
                        <p class="data-power-subtitle">Geofencing can be used to define specific routes or areas that
                            vehicles should follow. By utilizing geofencing, businesses can optimize routes, reduce travel
                            time, and minimize fuel consumption by ensuring vehicles stay on the designated path.</p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/personalized-customer.png') }} alt="">
                        <p class="data-power-title">Personalized Customer Experience</p>
                        <p class="data-power-subtitle">Geofencing enables businesses to provide location-based services and
                            notifications to customers. For example, customers can receive alerts regarding nearby service
                            centers, promotional offers, or updates on their scheduled deliveries, enhancing their overall
                            experience.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/efficient-fleet-mgt.png') }} alt="">
                        <p class="data-power-title">Efficient Fleet Management</p>
                        <p class="data-power-subtitle">Geofencing assists fleet managers in monitoring vehicle activities,
                            such as entry and exit times from specific locations. This information is valuable for
                            optimizing routing, scheduling maintenance, and analyzing driver behavior for performance
                            improvement and cost savings.
                        </p>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/compliance.png') }} alt="">
                        <p class="data-power-title">Compliance and Regulatory Requirements</p>
                        <p class="data-power-subtitle">Geofencing can help businesses comply with specific regulations or
                            industry standards by enforcing boundary restrictions or emission control measures within
                            designated areas.

                        </p>
                    </div>
                </swiper-slide>
            </swiper-container>


            {{-- <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/enhanced-security.png') }} alt="">
                        <p class="data-power-title">Enhanced Security</p>
                        <p class="data-power-subtitle">Geofencing enables real-time monitoring of vehicle movement within
                            designated areas. If a vehicle deviates from its authorized route or enters a restricted zone,
                            alerts can be triggered to prompt immediate action, such as notifying authorities or disabling
                            the vehicle remotely.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/theft-prevention.png') }} alt="">
                        <p class="data-power-title">Theft Prevention and Recovery</p>
                        <p class="data-power-subtitle">Geofencing can help prevent vehicle theft by setting virtual
                            boundaries. If a vehicle is taken beyond the defined geofence, alarms can be activated, and the
                            vehicle's location can be tracked, assisting in its recovery.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/improved-asset-mgt.png') }} alt="">
                        <p class="data-power-title">Improved Asset Management</p>
                        <p class="data-power-subtitle">Geofencing allows businesses to efficiently manage their vehicle
                            fleet by tracking the location of vehicles and ensuring they are being used within authorized
                            areas. This helps prevent unauthorized use, misuse, or loss of assets.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/route-optimization.png') }} alt="">
                        <p class="data-power-title">Route Optimization</p>
                        <p class="data-power-subtitle">Geofencing can be used to define specific routes or areas that
                            vehicles should follow. By utilizing geofencing, businesses can optimize routes, reduce travel
                            time, and minimize fuel consumption by ensuring vehicles stay on the designated path.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/personalized-customer.png') }} alt="">
                        <p class="data-power-title">Personalized Customer Experience</p>
                        <p class="data-power-subtitle">Geofencing enables businesses to provide location-based services and
                            notifications to customers. For example, customers can receive alerts regarding nearby service
                            centers, promotional offers, or updates on their scheduled deliveries, enhancing their overall
                            experience.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/efficient-fleet-mgt.png') }} alt="">
                        <p class="data-power-title">Efficient Fleet Management</p>
                        <p class="data-power-subtitle">Geofencing assists fleet managers in monitoring vehicle activities,
                            such as entry and exit times from specific locations. This information is valuable for
                            optimizing routing, scheduling maintenance, and analyzing driver behavior for performance
                            improvement and cost savings.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/compliance.png') }} alt="">
                        <p class="data-power-title">Compliance and Regulatory Requirements</p>
                        <p class="data-power-subtitle">Geofencing can help businesses comply with specific regulations or
                            industry standards by enforcing boundary restrictions or emission control measures within
                            designated areas.

                        </p>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>

    <div class="transparent-action-section">
        <div class="container-padding">
            <div class="impact-story impact-story-transparent m-100">
                <div class="impact-desc-sec">
                    <div class="impact-desc">
                        {{-- <p class="impact-caption">#Geo-Fencing</p> --}}
                        <p class="impact-title">
                            See it in action
                        </p>
                        <p class="impact-details mb-4">
                            <span>Explore the transformative power of real-time insights in revolutionizing decision-making
                                and
                                enhancing the quality of life, work, and travel
                                experiences.</span>
                        </p>
                         <a href="https://calendly.com/motorafrica_connect" target="_blank" class="impact-btn mt-4">see a demo</a>
                        <!--<button class="impact-btn">see a demo</button>-->
                    </div>
                </div>
                <img src={{ asset('assets/images/laptop-1.webp') }} class="impact-laptop" alt="">
            </div>
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
                            To seamlessly integrate the geofence API into your product,
                            we recommend booking a demo. This will allow
                            you to explore the capabilities of the API
                            and understand how it can be tailored
                            to meet your specific requirements.
                        </p>
                        <div class="d-flex justify-content-center">
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
