@extends('layout.main')
@section('content')
    <title>MotorAfrica | Cross Integration</title>

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
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="info-100">
                        <p class="caption text-center">#IoT & Telemetry Services</p>
                        {{-- <p class="caption-title text-center">
                        <span class="block-display">
                            Experience the future of payment
                        </span>
                        <span class="block-display">automation with Motor Africa</span>
                    </p> --}}
                        <p class="caption-sub-title text-center">
                            The Motor Africa SaaS platform offers a powerful and feature-rich IoT vehicle telemetry system
                            that
                            enables businesses to analyze and leverage vast amounts of data in various business scenarios.
                            Here are
                            some key features of the system
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-padding">
            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/data-power-img.png') }} alt="">
                        <p class="data-power-title">Data Collection</p>
                        <p class="data-power-subtitle">The IoT vehicle telemetry system gathers real-time data from vehicles
                            equipped with IoT devices. This includes information such as vehicle location, speed, engine
                            performance, fuel consumption, maintenance needs, and much more.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/data-power-img.png') }} alt="">
                        <p class="data-power-title">Real-time Monitoring</p>
                        <p class="data-power-subtitle">Businesses can monitor their vehicle fleet in real-time using the
                            telemetry system. They have access to live data streams, allowing them to track vehicle
                            locations, assess driver behavior, and respond promptly to any issues or emergencies.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/data-power-img.png') }} alt="">
                        <p class="data-power-title">Analytics and Reporting</p>
                        <p class="data-power-subtitle">The system provides robust data analytics capabilities, allowing
                            businesses to gain valuable insights from the collected data. They can generate comprehensive
                            reports and visualizations to analyze vehicle performance, fuel efficiency, driver behavior, and
                            maintenance trends. These insights help optimize operations and make informed business
                            decisions.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/data-power-img.png') }} alt="">
                        <p class="data-power-title">Predictive Maintenance</p>
                        <p class="data-power-subtitle">By continuously monitoring vehicle performance and collecting data on
                            maintenance needs, the telemetry system enables predictive maintenance. It can detect patterns
                            and indicators of potential failures, allowing businesses to schedule proactive maintenance and
                            avoid costly breakdowns.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/data-power-img.png') }} alt="">
                        <p class="data-power-title">Integration and Compatibility</p>
                        <p class="data-power-subtitle">Motor Africa provides a simple API that allows businesses to
                            seamlessly integrate the telemetry system with their existing software infrastructure. This
                            ensures compatibility with their current systems, preventing the need for significant
                            modifications or disruptions to their operations.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/data-power-img.png') }} alt="">
                        <p class="data-power-title">Customization and Scalability</p>
                        <p class="data-power-subtitle">The IoT vehicle telemetry system can be customized to meet the
                            specific needs of different businesses. It offers flexibility and scalability, allowing
                            organizations to adapt and expand their operations without limitations.

                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/data-power-img.png') }} alt="">
                        <p class="data-power-title">Security and Data Privacy</p>
                        <p class="data-power-subtitle"> Ensuring the security and privacy of collected data is a top
                            priority. The telemetry system incorporates robust security measures to protect data during
                            transmission, storage, and processing. It complies with industry regulations and best practices
                            to safeguard sensitive information.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-padding">
        <div class="reporting-dashboard m-100">
            <img src={{ asset('assets/images/iot-dashboard.webp') }} class="img-fluid" alt="">
        </div>
    </div>

    <div class="home-swipe">
        <div class="container-padding">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-6">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/iot-banner.webp') }} class="img-geo-banner" alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-caption">#IoT & Telemetry Services</p>
                        <p class="caption-title">
                            <span>In summary...</span>

                        </p>
                        <p class="caption-sub-title">
                            <span>
                                The IoT vehicle telemetry system offered by Motor Africa's SaaS platform provides businesses
                                with a comprehensive suite of features. From real-time monitoring and advanced analytics to
                                predictive maintenance and seamless integration, the system empowers businesses to make
                                data-driven decisions, optimize their operations, and enhance overall efficiency in the
                                vehicle value chain.

                            </span>
                        </p>

                        <a href="" class="swipe-btn">Request Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('section.title-blog-post')

    @include('section.partners')
@endsection
