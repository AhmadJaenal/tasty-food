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

    @include('screens.landingPage.partials.navbar-transparent')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section background-img">

            <div class="container banner-gallery">
                <div class="row gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up" class="bold secondary-style">KONTAK KAMI</h2><br>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container">
                <h4 style="font-weight: bold;">KONTAK KAMI</h4>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-textfield" id="exampleInputText"
                            placeholder="Subject">
                        <input type="text" class="form-control form-textfield" id="exampleInputText"
                            placeholder="Name">
                        <input type="text" class="form-control form-textfield" id="exampleInputText"
                            placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control form-textarea" id="exampleTextarea" rows="4" placeholder="Message"></textarea>
                    </div>
                </div>
                <a href="#book-a-table" class="btn-get-started mt-4 w-100 text-center rounded"
                    style="height: 50px; font-weight: bold;">KIRIM</a>

                <div class="row" style="margin-top: 200px;">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="../img/icons/icon_message_circle_big.png" width="50px" class="img-fluid"
                                alt="">
                        </div>
                        <p class="mt-2 text-center"><strong>EMAIL</strong> <br> tastyfood@gmail.com</p>
                        <p class="text-center"></p>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="../img/icons/icon_call_circle_big.png" width="50px" class="img-fluid"
                                alt="">
                        </div>
                        <p class="mt-2 text-center"><strong>PHONE</strong> <br> +62 812 3456 7890</p>
                        <p class="text-center"></p>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="../img/icons/icon_place_circle_big.png" width="50px" class="img-fluid"
                                alt="">
                        </div>
                        <p class="mt-2 text-center"><strong>LOCATION</strong> <br> Kota Bandung, Jawa Barat</p>
                        <p class="text-center"></p>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->

        <!-- Contact Section -->
        <section id="maps" class="maps-section">
            <div class="mb-5">
                <iframe style="width: 100%; height: 400px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen="" class="ps-4 pe-4"></iframe>
            </div><!-- End Google Maps -->
        </section><!-- /Contact Section -->

        

    </main>

    @include('screens.landingPage.partials.footer')

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
