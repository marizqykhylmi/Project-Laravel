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
                <div class="left-header col-xxl-5 col-xl-6 col-md-4 col-auto box-col-6 horizontal-wrapper p-0">
                    <div class="left-menu-header">
                        <ul class="header-left">
                            <li>
                                <div class="form-group w-100">
                                    <div class="Typeahead Typeahead--twitterUsers">
                                        <div class="u-posRelative d-flex">
                                            <i class="fas fa-search search-bg svg-color me-2"></i>
                                            <!-- Menggunakan Font Awesome -->
                                            <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100"
                                                type="text" placeholder="Search anything..." name="q"
                                                title="">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-right col-xxl-7 col-xl-6 col-auto box-col-6 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">
                        <li class="serchinput">
                            <div class="serchbox">
                                <svg>
                                    <use
                                        href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-search">
                                    </use>
                                </svg>
                            </div>
                            <div class="form-group search-form">
                                <input type="text" placeholder="Search here...">
                            </div>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <i class="fa fa-bell animated-icon"></i>
                                <span class="badge rounded-pill badge-primary">3</span>

                                <style>
                                    .animated-icon {
                                        animation: bell-shake 1.5s infinite;
                                    }

                                    @keyframes bell-shake {

                                        0%,
                                        100% {
                                            transform: rotate(0);
                                        }

                                        25% {
                                            transform: rotate(-15deg);
                                        }

                                        50% {
                                            transform: rotate(15deg);
                                        }

                                        75% {
                                            transform: rotate(-15deg);
                                        }
                                    }

                                    /* Tombol switch theme */
                                    .theme-toggle-btn {
                                        background-color: transparent;
                                        border: none;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        padding: 10px;
                                        cursor: pointer;
                                        border-radius: 50%;
                                        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
                                        transition: all 0.3s ease;
                                    }

                                    .theme-toggle-btn:hover {
                                        background-color: rgba(0, 0, 0, 0.1);
                                    }

                                    .theme-icon {
                                        width: 20px;
                                        height: 20px;
                                        fill: #333;
                                        transition: all 0.3s ease;
                                    }

                                    /* Dark mode toggle */
                                    body.dark-mode .theme-toggle-btn .theme-icon {
                                        transform: rotate(180deg);
                                        fill: #fff;
                                    }
                                </style>

                                <div class="onhover-show-div notification-dropdown">
                                    <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
                                    <div class="d-flex align-items-center"><img
                                            src="../assets/images/dashboard/user/5.png" alt="">
                                        <div class="flex-grow-1 ms-2"><a href="{{ route('user-profile') }}">
                                                <h5>
                                                    Ralph Edwards <strong> wants to edit </strong> tetrisly design
                                                    system</h5><span>2hrs Ago</span>
                                            </a></div>
                                        <div class="flex-shrink-0">
                                            <div class="activity-dot-primary"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center"><img
                                            src="../assets/images/dashboard/user/6.png" alt="">
                                        <div class="flex-grow-1 ms-2"><a href="{{ route('user-profile') }}">
                                                <h5>
                                                    Jenny Wilson <strong> Completed </strong> Create new component</h5>
                                                <span>2.15pm</span>
                                            </a></div>
                                        <div class="flex-shrink-0">
                                            <div class="activity-dot-secondary"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center figma-line"><img
                                            src="../assets/images/dashboard/user/7.png" alt="">
                                        <div class="flex-grow-1 ms-2"><a href="{{ route('user-profile') }}">
                                                <h5>Jenny Wilson mentioned you in rewrite button component</h5>
                                                <span>3.10pm</span>
                                            </a></div>
                                    </div>
                                </div>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="icon-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="black" stroke="black" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                    <div class="onhover-show-div bookmark-flip">
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                                <div class="front">
                                                    <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                                                    <ul class="bookmark-dropdown">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-4 text-center">
                                                                    <div class="bookmark-content">
                                                                        <div class="bookmark-icon"><i
                                                                                data-feather="file-text"></i></div>
                                                                        <span>Forms</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 text-center">
                                                                    <div class="bookmark-content">
                                                                        <div class="bookmark-icon"><i
                                                                                data-feather="user"></i></div>
                                                                        <span>Profile</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 text-center">
                                                                    <div class="bookmark-content">
                                                                        <div class="bookmark-icon"><i
                                                                                data-feather="server"></i></div>
                                                                        <span>Tables</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="text-center"><a class="flip-btn f-w-700"
                                                                id="flip-btn" href="javascript:void(0)">Add New
                                                                Bookmark</a></li>
                                                    </ul>
                                                </div>
                                                <div class="back">
                                                    <ul>
                                                        <li>
                                                            <div class="bookmark-dropdown flip-back-content">
                                                                <input type="text" placeholder="search...">
                                                            </div>
                                                        </li>
                                                        <li><a class="f-w-700 d-block flip-back" id="flip-back"
                                                                href="javascript:void(0)">Back</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </li>
                        <li>
                            <div class="mode">
                                <button id="theme-toggle" class="theme-toggle-btn">
                                    <svg class="theme-icon" width="24" height="24">
                                        <use
                                            href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-dark">
                                        </use>
                                    </svg>
                                </button>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="message">
                                <svg class="message-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="#6c757d" width="24" height="24">
                                    <path
                                        d="M20 2H4a2 2 0 0 0-2 2v14l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM4 4h16v10H6.83L4 16.83V4z" />
                                </svg>

                                <span class="badge rounded-pill badge-secondary">4</span>
                            </div>
                            <div class="onhover-show-div message-dropdown">
                                <h6 class="f-18 mb-0 dropdown-title">Message</h6>
                                <ul>
                                    <li>
                                        <div class="d-flex align-items-start">
                                            <div class="message-img bg-light-primary"><img
                                                    src="../assets/images/user/3.jpg" alt=""></div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1"><a href="email_inbox.html">Helen Walter</a></h5>
                                                <p>Do you want to go see movie?</p>
                                            </div>
                                            <div class="notification-right"><i data-feather="x"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start">
                                            <div class="message-img bg-light-primary"><img
                                                    src="../assets/images/user/6.jpg" alt=""></div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                                                <p>Thank you for rating us.</p>
                                            </div>
                                            <div class="notification-right"><i data-feather="x"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-start">
                                            <div class="message-img bg-light-primary"><img
                                                    src="../assets/images/user/10.jpg" alt=""></div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                                                <p>What`s the project report update?</p>
                                            </div>
                                            <div class="notification-right"><i data-feather="x"></i></div>
                                        </div>
                                    </li>
                                    <li><a class="f-w-700" href="chat.html">Check all</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="cart-nav onhover-dropdown">
                            <div class="cart-box">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="cart-dropdown onhover-show-div">
                                <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                                <ul>
                                    <li>
                                        <div class="d-flex"><img class="img-fluid b-r-5 img-60"
                                                src="../assets/images/ecommerce/06.jpg" alt="">
                                            <div class="flex-grow-1"><span>Winter T-shirt</span>
                                                <h6>1 X $ 299.00</h6>
                                            </div>
                                            <div class="close-circle"><a href="#"><i
                                                        class="fa fa-times"></i></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex"><img class="img-fluid b-r-5 img-60"
                                                src="../assets/images/ecommerce/02.jpg" alt="">
                                            <div class="flex-grow-1"><span>Men Shirt</span>
                                                <h6>1 X $ 299.00</h6>
                                            </div>
                                            <div class="close-circle"><a href="#"><i
                                                        class="fa fa-times"></i></a></div>
                                        </div>
                                    </li>
                                    <li class="total">
                                        <h5 class="mb-0">Subtotal :<span class="f-right">$299.00</span></h5>
                                    </li>
                                    <li><a class="view-cart" href="{{ route('cart') }}">View Cart</a><a
                                            class="view-checkout f-right" href="{{ route('checkout') }}">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="profile-nav onhover-dropdown p-0">
                            <div class="d-flex align-items-center profile-media"><img class="b-r-10 img-40"
                                    src="../assets/images/dashboard/noprofile.png" alt="">
                                <div class="flex-grow-1"><span>User</span>
                                    <p class="mb-0">UI Designer </p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a>
                                </li>
                                <li><a href="email-application.html"><i data-feather="mail"></i><span>Inbox</span></a>
                                </li>
                                <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a>
                                </li>
                                <li><a href="edit-profile.html"><i
                                            data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a href="{{ route('login') }}"><i data-feather="log-in">
                                        </i><span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
              <div class="ProfileCard u-cf">
              <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
              <div class="ProfileCard-details">
              <div class="ProfileCard-realName"></div>
              </div>
              </div>
            </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Body Start-->
            <div class="page-body-wrapper">
                <!-- Page Sidebar Start-->
                <div class="sidebar-wrapper" data-layout="fill-svg">
                    <div>
                        <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid"
                                    src="../assets/images/logo/logo.png" alt=""></a>
                            <div class="toggle-sidebar">
                                <svg class="sidebar-toggle">
                                    <use
                                        href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#toggle-icon">
                                    </use>
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
                                    <li class="sidebar-list"><i class=""></i><a
                                            class="sidebar-link sidebar-title" href="{{ route('index') }}">
                                            <svg class="stroke-icon">
                                                <use
                                                    href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-home">
                                                </use>
                                            </svg>
                                            <svg class="fill-icon">
                                                <use
                                                    href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-home">
                                                </use>
                                            </svg><span href="{{ route('index') }}">Default</span></a>

                                    </li>
                                    <li class="sidebar-list"><i class=""></i><a
                                            class="sidebar-link sidebar-title" href="{{ route('gallery') }}">
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
                                    <li class="sidebar-list"><i class=""></i><a
                                            class="sidebar-link sidebar-title" href="{{ route('list-products') }}">
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
                                    <li class="sidebar-list"><i class=""></i><a
                                            class="sidebar-link sidebar-title" href="{{ route('program') }}">
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
                                    <li class="sidebar-list"><i class=""></i><a
                                            class="sidebar-link sidebar-title" href="{{ route('sponsor') }}">
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
                                <div class="col-md-12">
                                    <h4 class="mb-3">Edit {{ ucfirst($type) }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Edit {{ ucfirst($type) }} Content</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('update-content', ['type' => $type, 'id' => $content->id]) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="type" value="{{ $type }}">

                                                @if ($type == 'team')
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $content->name) }}" required>
                                                        @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Upload Image</label>
                                                        @if ($content->image)
                                                            <div class="mb-2">
                                                                <img src="{{ asset('storage/' . $content->image) }}" alt="Current Image" class="img-fluid rounded" style="width: 150px; height: 150px; object-fit: cover;">
                                                            </div>
                                                        @endif
                                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                                        @error('image')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                @endif

                                                <div class="mb-3">
                                                    <label for="content" class="form-label">Content</label>
                                                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="5" required>{{ old('content', $content->content) }}</textarea>
                                                    @error('content')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <a href="{{ route('index') }}" class="btn btn-secondary">Cancel</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End container-fluid -->
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
                                        <use
                                            href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#heart">
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
