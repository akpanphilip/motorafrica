@extends('layout.main')
@section('content')
    <title>MotorAfrica | Drive</title>

    @include('section.hero-drive')

    <div class="experience-section p-4">
        <div class="container-padding">
            <div class="info-100">
                <p class="caption-title text-center">
                    <span>How do i start?</span>
                </p>
                <p class="caption-sub-title text-center">
                    <span>Steps to create an account to get started </span>
                    <span class="block-display">as a driver on <a class="text-main-clr">Motor
                        Africa</a></span>
                </p>
            </div>
        </div>

        <div class="container-padding">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/drive_test.webp') }} alt="">
                        <p class="data-power-title">Drive Test</p>
                        <p class="data-power-subtitle">Complete your drive test verification from partners in your city.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/register.webp') }} alt="">
                        <p class="data-power-title">Register</p>
                        <p class="data-power-subtitle">Complete your registration with all pre-requisite documents to get
                            verified.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/booking.webp') }} alt="">
                        <p class="data-power-title">Booking</p>
                        <p class="data-power-subtitle">Choose a vehicle that meets your lease plans and schedule for a
                            vehicle inspection.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="data-power-info">
                        <img src={{ asset('assets/images/security_deposit.webp') }} alt="">
                        <p class="data-power-title">Security Deposit</p>
                        <p class="data-power-subtitle">To validate your booking, you will need to make a refundable security
                            deposit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--<div class="home-swipe bg-white">-->
    <!--    <div class="container-padding">-->
    <!--        <div class="row justify-content-center align-items-center">-->
    <!--            <div class="col-md-10 col-lg-6">-->
    <!--                <div class="swipe-in swipe-padding">-->
    <!--                    <p class="caption-title-sm">-->
    <!--                        Drive Your <a class="text-main-clr">Dreams in Africa</a>: Get Verified Today!-->
    <!--                    </p>-->

    <!--                    <p class="caption-sub-title">-->
    <!--                        Ready to unlock the freedom of car subscriptions in your city? Motor Africa connects you with trusted local hosts and fleet operator offering a variety of vehicles, all without the hassle of ownership. -->
    <!--                    </p>-->
    <!--                    <p class="caption-sub-title">-->
    <!--                        But first, let's get you verified!-->
    <!--                    </p>-->
    <!--                    <p class="caption-sub-title">   -->
    <!--                        On this page, you'll find a clear breakdown of the simple steps to become a verified renter on Motor Africa. This unlocks a world of benefits, including:-->
    <!--                    </p>-->
    <!--                      <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>High Approval Rates:</b> A verified Motor Account gives you an 80% chance of securing your dream car subscription!-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Safety First:</b> All Motor Africa vehicles boast advanced security systems, keeping you and your loved ones protected.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Peace of Mind:</b> Our tech platform keeps track of scheduled maintenance, ensuring your car is always in top condition.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                      <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Exclusive Perks:</b> Verified renters gain access to a private WhatsApp channel where you'll be the first to see exciting vehicle listings in your city!-->
    <!--                        </span>-->
    <!--                    </p>-->
                       
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-10 col-lg-5 offset-lg-1">-->
    <!--                <div class="swipe-in">-->
    <!--                    <img src={{ asset('assets/images/drive1.webp') }} alt="">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!--<div class="home-swipe bg-white">-->
    <!--    <div class="container-padding">-->
    <!--        <div class="row justify-content-center reverse-col align-items-center">-->
    <!--            <div class="col-md-10 col-lg-5">-->
    <!--                <div class="swipe-in">-->
    <!--                    <img src={{ asset('assets/images/drive3.webp') }} class="img-geo-banner"-->
    <!--                        alt="">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-10 col-lg-6 offset-lg-1">-->
    <!--                <div class="swipe-in swipe-padding">-->
    <!--                    <p class="caption-title-sm">-->
    <!--                        These are reasons you might want to lease a vehicle for hosts and fleet operators partnered with  <a class="text-main-clr">Motor Africa</a>.-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Private Use:</b> leasing a vehicle for family activities or for private commute is a great deal.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Commercial use:</b> lease a fuel efficient vehicle for ride hailing or any type of commercial services. -->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                      <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Corporate use:</b> Rather than buy vehicles for corporate use, you can sign up an source the best type of vehicle that fits your corproate use. -->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="home-swipe bg-white">-->
    <!--    <div class="container-padding">-->
    <!--        <div class="row justify-content-center align-items-center">-->
    <!--            <div class="col-md-10 col-lg-6">-->
    <!--                <div class="swipe-in swipe-padding">-->
    <!--                    <p class="caption-title-sm">-->
    <!--                        What you need to get Started-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Valid Driver's License:</b> This is a must-have for any renter.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Guarantor Information:</b> Two guarantors, with at least one being a civil servant residing in your city, are required. Have their full names, phone numbers, and emails ready.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Supporting Documents:</b> These includes a recent utility bill (less than 30 days old), a clear copy of your driver's licence and a clear full-body photo of yourself.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                          <b>Terms of Agreement:</b>Click on the button below to Download the Terms of Agreement Document. Print, Fill out, and scan a copy.-->
    <!--                        </span>-->
    <!--                        <div class="mt-2">-->
    <!--                            <a href="https://motorafrica.co/assets/terms_of_agreement_for_driver.pdf"-->
    <!--                                class="start-now-btn">-->
    <!--                                Terms of Agreement-->
    <!--                                <i class='bx bx-chevron-right'></i>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-10 col-lg-5 offset-lg-1">-->
    <!--                <div class="swipe-in">-->
    <!--                    <img src={{ asset('assets/images/drive4.webp') }} class="img-geo-banner"-->
    <!--                        alt="">-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="home-swipe bg-white">-->
    <!--    <div class="container-padding">-->
    <!--       <div class="row">-->
    <!--           <div class="col-md-10">-->
    <!--                <p class="caption-title-sm">-->
    <!--        Important Dates to Remember-->
    <!--    </p>-->
    <!--      <p class="caption-icon-text">-->
    <!--        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--        <span class="caption-text">-->
    <!--            Applications are processed in batches. To be considered for the next round, submit your application by the <b>7th of each month.</b>-->
    <!--        </span>-->
    <!--    </p>-->
    <!--      <p class="caption-icon-text">-->
    <!--        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--        <span class="caption-text">-->
    <!--            Successful applications are reviewed and processed before the <b>4th week of each month.</b> This includes virtual training sessions and Motor Account activations.-->
    <!--        </span>-->
    <!--    </p>-->
    <!--    <p class="caption-sub-title">-->
    <!--        Don't wait! Get verified today and unlock the freedom of car subscriptions in Africa!-->
    <!--    </p>-->
    <!--    <p class="caption-sub-title">-->
    <!--        Please note that guarantor verification fees will be charged only after your application verification is successful. -->
    <!--    </p>-->
    <!--    <p>-->
    <!--        Click the button below to submit your application.-->
    <!--    </p>-->
    <!--    <div class="mt-2">-->
    <!--        <a href="https://mygarage.africa/driver"-->
    <!--            class="start-now-btn">-->
    <!--            Submit Application-->
    <!--            <i class='bx bx-chevron-right'></i>-->
    <!--        </a>-->
    <!--    </div>-->
    <!--           </div>-->
    <!--       </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-6">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            The <a class="text-main-clr">Struggle</a>.
                        </p>

                        <p class="caption-sub-title">
                            For many people in Africa, owning a vehicle is a necessity, not a luxury. Whether you're a small business owner who needs a reliable way to transport your goods or a driver who relies on your car for your livelihood, the cost of purchasing a vehicle can be a significant barrier. You've worked hard, saved up, and faced countless challenges, but the dream of having your own set of wheels still feels out of reach.
                        </p>
                    </div>
                </div>
                <div class="col-md-10 col-lg-5 offset-lg-1">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/drive-in2.png') }} alt="">
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
                        <img src={{ asset('assets/images/drive-in1.png') }} class="img-geo-banner"
                            alt="">
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 offset-lg-1">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            The <a class="text-main-clr">Opportunity</a>.
                        </p>
                        <p class="caption-sub-title">
                        Motor Africa is here to change that. We've created a car subscription service (mygarage) that connects verified drivers and small businesses with vehicle owners (hosts) in their local communities. 
                        </p>
                        <p class="caption-sub-title">
                            Recommended for the following type of businesses;
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                Schools looking to boost their school bus fleet.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                Ride hailing drivers offering mobility services on Bolt
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                Hotels looking for shuttle vehicles.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                Companies who need official vehicles. 
                            </span>
                        </p>
                         <p class="caption-sub-title">
                             By going through our simple verification process, you can access a wide range of vehicles without the burden of ownership.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row justify-content-center align-items-center ">
                <div class="col-md-10 col-lg-7">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            The <a class="text-main-clr">Verification</a> Process.
                        </p>

                        <p class="caption-sub-title">
                            To ensure a seamless and reliable experience, we have a comprehensive verification process in place. Here's what you need to do:
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                Download the terms of agreement form below, print it out, and complete it by hand.
                            </span>
                             
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                Provide the full names and contact information of 3 guarantors: one civil servant, one business owner with a registered company (taxpayer), and one immediate family member.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                Pay a non-refundable fee for the physical guarantor verification. This fee is only paid after we confirm that your guarantors have submitted their completed guarantor forms.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                Applicants will go through a compulsory virtual training before the verification process is complete.
                            </span>
                        </p>
                        <p class="caption-icon-text">
                            <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>
                            <span class="caption-text">
                                After the virtual training, you'll be added to our community of verified drivers and small businesses. You can then browse through the available vehicles hosted by our registered owners and request a lease.
                            </span>
                        </p>
                         <p class="caption-sub-title">
                             It's that simple!
                        </p>
                        <p class="caption-sub-title">
                             Motor Africa doesn't own or offer vehicles directly, but we connect you with the vehicle owners in your local community who are subscribed to our fleet automation and management cloud services.
                        </p>
                        <div class="mt-2">
                                <a href="https://motorafrica.co/assets/terms_of_agreement_for_driver.pdf"
                                    class="start-now-btn">
                                    Terms of Agreement
                                    <i class='bx bx-chevron-right'></i>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-5">
                    <div class="swipe-in">
                        <img src={{ asset('assets/images/drive-in3.png') }} alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-swipe bg-white">
        <div class="container-padding">
            <div class="row">
                <!--<div class="col-md-10 col-lg-5">-->
                <!--    <div class="swipe-in">-->
                <!--        <img src={{ asset('assets/images/drive3.webp') }} class="img-geo-banner"-->
                <!--            alt="">-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-md-10 col-lg-10">
                    <div class="swipe-in swipe-padding">
                        <p class="caption-title-sm">
                            Join the <a class="text-main-clr">Movement</a>.
                        </p>
                        <p class="caption-sub-title">
                            Unlock your mobility dreams with Motor Africa's verified leasing solution. Start your application today for hassle-free transportation. Verification takes 21 working days.
                        </p>
                        <p class="caption-sub-title">
                            Start your application early.
                        </p>
                         <p class="caption-sub-title">
                             <b>Step 1:</b> Download the terms of service for drivers and small businesses. Print and fill it in your handwriting, then scan it back in PDF and have it handy to complete your application.
                        </p>
                        <p class="caption-sub-title">
                             <b>Step 2:</b> Make sure you have full names, email address, and phone number of your nominated guarantors. This is very important as you will need the details when completing your application.
                        </p>
                        <p class="caption-sub-title">
                            <b>Step 3:</b> Make sure you take a full-length photograph of yourself, a clear copy of your driver’s license, and your utility bill (not more than 3 months).
                        </p>
                        <p class="caption-sub-title">
                             <b>Final Step:</b> If everything listed here is complete, please go ahead and click the apply tab to submit your application.
                        </p>
                       <div class="mt-2">
                            <a href="https://forms.gle/7XYtP7pQrXXuq8hp8"
                                class="start-now-btn">
                                Apply 
                                <i class='bx bx-chevron-right'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="home-swipe bg-white">-->
    <!--    <div class="container-padding">-->
    <!--        <div class="row justify-content-center align-items-center">-->
    <!--            <div class="col-md-10 col-lg-6">-->
    <!--                <div class="swipe-in swipe-padding">-->
    <!--                    <p class="caption-title-sm">-->
    <!--                        What you need to get Started-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Valid Driver's License:</b> This is a must-have for any renter.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Guarantor Information:</b> Two guarantors, with at least one being a civil servant residing in your city, are required. Have their full names, phone numbers, and emails ready.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                            <b>Supporting Documents:</b> These includes a recent utility bill (less than 30 days old), a clear copy of your driver's licence and a clear full-body photo of yourself.-->
    <!--                        </span>-->
    <!--                    </p>-->
    <!--                    <p class="caption-icon-text">-->
    <!--                        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--                        <span class="caption-text">-->
    <!--                          <b>Terms of Agreement:</b>Click on the button below to Download the Terms of Agreement Document. Print, Fill out, and scan a copy.-->
    <!--                        </span>-->
    <!--                        <div class="mt-2">-->
    <!--                            <a href="https://motorafrica.co/assets/terms_of_agreement_for_driver.pdf"-->
    <!--                                class="start-now-btn">-->
    <!--                                Terms of Agreement-->
    <!--                                <i class='bx bx-chevron-right'></i>-->
    <!--                            </a>-->
    <!--                        </div>-->
    <!--                    </p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-10 col-lg-5 offset-lg-1">-->
    <!--                <div class="swipe-in">-->
    <!--                    <img src={{ asset('assets/images/drive4.webp') }} class="img-geo-banner"-->
    <!--                        alt="">-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="home-swipe bg-white">-->
    <!--    <div class="container-padding">-->
    <!--       <div class="row">-->
    <!--           <div class="col-md-10">-->
    <!--                <p class="caption-title-sm">-->
    <!--        Important Dates to Remember-->
    <!--    </p>-->
    <!--      <p class="caption-icon-text">-->
    <!--        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--        <span class="caption-text">-->
    <!--            Applications are processed in batches. To be considered for the next round, submit your application by the <b>7th of each month.</b>-->
    <!--        </span>-->
    <!--    </p>-->
    <!--      <p class="caption-icon-text">-->
    <!--        <span class="caption-icon"><i class='bx bx-checkbox-square'></i></span>-->
    <!--        <span class="caption-text">-->
    <!--            Successful applications are reviewed and processed before the <b>4th week of each month.</b> This includes virtual training sessions and Motor Account activations.-->
    <!--        </span>-->
    <!--    </p>-->
    <!--    <p class="caption-sub-title">-->
    <!--        Don't wait! Get verified today and unlock the freedom of car subscriptions in Africa!-->
    <!--    </p>-->
    <!--    <p class="caption-sub-title">-->
    <!--        Please note that guarantor verification fees will be charged only after your application verification is successful. -->
    <!--    </p>-->
    <!--    <p>-->
    <!--        Click the button below to submit your application.-->
    <!--    </p>-->
    <!--    <div class="mt-2">-->
    <!--        <a href="https://mygarage.africa/driver"-->
    <!--            class="start-now-btn">-->
    <!--            Submit Application-->
    <!--            <i class='bx bx-chevron-right'></i>-->
    <!--        </a>-->
    <!--    </div>-->
    <!--           </div>-->
    <!--       </div>-->
    <!--    </div>-->
    <!--</div>-->
  
    @include('section.partners')

    {{-- @include('section.signup') --}}
@endsection
