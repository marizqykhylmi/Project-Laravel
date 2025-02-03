<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.net/crocs/template/{{ route('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:42:58 GMT -->

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
                                <h3>Product</h3>
                            </div>
                            <div class="col-sm-6 pe-0">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">
                                            <svg class="stroke-icon">
                                                <use
                                                    href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-home">
                                                </use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">ECommerce</li>
                                    <li class="breadcrumb-item"><a href="{{ route('add-products') }}">Add
                                            Products</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid product-wrapper">
                    <div class="product-grid">
                        <div class="feature-products">
                            <div class="row">
                                <div class="col-md-6 products-total">
                                    <div class="square-product-setting d-inline-block"><a
                                            class="icon-grid grid-layout-view" href="#" data-original-title=""
                                            title=""><i data-feather="grid"></i></a></div>
                                    <div class="square-product-setting d-inline-block"><a
                                            class="icon-grid m-0 list-layout-view" href="#"
                                            data-original-title="" title=""><i data-feather="list"></i></a>
                                    </div><span class="d-none-productlist filter-toggle">
                                        Filters<span class="ms-2"><i class="toggle-data"
                                                data-feather="chevron-down"></i></span></span>
                                    <div class="grid-options d-inline-block">
                                        <ul>
                                            <li><a class="product-2-layout-view" href="#"
                                                    data-original-title="" title=""><span
                                                        class="line-grid line-grid-1 bg-primary"></span><span
                                                        class="line-grid line-grid-2 bg-primary"></span></a></li>
                                            <li><a class="product-3-layout-view" href="#"
                                                    data-original-title="" title=""><span
                                                        class="line-grid line-grid-3 bg-primary"></span><span
                                                        class="line-grid line-grid-4 bg-primary"></span><span
                                                        class="line-grid line-grid-5 bg-primary"></span></a></li>
                                            <li><a class="product-4-layout-view" href="#"
                                                    data-original-title="" title=""><span
                                                        class="line-grid line-grid-6 bg-primary"></span><span
                                                        class="line-grid line-grid-7 bg-primary"></span><span
                                                        class="line-grid line-grid-8 bg-primary"></span><span
                                                        class="line-grid line-grid-9 bg-primary"></span></a></li>
                                            <li><a class="product-6-layout-view" href="#"
                                                    data-original-title="" title=""><span
                                                        class="line-grid line-grid-10 bg-primary"></span><span
                                                        class="line-grid line-grid-11 bg-primary"></span><span
                                                        class="line-grid line-grid-12 bg-primary"></span><span
                                                        class="line-grid line-grid-13 bg-primary"></span><span
                                                        class="line-grid line-grid-14 bg-primary"></span><span
                                                        class="line-grid line-grid-15 bg-primary"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 text-sm-end"><span class="m-r-5">Showing Products 1 - 24 Of 200
                                        Results</span>
                                    <div class="select2-drpdwn-product select-options d-inline-block">
                                        <select class="form-control btn-square" name="select">
                                            <option value="opt1">Featured</option>
                                            <option value="opt2">Lowest Prices</option>
                                            <option value="opt3">Highest Prices</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="product-sidebar">
                                        <div class="filter-section">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h6 class="mb-0">Filters<span class="pull-right"><i
                                                                class="fa fa-chevron-down toggle-data"></i></span></h6>
                                                </div>
                                                <div class="left-filter filter-sidebar custom-scrollbar">
                                                    <div class="card-body filter-cards-view animate-chk">
                                                        <div class="product-filter">
                                                            <h3>Category</h3>
                                                            <div class="checkbox-animated mt-0">
                                                                <label class="d-block" for="edo-ani5">
                                                                    <input class="checkbox_animated" id="edo-ani5"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Man Shirt
                                                                </label>
                                                                <label class="d-block" for="edo-ani6">
                                                                    <input class="checkbox_animated" id="edo-ani6"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Man Jeans
                                                                </label>
                                                                <label class="d-block" for="edo-ani7">
                                                                    <input class="checkbox_animated" id="edo-ani7"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Woman Top
                                                                </label>
                                                                <label class="d-block" for="edo-ani8">
                                                                    <input class="checkbox_animated" id="edo-ani8"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Woman Jeans
                                                                </label>
                                                                <label class="d-block" for="edo-ani9">
                                                                    <input class="checkbox_animated" id="edo-ani9"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Man T-shirt
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="product-filter">
                                                            <h3>Brand</h3>
                                                            <div class="checkbox-animated mt-0">
                                                                <label class="d-block" for="chk-ani">
                                                                    <input class="checkbox_animated" id="chk-ani"
                                                                        type="checkbox" data-original-title=""
                                                                        title=""> Levi's
                                                                </label>
                                                                <label class="d-block" for="chk-ani1">
                                                                    <input class="checkbox_animated" id="chk-ani1"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Diesel
                                                                </label>
                                                                <label class="d-block" for="chk-ani2">
                                                                    <input class="checkbox_animated" id="chk-ani2"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Lee
                                                                </label>
                                                                <label class="d-block" for="chk-ani3">
                                                                    <input class="checkbox_animated" id="chk-ani3"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Hudson
                                                                </label>
                                                                <label class="d-block" for="chk-ani4">
                                                                    <input class="checkbox_animated" id="chk-ani4"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Denizen
                                                                </label>
                                                                <label class="d-block" for="chk-ani5">
                                                                    <input class="checkbox_animated" id="chk-ani5"
                                                                        type="checkbox" data-original-title=""
                                                                        title="">Spykar
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="product-filter slider-product">
                                                            <h3>Colors</h3>
                                                            <div class="color-selector">
                                                                <ul>
                                                                    <li class="white"></li>
                                                                    <li class="gray"></li>
                                                                    <li class="black"></li>
                                                                    <li class="orange"></li>
                                                                    <li class="green"></li>
                                                                    <li class="pink"></li>
                                                                    <li class="yellow"></li>
                                                                    <li class="blue"></li>
                                                                    <li class="red"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-filter pb-0">
                                                            <h3>Price</h3>
                                                            <input id="u-range-03" type="text">
                                                            <h3>New Products</h3>
                                                        </div>
                                                        <div class="product-filter pb-0 new-products">
                                                            <div class="owl-carousel owl-theme" id="testimonial">
                                                                <div class="item">
                                                                    <div class="product-box row">
                                                                        <div class="product-img col-md-5"><img
                                                                                class="img-fluid img-100"
                                                                                src="../assets/images/ecommerce/01.jpg"
                                                                                alt="" data-original-title=""
                                                                                title=""></div>
                                                                        <div
                                                                            class="product-details col-md-7 text-start">
                                                                            <span><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning"></i></span>
                                                                            <p class="mb-0">Woman T-shirt</p>
                                                                            <div class="product-price">$100.00</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-box row">
                                                                        <div class="product-img col-md-5"><img
                                                                                class="img-fluid img-100"
                                                                                src="../assets/images/ecommerce/02.jpg"
                                                                                alt="" data-original-title=""
                                                                                title=""></div>
                                                                        <div
                                                                            class="product-details col-md-7 text-start">
                                                                            <span><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning"></i></span>
                                                                            <p class="mb-0">Dream Beauty Fashion</p>
                                                                            <div class="product-price">$150.00</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-box row">
                                                                        <div class="product-img col-md-5"><img
                                                                                class="img-fluid img-100"
                                                                                src="../assets/images/ecommerce/03.jpg"
                                                                                alt="" data-original-title=""
                                                                                title=""></div>
                                                                        <div
                                                                            class="product-details col-md-7 text-start">
                                                                            <span><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning"></i></span>
                                                                            <p class="mb-0">VOXATI</p>
                                                                            <div class="product-price">$200.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="product-box row">
                                                                        <div class="product-img col-md-5"><img
                                                                                class="img-fluid img-100"
                                                                                src="../assets/images/ecommerce/01.jpg"
                                                                                alt="" data-original-title=""
                                                                                title=""></div>
                                                                        <div
                                                                            class="product-details col-md-7 text-start">
                                                                            <span><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning"></i></span>
                                                                            <p class="mb-0">Fancy Shirt</p>
                                                                            <div class="product-price">$100.00</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-box row">
                                                                        <div class="product-img col-md-5"><img
                                                                                class="img-fluid img-100"
                                                                                src="../assets/images/ecommerce/02.jpg"
                                                                                alt="" data-original-title=""
                                                                                title=""></div>
                                                                        <div
                                                                            class="product-details col-md-7 text-start">
                                                                            <span><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning"></i></span>
                                                                            <p class="mb-0">Fancy Shirt</p>
                                                                            <div class="product-price">$100.00</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-box row">
                                                                        <div class="product-img col-md-5"><img
                                                                                class="img-fluid img-100"
                                                                                src="../assets/images/ecommerce/03.jpg"
                                                                                alt="" data-original-title=""
                                                                                title=""></div>
                                                                        <div
                                                                            class="product-details col-md-7 text-start">
                                                                            <span><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning me-1"></i><i
                                                                                    class="fa fa-star font-warning"></i></span>
                                                                            <p class="mb-0">Fancy Shirt</p>
                                                                            <div class="product-price">$100.00 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-filter text-center"><img
                                                                class="img-fluid banner-product"
                                                                src="../assets/images/ecommerce/banner.jpg"
                                                                alt="" data-original-title="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-12">
                                    <form>
                                        <div class="form-group m-0">
                                            <input class="form-control" type="search" placeholder="Search.."
                                                data-original-title="" title=""><i class="fa fa-search"></i>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper-grid">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="card">
                                        <div class="product-box">
                                            <div class="product-img"><img class="img-fluid"
                                                    src="../assets/images/ecommerce/01.jpg" alt="">
                                                <div class="product-hover">
                                                    <ul>
                                                        <li><a href="{{ route('cart') }}"><i
                                                                    class="icon-shopping-cart"></i></a></li>
                                                        <li><a data-bs-toggle="modal"
                                                                data-bs-target="#exampleModalCenter"><i
                                                                    class="icon-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenter"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered"
                                                    role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <div class="product-box row">
                                                                <div class="product-img col-lg-6"><img
                                                                        class="img-fluid"
                                                                        src="../assets/images/ecommerce/01.jpg"
                                                                        alt=""></div>
                                                                <div class="product-details col-lg-6 text-start">
                                                                    <h4>Women's Top</h4>
                                                                    <div class="product-price">$50.00
                                                                        <del>$35.00 </del>
                                                                    </div>
                                                                    <div class="product-view">
                                                                        <h3>Product Details</h3>
                                                                        <p class="mb-0">Rock Paper Scissors Women
                                                                            Tank Top High Neck Cotton Top Stylish Women
                                                                            Top..</p>
                                                                    </div>
                                                                    <div class="product-size">
                                                                        <ul>
                                                                            <li>
                                                                                <button class="btn btn-light"
                                                                                    type="button">M</button>
                                                                            </li>
                                                                            <li>
                                                                                <button class="btn btn-light"
                                                                                    type="button">L</button>
                                                                            </li>
                                                                            <li>
                                                                                <button class="btn btn-light"
                                                                                    type="button">Xl</button>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="product-qnty">
                                                                        <h3>Quantity</h3>
                                                                        <fieldset>
                                                                            <div class="input-group">
                                                                                <input class="touchspin text-center"
                                                                                    type="text" value="5">
                                                                            </div>
                                                                        </fieldset>
                                                                        <div class="addcart-btn"><a
                                                                                class="btn btn-primary"
                                                                                href="{{ route('cart') }}">Add to
                                                                                Cart</a><a class="btn btn-primary ms-2"
                                                                                href="product-page.html">View
                                                                                Details</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn-close" type="button"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <div class="rating"><i class="fa fa-star"></i><i
                                                        class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                        class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a
                                                    href="product-page.html">
                                                    <h4>Women's Top</h4>
                                                </a>
                                                <p>Regular Flare Fit Women's white Top</p>
                                                <div class="product-price">$50.00
                                                    <del>$35.00 </del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
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
    <script src="../assets/js/range-slider/ion.rangeSlider.min.js"></script>
    <script src="../assets/js/range-slider/rangeslider-script.js"></script>
    <script src="../assets/js/touchspin/vendors.min.js"></script>
    <script src="../assets/js/touchspin/touchspin.js"></script>
    <script src="../assets/js/touchspin/input-groups.min.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/product-tab.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.net/crocs/template/{{ route('product') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:44:39 GMT -->

</html>
