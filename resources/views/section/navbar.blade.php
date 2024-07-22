<div class="nav container-padding">
    <div class="logo-menu container-padding">
        <a href="/">
            <img class="logo logo-sm" src={{ asset('assets/images/logo.png') }} alt="">
        </a>
        <i class='bx bx-menu-alt-right toogle-icon'></i>
    </div>
    <div class="nav-ins">
        <ul class="nav-in">
            <a href="/">
                <img class="logo logo-lg" src={{ asset('assets/images/logo.png') }} alt="">
            </a>
            {{-- <a class="product-link lg-product">PRODUCTS</a> --}}
            {{-- <a class="sm-product">PRODUCTS</a> --}}

            {{-- <ul class="sm-links-product">
                <li><a href="/online-tracking">Online Tracking</a></li>
                <li><a href="/geo-fence">Geofencing</a></li>
                <li><a href="/historical-data">Historical Data</a></li>
                <li><a href="/alerts">Alerts & Notifications</a></li>
                <li><a href="/speed-monitoring">Speed Monitoring</a></li>
                <li><a href="/reporting-and-analytics">Reporting & Analytics</a></li>

                <div class="closebtn">
                    <i class='bx bxs-x-circle'></i>
                </div>
            </ul> --}}

            <ul class="sm-links-usecase">
                <li><a href="/car-subscription">Car Subscription</a></li>
                <li class="d-none"><a href="auto-financing">Auto Finance</a></li>
                <li><a href="/logistics-supply-chain">Logistics & Supply Chain</a></li>
                <li><a href="/workshop-management">Workshop Management</a></li>
                <li><a href="/fleet-management">Fleet Management</a></li>

                <div class="closebtn-usecase">
                    <i class='bx bxs-x-circle'></i>
                </div>
            </ul>
        </ul>

        <ul class="nav-in">
            <a href="about" class="about-link">ABOUT US</a>
            <a class="use-case lg-use-case">USE CASES</a>
            <a class="sm-usecase">USE CASES</a>
            <a href="https://api.motorafrica.co">API DOC</a>
            <a href="contact-us" class="contact-us">CONTACT US</a>
        </ul>
        <a href="/contact-us" class="start-now-btn m-0">START NOW</a>
    </div>

    {{-- PRODUCTS --}}
    {{-- <div class="products">
        <div class="container-padding">
            <div class="drop-down-section drop-product-nav">
                <div class="drop dark-bg bdr-top-bottom">
                    <p class="drop-link-title">Services</p>

                    <div class="drop-col">
                        <div class="drop-col-in">
                            <p class="drop-col-title">Integrated Payment Services</p>
                            <p class="drop-col-sub-title">Integrate payment & lending with user-friendly billing
                                &
                                loan management platform.</p>
                            <a href="/integrated-payment-services" class="drop-learn-more text-main-clr">
                                <span>Learn more</span>
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                        <div class="drop-col-in">
                            <p class="drop-col-title">IoT & Telemetry Services</p>
                            <p class="drop-col-sub-title">Leverage a robust hybrid IoT solution to scale your
                                fleet business fast.</p>
                            <a href="/iot-telemetry-services" class="drop-learn-more text-main-clr">
                                <span>Learn more</span>
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                        <div class="drop-col-in">
                            <p class="drop-col-title">Cross-Integration</p>
                            <p class="drop-col-sub-title">Integrate financial and fleet data for informed
                                decision-making and optimization.</p>
                            <a class="drop-learn-more text-main-clr">
                                <span>Coming soon</span>
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="drop light-bg bdr-left-right">
                    <p class="drop-link-title">Products</p>

                    <div class="drop-row">
                        <div class="drop-col">
                            <div class="drop-col-in">
                                <p class="drop-col-title">Online Tracking</p>
                                <p class="drop-col-sub-title light-clr">Maximize Fleet Performance with Real-Time Fleet
                                    Visibility</p>
                                <a href="/online-tracking" class="drop-learn-more text-main-clr">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                            <div class="drop-col-in">
                                <p class="drop-col-title">Geofencing</p>
                                <p class="drop-col-sub-title light-clr">Experience the next
                                    level of automation
                                    with Geofence</p>
                                <a href="/geo-fence" class="drop-learn-more text-main-clr">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                            <div class="drop-col-in">
                                <p class="drop-col-title">Historical Data</p>
                                <p class="drop-col-sub-title light-clr">Get clarity and control the big picture</p>
                                <a href="/historical-data" class="drop-learn-more text-main-clr">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                        </div>

                        <div class="drop-col">
                            <div class="drop-col-in">
                                <p class="drop-col-title">Alerts & Notifications</p>
                                <p class="drop-col-sub-title light-clr">The nerve center, stay
                                    seamlessly connected to
                                    the pulse of your fleet</p>
                                <a href="/alerts" class="drop-learn-more text-main-clr">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                            <div class="drop-col-in">
                                <p class="drop-col-title">Speed Monitoring</p>
                                <p class="drop-col-sub-title light-clr">Powerful tool designed to keep
                                    your fleet moving at the right pace.
                                </p>
                                <a href="/speed-monitoring" class="drop-learn-more text-main-clr">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                            <div class="drop-col-in">
                                <p class="drop-col-title">Reporting & Analytics</p>
                                <p class="drop-col-sub-title light-clr">Unleash the Power
                                    of Vehicle Data</p>
                                <a href="/reporting-and-analytics" class="drop-learn-more text-main-clr">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div> --}}

    {{-- USE CASE --}}
    <div class="use-cases">
        <div class="container-padding">
            <div class="drop-down-section drop-usecase-nav">
                <div class="drop p-0 bdr-top-bottom">
                    <img src={{ asset('assets/images/use-case-bg.png') }} class="w-100 h-100 bdrtb-8" alt="">
                </div>

                <div class="drop light-bg bdr-left-right">
                    <p class="drop-link-title">Services Use Cases</p>

                    <div class="drop-row">
                        <div class="drop-col">
                            <div class="drop-col-in">
                                <p class="drop-col-title">Car Subscription</p>
                                <p class="drop-col-sub-title light-clr">
                                    Revolutionize Your Car Subscription Business with Motor Africa's Fleet Automation
                                    Cloud.
                                </p>
                                <a href="/car-subscription" class="drop-learn-more text-main-clr" target="_blank">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                            <div class="drop-col-in">
                                <p class="drop-col-title">Fleet management </p>
                                <p class="drop-col-sub-title light-clr">
                                    Optimize Your Fleet with Motor Africa's Advanced Automation Tools
                                </p>
                                <a href="/fleet-management" class="drop-learn-more text-main-clr" target="_blank">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                            <div class="drop-col-in">
                                <p class="drop-col-title">Workshop Management </p>
                                <p class="drop-col-sub-title light-clr">Maximize Your Workshop Potential with Motor
                                    Africa's Automation Tools
                                </p>
                                <a href="/workshop-management" class="drop-learn-more text-main-clr" target="_blank">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                            <!--<div class="drop-col-in">-->
                            <!--    <p class="drop-col-title">Insurance</p>-->
                            <!--    <p class="drop-col-sub-title light-clr">-->
                            <!--        Utilizing data from Motor Africa-connected vehicles to generate additional revenue-->
                            <!--        opportunities.-->
                            <!--    </p>-->
                            <!--    <a href="insurance" class="drop-learn-more text-main-clr">-->
                            <!--        <span>Learn more</span>-->
                            <!--        <i class='bx bx-right-arrow-alt'></i>-->
                            <!--    </a>-->
                            <!--</div>-->
                        </div>

                        <div class="drop-col">
                            <div class="drop-col-in">
                                <p class="drop-col-title">Auto Financing</p>
                                <p class="drop-col-sub-title light-clr">
                                    Driving Innovation in Auto Finance Using Motor Africa's Fleet Automation Cloud
                                    Service.
                                </p>
                                <a href="/auto-financing" class="drop-learn-more text-main-clr" target="_blank">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>
                            <div class="drop-col-in">
                                <p class="drop-col-title">Logistics and supply chain </p>
                                <p class="drop-col-sub-title light-clr">
                                    Revolutionizing Logistics and Supply Chain Management with Motor Africa's Fleet
                                    Automation Cloud Service
                                </p>
                                <a href="/logistics-supply-chain" class="drop-learn-more text-main-clr"
                                    target="_blank">
                                    <span>Learn more</span>
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
