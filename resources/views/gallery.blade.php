<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.net/crocs/template/gallery-with-description.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:46:25 GMT -->

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/photoswipe.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
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
                                     -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" data-layout="fill-svg">
                <div>
                    <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid"
                                src="../assets/images/logo/logo.png" alt=""></a>
                        <div class="toggle-sidebar">
                <svg class="sidebar-toggle" width="30" height="30" viewBox="0 0 100 80" fill="black">
                  <rect width="100" height="20"></rect>
                  <rect y="30" width="100" height="20"></rect>
                  <rect y="60" width="100" height="20"></rect>
                </svg>
              </div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="{{ route('index') }}"><img class="img-fluid"
                                src="../assets/images/logo/logo-icon.png" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="{{ route('index') }}"><img class="img-fluid"
                                            src="../assets/images/logo/logo-icon.png" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i
                                            class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>

                                </li>
                                <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title"
                                        href="{{ route('index') }}">
                                        <svg class="stroke-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-home">
                                            </use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-home">
                                            </use>
                                        </svg><span href="{{ route('index') }}">Home</span></a>
                                </li>
                                <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title"
                                        href="{{ route('gallery') }}">
                                        <svg class="stroke-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-gallery">
                                            </use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-gallery">
                                            </use>
                                        </svg><span href="{{ route('gallery') }}">Gallery</span></a>
                                <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title"
                                        href="{{ route('list-products') }}">
                                        <svg class="stroke-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-product">
                                            </use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-product">
                                            </use>
                                        </svg><span href="{{ route('list-products') }}">Product</span></a>
                                <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title"
                                        href="{{ route('program') }}">
                                        <svg class="stroke-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-program">
                                            </use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-program">
                                            </use>
                                        </svg><span href="{{ route('program') }}">Program</span></a>
                                <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title"
                                        href="{{ route('sponsor') }}">
                                        <svg class="stroke-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-sponsor">
                                            </use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use
                                                href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-sponsor">
                                            </use>
                                        </svg><span href="{{ route('sponsor') }}">Sponsor</span></a>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                              <svg class="stroke-icon">
                                                <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-logout"></use>
                                              </svg>
                                              <svg class="fill-icon">
                                                <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-logout"></use>
                                              </svg>
                                              <span>Logout</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                            </form>
                                          </li>
                                    <div class="mega-menu-container menu-content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col mega-box">
                                                    <div class="link-section">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                </li>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6 ps-0">
                                <h3>Gallery Grid</h3>
                            </div>
                            <div class="col-sm-6 pe-0">
                                <ol class="breadcrumb">
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('index') }}">
                                            <svg class="stroke-icon">
                                                <use
                                                    href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-home">
                                                </use>
                                            </svg></a></li> --}}
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ route('gallery.create') }}">Add
                                            Gallery</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Container-fluid starts-->
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Images Gallery</h4>
                            </div>
                            <div class="card-body">
                                @if ($galleries->isEmpty())
                                    <p class="text-muted text-center">No posts available at the moment.</p>
                                @else
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center">Image</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col" class="text-center">Publish Date</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($galleries as $gallery)
                                                <tr>
                                                    <td class="text-center">
                                                        <img src="{{ asset('storage/images/' . $gallery->image) }}" 
                                                    alt="{{ $gallery->title }}" width="100">
                                                    </td>
                                                    <td>{{ $gallery->title }}</td>
                                                    <td>{!! $gallery->description !!}</td> <!-- FIX: Menampilkan deskripsi dengan format HTML -->
                                                    <td class="text-center">{{ \Carbon\Carbon::parse($gallery->publish_date)->format('d F Y') }}</td>
                                                    <td class="text-center">
                                                        <div class="d-flex gap-2 justify-content-center">
                                                            <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-sm btn-outline-primary">
                                                                <i class="fa fa-pen"></i> Edit
                                                            </a>
                                                            <form action="{{ route('gallery.delete', $gallery->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" 
                                                                        class="btn btn-sm btn-outline-danger">
                                                                    <i class="fa fa-trash"></i> Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- Footer -->
            </div>
            <!-- footer start-->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 p-0 footer-copyright">
                            <p class="mb-0">Copyright 2024 © Crocs theme by pixelstrap.</p>
                        </div>
                        <div class="col-md-6 p-0">
                            <p class="heart mb-0">Hand crafted &amp; made with
                                <svg class="footer-icon">
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#heart">
                                    </use>
                                </svg>
                                <style>

                                </style>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
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
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <script src="../assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="../assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="../assets/js/photoswipe/photoswipe.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.net/crocs/template/gallery-with-description.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:46:25 GMT -->

</html>
