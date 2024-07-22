@extends('layout.main')
@section('content')
    <title>MotorAfrica | Fleet Management</title>

    @include('section.hero_fleet_management')

    <div class="home-swipe pt-4 pb-4 bg-white">
        <div class="container-padding">
            <div class="row justify-content-center reverse-col">
                <div class="col-md-10 col-lg-4">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/car_subscription2.webp') }} alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-8">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span class="block-display">Features of Our <br> Fleet Automation Cloud Service -</span>
                        </p>

                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>User Management:</b> Easily verify drivers and their guarantors, ensuring a reliable and
                                competent team.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Vehicle Management:</b> Seamlessly assign drivers to vehicles, establish operational
                                rules, and
                                monitor driver behavior with the ability to impose fines on defaulters.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Documentation Compliance:</b> Stay on top of vehicle documentation renewals, ensuring
                                compliance with regulations at all times.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Workshop Integration:</b> Register workshops, establish maintenance schedules, and
                                inspection routines for each vehicle, providing detailed vehicle inspection analysis for
                                each vehicle.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Real-time Monitoring:</b> Track the real-time location and activities of each vehicle in
                                your fleet, enhancing operational efficiency and security.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Task management:</b> Select from a variety of task automation tools that suit your
                                operations.
                            </span>
                        </p>
                        <p class="caption-title-xsm mt-4">
                            In addition to the mentioned features, fleet automation offers several key benefits for fleet
                            managers:
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Cost Efficiency:</b> Optimizing routes and monitoring fuel consumption can lead to
                                significant
                                cost savings.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Enhanced Safety:</b> Real-time monitoring helps in ensuring driver safety and compliance
                                with traffic regulations.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Improved Productivity:</b> Streamlined processes and automated workflows lead to
                                increased productivity and reduced downtime.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Data-driven Decisions:</b> Access to detailed analytics and reports enables informed
                                decision-making for better fleet management strategies.
                            </span>
                        </p>
                        <p class="caption-title-xsm mt-4">
                            Experience the power of Motor Africa's Fleet Automation Cloud Service and revolutionize your
                            fleet management practices today!
                        </p>
                        <p class="caption-title-xsm">
                            Energize your fleet now. <br>
                            Start a 30-day free trial.

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- @include('section.how-it-works') --}}


    {{-- @include('section.advert') --}}

    @include('section.blog')


    {{-- @include('section.partners') --}}
@endsection
