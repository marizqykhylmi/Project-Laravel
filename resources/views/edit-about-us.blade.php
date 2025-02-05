<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.net/crocs/template/add-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:46:27 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Crocs admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Crocs admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Crocs - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/vector-map.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/fullcalender.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body onload="startTime()">
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid for-light"
                                src="../assets/images/logo/logo-1.png" alt=""><img class="img-fluid for-dark"
                                src="../assets/images/logo/logo.png" alt=""></a></div>
                    <div class="toggle-sidebar">
                        <svg class="sidebar-toggle">
                            <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-animation">
                            </use>
                        </svg>
                    </div>
                </div>

                <div class="nav-right col-xxl-7 col-xl-6 col-auto box-col-6 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Body Start-->
            <div class="page-body-wrapper">
                <!-- Page Sidebar Start-->

                <!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="mb-4 fw-bold text-primary">Edit {{ ucfirst($type) }}</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-header bg-primary text-white text-center">
                            <h5 class="mb-0">Edit {{ ucfirst($type) }} Content</h5>
                        </div>
                        <div class="card-body p-4">
                            <form action="{{ route('update-content', ['type' => $type, 'id' => $content->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="type" value="{{ $type }}">

                                @if ($type == 'team')
                                    <div class="mb-3">
                                        <label for="name" class="form-label fw-semibold">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $content->name) }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label fw-semibold">Upload Image</label>
                                        @if ($content->image)
                                            <div class="mb-2 text-center">
                                                <img src="{{ asset('storage/' . $content->image) }}" alt="Current Image" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;">
                                            </div>
                                        @endif
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="content" class="form-label fw-semibold">Content</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="5" required>{{ old('content', $content->content) }}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                    <button type="submit" class="btn btn-primary shadow-sm px-4">Update</button>
                                    <a href="{{ route('index') }}" class="btn btn-outline-secondary shadow-sm px-4">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                </div> <!-- End page-body -->

        <!-- latest jquery-->
        <script src="../assets/js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <script src="../assets/js/scrollbar/simplebar.js"></script>
        <script src="../assets/js/scrollbar/custom.js"></script>
        <!-- Sidebar jquery-->
        <script src="../assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <script src="../assets/js/sidebar-menu.js"></script>
        <script src="../assets/js/sidebar-pin.js"></script>
        <script src="../assets/js/clock.js"></script>
        <script src="../assets/js/calendar/fullcalendar.min.js"></script>
        <script src="../assets/js/calendar/fullcalendar-custom.js"></script>
        <script src="../assets/js/calendar/fullcalender.js"></script>
        <script src="../assets/js/calendar/custom-calendar.js"></script>
        <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
        <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
        <script src="../assets/js/chart/apex-chart/moment.min.js"></script>
        <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
        <script src="../assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
        <script src="../assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="../assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
        <script src="../assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
        <script src="../assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
        <script src="../assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
        <script src="../assets/js/dashboard/default.js"></script>
        <script src="../assets/js/notify/index.js"></script>
        <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
        <script src="../assets/js/datatable/datatables/datatable.custom1.js"></script>
        <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
        <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
        <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
        <script src="../assets/js/typeahead/handlebars.js"></script>
        <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
        <script src="../assets/js/typeahead/typeahead.custom.js"></script>
        <script src="../assets/js/typeahead-search/handlebars.js"></script>
        <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
        <script src="../assets/js/vector-map/map-vector.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="../assets/js/script.js"></script>
        <script src="../assets/js/theme-customizer/customizer.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Include Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.net/crocs/template/{{ route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:43:58 GMT -->

</html>
