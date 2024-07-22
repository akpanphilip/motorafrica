<style>
    .sm-btn-center{
        z-index: 400;
    }
    .swipe-in img{
        /* border-left: 10px solid #feb200; */
        /* border-bottom: 10px solid #feb200; */
        /* border-radius: 15px */
    }
</style>
<div class="home-swipe">
    <div class="container-padding">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" 
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-10 col-lg-5">
                            <div class="swipe-in">
                                <img src={{ asset('assets/images/swipe-1.webp') }} alt="">
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-6 offset-lg-1">
                            <div class="swipe-in swipe-padding">
                                {{-- <p class="caption-caption">#B2B</p> --}}
                                <p class="caption-title"><span>Vehicle Equity</span><span class="block-display">Line Of
                                        <a class="text-main-clr">Credit</a></span></p>
                                <p class="caption-sub-title">
                                    <span> Motor Africa's lending infrastructure enables</span> <span>collateralize
                                        microloans for
                                        motorists,</span> <span>automating
                                        underwriting with driving behavior,</span> <span>vehicle value, and maintenance
                                        data.</span>
                                </p>

                                <div class="sm-btn-center">
                                    <a href="/lending" class="swipe-btn">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-10 col-lg-5">
                            <div class="swipe-in">
                                <img src={{ asset('assets/images/swipe-2.webp') }} alt="">
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-6 offset-lg-1">
                            <div class="swipe-in swipe-padding">
                                {{-- <p class="caption-caption">#B2B2C</p> --}}
                                <p class="caption-title"><span><a class="text-main-clr">Vehicle</a> Rental</span> <span
                                        class="block-display"><a class="text-main-clr">Lease</a> Management</span>
                                </p>
                                <p class="caption-sub-title">
                                    <span>Motor Africa offers a cost-effective solution to</span><span> car
                                        rental/leasing, with no upfront
                                        costs for GPS</span> <span>hardware. Developers can easily build car</span>
                                    subscription
                                    projects with
                                    simple API’s.
                                </p>

                                <div class="sm-btn-center">
                                    <a href="/car-subscription" class="swipe-btn">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-10 col-lg-5">
                            <div class="swipe-in">
                                <img src={{ asset('assets/images/swipe-3.webp') }} alt="">
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-6 offset-lg-1">
                            <div class="swipe-in swipe-padding">
                                {{-- <p class="caption-caption">#B2B</p> --}}
                                <p class="caption-title"><span>Vehicle</span> <span
                                        class="block-display"> <a class="text-main-clr">Insurance</a> Providers</span></p>
                                <p class="caption-sub-title">
                                    <span>Insurance companies can optimize underwriting,</span> <span>innovate with data
                                        from
                                        connected
                                        vehicles, and</span> <span>provide mutual benefits to policyholders
                                        through</span> our
                                    advanced vehicle
                                    infrastructure.
                                </p>

                                <div class="sm-btn-center">
                                    <a href="/insurance" class="swipe-btn">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-10 col-lg-5">
                            <div class="swipe-in">
                                <img src={{ asset('assets/images/swipe-4.webp') }} alt="">
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-6 offset-lg-1">
                            <div class="swipe-in swipe-padding">
                                {{-- <p class="caption-caption">#B2B</p> --}}
                                <p class="caption-title"><span>Public</span> <span
                                        class="block-display"> <a class="text-main-clr">transportation</a> management</span></p>
                                <p class="caption-sub-title">
                                    <span>
                                        Our advanced connected vehicle infrastructure attracts private sector investment and alleviates operational stress, enhancing public transport management.
                                    </span>
                                </p>

                                <div class="sm-btn-center">
                                    <a href="" class="swipe-btn">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-10 col-lg-5">
                            <div class="swipe-in">
                                <img src={{ asset('assets/images/swipe-5.webp') }} alt="">
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-6 offset-lg-1">
                            <div class="swipe-in swipe-padding">
                                {{-- <p class="caption-caption">#B2B</p> --}}
                                <p class="caption-title"><span class="text-main-clr">Integrated Vehicle</span> <span
                                        class="block-display">Finance <a class="text-main-clr">Solution</a></span></p>
                                <p class="caption-sub-title">
                                    <span>
                                        Motor Africa is revolutionizing the vehicle finance business with our Connected Car Data & dedicated Solutions
                                    </span>
                                </p>

                                <div class="sm-btn-center">
                                    <a href="" class="swipe-btn">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-10 col-lg-5">
                            <div class="swipe-in">
                                <img src={{ asset('assets/images/swipe-6.webp') }} alt="">
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-6 offset-lg-1">
                            <div class="swipe-in swipe-padding">
                                {{-- <p class="caption-caption">#B2B</p> --}}
                                <p class="caption-title"><span>Delivery, Haulage & <a class="text-main-clr">Logistics</a></span></p>
                                <p class="caption-sub-title">
                                    <span>
                                        Energize your supply chain experience with customized analytics and control to optimize your fleet management use case.
                                    </span> 
                                </p>

                                <div class="sm-btn-center">
                                    <a href="/logistics-and-delivery" class="swipe-btn">learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
</div>
