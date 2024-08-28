<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">

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
        <!-- partial:../../partials/_navbar.html -->
        @include('dashboard.partials.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            @include('dashboard.partials.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Image Slider</h4>
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

                                    <div class="table-responsive">
                                        <button type="submit" class="badge badge-success me-2" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Add New Image Slider</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New
                                                            Image</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form class="forms-sample" method="POST"
                                                        enctype="multipart/form-data" action="{{ route('addImageSlider') }}">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="exampleInputConfirmPassword1">Image Slider</label>
                                                                    <input class="form-control" type="file"
                                                                        id="formFile" name="image" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="badge badge-danger me-2"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="badge badge-info me-2">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> Image </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($imageSlider as $image)
                                                    <tr>
                                                        <td class="">
                                                            <img src="{{ $image->url_img }}" alt="image" />
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <button type="submit"
                                                                    class="badge badge-info me-2" data-bs-toggle="modal"
                                                                    data-bs-target="#editModal">Edit</button>

                                                                    <div class="modal fade" id="editModal" tabindex="-1"
                                                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="editModalLabel">Update
                                                                                    Image</h1>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <form class="forms-sample" method="POST"
                                                                            enctype="multipart/form-data" action="{{ route('updateImageSlider', $image->id) }}">
                                                                                @csrf
                                                                                <div class="modal-body">
                                                                                    <div class="card-body">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleInputConfirmPassword1">Image</label>
                                                                                            <input class="form-control" type="file"
                                                                                                id="formFile" name="image">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="badge badge-danger me-2"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="badge badge-info me-2">Save</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <form action="{{ route('deleteImageSlider', $image->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Are you sure you want to delete this image?');">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="badge badge-danger me-2">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                @include('dashboard.partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
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
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            function hideAlertAfterDelay(alertId, delay) {
                var alertElement = document.getElementById(alertId);
                if (alertElement) {
                    setTimeout(() => {
                        alertElement.style.display = 'none';
                    }, delay);
                }
            }

            hideAlertAfterDelay('successAlert', 5000);
            hideAlertAfterDelay('failedAlert', 5000);
        });
    </script>
</body>

</html>
