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

    @include('landingPage.partials.navbar')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <div class="container banner">
                <div class="row gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up" class="bold">HEALTHY</h1><br>
                        <h1 data-aos="fade-up">TASTY FOOD</h1>
                        <p data-aos="fade-up" data-aos-delay="100">We are team of talented designers making websites
                            with Bootstrap</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="#book-a-table" class="btn-get-started">Tentang Kami</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 hero-img">
                        <img src="img/hero-img.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p><span>TENTANG KAMI</span></p>
                <div class="container" style="width: 600px; margin-top: 30px">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, lacus et suscipit
                        vehicula, ligula nulla dictum massa, a iaculis odio purus ut nisi. Fusce sit amet libero a ante
                        ultrices congue nec et nisi. Nam id justo ut est faucibus tincidunt. Integer efficitur ligula eu
                        dolor vehicula, a interdum ipsum feugiat. Curabitur ultricies mauris sed magna tempor, sed
                        tempor elit malesuada. Nulla facilisi. Proin fermentum justo sit amet nisi vehicula, eget
                        scelerisque nulla sodales.</h6>
                </div>
                <br>
                <div class="container separator-line"></div>
            </div>

        </section><!-- /About Section -->

        <!-- Food Section -->
        <section id="food" class="food-section">
            <div class="row">
                <div class="card-food column">
                    <img src="../img/menu/img_menu_1.png" alt="Food Image" class="food-img out-of-container">
                    <h2 class="food-name">Makanan Manis</h2>
                    <p class="food-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                        lacus et suscipit vehicula, ligula nulla dictum massa.</p>
                </div>
                <div class="card-food column">
                    <img src="../img/menu/img_menu_2.png" alt="Food Image" class="food-img out-of-container">
                    <h2 class="food-name">Item 1</h2>
                    <p class="food-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                        lacus et suscipit vehicula, ligula nulla dictum massa.</p>
                </div>
                <div class="card-food column">
                    <img src="../img/menu/img_menu_3.png" alt="Food Image" class="food-img out-of-container">
                    <h2 class="food-name">Item 2</h2>
                    <p class="food-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                        lacus et suscipit vehicula, ligula nulla dictum massa.</p>
                </div>
                <div class="card-food column">
                    <img src="../img/menu/img_menu_4.png" alt="Food Image" class="food-img out-of-container">
                    <h2 class="food-name">Item 3</h2>
                    <p class="food-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet,
                        lacus et suscipit vehicula, ligula nulla dictum massa.</p>
                </div>
            </div>
        </section><!-- /Food Section -->

        <!-- News Section -->
        <section id="title" class="title section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p><span>BERITA KAMI</span></p>
            </div>
            <div class="news-section">
                <div class="card mb-3 card-news single-news">
                    <img src="../img/news/img_product_14.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="information">
                            <p class="card-text"><small class="text-body-secondary">Baca Selengkapnya</small></p>
                            <p class="card-text"><small class="text-body-secondary">Setting</small></p>
                        </div>
                    </div>
                </div>
                <div class="card-news card-grid">
                    <div class="card mb-3 card-news-grid">
                        <img src="../img/news/img_product_14.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <div class="information">
                                <p class="card-text"><small class="text-body-secondary">Baca Selengkapnya</small></p>
                                <p class="card-text"><small class="text-body-secondary">Setting</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 card-news-grid">
                        <img src="../img/news/img_product_14.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <div class="information">
                                <p class="card-text"><small class="text-body-secondary">Baca Selengkapnya</small></p>
                                <p class="card-text"><small class="text-body-secondary">Setting</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 card-news-grid">
                        <img src="../img/news/img_product_14.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <div class="information">
                                <p class="card-text"><small class="text-body-secondary">Baca Selengkapnya</small></p>
                                <p class="card-text"><small class="text-body-secondary">Setting</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 card-news-grid">
                        <img src="../img/news/img_product_14.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <div class="spacer"></div>
                            <div class="information">
                                <p class="card-text"><small class="text-body-secondary">Baca Selengkapnya</small></p>
                                <p class="card-text"><small class="text-body-secondary">Setting</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /News Section -->

        <!-- Menu Section -->
        <section id="gallery-menu" class="gallery-menu section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p><span>GALERI KAMI</span></p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade active show" id="menu-starters">
                        <div class="row gy-3 gx-2">

                            <div class="col-lg-4 menu-item">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img img-fluid" alt=""></a>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img img-fluid" alt=""></a>
                            </div><!-- Menu Item -->
                            
                            <div class="col-lg-4 menu-item">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img img-fluid" alt=""></a>
                            </div><!-- Menu Item -->
                            
                            <div class="col-lg-4 menu-item">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img img-fluid" alt=""></a>
                            </div><!-- Menu Item -->
                            
                            <div class="col-lg-4 menu-item">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img img-fluid" alt=""></a>
                            </div><!-- Menu Item -->
                            
                            <div class="col-lg-4 menu-item">
                                <a href="img/products/img_product_5.jpg" class="glightbox"><img
                                        src="img/products/img_product_5.jpg" class="menu-img img-fluid" alt=""></a>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Starter Menu Content -->

                </div>
                
            </div>
            
            <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200" style="margin-top: 40px;">
                <a href="#book-a-table" class="btn-get-started">LIHAT LEBIH BANYAK</a>
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
