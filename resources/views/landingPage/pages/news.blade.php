<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>News</title>
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
                        <h2 data-aos="fade-up" class="bold secondary-style">BERITA KAMI</h2><br>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section" style="background-color: #F4F4F4">
            <div class="container">
                <div class="row gy-4 d-flex align-items-center">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="image-news">
                            <img src="..\img\news\img_product_12.jpg" class="img-fluid mb-4" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="content ps-0 ps-lg-4  ">
                            <h3 style="font-weight: bold;">APA SAJA MAKANAN KHAS NUSANTARA?</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur numquam ipsam esse
                                repudiandae repellendus consequatur nobis optio incidunt! Veniam dignissimos ea
                                corrupti, explicabo animi nemo illum et earum facilis totam!
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non iure voluptatum sapiente
                                explicabo dignissimos debitis qui consectetur rerum aliquid, quidem atque, unde ab sint
                                facere! Veniam officia suscipit et nobis.
                            </p>
                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200" style="margin-top: 40px;">
                                <a href="#book-a-table" class="btn-get-started">BACA SELENGKAPNYA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- News Section -->
        <section id="title" class="title section" style="background-color: #FFFFFF">
            <!-- Section Title -->
            <div class="container mb-4" data-aos="fade-up">
                <h4><strong>BERITA LAINYA</strong></h4>
            </div>
            <div class="news-section">
                <div class="container">
                    <div class="row justify-content-start">
                        @foreach ($news as $itemNews)
                            <div class="col-lg-3 mb-4">
                                <div class="card mb-3 card-news-mini">
                                    <img src="{{ $itemNews->url_img }}" class="card-news-img-mini" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>{{ $itemNews->title }}</strong></h5>
                                        <p class="card-text">{{ $itemNews->content }}</p>
                                        <div class="information">
                                            <a href="">
                                                <p style="color: #fcb407">Baca Selengkapnya</p>
                                            </a>
                                            <a href=""><img src="img/icon_option.png" alt=""
                                                    width="32px" height="32px"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section><!-- /News Section -->
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
