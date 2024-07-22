@extends('layout.main')
@section('content')
    <title>MotorAfrica | Insurance</title>

    @include('section.hero-insurance')

    <div class="experience-section bg-white">
        <div class="container-padding mt-4">
            <div class="info-100">
                <p class="caption-sub-title text-center p-0 font-weight-bold">
                    <b>Grow insurance revenue with our vehicle data</b>
                </p>
                <p class="caption-title text-center">
                    Check out new revenue streams to boost your insurance business using our connected vehicle data.
                </p>
            </div>
        </div>
        <div class="home-swipe bg-white">
            <div class="container-padding">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="swipe-in swipe-padding">
                            <p class="caption-title-sm">
                                Usage-Based Motor
                                <span class="block-display"><a class="text-main-clr">Insurance </a>Solutions.</span>
                            </p>

                            <p class="caption-sub-title">
                                With Motor Africa's connected data platform, launching usage-based insurance programs that
                                cater to your business needs becomes effortless. By harnessing real-time data insights and
                                employing advanced risk-scoring algorithms, you can fine-tune underwriting and pricing
                                decisions, resulting in heightened profitability and heightened customer satisfaction.
                            </p>
                            <p class="caption-sub-title">Verify Vehicle Mileage Instantly and accurately.</p>

                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Charge customers based on vehicle usage.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Offer customized insurance plans, based on Miles covered.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Facilitate policy-renewal, maintenance & discount alerts.
                                </span>
                            </p>

                            <p class="caption-sub-title">
                                <b>Attributes we collect:</b> Daily mileage covered, vehicle’s operating time, speed
                                analysis, and
                                driving analysis.
                            </p>

                        </div>
                    </div>
                    <div class="col-md-10 col-lg-5 offset-lg-1">
                        <div class="swipe-in">
                            <img src={{ asset('assets/images/insurance1.webp') }} alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-swipe bg-white">
            <div class="container-padding">
                <div class="row justify-content-center reverse-col align-items-center">
                    <div class="col-md-10 col-lg-5">
                        <div class="swipe-in">
                            <img src={{ asset('assets/images/insurance2.webp') }} class="img-geo-banner"
                                alt="">
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-6 offset-lg-1">
                        <div class="swipe-in swipe-padding">
                            <p class="caption-title-sm">
                                <span class="block-display">Unlock Insights with</span>
                                <span class="block-display"><a class="text-main-clr">Mobile Telematics</a> for</span>goods
                                in transit.
                            </p>

                            <p class="caption-sub-title">
                                With our mobile telematics solutions, you can unlock valuable insights into insured goods in
                                transit, improve risk assessment and underwriting, and enhance customer satisfaction. Our
                                advanced data analytics and AI-powered predictions, enable accurate risk assessment and
                                personalized insurance options for customers, ultimately leading to improved profitability
                                for your business.
                            </p>
                            <p class="caption-sub-title">
                                Keep real-time visibility of your insured goods in transit.
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Be in control from take-off to arrival at destination.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Analyses travel data to help reduce claim fraud.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Offer your customers access to real-time travel data on each insured good in transit.
                                </span>
                            </p>

                            <p class="caption-sub-title">
                                <b>Attributes we collect:</b> Real time location, speed, travel history data, geofencing,
                                accident
                                notification.
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
                            {{-- <p class="caption-caption">Check out different car subscription use cases. --}}
                            </p>
                            <p class="caption-title-sm">
                                Real-Time Analytics
                                <span class="block-display">for Motor <a class="text-main-clr">Insurance</a>.</span>
                            </p>
                            <p class="caption-sub-title">
                                <span>
                                    Revamp underwriting strategies by harnessing live analytics and monitoring. With our
                                    cutting-edge connected data platform, you have the opportunity to optimize your motor
                                    insurance underwriting and loss ratio, resulting in optimal profitability and customer
                                    satisfaction.
                                </span>
                            </p>
                            <p class="caption-sub-title">
                                <span>
                                    Our platform is specifically designed to streamline processes, mitigate risk, and
                                    maximize returns, making it the perfect choice for progressive motor insurance leaders.

                                </span>
                            </p>

                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Monitor driver skills & behavior to know how they drive
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Reward safe driving practices with lower premiums
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Emphasize safe driving practices by penalizing distracted behavior.
                                </span>
                            </p>

                            <p class="caption-sub-title">
                                <b>Attributes we collect:</b> Rapid Acceleration, Harsh Braking, Overspeeding, Trip details,
                                and
                                maintenance data.
                            </p>

                            <div class="center-botton-sm">
                                <a href="https://calendly.com/motorafrica_connect" target="_blank" class="swipe-btn">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-5 offset-lg-1">
                        <div class="swipe-in">
                            <img src={{ asset('assets/images/insurance3.webp') }} class="img-geo-banner"
                                alt="">
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
