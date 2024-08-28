<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Yummy Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    @include('landingPage.partials.navbar-transparent')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section background-img">

            <div class="container banner-gallery">
                <div class="row gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up" class="bold secondary-style">GALLERY KAMI</h2><br>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->


        <!-- Gallery Section -->
        <section id="gallery" class="gallery section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                          "loop": true,
                          "speed": 600,
                          "autoplay": {
                            "delay": 5000
                          },
                          "slidesPerView": 1,
                          "spaceBetween": 0,
                          "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                          },
                          "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                          },
                          "breakpoints": {
                            "320": {
                              "slidesPerView": 1,
                              "spaceBetween": 0
                            },
                            "768": {
                              "slidesPerView": 1,
                              "spaceBetween": 0
                            },
                            "1200": {
                              "slidesPerView": 1,
                              "spaceBetween": 0
                            }
                          }
                        }
                    </script>
                    <div class="swiper-wrapper">
                        @foreach ($imageSlider as $image)
                            <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                    href="{{ $image->url_img }}"><img src="{{ $image->url_img }}" class="img-fluid"
                                        alt=""></a></div>
                        @endforeach
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>

        </section><!-- /Gallery Section -->

        <!-- Menu Section -->
        <section id="gallery-menu" class="gallery-menu section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p><span>GALERI KAMI</span></p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade active show" id="menu-starters">
                        <div class="gallery-grid">
                            <!-- Menu Item -->
                            @foreach ($gallery as $image)
                                <div class="menu-item-small">
                                    <a href="{{ $image->url_img }}" class="glightbox"><img src="{{ $image->url_img }}"
                                            class="menu-img-small img-fluid" alt=""></a>
                                </div>
                            @endforeach
                            <!-- Menu Item -->
                        </div>
                    </div><!-- End Starter Menu Content -->

                </div>
            </div>
        </section><!-- /Menu Section -->

    </main>

    @include('landingPage.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="js/main.js"></script>

</body>

</html>
