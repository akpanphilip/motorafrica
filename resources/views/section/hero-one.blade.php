<div class="hero hero-one">
    <div class="container-hero">
        <div class="row align-items-center reverse-col">
            <div class="col-md-12 col-lg-6">
                <div class="col-hero">
                    {{-- data-aos="fade-right" data-aos-duration="1500" --}}

                    <p class="hero-title">
                        <span>Connecting cars</span>
                        <span>to the <a class="text-main-clr">cloud</a>.</span>
                    </p>

                    <p class="hero-sub-title">
                        <span>
                            Motor Africa's cloud services empower individuals and businesses to gain control, reduce costs and complexity, generate new digital revenue opportunities, and accelerate growth with its Cloud solutions for vehicles.
                        </span>
                    </p>

                    <div class="hero-btns">
                        <a class="hero-learn-more hero-use-case">learn more</a>
                        {{-- <a href="" class="hero-book-demo" data-bs-toggle="modal" data-bs-target="#bookDemo">book
                            a demo</a> --}}


                        {{-- <a class="hero-learn-more hero-use-case">learn more</a> --}}
                        <a href="https://calendly.com/motorafrica_connect" target="_blank" class="hero-book-demo">book a demo</a>

                    </div>
                </div>
            </div>
            <div class="col-md-10 col-lg-5 offset-lg-1">
                <div class="hero-img">
                    <img src={{ asset('assets/images/hero-one-img.webp') }} alt="">
                </div>
            </div>
        </div>
    </div>
</div>


@include('section.book-demo-modal')
