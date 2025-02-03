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
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h3>Sponsor</h3>
                            </div>
                            <div class="col-sm-6 text-end">
                                <ol class="breadcrumb">
                                    {{-- <li class="breadcrumb-item">
                                        <a href="{{ route('index') }}">
                                            <svg class="stroke-icon">
                                                <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg>
                                        </a>
                                    </li> --}}
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="breadcrumb-item active">
                                        <a href="{{ route('sponsor.create') }}">Add Sponsor</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            <!--content-->
                <div class="container-fluid py-4">
                    <div class="row">
                        @if ($sponsors->isEmpty())
                            <div class="col-12 text-center">
                                <p class="text-muted">No sponsors available.</p>
                            </div>
                        @else    
                            <div class="col-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sponsors as $sponsor)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('storage/images/' . $sponsor->image) }}" 
                                                         alt="{{ $sponsor->title }}" 
                                                         class="img-thumbnail" 
                                                         style="max-height: 100px;">
                                                </td>
                                                <td>{{ $sponsor->title }}</td>
                                                <td>
                                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#sponsorModal-{{ $sponsor->id }}">
                                                        <i class="fa fa-eye"></i> View
                                                    </button>
                                                    <a href="{{ route('sponsor.edit', $sponsor->id) }}" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('sponsor.delete', $sponsor->id) }}" method="POST" class="delete-sponsor-form d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-sm btn-danger delete-sponsor-btn">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                    
                                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                                    <script>
                                                    document.addEventListener("DOMContentLoaded", function () {
                                                        document.querySelectorAll(".delete-sponsor-btn").forEach(button => {
                                                            button.addEventListener("click", function () {
                                                                let form = this.closest(".delete-sponsor-form");
                                                    
                                                                Swal.fire({
                                                                    title: "Are you sure?",
                                                                    text: "This action cannot be undone!",
                                                                    icon: "warning",
                                                                    showCancelButton: true,
                                                                    confirmButtonColor: "#d33",
                                                                    cancelButtonColor: "#3085d6",
                                                                    confirmButtonText: "Yes, delete it!"
                                                                }).then((result) => {
                                                                    if (result.isConfirmed) {
                                                                        form.submit();
                                                                    }
                                                                });
                                                            });
                                                        });
                                                    });
                                                    </script>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                            @foreach ($sponsors as $sponsor)
                                <div class="modal fade" id="sponsorModal-{{ $sponsor->id }}" 
                                     tabindex="-1" 
                                     aria-labelledby="sponsorModalLabel-{{ $sponsor->id }}" 
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="sponsorModalLabel-{{ $sponsor->id }}">
                                                    {{ $sponsor->title }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('storage/images/' . $sponsor->image) }}" 
                                                     alt="{{ $sponsor->title }}" 
                                                     class="img-fluid mb-3" style="max-height: 300px; width: auto;">
                                                     <p>{!! $sponsor->content !!}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
                        
            <!-- Container-fluid Ends-->
        </div>
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
                            <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#heart"></use>
                        </svg>
                        <style>

                        </style>
                    </p>
                </div>
            </div>
        </div>
    </footer>
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
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.net/crocs/template/gallery-with-description.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:46:25 GMT -->

</html>
