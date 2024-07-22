<style>
    .nav-ins {
        position: relative !important;
    }
</style>
@extends('layout.main')
@section('content')
    <title>MotorAfrica | Price Comparison</title>

    <div class="banner-price-comparison light-orange-bg">
        <p class="caption-title p-0">Full Price Comparison</p>
        <p class="caption-sub-title p-0">All plans include unlimited users, Find the Best Deals</p>
    </div>

    <div class="container">
        <div class="price-comparison-table">
            <div class="row g-4 row-services mb-4">
                <div class="col-md-12 col-lg-3">
                    <div class="intro-usecase">
                        <p class="intro mt-4">Pricing Plans</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="price-col">
                        <p class="title-price text-lighter-blue">
                            <i class='bx bxs-diamond'></i>
                            <span>Basic</span>
                        </p>
                        <div class="price-desc">
                            <span class="price-text">₦8,000</span>
                            <span class="price-info-desc">
                                Starting price per quarter per vehicle.
                                (Fees for transactions and triggers apply where applicable).
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="price-col">
                        <p class="title-price text-main-clr">
                            <i class='bx bxs-diamond'></i>
                            <span>Business</span>
                        </p>
                        <div class="price-desc">
                            <span class="price-text">₦12,000</span>

                            <span class="price-info-desc">
                                Starting price per quarter per vehicle.
                                (Fees for transactions and triggers apply where applicable).
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="price-col">
                        <p class="title-price">
                            <i class='bx bxs-diamond'></i>
                            <span>Enterprise</span>
                        </p>
                        <div class="price-desc">
                            <span class="price-text">Talk to Us</span>
                            <span class="price-info-desc">
                                Starting price per quarter per vehicle.
                                (Fees for transactions and triggers apply where applicable).
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-price-comparison single-grid-price-comparison">
                <div>Pricing Plans </div>
                <div class="price-response">
                    <p class="main-title-price text-lighter-blue">
                        <i class='bx bxs-diamond'></i>
                        <span>Basic</span>
                    </p>
                </div>
                <div class="price-response">
                    <p class="main-title-price text-main-clr">
                        <i class='bx bxs-diamond'></i>
                        <span>Business</span>
                    </p>
                </div>
                <div class="price-response">
                    <p class="main-title-price">
                        <i class='bx bxs-diamond'></i>
                        <span>Enterprise</span>
                    </p>
                </div>
            </div>
            <div class="grid-price-comparison">
                <div class="single-grid-price-comparison header-price-comparison">
                    <div>Telemetry </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Realtime vehicle location data</div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Engine control </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Trip report </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Geofence report</div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Realtime vehicle location data</div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Turnkey telemetry triggers
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
            </div>

            <div class="grid-price-comparison">
                <div class="single-grid-price-comparison header-price-comparison">
                    <div>User management</div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Driver KYC ( driver license verification )
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Guarantor ( Identity) verification
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Driver assessment management </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
            </div>

            <div class="grid-price-comparison">
                <div class="single-grid-price-comparison header-price-comparison">
                    <div>Vehicle management</div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>List vehicles and configure all document renewal reminders
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Assign drivers to vehicles and set your operation rules
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Set a trigger for operational violations to send email, SMS, or WhatsApp notifications, or impose a
                        fine </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
            </div>

            <div class="grid-price-comparison">
                <div class="single-grid-price-comparison header-price-comparison">
                    <div>Solution module </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Personal vehicle management
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-minus'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Fleet management
                    </div>
                    <div class="price-response"><i class='bx bx-minus'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Use cases for fleet management
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Car subscription for fleet operators</div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Car Financing</div>
                    <div class="price-response"><i class='bx bx-minus'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Automobile workshop management system</div>
                    <div class="price-response"><i class='bx bx-minus'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Public transport management</div>
                    <div class="price-response"><i class='bx bx-minus'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Logbook credit card solution</div>
                    <div class="price-response"><i class='bx bx-minus'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>




            </div>

            <div class="grid-price-comparison">
                <div class="single-grid-price-comparison header-price-comparison">
                    <div>Embedded finance integration </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Configure and integrate the finance module into your projects
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
            </div>

            <div class="grid-price-comparison">
                <div class="single-grid-price-comparison header-price-comparison">
                    <div>Workshop </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Our system schedules vehicle inspections, sends automated reports via email, and enables billing
                        for non-compliant drivers (option).

                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Register your workshop and ensure you never miss an appointment again with our convenient reminder
                        system that provides turnkey reminders for your convenience.
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
            </div>

            <div class="grid-price-comparison">
                <div class="single-grid-price-comparison header-price-comparison">
                    <div>Platform for Services </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Motor Africa web console
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Motor Africa mobile app
                    </div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>Intuitive API for building web and mobile applications
                    </div>
                    <div class="price-response"><i class='bx bx-minus'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
                <div class="single-grid-price-comparison">
                    <div>White-label web console
                    </div>
                    <div class="price-response"><i class='bx bx-minus'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                    <div class="price-response"><i class='bx bx-check'></i></div>
                </div>
            </div>
        </div>
    </div>
@endsection
