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

    @include('partials.navbar-transparent')

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

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
            </div><!-- End Section Title -->

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
                        <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                href="../img/gallery/gallery-1.jpg"><img src="../img/gallery/gallery-1.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                href="../img/gallery/gallery-2.jpg"><img src="../img/gallery/gallery-2.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                href="../img/gallery/gallery-3.jpg"><img src="../img/gallery/gallery-3.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                href="../img/gallery/gallery-4.jpg"><img src="../img/gallery/gallery-4.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                href="../img/gallery/gallery-5.jpg"><img src="../img/gallery/gallery-5.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                href="../img/gallery/gallery-6.jpg"><img src="../img/gallery/gallery-6.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                href="../img/gallery/gallery-7.jpg"><img src="../img/gallery/gallery-7.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="" data-gallery="images-gallery"
                                href="../img/gallery/gallery-8.jpg"><img src="../img/gallery/gallery-8.jpg"
                                    class="img-fluid" alt=""></a></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
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
                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="menu-item-small">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img-small img-fluid"
                                        alt=""></a>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Starter Menu Content -->

                </div>
            </div>
        </section><!-- /Menu Section -->

    </main>

    @include('partials.footer')

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
