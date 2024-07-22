@extends('layout.main')
@section('content')
    <title>MotorAfrica | Premium Car Subscription Model</title>

    <div class="container-padding">
        <div class="section">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="blog-page-wrap">
                        <div class="blog-banner-img">
                            <img src={{ asset('assets/images/service-2.webp') }} alt="">
                        </div>
                        <p class="blog-page-title m-0">
                            Learn about the premium car subscription model
                        </p>
                        <p class="blog-page-subtitle caption-sub-title">
                            The Motor Africa cloud service allows anyone to launch a car subscription service and connect
                            with verified drivers via the mygarage car subscription platform. A cloud account from Motor
                            Africa allows you access to a dedicated dashboard to add your vehicle(s), set your weekly lease
                            fees and your monthly inspection and maintenance schedules and enjoy complete compliance.
                        </p>
                        <p class="blog-page-subtitle caption-sub-title">
                            The premium car subscription model allows you to connect with a driver that will lease your
                            vehicle full time and pay you weekly.
                        </p>


                        <div class="mb-20">
                            <div class="latest-post-title">How does this Work</div>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    This model allows hosts (vehicle owners) to choose their lease rates, set monthly
                                    inspection and maintenance schedules.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Mygarage can pair you with verified drivers in your neighborhood.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    The matched driver will be expected to use the vehicle without the restriction of
                                    returning the vehicle back to the owner's residence each day.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Hosts can choose to conduct personal inspections each week, especially as the assigned
                                    driver and host likely live within the same neighborhood.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Payments made by the driver get settled to the host's bank account on the same business
                                    day, and there is automated immobilization for defaulting drivers.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    The driver handles all operational expenses, namely fueling, suspension system, exhaust
                                    system, scratches, fuel pump, and basic electrical work.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Motor Africa will assign a dedicated support officer to assist hosts with any
                                    challenges.
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
                                    This model is perfect for hosts who are signing up vehicles on a hire purchase basis. It
                                    allows them to earn revenue from their vehicles while gradually paying them off.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    This model allows drivers to choose when to drive and target high revenue work belts.
                                    This can help hosts earn more optimally from their vehicles.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Since this model requires more frequent vehicle maintenance and repairs, hosts can
                                    usually charge premium rates for it.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    This model is good for hosts leasing out vehicles for ride-hailing, corporate leases to
                                    companies, and commercial transportation for intra-city mobility.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    By connecting hosts with verified drivers in the local community, this model can help
                                    hosts find reliable drivers to utilize their vehicles.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    The platform provides features like automated immobilization for defaulting drivers,
                                    which can help hosts manage their fleet more efficiently.
                                </span>
                            </p>
                            <p class="caption-sub-title">
                                In summary, this model offers hosts flexibility, earning potential, premium pricing, diverse
                                applications, expanded driver access, and automated fleet management - making it an
                                attractive option for vehicle owners and drivers.
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
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeg-k44jmwNm3k6qhpshN0rS8nylv7Cx_ZUcodccJaHsHY1mg/viewform?usp=send_form
"
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
