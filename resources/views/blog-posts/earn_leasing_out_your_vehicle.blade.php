@extends('layout.main')
@section('content')
    <title>MotorAfrica | Earn leasing out your vehicle and get the vehicle back every evening</title>

    <div class="container-padding">
        <div class="section">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-page-wrap">
                        <div class="blog-banner-img">
                            <img src={{ asset('assets/images/speed-monitoring.webp') }} alt="">
                        </div>
                        <p class="blog-page-title m-0">
                            Earn leasing out your vehicle and get the vehicle back every evening
                        </p>
                        <p class="blog-page-subtitle caption-sub-title">
                            Motor Africa makes it flexible for more host to connect to verified drivers in their neighbood
                            who are interested in leasing out vehicles for ride hailing while the vehicle gets back every
                            evening.
                        </p>
                        <p class="blog-page-subtitle caption-sub-title">
                            Motor Africa is digitalizing the traditional way vehicles get rented out to driver offeirng
                            commercial services in many cities in Africa. The goal for us is to make it safer for vehicle
                            owners to connect with verified drivers in their city while still be in control of the leased
                            out vehicles.
                        </p>


                        <div class="mb-20">
                            <div class="latest-post-title">How does this Work</div>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Host (vehicle owner) can put up idling vehicles, set weekly lease fees, and connect with
                                    vetted drivers in their neighborhood.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Matched drivers will lease the vehicles each day and return them before 8pm each day.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    The matched driver makes a weekly payment, while the host gets settled the same day,
                                    less the Motor Africa platform fees.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Motor Africa will provide host with a dedicated dashboard where you can set your lease
                                    fees, schedule maintenance and inspections, and monitor the real-time location of your
                                    vehicle 24/7.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Motor Africa's partnered licensed micro-credit providers offer hosts access to credit of
                                    up to 70% of the value of each vehicle, which they can pay back over time.
                                </span>
                            </p>
                        </div>

                        <div class="post-wrapped">
                            <div class="latest-post-title">Start Earning with mygarage Today</div>

                            <p class="caption-sub-title">
                                This service is available in all cities offering ride-hailing in Nigeria. Registering your
                                vehicle takes only 2 minutes, and an account manager will contact you immediately to assist
                                you in completing the process.
                            </p>
                            <p class="caption-sub-title">
                                Register a Cloud account with the button below

                            <div class="mt-2">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeg-k44jmwNm3k6qhpshN0rS8nylv7Cx_ZUcodccJaHsHY1mg/viewform?usp=send_form"
                                    class="start-now-btn">
                                    Apply
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </div>

                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    @include('section.latest-post-link')
                </div>
            </div>
        </div>
    </div>
@endsection
