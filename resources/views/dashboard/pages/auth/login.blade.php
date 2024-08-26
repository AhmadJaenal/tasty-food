<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendor/feather/feather.css">
    <link rel="stylesheet" href="vendor/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendor/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/typicons/typicons.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="img/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <h3 style="font-weight: bold;">TASYT FOOD</h3>
                            </div>
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
                            <form class="pt-3" method="post" action="{{ route('actionlogin') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">LOGIN</a>
                                </div>
                                {{-- <div class="text-center mt-4 fw-light"> Don't have an account? <a href="register.html"
                                        class="text-primary">Create</a>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendor/js/vendor.bundle.base.js"></script>
    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
