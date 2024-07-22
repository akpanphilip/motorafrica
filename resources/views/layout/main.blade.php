<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src={{ asset('assets/bootstrap/js/bootstrap.min.js') }}></script>

    <link rel="stylesheet" href={{ asset('assets/bootstrap/css/bootstrap.min.css') }}>

    <link rel="stylesheet" href={{ asset('assets/style.css') }}>

    <link rel="stylesheet" href={{ asset('assets/responsive.css') }}>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    @include('section.navbar')

    @yield('content')

    @include('section.footer')

    <div class="whatsappIcon">
        <a href="whatsapp://send?phone=+2349040797930">
            <i class='bx bxl-whatsapp'></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script>
        const swiperEl = document.querySelector('swiper-container')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
        swiperEl.initialize();
    </script>
    <script>
        const swiperEl = document.querySelector('.blog-swiper')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
        swiperEl.initialize();
    </script>

    <script>
        const swiperEl = document.querySelector('.auto_finance_swiper')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                clickable: true,
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
        swiperEl.initialize();
    </script>

    <script>
        // count up
        const counters = document.querySelectorAll(".counter");

        const options = {
            root: null,
            rootMargin: "0px",
            threshold: 0.7,
        };

        const handleCounterAnimation = (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const start = 0;
                    const end = parseInt(target.innerText);
                    let current = start;

                    const increment = Math.floor(end / 100);

                    const updateCounter = () => {
                        if (current < end) {
                            current += increment;
                            target.innerText = current;
                            requestAnimationFrame(updateCounter);
                        } else {
                            target.innerText = end;
                        }
                    };

                    updateCounter();
                    observer.unobserve(target);
                }
            });
        };

        const observer = new IntersectionObserver(handleCounterAnimation, options);

        counters.forEach((counter) => {
            observer.observe(counter);
        });
    </script>
    <script src={{ asset('assets/app.js') }}></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>
