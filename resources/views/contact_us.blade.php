@extends('layout.main')
@section('content')
    <title>MotorAfrica | Contact Us</title>
    <style>
        .contact-us {
            font-weight: 700 !important;
            color: #08102E;
        }
    </style>

    @include('section.hero-contact')

    <div class="contact-form-section">
        <div class="container-padding">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="info-100">
                        <p class="caption-title text-center">
                            <span class="block-display">Get in <a class="text-main-clr">Touch</a></span>
                        </p>
                        <p class="caption-sub-title text-center">
                            We thrive on open communication and value every interaction with our community. Your thoughts,
                            questions, and feedback matter to us. Reach out to us today, and let's start a meaningful
                            conversation.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-10">
                    @if (session('message'))
                        <div class="text-main-clr mb-3 font-weight-bold" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('submit.contact') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control formInput" name="name" id="floatingInput"
                                        value="{{ old('name') }}" placeholder="name">
                                    <label for="floatingInput">Your Name</label>
                                    <span class="err-text">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="emal" class="form-control formInput" name="email" id="floatingInput"
                                        value="{{ old('email') }}" placeholder="name">
                                    <label for="floatingInput">Email</label>
                                    <span class="err-text">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control formInput" name="phone_number"
                                        id="floatingInput" value="{{ old('phone_number') }}" placeholder="Phone number">
                                    <label for="floatingInput">Phone number</label>
                                    <span class="err-text">
                                        @error('phone_number')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control formInput" name="location" id="floatingInput"
                                        value="{{ old('location') }}" placeholder="location">
                                    <label for="floatingInput">Location</label>
                                    <span class="err-text">
                                        @error('location')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control formTextArea" style="height: 150px" name="message" placeholder="Message"
                                        id="floatingTextarea2"></textarea>
                                    <label for="floatingTextarea2">Message</label>
                                </div>
                                <span class="err-text">
                                    @error('message')
                                        {{ $message }}
                                    @enderror
                                </span>


                            </div>
                        </div>
                        <div class="d-flex justify-content-center w-100">
                            <button class="start-now-btn mt-4">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="faq-section m-100">
        <div class="container-padding">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="info-100">
                        <p class="caption-title text-center">
                            <span class="block-display">Frequently Asked Questions</span>
                        </p>
                        <p class="caption-sub-title text-center">
                            At Motor Africa, we believe that creating sustainable solutions to Africa's transportation
                            problems
                            is key to unlocking the continent's potential.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-md-8">
                    <div class="accordion mt-4" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How to Register as a Driver
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MotorAfrica presents a complete loan origination platform, automating the lending
                                    process from
                                    application to approval. It empowers businesses with efficient loan application
                                    management,
                                    decreasing manual tasks and enhancing approval speed and accuracy. Partners benefit from
                                    streamlined
                                    application processing, reducing manual work and improving approval precision.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How to Register on Bolt
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MotorAfrica presents a complete loan origination platform, automating the lending
                                    process from
                                    application to approval. It empowers businesses with efficient loan application
                                    management,
                                    decreasing manual tasks and enhancing approval speed and accuracy. Partners benefit from
                                    streamlined
                                    application processing, reducing manual work and improving approval precision.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How to apply for loan
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MotorAfrica presents a complete loan origination platform, automating the lending
                                    process from
                                    application to approval. It empowers businesses with efficient loan application
                                    management,
                                    decreasing manual tasks and enhancing approval speed and accuracy. Partners benefit from
                                    streamlined
                                    application processing, reducing manual work and improving approval precision.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How to Register as a Merchant
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MotorAfrica presents a complete loan origination platform, automating the lending
                                    process from
                                    application to approval. It empowers businesses with efficient loan application
                                    management,
                                    decreasing manual tasks and enhancing approval speed and accuracy. Partners benefit from
                                    streamlined
                                    application processing, reducing manual work and improving approval precision.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How to Register as a Vehicle owner
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    MotorAfrica presents a complete loan origination platform, automating the lending
                                    process from
                                    application to approval. It empowers businesses with efficient loan application
                                    management,
                                    decreasing manual tasks and enhancing approval speed and accuracy. Partners benefit from
                                    streamlined
                                    application processing, reducing manual work and improving approval precision.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    @include('section.partners')
@endsection
