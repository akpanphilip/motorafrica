@extends('layout.main')
@section('content')
    <title>MotorAfrica | Lending</title>

    @include('section.hero-lending')

    {{-- @include('section.impact-story') --}}
    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center reverse-col align-items-center">
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/historical-data-banner.png') }} class="img-geo-banner"
                            alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            <span>
                                Start building <a class="text-main-clr">lending services</a> using vehicle-connected data.
                            </span>
                        </p>
                        <p class="caption-sub-title">
                            <span>
                                The Motor Africa-connected vehicle data platform now provides a better opportunity for
                                micro-lenders to make intelligent underwriting decisions using alternative data derived from
                                driver behavior and vehicle operations.
                            </span>

                        </p>
                        <p class="caption-sub-title">
                            <span>
                                Motor Africa's machine learning algorithm carefully analyzes hundreds of data sets,
                                including driving behavior, operational patterns, maintenance data, and asset value. This
                                analysis generates a unique credit score that enables micro-lenders to make informed
                                decisions when lending money against cars as collateral.

                            </span>
                        </p>
                        <div class="sm-btn-center">
                            <a href="" class="swipe-btn">learn more</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('section.how-it-works')

    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center reverse-col align-items-center">
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/dream-vehicle.webp') }} alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            Check out the lending as a service use case.
                        </p>

                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Register as a sponsor and start offering micro-asset financing.</b> <br>

                                Motor Africa has made it seamless for individuals to offer micro asset financing to motorists with a motor account to buy gadgets, and spare parts and pay for services while getting paid back within 12 weeks.
                                
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                <b>Offer micro-loans to motorists with ease. </b> <br>
                                Motor Africa is making micro collateral lending to motorists easier. 
                                As a registered microlender, we have all the data points you need to make intelligent lending decisions to motorists while our system automates loan collections and helps to manage the retrieval of assets (collateral) in case of default.  
                                
                            </span>
                        </p>

                    </div>
                </div>
               
            </div>
        </div>
    </div>

    @include('section.advert')

    @include('section.title-blog-post')


    @include('section.partners')
@endsection
