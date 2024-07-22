@extends('layout.main')
@section('content')
    <title>MotorAfrica</title>
    <style>
        @media screen and (min-width: 900px) {
            iframe {
                height: 400px;
                width: 100%;
            }
        }

        .hero-title {
            font-size: 45px;
            /* line-height: 72px; */
            color: var(--darkClr);
        }
    </style>

    <div class="hero-rebrand light-orange-bg">
        <div class="hero-rebrand-info light-orange-bg">
            <div class="container-padding">
                <div class="col-hero">
                    <p class="hero-title">
                        <span>Connecting</span>
                        <span>Vehicles to the <a class="text-main-clr">Cloud</a>.</span>
                    </p>


                    <p class="hero-sub-title">
                        <span>
                            Motor Africa's cloud services empower individuals and businesses to gain control, reduce costs and complexity, generate new digital revenue opportunities, and accelerate growth with its Cloud solutions for vehicles.
                        </span>
                    </p>

                    <div class="hero-btns">
                        <a href="contact-us" class="hero-learn-more hero-use-case">learn more</a>
                   
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-rebrand-info">
            <img src="/assets/images/hero-index.webp" alt="" />
        </div>
    </div>

    <div class="services-section">
        <div class="info-100">
            <p class="caption-title text-center">Stay Connected<br> On-the-Go</p>
            <p class="caption-sub-title text-center mb-4">
                <span>Leading the Charge in Connected Mobility Solutions.</span>
                <span> Our goal is to create the most advanced connected automobile ecosystem in Africa.</span>
            </p>
        </div>

        <div class="container-padding">
            <div class="row g-4 row-services">
                <div class="col-md-12 col-lg-4">
                    <div class="service-col service-integrated">
                        <img src="/assets/images/multiple-1.png" class="service-col-logo" alt="" />
                        <p class="service-title">Multi-versatile Use Cases</p>
                        <p class="service-desc">
                            Across Africa, individuals, businesses, and enterprises can
                            manage their fleets and experience innovative fleet automation
                            with our cloud-based service regardless of the use case.
                        </p>
                        <img src="/assets/images/multiple-1.webp" class="service-col-img" alt="" />
                        <!-- <div>
                                                                                                                                        <a
                                                                                                                                          href="/integrated-payment-services"
                                                                                                                                          class="service-btn bg-main-clr"
                                                                                                                                        >
                                                                                                                                          explore use case
                                                                                                                                        </a>
                                                                                                                                      </div> -->
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="service-col">
                        <img src="/assets/images/cross-platform.webp" class="service-col-img" alt="" />
                        <!-- <img src={{ asset('assets/images/advanced-iot.png') }} alt=""> -->
                        <!-- <img src="/assets/images/cross.png" alt="" /> -->

                        <p class="service-title">Cross Platform</p>
                        <p class="service-desc">
                            Our cloud service connects with over 3,000 GPS telemetry devices
                            from trusted global manufacturers, enabling you to host your
                            fleet with just a few clicks.
                        </p>

                        <a href="/contact-us" class="contactBtn">Contact Us <span><i
                                    class="bx bx-arrow-back"></i></span></a>

                        <!-- <div>
                                                                                                                                        <a
                                                                                                                                          href="/iot-telemetry-services"
                                                                                                                                          class="service-btn bg-white-clr"
                                                                                                                                        >
                                                                                                                                          explore use case
                                                                                                                                        </a>
                                                                                                                                      </div> -->
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="service-col service-integration">
                        <!-- <img src={{ asset('assets/images/cross-integration.png') }}
                                                                                                                                      alt=""> -->
                        <img src="/assets/images/multiple-2.png" class="service-col-logo" alt="" />

                        <p class="service-title">3rd party integration</p>
                        <p class="service-desc">
                            The Motor Africa fleet automation cloud service offers an
                            intuitive API that seamlessly connects with your existing fleet
                            management or workshop CRM with the highest security and
                            precision.
                        </p>

                        <img src="/assets/images/multiple-2.webp" class="service-col-img" alt="" />
                        <!-- <a href="/" class="service-btn bg-white-clr">
                                                                                                                                        explore use case
                                                                                                                                      </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="partners-section">
        <div class="container-padding">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-center">
                    <img src="/assets/images/bolt.png" class="partner-logo" height="40" alt="partner_logo" />
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-center">
                    <img src="/assets/images/thankucash.png" class="partner-logo" height="40" alt="partner_logo" />
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-center">
                    <img src="/assets/images/auto-check.png" class="partner-logo" height="40" alt="partner_logo" />
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-center">
                    <img src="/assets/images/one-pipe.png" class="partner-logo" height="40" alt="partner_logo" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-padding mb-100">
        <div class="grid-base">
            <div class="grid-col-base h-auto-base">
                <img src="/assets/images/use-case-grid-1.webp" alt="" />
            </div>
            <div class="grid-col-base dark-bg">
                <span class="title-grid-col-base">Use case</span>
                <span class="subtitle-grid-col-base">Explore our use cases.</span>
                <span class="info-grid-base">The Motor Africa fleet automation cloud service caters to diverse
                    needs, including fleet management, car subscription, auto finance,
                    public transport management, vehicle insurance, workshop management,
                    and emergency response systems.</span>
                <a href="" class="explore-btn">Explore
                    <i class="bx bx-chevron-right"></i>
                </a>
            </div>
            <div class="grid-col-base dark-bg">
                <span class="title-grid-col-base">Intuitive API</span>
                <span class="subtitle-grid-col-base">Build with with Motor Africa.
                </span>
                <span class="info-grid-base">Our simple intuitive API can help enterprises build solutions
                    irrespective of the complexity with a dedicated support team helping
                    you achieve your goals.
                </span>
                <a href="" class="explore-btn">Explore
                    <i class="bx bx-chevron-right"></i>
                </a>
            </div>
            <div class="grid-col-base h-auto-base">
                <img src="/assets/images/use-case-grid-2.webp" alt="" />
            </div>
        </div>
    </div>

    <div class="container-padding mb-100">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="intro-usecase">
                    <p class="intro">Exploring our diverse use cases</p>
                    <p class="sub-intro">OUR USE CASES</p>
                </div>
            </div>
             <div class="col-md-6">
                <div class="use-case-in">
                    <img src="/assets/images/auto-finance-icon.png" alt="" />
                    <div>
                        <p class="use-case-in-title">Auto Financing</p>
                        <p class="use-case-in-subtitle">
                            The Motor Africa fleet automation cloud service helps auto finance providers reduce default rates and improve maintenance and inspection routines.
                        </p>
                        <a href="/auto-financing" class="learn-more">
                            Learn More
                            <i class="bx bx-arrow-back"></i>
                        </a>
                    </div>
                </div>
            </div>
          
            <div class="col-md-6">
                <div class="use-case-in">
                    <img src="/assets/images/fleet-mgt-icon.png" alt="" />
                    <div>
                        <p class="use-case-in-title">Fleet management</p>
                        <p class="use-case-in-subtitle">
                            Learn how Motor Africa's fleet automation cloud service is helping fleet operators streamline operations and boost efficiency.
                        </p>
                        <a href="/fleet-management" class="learn-more">
                            Learn More
                            <i class="bx bx-arrow-back"></i>
                        </a>
                    </div>
                </div>
            </div>
             <div class="col-md-6">
                <div class="use-case-in">
                    <img src="/assets/images/logistic-icon.png" alt="" />
                    <div>
                        <p class="use-case-in-title">Logistics and supply chain</p>
                        <p class="use-case-in-subtitle">
                            Learn how supply chain and logistics managers are leveraging telematics data to improve operations with real-time insights.
                        </p>
                        <a href="/logistics-supply-chain" class="learn-more">
                            Learn More
                            <i class="bx bx-arrow-back"></i>
                        </a>
                    </div>
                </div>
            </div>
           
             <div class="col-md-6">
                <div class="use-case-in">
                    <img src="/assets/images/car-sub-icon.png" alt="" />
                    <div>
                        <p class="use-case-in-title">Car Subscription</p>
                        <p class="use-case-in-subtitle">
                            Launch a car subscription business in 3 business days with a full suite car subscription management cloud service.
                        </p>
                        <a href="/car-subscription" class="learn-more">
                            Learn More
                            <i class="bx bx-arrow-back"></i>
                        </a>
                    </div>
                </div>
            </div>
             <div class="col-md-6">
                <div class="use-case-in">
                    <img src="/assets/images/workshop-mgt-icon.png" alt="" />
                    <div>
                        <p class="use-case-in-title">Workshop Management</p>
                        <p class="use-case-in-subtitle">
                            Learn how workshops are leveraging telemetry data to automate and optimize maintenance scheduling.
                        </p>
                        <a href="/workshop-management" class="learn-more">
                            Learn More
                            <i class="bx bx-arrow-back"></i>
                        </a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    {{-- @include('section.title-blog-post') --}}

    {{-- Pricing --}}
    <!--@include('section.pricing')-->
    
    {{-- Newsletter --}}
    <div class="container-padding">
        <div class="news-letter-section services-section mb-100">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="news-letter-img">
                        <img src="/assets/images/newsletter-img.png" alt="" />
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="form-newsletter">
                        <span class="news-letter-title">Newsletter</span>
                        <span class="news-letter-subtitle">Subscribe to our newsletter</span>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-input" placeholder="Enter your mail..." />
                                <button class="form-btn">
                                    <i class="bx bx-right-arrow-alt"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
