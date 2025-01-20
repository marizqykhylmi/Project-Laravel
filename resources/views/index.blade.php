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
            <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a>
              <div class="toggle-sidebar">
                <i class="fas fa-toggle-on"></i>
              </div>
            </div>
            <div class="logo-icon-wrapper"><a href="{{ route('index') }}"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="{{ route('index') }}"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
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
                  </li>
                  
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="landing-page.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-landing-page"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-landing-page"></use>
                      </svg><span>Landing page</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="sample-page.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-sample-page"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-sample-page"></use>
                      </svg><span>Sample page</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="translate.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-internationalization"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-internationalization"></use>
                      </svg><span>Translate</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="https://admin.pixelstrap.net/crocs/starter-kit/{{ route ('index') }}" target="_blank">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-starter-kit"></use>
                      </svg><span>Starter kit</span></a></li>
                  <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-others"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-others"></use>
                      </svg><span>Others</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Error Page</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="error-400.html">Error 400</a></li>
                                <li><a href="error-401.html">Error 401</a></li>
                                <li><a href="error-403.html">Error 403</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="error-500.html">Error 500</a></li>
                                <li><a href="error-503.html">Error 503</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Authentication</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="login.html" target="_blank">Login Simple</a></li>
                                <li><a href="login_one.html" target="_blank">Login bg image</a></li>
                                <li><a href="login_two.html" target="_blank">Login image two                      </a></li>
                                <li><a href="login-bs-validation.html" target="_blank">Login validation</a></li>
                                <li><a href="login-bs-tt-validation.html" target="_blank">Login tooltip</a></li>
                                <li><a href="login-sa-validation.html" target="_blank">Login sweetalert</a></li>
                                <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                <li><a href="sign-up-one.html" target="_blank">Register Image                              </a></li>
                                <li><a href="sign-up-two.html" target="_blank">Register two</a></li>
                                <li><a href="sign-up-wizard.html" target="_blank">Register wizard</a></li>
                                <li><a href="unlock.html">Unlock User</a></li>
                                <li><a href="forget-password.html">Forget Password</a></li>
                                <li><a href="reset-password.html">Reset Password</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Coming Soon</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="comingsoon.html">Coming Simple</a></li>
                                <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Email templates</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="basic-template.html">Basic Email</a></li>
                                <li><a href="email-header.html">Basic Header</a></li>
                                <li><a href="template-email.html">Ecomerce Template</a></li>
                                <li><a href="template-email-2.html">Email Template 2</a></li>
                                <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                <li><a href="email-order-success.html">Order Success</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Miscellaneous</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-gallery"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-gallery"></use>
                      </svg><span>Gallery</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="gallery.html">Gallery Grid</a></li>
                      <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                      <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                      <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                      <li><a href="gallery-hover.html">Hover Effects</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-blog"></use>
                      </svg><span>Blog</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="blog.html">Blog Details</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                      <li><a href="add-post.html">Add Post</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="faq.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-faq"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-faq"></use>
                      </svg><span>FAQ</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-job-search"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-job-search"></use>
                      </svg><span>Job Search</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="job-cards-view.html">Cards view</a></li>
                      <li><a href="job-list-view.html">List View</a></li>
                      <li><a href="job-details.html">Job Details</a></li>
                      <li><a href="job-apply.html">Apply</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-learning"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-learning"></use>
                      </svg><span>Learning</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="learning-list-view.html">Learning List</a></li>
                      <li><a href="learning-detailed.html">Detailed Course</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-maps"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-maps"></use>
                      </svg><span>Maps</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="map-js.html">Maps JS</a></li>
                      <li><a href="vector-map.html">Vector Maps</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-editors"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-editors"></use>
                      </svg><span>Editors</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="summernote.html">Summer Note</a></li>
                      <li><a href="ckeditor.html">CK editor</a></li>
                      <li><a href="simple-MDE.html">MDE editor</a></li>
                      <li><a href="ace-code-editor.html">ACE code editor </a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="knowledgebase.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                      </svg><span>Knowledgebase</span></a></li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                      </svg><span>Support Ticket</span></a></li>
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
                <div class="col-sm-6 p-0">
                  <h3>Default Dashboard </h3>
                </div>
                <div class="col-sm-6 p-0">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">
                      <span class="material-icons" style="font-size: 24px; color: black;">home</span>                     
                      </a>
                    </li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-7 box-col-4"> 
                <div class="card welcome-card">
                  <div class="card-body">
                    <div class="d-flex"> 
                      <div class="flex-grow-1"> 
                        <h1>Hello,Anna Miller.</h1>
                        <p>Welcome to the Admin clan! We appreciate your interest in our dashboard.</p><a class="btn" href="{{ route ('list-products') }}">Go Premium</a>
                      </div>
                      <div class="flex-shrink-0"> <img src="../assets/images/dashboard/welcome.png" alt=""></div>
                      <div>  
                        <div class="clockbox">
                          <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                            <g id="face">
                              <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                              <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"></path>
                              <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                            </g>
                            <g id="hour">
                              <path class="hour-hand" d="M300.5 298V142"></path>
                              <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                            </g>
                            <g id="minute">
                              <path class="minute-hand" d="M300.5 298V67">   </path>
                              <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                            </g>
                            <g id="second">
                              <path class="second-hand" d="M300.5 350V55"></path>
                              <circle class="sizing-box" cx="300" cy="300" r="253.9">   </circle>
                            </g>
                          </svg>
                          <div class="badge f-10 p-0" id="txt"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-xl-25 col-md-5 col-sm-6 box-col-3">
                <div class="card earning-card">
                  <div class="card-header"> 
                    <div class="header-top">
                      <h5>Total Earnings</h5>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div id="Earnings-chart"></div>
                    <div class="d-flex p-3 pt-0">
                      <h2 class="me-2">$ 12,463</h2><span class="bg-light-danger">
                        <svg>
                          <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#down-arrow"> </use>
                        </svg></span>
                      <h6 class="font-danger">+ 20.08%</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-md-5 col-sm-6 expenses-card">
                <div class="card earning-card">
                  <div class="card-header"> 
                    <div class="header-top">
                      <h5>Total Expenses</h5>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="expenses-chart" id="Expenses-chart"></div>
                    <div class="d-flex p-3 pt-0">
                      <h2 class="me-2">$ 14,852</h2><span class="bg-light-success">
                        <svg>
                          <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#up-arrow"> </use>
                        </svg></span>
                      <h6 class="font-success">+ 60.09%</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-xl-40 col-md-7 box-col-5e">
                <div class="card selling-product">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>Top Selling Product</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body"> 
                    <div class="table-responsive custom-scrollbar">
                      <table class="table display" style="width:100%">
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex"><span class="bg-light-primary"><img src="../assets/images/dashboard/product/1.png" alt=""></span>
                                <div class="flex-grow-1 ms-2"><a href="{{ route ('list-products') }}"><span>Sneaker Shoes</span>
                                    <h5>#A5647KB</h5></a></div>
                              </div>
                            </td>
                            <td> <span>Coupon code</span>
                              <h5>PIX001</h5>
                            </td>
                            <td> <img src="../assets/images/dashboard/flag/1.png" alt=""></td>
                            <td> <span>-51%</span>
                              <h5>$99.00</h5>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><span class="bg-light-primary"><img src="../assets/images/dashboard/product/2.png" alt=""></span>
                                <div class="flex-grow-1 ms-2"><a href="{{ route ('list-products') }}"><span>Sweat Shirt</span>
                                    <h5>#NB86H2E</h5></a></div>
                              </div>
                            </td>
                            <td> <span>Coupon code</span>
                              <h5>PIX002</h5>
                            </td>
                            <td> <img src="../assets/images/dashboard/flag/2.png" alt=""></td>
                            <td> <span>-78%</span>
                              <h5>$66.00</h5>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><span class="bg-light-primary"><img src="../assets/images/dashboard/product/3.png" alt=""></span>
                                <div class="flex-grow-1 ms-2"><a href="{{ route ('list-products') }}"><span>Nike Travel Bag</span>
                                    <h5>#UB654GH</h5></a></div>
                              </div>
                            </td>
                            <td> <span>Coupon code</span>
                              <h5>PIX003</h5>
                            </td>
                            <td> <img src="../assets/images/dashboard/flag/3.png" alt=""></td>
                            <td> <span>-04%</span>
                              <h5>$116.00</h5>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><span class="bg-light-primary"><img src="../assets/images/dashboard/product/4.png" alt=""></span>
                                <div class="flex-grow-1 ms-2"><a href="{{ route ('list-products') }}"><span>Monster Cap</span>
                                    <h5>#BAS4567</h5></a></div>
                              </div>
                            </td>
                            <td> <span>Coupon code</span>
                              <h5>PIX004</h5>
                            </td>
                            <td> <img src="../assets/images/dashboard/flag/4.png" alt=""></td>
                            <td> <span>-60%</span>
                              <h5>$99.00</h5>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-7 col-lg-7 box-col-7">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>Recent Order </h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0 recent">
                    <div class="table-responsive custom-scrollbar">
                      <table class="table display" id="recent-order" style="width:100%">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </th>
                            <th>No.</th>
                            <th>Customer Name</th>
                            <th>ID</th>
                            <th>Date</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td>1</td>
                            <td>
                              <div class="d-flex">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/1.png" alt=""></div>
                                <div class="flex-grow-1 ms-3"><a href="user-profile.html">
                                    <h6>Rocky Shoes </h6></a></div>
                              </div>
                            </td>
                            <td>#8934</td>
                            <td>01/12/2024</td>
                            <td>Armenia</td>
                            <td> 
                              <button class="btn btn-primary">Paid</button>
                            </td>
                            <td>$238.80</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td>2</td>
                            <td>
                              <div class="d-flex">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/2.png" alt=""></div>
                                <div class="flex-grow-1 ms-3"><a href="user-profile.html">
                                    <h6>Nasuha Makusta</h6></a></div>
                              </div>
                            </td>
                            <td>#6529</td>
                            <td>12/10/2024</td>
                            <td>Bhutan</td>
                            <td> 
                              <button class="btn btn-secondary">Pending</button>
                            </td>
                            <td>$654.95</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td>3</td>
                            <td>
                              <div class="d-flex">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/3.png" alt=""></div>
                                <div class="flex-grow-1 ms-3"><a href="user-profile.html">
                                    <h6>Induan Kastorika</h6></a></div>
                              </div>
                            </td>
                            <td>#3659</td>
                            <td>09/04/2024</td>
                            <td>Ghana</td>
                            <td> 
                              <button class="btn btn-success">Done</button>
                            </td>
                            <td>$864.35</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label"></label>
                              </div>
                            </td>
                            <td>4</td>
                            <td>
                              <div class="d-flex">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard/user/4.png" alt=""></div>
                                <div class="flex-grow-1 ms-3"><a href="user-profile.html">
                                    <h6>Pogba Nehuntas</h6></a></div>
                              </div>
                            </td>
                            <td>#2158</td>
                            <td>10/05/2024</td>
                            <td>Kenya</td>
                            <td> 
                              <button class="btn btn-danger">Cancel </button>
                            </td>
                            <td>$951.37</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 col-lg-5 box-col-5">
                <div class="card">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>Our Growth</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="growth-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-md-7">
                <div class="card transaction-history">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>Product Valuation</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pb-0">
                    <div class="current-sale-container order-container">
                      <div class="overview-wrapper" id="orderoverview"></div>
                      <div class="back-bar-container"> 
                        <div id="order-bar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="card transaction-history">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>Transaction History</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body"> 
                    <div class="table-responsive custom-scrollbar">
                      <table class="table display" style="width:100%">
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex"><span class="bg-light-primary history">
                                  <svg>
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#send"></use>
                                  </svg></span>
                                <div class="flex-grow-1 ms-2"><a href="{{route('list-products')}}"><span>Receipt from external Wallet</span>
                                    <h5>Mar 21,2024, 4:45pm</h5></a></div>
                              </div>
                            </td>
                            <td>Completed</td>
                            <td>+ $248.00</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><span class="bg-light-secondary history">
                                  <svg>
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#work"></use>
                                  </svg></span>
                                <div class="flex-grow-1 ms-2"><a href="{{route('list-products')}}"><span>Process refund to</span>
                                    <h5>Feb 20,2024, 2:10pm</h5></a></div>
                              </div>
                            </td>
                            <td>Pending</td>
                            <td>+ $548.00</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><span class="bg-light-success history">
                                  <svg>
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#graph"></use>
                                  </svg></span>
                                <div class="flex-grow-1 ms-2"><a href="{{route('list-products')}}"><span>Sending to Citizen</span>
                                    <h5>Jun 17,2024, 12:45pm</h5></a></div>
                              </div>
                            </td>
                            <td>Verified</td>
                            <td>+ $953.00</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex"><span class="bg-light-danger history">
                                  <svg>
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#payment-bookmark"></use>
                                  </svg>
                                </span>
                                <div class="flex-grow-1 ms-2"><a href="{{route('list-products')}}"><span>Payment From #12345</span>
                                    <h5>Oct 30,2024, 1:31pm</h5></a></div>
                              </div>
                            </td>
                            <td>Rejected</td>
                            <td>+ $349.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card notifications-tabs">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>Notifications</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body"> 
                    <div class="d-flex header-tab">
                      <ul class="nav nav-tabs border-tab mb-0" id="bottom-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link nav-border tab-primary active pt-0" id="bottom-home-tab" data-bs-toggle="tab" href="#bottom-home" role="tab" aria-controls="bottom-home" aria-selected="true">All<span class="ms-2 bg-primary">3</span></a></li>
                        <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-inbox-tab" data-bs-toggle="tab" href="#bottom-inbox" role="tab" aria-controls="bottom-inbox" aria-selected="false">Following</a></li>
                        <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-contact-tab" data-bs-toggle="tab" href="#bottom-contact" role="tab" aria-controls="bottom-contact" aria-selected="false">Archive</a></li>
                      </ul>
                      <h6>Mark all as read</h6>
                    </div>
                    <div class="tab-content content-tab" id="bottom-tabContent">
                      <div class="tab-pane fade show active" id="bottom-home" role="tabpanel" aria-labelledby="bottom-tabContent">
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/5.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Ralph Edwards <strong> wants to edit </strong> tetrisly design system</h5><span>2hrs Ago</span></a>
                            <button class="btn btn-secondary mt-1 mb-1">Decline</button>
                            <button class="btn btn-primary mt-1 mb-1">Accept</button>
                          </div>
                          <div class="flex-shrink-0"> 
                            <div class="activity-dot-primary"></div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/6.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Stephen Curry <strong> Completed </strong> Create new component</h5><span>2.15pm</span></a>
                                 <button class="btn btn-secondary mt-1 mb-1">Decline</button>
                                 <button class="btn btn-primary mt-1 mb-1">Accept</button>
                                </div>
                          <div class="flex-shrink-0"> 
                            <div class="activity-dot-secondary"></div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/7.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Jenny Watson <strong> Completed </strong> Create new component</h5><span>10.15pm</span></a>
                                 <button class="btn btn-secondary mt-1 mb-1">Decline</button>
                                 <button class="btn btn-primary mt-1 mb-1">Accept</button>
                                </div>
                          <div class="flex-shrink-0"> 
                            <div class="activity-dot-secondary"></div>
                          </div>
                        </div>
                        <div class="figma-icon"> 
                          <svg class="me-2">
                            <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#file"></use>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="tab-content content-tab" id="bottom-tabContent2">
                      <div class="tab-pane fade show" id="bottom-contact" role="tabpanel" aria-labelledby="bottom-tabContent2">
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/5.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Ralph Edwards Started Following you.</h5><span>35 min Ago</span></a></div>
                          <div class="flex-shrink-0"> 
                            <div class="activity-dot-primary"></div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/6.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Jenny Wilson Requested to Follow</h5><span>1w Ago</span></a></div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/7.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>Jenny Wilson Started Following you.</h5><span>3.10pm</span></a></div>
                          <div class="flex-shrink-0"> 
                            <div class="activity-dot-primary"></div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center figma-line"><img src="../assets/images/dashboard/user/2.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Nasuha Makusta Requested to Follow</h5><span>20 min Ago</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-content content-tab" id="bottom-tabContent3">
                      <div class="tab-pane fade show" id="bottom-inbox" role="tabpanel" aria-labelledby="bottom-tabContent3">
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/5.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Ralph Edwards Started Following you.</h5><span>35 min Ago</span></a></div>
                          <div class="flex-shrink-0"> 
                            <div class="activity-dot-primary"></div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/6.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Jenny Wilson Requested to Follow</h5><span>1w Ago</span></a></div>
                        </div>
                        <div class="d-flex align-items-center"><img src="../assets/images/dashboard/user/7.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>Jenny Wilson Started Following you.</h5><span>3.10pm</span></a></div>
                          <div class="flex-shrink-0"> 
                            <div class="activity-dot-primary"></div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center figma-line"><img src="../assets/images/dashboard/user/2.png" alt="">
                          <div class="flex-grow-1 ms-2"><a href="user-profile.html">
                              <h5>
                                 Nasuha Makusta Requested to Follow</h5><span>20 min Ago</span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card user-country">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>User By Country</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex"> 
                      <h2 class="me-2">216.459</h2><span class="bg-light-success">
                        <svg>
                          <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#up-arrow"> </use>
                        </svg></span>
                      <h6 class="font-success">+ 5.09%</h6>
                    </div><span>Increase than last month</span>
                    <div class="jvector-map-height" id="world-map2"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="card schedule">
                  <div class="card-header pb-0">
                    <div class="header-top">
                      <h4>Schedule</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="timeline-calendar custom-scrollbar">
                      <div class="custom-calendar" id="calendar-container">
                        <div class="time-line" id="calendar"></div>
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
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.net/crocs/template/{{ route ('index') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:43:58 GMT -->
</html>