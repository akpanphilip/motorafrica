@extends('layout.main')
@section('content')
    <title>MotorAfrica | Bolt</title>
    <style>
        .made-with {
            background: #fd264f;
            color: #fff;
            display: block;
            font-size: 12px;
            line-height: 1em;
            margin: 0;
            padding: 5px 110px;
            position: fixed;
            top: 20px;
            right: -100px;
            text-align: center;
            text-decoration: none;
            transform: rotate(45deg);
        }

        .documentation {
            color: #fd264f;
        }

        button:focus,
        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
        }

        .tabs {
            display: block;
            display: -webkit-flex;
            display: -moz-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            -moz-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0;
            overflow: hidden;
        }

        .tabs [class^="tab"] label,
        .tabs [class*=" tab"] label {
            cursor: pointer;
            display: block;
            font-size: 1.1em;
            font-weight: 500;
            line-height: 1em;
            padding: 1rem 0;
            text-align: center;
        }

        .tabs [class^="tab"] [type="radio"],
        .tabs [class*=" tab"] [type="radio"] {
            border-bottom: 1px solid rgba(239, 237, 239, 0.5);
            cursor: pointer;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            display: block;
            width: 100%;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .tabs [class^="tab"] [type="radio"]:hover,
        .tabs [class^="tab"] [type="radio"]:focus,
        .tabs [class*=" tab"] [type="radio"]:hover,
        .tabs [class*=" tab"] [type="radio"]:focus {
            border-bottom: 1px solid #fd264f;
        }

        .tabs [class^="tab"] [type="radio"]:checked,
        .tabs [class*=" tab"] [type="radio"]:checked {
            border-bottom: 2px solid #fd264f;
        }

        .tabs [class^="tab"] [type="radio"]:checked+div,
        .tabs [class*=" tab"] [type="radio"]:checked+div {
            opacity: 1;
        }

        .tabs [class^="tab"] [type="radio"]+div,
        .tabs [class*=" tab"] [type="radio"]+div {
            /*display: block;*/
            opacity: 0;
            padding: 2rem 0;
            /*width: 90%;*/
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .tabs .tab-2 {
            width: 50%;
        }

        .tabs .tab-2 [type="radio"]+div {
            width: 200%;
            margin-left: 200%;
        }

        .tabs .tab-2 [type="radio"]:checked+div {
            margin-left: 0;
        }

        .tabs .tab-2:last-child [type="radio"]+div {
            margin-left: 100%;
        }

        .tabs .tab-2:last-child [type="radio"]:checked+div {
            margin-left: -100%;
        }
    </style>
    @include('section.hero-bolt')

    <!--<div class="home-swipe bg-white">-->
    <!--    <div class="container-padding">-->
    <!--        <div class="row justify-content-center align-items-center">-->
    <!--            <div class="col-md-10 col-lg-5">-->
    <!--                <div class="swipe-in">-->
    <!--                    <img src={{ asset('assets/images/bolt1.webp') }} alt="">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-10 col-lg-6 offset-lg-1">-->
    <!--                <div class="swipe-in swipe-padding">-->
    <!--                    <p class="caption-title-sm">-->
    <!--                        Introduction-->
    <!--                    </p>-->
    <!--                    <p class="caption-sub-title">-->
    <!--                        Bolt and Motor Africa have joined forces to empower vehicle hosts on the Bolt network in-->
    <!--                        Nigeria, allowing them to increase their earnings by leasing out cars with improved control.-->
    <!--                    </p>-->
    <!--                    <p class="caption-sub-title">-->
    <!--                        By registering your vehicle for lease to verified drivers on the Bolt platform, you will not-->
    <!--                        only gain access to fleet management technology tools but also to working capital and additional-->
    <!--                        revenue streams.-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="experience-section bg-white">
        <div class="container-padding mt-4">
            <div class="info-100">
                <!--<p class="caption-sub-title text-center p-0 font-weight-bold">-->
                <!--    <b>What the Hosting Program Includes</b>-->
                <!--</p>-->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <p class="caption-title text-center">
                            Powering up the Bolt fleet with fleet management cloud service.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-swipe bg-white">
            <div class="container-padding">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="swipe-in swipe-padding">
                            <p class="caption-title-sm">
                                A Solution <span class="block-display">for <a class="text-main-clr">Ride-Hailing</a></span>
                            </p>
                            <!--<span class="block-display">Fleet Owners in</span>Partnership with Bolt-->
                            <p class="caption-sub-title">
                                Fleet owners who provide vehicles for ride-hailing services often face challenges. They
                                struggle to find reliable drivers, ensure drivers make payments on time, and keep their
                                vehicles well-maintained.
                            </p>
                            <p class="caption-sub-title">
                                Finding trustworthy drivers can be tricky. Tracking driver payments and vehicle maintenance
                                also takes a lot of work. This makes it hard for fleet owners to take full advantage of the
                                growing ride-hailing market.
                            </p>
                            <p class="caption-sub-title">
                                This is why we have launched a collaboration with Bolt to launch a fleet management cloud
                                service.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-5 offset-lg-1">
                        <div class="swipe-in">
                            <img src={{ asset('assets/images/bolt3.webp') }} alt="">
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
                            <img src={{ asset('assets/images/bolt2.webp') }} class="img-geo-banner" alt="">
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-6 offset-lg-1">
                        <div class="swipe-in swipe-padding">
                            <!--<p class="caption-title-sm">-->
                            <!--    Empowering-->
                            <!--    <span class="block-display">Bolt <a class="text-main-clr">Fleet Owners</a></span>-->
                            <!--</p>-->
                            <p class="caption-title-sm">
                                Features of the Bolt fleet management <a class="text-main-clr">cloud service</a>
                            </p>


                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Monitoring fleet vehicle location and status in real-time.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Tracking mileage, fuel usage, and maintenance schedules
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Receiving maintenance reminders.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Monitoring driver behavior for speeding and harsh braking.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Enforcing lease payment deadlines and immobilizing non-compliant vehicles.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Facilitating better communication among drivers, dispatchers, and managers.
                                </span>
                            </p>
                            <p class="caption-icon-text">
                                <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                                <span class="caption-text">
                                    Enhancing vehicle safety and aiding in the quick recovery of stolen vehicles.
                                </span>
                            </p>
                            <!--<p class="caption-sub-title">-->
                            <!--    Motor Africa offers fleet owners and driver partners in the Bolt community access to a fleet management cloud service that gives them access to tools to effectively manage vehicles and activities of drivers.-->
                            <!--</p>-->
                            <p class="caption-sub-title">
                                Furthermore, the fleet management platform provides <b>fleet owners</b> and <b>driver
                                    partners</b> with access to microcredit for repair financing, comprehensive insurance,
                                and gadget financing through affiliated micro-lenders.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-swipe bg-white">
            <div class="container-padding">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <p class="caption-title-sm text-center">
                            Opportunities available with the Bolt fleet management <a class="text-main-clr">cloud
                                service</a>.
                        </p>
                    </div>
                </div>
                <div class="tabs">
                    <div class="tab-2">
                        <label for="tab2-1">Driver Partner</label>
                        <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-10 col-lg-6">
                                <div class="swipe-in">
                                    <p class="caption-sub-title">
                                        The Bolt fleet management cloud service offers the right tools for anyone to start
                                        driving their personal vehicles to help more people get to a destination in each
                                        city where Bolt offers services. As a driver partner, you have access to a dashboard
                                        that interprets your activities and automates critical reminders to ensure your
                                        vehicle is always in the best shape.
                                    </p>
                                    <p class="caption-sub-title">
                                        In addition, driver partners have access to microcredit for repair finance and
                                        comprehensive insurance.
                                    </p>
                                    <p class="caption-sub-title">
                                        To activate your vehicle on the Bolt fleet management cloud service, a GPS telemetry
                                        system must be installed in the vehicle. We give you the concession to make payments
                                        for this system in installments.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-5 offset-lg-1">
                                <div class="swipe-in">
                                    <img src={{ asset('assets/images/bolt-review1.png') }} alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-2">
                        <label for="tab2-2">Fleet Owner</label>
                        <input id="tab2-2" name="tabs-two" type="radio">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-10 col-lg-5">
                                <div class="swipe-in">
                                    <img src={{ asset('assets/images/bolt-review2.png') }} alt="">
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-6 offset-lg-1">
                                <div class="swipe-in">
                                    <p class="caption-sub-title">
                                        Managing a fleet of vehicles on the Bolt platform is easier via the Bolt fleet
                                        management cloud service. The robust platform for fleet owners offers a driver
                                        outsourcing module that allows fleet owners to get matched with vetted drivers with
                                        guarantors and provides tools to manage the relationship end-to-end with the drivers
                                        and vehicles assigned to them.
                                    </p>
                                    <p class="caption-sub-title">
                                        If you have single or plan to launch a car rental business on Bolt, the Bolt fleet
                                        management cloud service is your best bet while we also provide a business pack with
                                        expert advice and documents to help you succeed as a fleet operator helping others
                                        manage their vehicles.
                                    </p>
                                    <p class="caption-sub-title">
                                        To activate your vehicle(s), Motor Africa offers a 30-day free trial of the GPS
                                        telemetry system. After the trial period ends, you can pay back in installments if
                                        our technology meets your needs.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--<div class="row justify-content-center align-items-center">-->
                <!--    <div class="col-md-10 col-lg-6">-->
                <!--        <div class="swipe-in swipe-padding">-->

                <!--<p class="caption-sub-title">-->
                <!--    Motor Africa has teamed up with skilled fleet operators, giving hosts (vehicle owners) the-->
                <!--    chance to choose from a diverse pool of thoroughly vetted drivers. These drivers also have-->
                <!--    verified guarantors in each city where Bolt operates, providing hosts with peace of mind and-->
                <!--    a greater sense of security.-->
                <!--</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-10 col-lg-5 offset-lg-1">-->
                <!--        <div class="swipe-in">-->
                <!--            <img src={{ asset('assets/images/bolt2.webp') }} alt="">-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>

        <div class="home-swipe bg-white">
            <div class="container-padding">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="swipe-in swipe-padding">
                            <p class="caption-title-sm">
                                Experience the <br> <a style="color:#34D186;">Bolt</a> Difference
                            </p>
                            <p class="caption-sub-title">
                                Embrace a better experience with the Bolt fleet management cloud service by signing up your
                                vehicles(s).
                            </p>
                            <p class="caption-sub-title">
                                Create a Bolt fleet management cloud account <a href="">now</a> Or visit the nearest
                                Bolt office in your city.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-5 offset-lg-1">
                        <div class="swipe-in">
                            <img src={{ asset('assets/images/bolt-review3.png') }} class="img-geo-banner" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="experience-section bg-white">
            <div class="home-swipe bg-white">
                <div class="container-padding">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-10 col-lg-6">
                            <div class="swipe-in swipe-padding">
                                <p class="caption-title-sm">
                                    {{-- A Solution <span class="block-display">for <a
                                            class="text-main-clr">Ride-Hailing</a></span> --}}
                                    Rent it out from Monday to Friday and have it back for your weekend plans. Let me show
                                    you how.

                                </p>
                                <!--<span class="block-display">Fleet Owners in</span>Partnership with Bolt-->
                                <p class="caption-sub-title">
                                    Fleet owners who provide vehicles for ride-hailing services often face challenges. They
                                    struggle to find reliable drivers, ensure drivers make payments on time, and keep their
                                    vehicles well-maintained.
                                </p>
                                <p class="caption-sub-title">
                                    Finding trustworthy drivers can be tricky. Tracking driver payments and vehicle
                                    maintenance
                                    also takes a lot of work. This makes it hard for fleet owners to take full advantage of
                                    the
                                    growing ride-hailing market.
                                </p>
                                <p class="caption-sub-title">
                                    This is why we have launched a collaboration with Bolt to launch a fleet management
                                    cloud
                                    service.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-5 offset-lg-1">
                            <div class="swipe-in">
                                <img src={{ asset('assets/images/bolt3.webp') }} alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('section.blog')

    <div class="container-padding">
        <div class="signup-section justify-content-center">
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <p class="signup-title text-center">
                            Book a demo to get started.
                        </p>
                        <p class="signup-desc text-center">
                            To understand more on how to gain access to fleet management tools, working capital and
                            additional revenue streams, click the button below to book a demo
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="http://forms.gle/adveoMmvMm3RUUrT7" target="_blank"
                                class="start-now-btn text-center">book a
                                demo</a>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
