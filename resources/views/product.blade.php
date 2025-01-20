<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/crocs/template/{{ route ('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:42:58 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crocs admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Crocs admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Crocs - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
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
            <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid for-light" src="../assets/images/logo/logo-1.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle"> 
                <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-animation"></use>
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
                        <i class="fas fa-search search-bg svg-color me-2"></i> <!-- Menggunakan Font Awesome -->
                        <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search anything..." name="q" title="">
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
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-search"></use>
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
                  0%, 100% {
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
                  <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/5.png" alt="">
                    <div class="flex-grow-1 ms-2"><a href="{{route ('user-profile')}}">
                        <h5>
                           Ralph Edwards <strong> wants to edit </strong> tetrisly design system</h5><span>2hrs Ago</span></a></div>
                    <div class="flex-shrink-0"> 
                      <div class="activity-dot-primary"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/6.png" alt="">
                    <div class="flex-grow-1 ms-2"><a href="{{route ('user-profile')}}">
                        <h5>
                           Jenny Wilson <strong> Completed </strong> Create new component</h5><span>2.15pm</span></a></div>
                    <div class="flex-shrink-0"> 
                      <div class="activity-dot-secondary"></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center figma-line"><img src="../assets/images/dashboard/user/7.png" alt="">
                    <div class="flex-grow-1 ms-2"><a href="{{route ('user-profile')}}">
                        <h5>Jenny Wilson mentioned you in rewrite button component</h5><span>3.10pm</span></a></div>
                  </div>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="icon-container">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="black" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
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
                                  <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                                </div>
                              </div>
                              <div class="col-4 text-center">
                                <div class="bookmark-content">
                                  <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
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
                      <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-dark"></use>
                    </svg>
                  </button>
              </li>
              <li class="onhover-dropdown">
                <div class="message">
                  <svg class="message-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#6c757d" width="24" height="24">
                    <path d="M20 2H4a2 2 0 0 0-2 2v14l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM4 4h16v10H6.83L4 16.83V4z"/>
                  </svg>
                  
                  <span class="badge rounded-pill badge-secondary">4</span>
                </div>                                
                <div class="onhover-show-div message-dropdown">
                  <h6 class="f-18 mb-0 dropdown-title">Message</h6>
                  <ul>
                    <li>
                      <div class="d-flex align-items-start">
                        <div class="message-img bg-light-primary"><img src="../assets/images/user/3.jpg" alt=""></div>
                        <div class="flex-grow-1">
                          <h5 class="mb-1"><a href="email_inbox.html">Helen Walter</a></h5>
                          <p>Do you want to go see movie?</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-start">
                        <div class="message-img bg-light-primary"><img src="../assets/images/user/6.jpg" alt=""></div>
                        <div class="flex-grow-1">
                          <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                          <p>Thank you for rating us.</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex align-items-start">
                        <div class="message-img bg-light-primary"><img src="../assets/images/user/10.jpg" alt=""></div>
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
                      <div class="d-flex"><img class="img-fluid b-r-5 img-60" src="../assets/images/ecommerce/06.jpg" alt="">
                        <div class="flex-grow-1"><span>Winter T-shirt</span>
                          <h6>1 X $ 299.00</h6>
                        </div>
                        <div class="close-circle"><a href="#"><i class="fa fa-times"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 img-60" src="../assets/images/ecommerce/02.jpg" alt="">
                        <div class="flex-grow-1"><span>Men Shirt</span>
                          <h6>1 X $ 299.00</h6>
                        </div>
                        <div class="close-circle"><a href="#"><i class="fa fa-times"></i></a></div>
                      </div>
                    </li>
                    <li class="total">
                      <h5 class="mb-0">Subtotal :<span class="f-right">$299.00</span></h5>
                    </li>
                    <li><a class="view-cart" href="{{ route ('cart') }}">View Cart</a><a class="view-checkout f-right" href="{{ route ('checkout') }}">Checkout</a></li>
                  </ul>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown p-0">
                <div class="d-flex align-items-center profile-media"><img class="b-r-10 img-40" src="../assets/images/dashboard/profile.png" alt="">
                  <div class="flex-grow-1"><span>Alen Miller</span>
                    <p class="mb-0">UI Designer </p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="email-application.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="{{route ('login')}}"><i data-feather="log-in"> </i><span>Logout</span></a></li>
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
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="fill-svg">
          <div>
            <div class="logo-wrapper"><a href="{{ route ('index') }}"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a>
              <div class="toggle-sidebar">
                <svg class="sidebar-toggle"> 
                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
              </div>
            </div>
            <div class="logo-icon-wrapper"><a href="{{ route ('index') }}"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="{{ route ('index') }}"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div> 
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-home"></use>
                      </svg><span>Dashboard</span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4" href="{{ route('index') }}">Default</a></li>
                      <li><a href="{{ route ('about-us') }}">About Us</a></li>
                      
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-layout"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-layout"></use>
                      </svg><span>Highlight</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{ route ('gallery') }}">Gallery</a></li>
                      <li><a href="{{ route ('product') }}">Product</a></li>
                      <li><a href="{{ route ('program') }}">Program</a></li>
                      <li><a href="{{ route ('sponsor') }}">Sponsor</a></li>
                      <li><a href="{{ route ('slider') }}">Slider</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-widget"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-widget"></use>
                    </svg><span>Post</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{ route ('add-post-gallery') }}">Add Post Gallery</a></li>
<li><a href="{{ route ('add-post-sponsor') }}">Add Post Sponsor</a></li>
<li><a href="{{ route ('add-post-program') }}">Add Post Program</a></li>
                  </ul>
                </li>
                </ul>
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
                    <li class="breadcrumb-item"><a href="{{ route ('index') }}">                                       
                        <svg class="stroke-icon">
                          <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-home"></use>
                        </svg></a></li>
                    <li class="breadcrumb-item">ECommerce</li>
                    <li class="breadcrumb-item"><a href="{{ route('add-products') }}">Add Products</a></li>
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
                    <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                    <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="#" data-original-title="" title=""><i data-feather="list"></i></a></div><span class="d-none-productlist filter-toggle">
                          Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></span>
                    <div class="grid-options d-inline-block">
                      <ul>
                        <li><a class="product-2-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
                        <li><a class="product-3-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
                        <li><a class="product-4-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a></li>
                        <li><a class="product-6-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span><span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 text-sm-end"><span class="m-r-5">Showing Products 1 - 24 Of 200 Results</span>
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
                            <h6 class="mb-0">Filters<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span></h6>
                          </div>
                          <div class="left-filter filter-sidebar custom-scrollbar">
                            <div class="card-body filter-cards-view animate-chk">
                              <div class="product-filter">
                                <h3>Category</h3>
                                <div class="checkbox-animated mt-0">
                                  <label class="d-block" for="edo-ani5">
                                    <input class="checkbox_animated" id="edo-ani5" type="checkbox" data-original-title="" title="">Man Shirt
                                  </label>
                                  <label class="d-block" for="edo-ani6">
                                    <input class="checkbox_animated" id="edo-ani6" type="checkbox" data-original-title="" title="">Man Jeans
                                  </label>
                                  <label class="d-block" for="edo-ani7">
                                    <input class="checkbox_animated" id="edo-ani7" type="checkbox" data-original-title="" title="">Woman Top
                                  </label>
                                  <label class="d-block" for="edo-ani8">
                                    <input class="checkbox_animated" id="edo-ani8" type="checkbox" data-original-title="" title="">Woman Jeans
                                  </label>
                                  <label class="d-block" for="edo-ani9">
                                    <input class="checkbox_animated" id="edo-ani9" type="checkbox" data-original-title="" title="">Man T-shirt
                                  </label>
                                </div>
                              </div>
                              <div class="product-filter">
                                <h3>Brand</h3>
                                <div class="checkbox-animated mt-0">
                                  <label class="d-block" for="chk-ani">
                                    <input class="checkbox_animated" id="chk-ani" type="checkbox" data-original-title="" title=""> Levi's
                                  </label>
                                  <label class="d-block" for="chk-ani1">
                                    <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-original-title="" title="">Diesel
                                  </label>
                                  <label class="d-block" for="chk-ani2">
                                    <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-original-title="" title="">Lee
                                  </label>
                                  <label class="d-block" for="chk-ani3">
                                    <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-original-title="" title="">Hudson
                                  </label>
                                  <label class="d-block" for="chk-ani4">
                                    <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-original-title="" title="">Denizen
                                  </label>
                                  <label class="d-block" for="chk-ani5">
                                    <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-original-title="" title="">Spykar
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
                                      <div class="product-img col-md-5"><img class="img-fluid img-100" src="../assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                                      <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                        <p class="mb-0">Woman T-shirt</p>
                                        <div class="product-price">$100.00</div>
                                      </div>
                                    </div>
                                    <div class="product-box row">
                                      <div class="product-img col-md-5"><img class="img-fluid img-100" src="../assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                                      <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                        <p class="mb-0">Dream Beauty Fashion</p>
                                        <div class="product-price">$150.00</div>
                                      </div>
                                    </div>
                                    <div class="product-box row">
                                      <div class="product-img col-md-5"><img class="img-fluid img-100" src="../assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                                      <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                        <p class="mb-0">VOXATI</p>
                                        <div class="product-price">$200.00</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="item">
                                    <div class="product-box row">
                                      <div class="product-img col-md-5"><img class="img-fluid img-100" src="../assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                                      <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                        <p class="mb-0">Fancy Shirt</p>
                                        <div class="product-price">$100.00</div>
                                      </div>
                                    </div>
                                    <div class="product-box row">
                                      <div class="product-img col-md-5"><img class="img-fluid img-100" src="../assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                                      <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                        <p class="mb-0">Fancy Shirt</p>
                                        <div class="product-price">$100.00</div>
                                      </div>
                                    </div>
                                    <div class="product-box row">
                                      <div class="product-img col-md-5"><img class="img-fluid img-100" src="../assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                                      <div class="product-details col-md-7 text-start"><span><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning me-1"></i><i class="fa fa-star font-warning"></i></span>
                                        <p class="mb-0">Fancy Shirt</p>
                                        <div class="product-price">$100.00  </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="product-filter text-center"><img class="img-fluid banner-product" src="../assets/images/ecommerce/banner.jpg" alt="" data-original-title="" title=""></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-12">
                    <form>
                      <div class="form-group m-0">
                        <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa fa-search"></i>
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
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Women's Top</h4>
                                    <div class="product-price">$50.00 
                                      <del>$35.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Rock Paper Scissors Women Tank Top High Neck Cotton Top Stylish Women Top..</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Women's Top</h4></a>
                          <p>Regular Flare Fit Women's white Top</p>
                          <div class="product-price">$50.00 
                            <del>$35.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Men's Jacket</h4>
                                    <div class="product-price">$45.00 
                                      <del>$50.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves Latest Jacket for Men With Button Closure Long Sleeve Casual Torn Lycra Denim Jacket.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Men's Jacket</h4></a>
                          <p>Cotton Blend Men's Blue Jacket</p>
                          <div class="product-price">$45.00 
                            <del>$50.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Women's Coat</h4>
                                    <div class="product-price">$426.00
                                      <del>$480.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Women's Classic Stretchy All Time Trendy Pleated Skirt Western coat midi Skirt plited Lehenga.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Women's Coat</h4></a>
                          <p>Cotton Blend Women's Coat</p>
                          <div class="product-price"> $426.00
                            <del>$480.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/04.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Men's Shirt</h4>
                                    <div class="product-price">$26.00
                                      <del>$35.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Glamcci Men's Cotton Blend Printed One Piece Party Jacket</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="product-page.html">
                            <h4>Men's Shirt</h4></a>
                          <p>Cotton Regular Fit Men's Shirt</p>
                          <div class="product-price">$26.00
                            <del>$35.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/05.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter4"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter4" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/05.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Track Suit</h4>
                                    <div class="product-price">$20.00
                                      <del>$25.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Glamcci Men's Cotton Blend Printed One Piece Track Suit.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Track Suit</h4></a>
                          <p>Cotton Regular Fit Men's Track Suit</p>
                          <div class="product-price">
                                                                      $20.00 
                            <del>$25.00  </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="ribbon ribbon-secondary ribbon-vertical-left"><i class="icon-gift"></i></div>
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/06.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter5"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter5" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/06.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Women's Jacket</h4>
                                    <div class="product-price">$25.00
                                      <del>$30.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Rock Paper Scissors Womens Tank Top High Neck Cotton Top Stylish Women Top..</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Women's Jacket</h4></a>
                          <p>Solid Denim Jacket</p>
                          <div class="product-price">$25.00
                            <del>$30.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/07.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter6"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter6" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/07.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Denim Jacket</h4>
                                    <div class="product-price">$30.00
                                      <del>$35.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves Latest Jacket for Men With Button Closure Long Sleeve Casual Torn Lycra Men Denim Shirt.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Denim Jacket</h4></a>
                          <p>Denim Regular Men's Jacket</p>
                          <div class="product-price">$30.00 
                            <del>$35.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/08.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li>
                                <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter7">
                                  <i class="fas fa-eye"></i> <!-- Ikon mata dari Font Awesome -->
                                </a>
                              </li>
                              
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter7" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/08.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Men's Formal shirt</h4>
                                    <div class="product-price">$35.00
                                      <del>$40.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Ravaiyaa - Attitude is everything Cotton Men's Formal One Top Shirt.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Men's Formal shirt</h4></a>
                          <p>Regular Men's Denim Shirt.</p>
                          <div class="product-price">$35.00 
                            <del>$40.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/09.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter8"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter8" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/09.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Woman's Gown</h4>
                                    <div class="product-price">$45.00
                                      <del>$50.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Women Tank Top High Neck Cotton Top Stylish Women Gown..</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Woman's Gown</h4></a>
                          <p>Woman's Long Gown</p>
                          <div class="product-price">$45.00 
                            <del>$50.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6"> 
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/10.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter9"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter9" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/10.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Men's Black Suit</h4>
                                    <div class="product-price">$50.00
                                      <del>$55.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Attitude is everything Cotton Men's Black Suit.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="product-page.html">
                            <h4>Men's Black Suit</h4></a>
                          <p>Men's Full Black Suit</p>
                          <div class="product-price">$50.00 
                            <del>$55.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/11.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter10"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter10" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/11.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Woman's Dress</h4>
                                    <div class="product-price">$60.00
                                      <del>$65.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Tops for Stylish Woman's Dress</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="product-page.html">
                            <h4>Woman's Dress</h4></a>
                          <p>Tops for Stylish Woman's Dress</p>
                          <div class="product-price">$60.00 
                            <del>$65.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/12.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter11"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter11" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/12.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Slim Fit Plastic Coat</h4>
                                    <div class="product-price">$30.00
                                      <del>$35.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Premier Cropped Skinny Jean</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><a href="product-page.html">
                            <h4>Slim Fit Plastic Coat</h4></a>
                          <p>Slim Fit Plastic Thunder Coat</p>
                          <div class="product-price">$30.00 
                            <del>$35.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-info"><i class="icofont icofont-love"></i></div><img class="img-fluid" src="../assets/images/ecommerce/13.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter12"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter12" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/13.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Women's Hoodie</h4>
                                    <div class="product-price">$50.00
                                      <del>$60.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div><a href="product-page.html">
                            <h4>Women's Hoodie</h4></a>
                          <p>Women's Hoodie T-Shirt</p>
                          <div class="product-price">$30.00 
                            <del>$360.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/14.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter13"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter13" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/14.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Men's T-shirt</h4>
                                    <div class="product-price">$60.00
                                      <del>$70.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Lorate Solid Men's Fashion Full Sleeves Latest Jacket for Men With Button Closure Long Sleeve Casual Torn Lycra Denim Shirt.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div><a href="product-page.html">
                            <h4>Men's T-shirt</h4></a>
                          <p>Men's Denim T-shirt</p>
                          <div class="product-price">$60.00 
                            <del>$70.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img">
                          <div class="ribbon ribbon-clip ribbon-warning">Hot</div><img class="img-fluid" src="../assets/images/ecommerce/15.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter14"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter14" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/15.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Woman Party Wear</h4>
                                    <div class="product-price">$57.00
                                      <del>$60.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Stylish Party Wear for women</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="product-page.html">
                            <h4>Woman Party Wear</h4></a>
                          <p>Stylish Party Wear for women</p>
                          <div class="product-price">$30.00 
                            <del>$350.00    </del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src="../assets/images/ecommerce/16.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="{{ route ('cart') }}"><i class="icon-shopping-cart"></i></a></li>
                              <li>
  <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter7">
    <i class="fas fa-eye"></i> <!-- Ikon mata dari Font Awesome -->
  </a>
</li>


                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter15" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter15" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/ecommerce/16.jpg" alt=""></div>
                                  <div class="product-details col-lg-6 text-start">
                                    <h4>Woman T-shirt</h4>
                                    <div class="product-price">$26.00
                                      <del>$350.00    </del>
                                    </div>
                                    <div class="product-view">
                                      <h3>Product Details</h3>
                                      <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                                    </div>
                                    <div class="product-size">
                                      <ul>
                                        <li> 
                                          <button class="btn btn-light" type="button">M</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">L</button>
                                        </li>
                                        <li> 
                                          <button class="btn btn-light" type="button">Xl</button>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="product-qnty">
                                      <h3>Quantity</h3>
                                      <fieldset>
                                        <div class="input-group">
                                          <input class="touchspin text-center" type="text" value="5">
                                        </div>
                                      </fieldset>
                                      <div class="addcart-btn"><a class="btn btn-primary" href="{{ route ('cart') }}">Add to Cart</a><a class="btn btn-primary ms-2" href="product-page.html">View Details</a></div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details">
                          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><a href="product-page.html">
                            <h4>Dream Beauty Fashion</h4></a>
                          <p>Tops for Women Stylish</p>
                          <div class="product-price">$30.00 
                            <del>$360.00    </del>
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
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#heart"></use>
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

<!-- Mirrored from admin.pixelstrap.net/crocs/template/{{ route ('product') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:44:39 GMT -->
</html>