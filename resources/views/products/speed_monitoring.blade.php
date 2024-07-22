@extends('layout.main')
@section('content')
    <title>MotorAfrica | Speed Monitoring</title>

    @include('section.hero-speed-monitoring')

    <div class="grid-assets-reverse-section p-100">
        <div class="container-padding">
            <div class="grid-assets-reverse">
                <div class="asset-reverse-img">
                    <div class="hero-mint text-main-clr">Real-Time Insights</div>
                    <img src={{ asset('assets/images/speed-monitoring.webp') }} alt="">
                    <p class="hero-title pt-3 pb-3 mb-0"><span>Data-Driven Decision Making</span></p>
                    <p class="hero-sub-title">
                        Receive real-time updates and actionable insights to optimize your operations,
                        reduce
                        downtime, and ensure the safety of your drivers and vehicles
                    </p>
                    <div class="sm-btn-center">
                        <a href="" class="swipe-btn">learn more</a>

                    </div>
                </div>
                <div class="asset-ins">
                    <div class="asset-in align-items-start">
                        <img src={{ asset('assets/images/real-time-speed-monitoring.png') }} class="asset-in-img img-fluid"
                            alt="">
                        <p class="asset-in-reverse-title">Real-time Speed Monitoring</p>
                        <p class="hero-sub-title p-0"><span>Track vehicle speeds in real-time, providing instant visibility
                                into driver behavior.</span></p>
                    </div>
                    <div class="asset-in align-items-start">
                        <img src={{ asset('assets/images/geo-fence-speed.png') }} class="asset-in-img img-fluid"
                            alt="">
                        <p class="asset-in-reverse-title">Geofenced Speed Limits</p>
                        <p class="hero-sub-title p-0"><span>Establish virtual zones with predefined speed limits, ensuring
                                compliance with local regulations and safety guidelines.</span></p>
                    </div>
                    <div class="asset-in align-items-start">
                        <img src={{ asset('assets/images/speed-violation.png') }} class="asset-in-img img-fluid"
                            alt="">
                        <p class="asset-in-reverse-title">Speed Violation Alerts</p>
                        <p class="hero-sub-title p-0"><span>Get real-time notifications when vehicles exceed speed limits,
                                enabling timely intervention & corrective measures.</span></p>
                    </div>
                    <div class="asset-in align-items-start">
                        <img src={{ asset('assets/images/detailed-recovery.png') }} class="asset-in-img img-fluid"
                            alt="">
                        <p class="asset-in-reverse-title">Detailed Speed History</p>
                        <p class="hero-sub-title p-0"><span>Access comprehensive speed data for each vehicle, allowing for
                                trend analysis and performance improvement initiatives.</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="transparent-speed">
        <div class="container-padding">
            <div class="impact-story impact-story-transparent m-100">
                <div class="impact-desc-sec">
                    <div class="impact-desc">
                        <p class="impact-title">
                            Integration with Billing and Maintenance
                        </p>
                        <p class="impact-details mb-4">
                            <span class="block-display">Experience the future of speed management with our Speed Monitoring
                                Dashboard.</span>
                        </p>
                        <!--<button class="impact-btn">see a demo</button>-->
                        <br>
                         <a href="https://calendly.com/motorafrica_connect" target="_blank" class="impact-btn mt-4">see a demo</a>
                    </div>
                </div>
                <img src={{ asset('assets/images/laptop-1.webp') }} class="impact-laptop" alt="">
            </div>
        </div>
    </div>

    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row reverse-col justify-content-center align-items-center">
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/strategy-banner.webp') }} class="img-geo-banner" alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span class="block-display">Strategy <a class="text-main-clr">Speed</a></span>
                            <span class="block-display"><a class="text-main-clr">Control</a> for Success</span>
                        </p>
                        <p class="caption-sub-title">
                            <span>Embrace the future of vehicle navigation by</span>
                            <span>geofencing your vehicle. Keep track of its</span>
                            <span>location, receive alerts upon entering or leaving</span>
                            <span>specific areas, and enjoy enhanced security and</span>
                            <span>control on the road ahead.</span>
                        </p>

                        <div class="sm-btn-center">
                            <a href="" class="swipe-btn">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('section.title-blog-post')


    @include('section.partners')
@endsection
