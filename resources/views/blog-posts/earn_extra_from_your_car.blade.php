@extends('layout.main')
@section('content')
    <title>MotorAfrica | Premium Car Subscription Model</title>

    <div class="container-padding">
        <div class="section">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-page-wrap">
                        <div class="blog-banner-img">
                            <img src={{ asset('assets/images/speed-monitoring.webp') }} alt="">
                        </div>
                        <p class="blog-page-title m-0">
                            Earn Extra Cash from Your Car for 10 Hours on Weekdays While You're at Your 9-to-5 Job.
                        </p>
                        <p class="blog-page-subtitle caption-sub-title">
                            Are you tired of your car sitting idle in the driveway while you're at work? Well, Motor Africa
                            has the perfect solution for you.
                            Introducing mygarage, our innovative car subscription service that allows you to turn your idle
                            vehicle into a money-making machine.
                        </p>
                        <p class="blog-page-subtitle caption-sub-title">
                            As a 9-to-5 worker, you know all too well the frustration of watching your car gather dust in
                            the parking lot day after day. But what if I told you that you could put that idle time to good
                            use and earn some extra cash on the side? That's exactly what mygarage is all about.
                        </p>


                        <div class="mb-20">
                            <div class="latest-post-title">How does this Work</div>

                            <p class="caption-sub-title">
                                Sign up for the mygarage service on the Motor Africa cloud platform. It's quick, easy, and
                                completely free to get started.

                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    We'll match you with a verified driver in your neighborhood who is willing to lease your
                                    vehicle for 10 hours per day to offer ride hailing services while you're at work. This
                                    means that your car will be put to good use, earning you passive income while you focus
                                    on your 9-to-5 job.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    The best part? Your paired driver is likely to live in the same neighborhood as you,
                                    which means you can commute together to and from work. After dropping you off, they can
                                    then use your car to work on the ride-hailing platform, generating even more income for
                                    both of you.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    You have the freedom to set your weekly lease fee based on your vehicle's value and your
                                    financial goals.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Motor Africa only connects you with pre-verified drivers who undergo a thorough
                                    background check.
                                    Each driver provides a security deposit and has a guarantor, ensuring your vehicle is
                                    protected against potential risks.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    You can schedule regular inspections and repairs directly through the mygarage platform.
                                    The system enforces compliance and provides detailed workshop analytics, keeping your
                                    car in top condition.
                                </span>
                            </p>
                            <p class="caption-sub-title">
                                The mygarage service is a game-changer for vehicle owners looking to complement their
                                monthly income and fund their growing expenses. With the Motor Africa cloud platform, you
                                can rest assured that your car is in good hands, as we thoroughly vet all our drivers to
                                ensure they are reliable, trustworthy, and responsible.
                            </p>

                        </div>


                        <div class="post-wrapped">
                            <div class="latest-post-title">Start Earning with mygarage Today</div>

                            <p class="caption-sub-title">
                                Sign up a cloud account today and start turning your idle car into a money-making machine
                                and a dedicated account manager will guide you through the process.
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
