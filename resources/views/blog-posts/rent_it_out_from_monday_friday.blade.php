@extends('layout.main')
@section('content')
    <title>MotorAfrica | Rent it out from monday to friday</title>

    <div class="container-padding">
        <div class="section">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-page-wrap">
                        <div class="blog-banner-img">
                            <img src={{ asset('assets/images/boltxmotor.jpg') }} alt="">
                        </div>
                        <p class="blog-page-title m-0">
                            Rent it out from Monday to Friday and have it back for your weekend plans. Let me show you how.
                        </p>
                        <p class="blog-page-subtitle caption-sub-title">
                            In today's world, where flexibility and innovation drive our daily lives, finding new avenues to
                            monetize idle assets can be a game-changer. Imagine being able to rent out your car during the
                            weekdays, seamlessly connecting with verified drivers in your neighborhood, and having it back
                            in your garage by the weekend. Sounds intriguing? It's now possible with Motor Africa's
                            revolutionary car subscription platform, mygarage.

                        </p>

                        <div class="mb-20">
                            <div class="latest-post-title">How does this Work</div>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    We would match you with verified drivers in your neighborhood.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    We would assign you a dedicated account manager who will provide you with the support
                                    you need.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    The account manager will guide you through the best pricing for this model.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    The driver will be responsible for all operational expenses (fueling, maintenance of the
                                    suspension system, exhaust system, fuel pump) while you the host will handle oil changes
                                    and wear and tear.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    The driver makes lease payments through Motor Africa while you get paid the same day
                                    less the Motor Africa platform fee.
                                </span>
                            </p>
                        </div>

                        <div class="mb-20">
                            <div class="latest-post-title">
                                Why you might consider this model
                            </div>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Renting out vehicles during the week and having them back on the weekends is best suited
                                    for hosts who want to earn optimally and still have access to the vehicle for personal
                                    or family outings on the weekends.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    It's flexible to allow you to earn as a host and also have the vehicle for your personal
                                    use on the weekends.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    This model allows you to keep close supervision on how your vehicle is being used by the
                                    assigned driver.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Motor Africa will support you with a dedicated dashboard where you can set your lease
                                    fees, schedule maintenance and inspections, and monitor the real-time location of your
                                    vehicle 24/7.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Motor Africa's partnered licensed micro-credit providers offer hosts access to credit of
                                    up to 70% of the value of each vehicle while they pay it back over time.
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
