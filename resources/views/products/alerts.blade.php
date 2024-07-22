@extends('layout.main')
@section('content')
    <title>MotorAfrica | Alerts & Notifications</title>

    @include('section.hero-alerts')

    <div class="grid-assets-reverse-section p-100">

        <div class="container-padding">
            <div class="grid-assets-reverse">
                <div class="asset-reverse-img">
                    <div class="hero-mint text-main-clr">Real-Time Insights</div>
                    <img src={{ asset('assets/images/alerts.webp') }} alt="">
                    <p class="hero-title pt-3 pb-3 mb-0"><span>Data-Driven</span> <span>Decision Making</span></p>
                    <p class="hero-sub-title p-0">
                        <span>Receive real-time updates and actionable insights to optimize your operations, reduce
                            downtime, and ensure the safety of your drivers and vehicles</span>
                    </p>
                    <div class="sm-btn-center">
                        <a href="" class="swipe-btn">learn more</a>
                    </div>

                </div>
                <div class="asset-ins">
                    <div class="asset-in align-items-start">
                        <img src={{ asset('assets/images/telemetry-alerts.png') }} class="asset-in-img img-fluid"
                            alt="">
                        <p class="asset-in-reverse-title">Telematics alerts</p>
                        <p class="hero-sub-title p-0"><span>Receive real-time vehicle notifications,
                                emergency alerts, and
                                potential mechanical issues.</span></p>
                    </div>
                    <div class="asset-in align-items-start">
                        <img src={{ asset('assets/images/biling-alerts.png') }} class="asset-in-img img-fluid"
                            alt="">
                        <p class="asset-in-reverse-title">Biling alerts</p>
                        <p class="hero-sub-title p-0"><span>Notifications and updates, ensuring complete transparency in
                                your financial transactions.</span></p>
                    </div>
                    <div class="asset-in align-items-start">
                        <img src={{ asset('assets/images/maintenance-alerts.png') }} class="asset-in-img img-fluid"
                            alt="">
                        <p class="asset-in-reverse-title">Maintenance alerts</p>
                        <p class="hero-sub-title p-0"><span>Get timely notifications for scheduled maintenance, recommended
                                service intervals, and expiring warranties.</span></p>
                    </div>
                    <div class="asset-in align-items-start">
                        <img src={{ asset('assets/images/api-alerts.png') }} class="asset-in-img img-fluid" alt="">
                        <p class="asset-in-reverse-title">API alerts</p>
                        <p class="hero-sub-title p-0"><span>Be alerted to any issues or interruptions with our API services,
                                ensuring seamless connectivity and data access.</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="transparent-alert">
        <div class="container-padding">
            <div class="impact-story impact-story-transparent m-100">
                {{-- p-80 --}}
                <div class="impact-desc-sec">
                    <div class="impact-desc">
                        <p class="impact-title">
                            Enhanced Visibility for Optimized Operations
                        </p>
                        <p class="impact-details mb-4">
                            <span class="block-display">Consolidate all your alerts and notifications in a single,
                                centralized location, providing a comprehensive overview of your fleet's status.</span>
                        </p>
                        <!--<button class="impact-btn">see a demo</button>-->
                        <br>
                         <a href="https://calendly.com/motorafrica_connect" target="_blank" class="impact-btn mt-4">see a demo</a>
                    </div>
                </div>
                <img src={{ asset('assets/images/laptop-alerts.webp') }} class="impact-laptop" alt="">
            </div>
        </div>
    </div>




   @include('section.title-blog-post')


    @include('section.partners')
@endsection
