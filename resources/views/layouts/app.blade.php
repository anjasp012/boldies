<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Boldies</title>
    <link href="{{ asset('boldies/css/main.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-farmvest navbar-expand-lg navbar-light bg-white py-2">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('boldies/images/logo.png') }}" width="50px"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto align-lg-items-center ">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#katalog">Order Sekarang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('home') }}#mitra">Join Mitra</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-lg-auto align-lg-items-center gap-3">
                        <li class="nav-item">
                            <a class="btn btn-outline-dark fw-bold rounded-circle py-2" aria-current="page"
                                href="#"><i class="bi bi-bag"></i></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="btn btn-outline-secondary fw-bold rounded-pill px-4 py-2"
                                aria-disabled="true">Login</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        @yield('section')
        <footer class="footer bg-primary">
            <div class="container py-4">
                <div class="d-flex text-black justify-content-between align-items-center">
                    <p class="p-0 m-0" style="font-size: 14px;">Copyright © 2024 Boldies - All rights Reserved</p>
                    <div class="d-flex align-items-center gap-5">

                        <p class="p-0 m-0" style="font-size: 14px;">Follow Our Social Media :
                        </p>
                        <span style="font-size: 30px;">
                            <i class="fab fa-instagram me-2"></i>
                            <i class="fab fa-tiktok me-2"></i>
                            <i class="fab fa-youtube"></i>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- <div id="toTopBtn" class="btn btn-warning btn-sm"><i class="bi bi-arrow-up-short"></i>
        </div> -->
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('boldies/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('boldies/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script>
    <script src="{{ asset('boldies/script/navbar.js') }}"></script>
    <!-- <script src="/script/backToTop.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>
