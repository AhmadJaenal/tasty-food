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
                        <h2 data-aos="fade-up" class="bold secondary-style">KONTAK KAMI</h2><br>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container">
                <h4 style="font-weight: bold;">KONTAK KAMI</h4>
                @if ($message = Session::get('success'))
                    <div id="successAlert" class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('failed'))
                    <div id="failedAlert" class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <form action="{{ route('sendEmail') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control form-textfield" id="subject" name="subject"
                                placeholder="Subject" required>
                            <input type="text" class="form-control form-textfield" id="name" name="name"
                                placeholder="Name" required>
                            <input type="text" class="form-control form-textfield" id="email" name="email"
                                placeholder="Email" required>
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control form-textarea" id="message" name="message" rows="4" placeholder="Message"
                                required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn-get-started mt-4 w-100 text-center rounded"
                        style="height: 50px; font-weight: bold;">KIRIM</button>
                </form>
                <div class="row" style="margin-top: 200px;">
                    @if ($contact)
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="../img/icons/icon_message_circle_big.png" width="50px" class="img-fluid"
                                    alt="">
                            </div>
                            <p class="mt-2 text-center"><strong>EMAIL</strong> <br> {{ $contact->email }}</p>
                            <p class="text-center"></p>
                        </div>

                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="../img/icons/icon_call_circle_big.png" width="50px" class="img-fluid"
                                    alt="">
                            </div>
                            <p class="mt-2 text-center"><strong>PHONE</strong> <br> {{ $contact->phone_number }}</p>
                            <p class="text-center"></p>
                        </div>

                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="../img/icons/icon_place_circle_big.png" width="50px" class="img-fluid"
                                    alt="">
                            </div>
                            <p class="mt-2 text-center"><strong>LOCATION</strong> <br> {{ $contact->location }} </p>
                            <p class="text-center"></p>
                        </div>
                    @endif
                </div>
            </div>
        </section><!-- /Contact Section -->

        <!-- Blade Template -->
        <section id="maps" class="maps-section">
            <div class="mb-5">
                <!-- Simpan lokasi dalam atribut data -->
                <div id="map-container" data-location="{{ $contact['location'] ?? 'Bandung' }}">
                    <iframe id="mapFrame" style="width: 100%; height: 400px;" src="" frameborder="0"
                        allowfullscreen="" class="ps-4 pe-4"></iframe>
                </div>
            </div><!-- End Google Maps -->
        </section><!-- /Contact Section -->


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

    <script src="js/main.js"></script>

    <script src="js/maps.js"></script>

    <script>
        function sendMessage() {
            const form = document.getElementById('messageForm');
            const formData = new FormData(form);

            fetch('/send-message', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('response').innerHTML = data.message;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</body>

</html>
