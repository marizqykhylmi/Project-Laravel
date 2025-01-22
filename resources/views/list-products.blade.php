<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/crocs/template/{{ route ('list-products') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:44:40 GMT -->
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/js-datatables/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
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
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{ route ('index') }}"><img class="img-fluid for-light" src="../assets/images/logo/logo-1.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt=""></a></div>
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
                  <svg>
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-Bell"></use>
                  </svg><span class="badge rounded-pill badge-primary">3</span>
                </div>
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
                <svg>
                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-star"></use>
                </svg>
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
                  <svg>
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-dark"></use>
                  </svg>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="message">
                  <svg>
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-message"></use>
                  </svg><span class="badge rounded-pill badge-secondary">4</span>
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
                  <svg>
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-Buy"></use>
                  </svg>
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
                <div class="d-flex align-items-center profile-media"><img class="b-r-10 img-40" src="../assets/images/dashboard/noprofile.png" alt="">
                  <div class="flex-grow-1"><span>User</span>
                    <p class="mb-0">UI Designer </p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="{{ route ('user-profile') }}"><i data-feather="user"></i><span>Account </span></a></li>
                  <li><a href="email-application.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="login.html"><i data-feather="log-in"> </i><span>Log in</span></a></li>
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
                    <div class="mobile-back text-end"><span>Back</span><i class=""" ps-2" aria-hidden="true"></i></div>
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
                    </li>
                    </ul>
                  </li>
                  </li>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                      </svg><span>Ecommerce</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{ route ('add-products') }}">Add Product</a></li>
                      <li><a href="{{ route ('product') }}">Product</a></li>
                      <li><a href="product-page.html">Product page</a></li>
                      <li><a href="{{ route ('list-products') }}">Product list</a></li>
                      <li><a href="payment-details.html">Payment Details</a></li>
                      <li><a href="order-history.html">Order History</a></li>
                      <li><a class="submenu-title" href="#">Invoices
                          <h5 class="sub-arrow"><i class=""></i></h5></a>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="invoice-1.html">Invoice-1</a></li>
                          <li><a href="invoice-2.html">Invoice-2</a></li>
                          <li><a href="invoice-3.html">Invoice-3</a></li>
                          <li><a href="invoice-4.html">Invoice-4</a></li>
                          <li><a href="invoice-5.html">Invoice-5</a></li>
                          <li><a href="invoice-template.html">Invoice-6</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ route ('cart') }}">Cart</a></li>
                      <li><a href="list-wish.html">Wishlist</a></li>
                      <li><a href="{{ route ('checkout') }}">Checkout</a></li>
                      <li><a href="pricing.html">Pricing</a></li>
                    </ul>
                  </li>
                      <li><a class="submenu-title" href="#">Form layout
                          <h5 class="sub-arrow"><i class=""></i></h5></a>
                        <ul class="submenu-content opensubmegamenu">
                          <li><a href="form-wizard.html">Form Wizard 1</a></li>
                          <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                          <li><a href="two-factor.html">Two Factor</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-button"></use>
                      </svg>
                      
                    <ul class="sidebar-submenu">
                      <li><a href="buttons.html">Default Style</a></li>
                      <li><a href="button-group.html">Button Group</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Pages</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="landing-page.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-landing-page"></use>
                      </svg>
                      
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="sample-page.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-sample-page"></use>
                      </svg>
                      
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="translate.html">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-internationalization"></use>
                      </svg>
                      
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="https://admin.pixelstrap.net/crocs/starter-kit/{{ route ('index') }}" target="_blank">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                      </svg>
                      
                  <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-others"></use>
                      </svg>
                     
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
                <div class="col-6">
                  <h4>
                     Product list</h4>
                </div>
                <div class="col-6">
                  <o class="breadcrumb">                               
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">
                            <span class="material-icons" style="font-size: 24px; color: black;">home</span>                     
                            </a></li>
                    <li class="breadcrumb-item">ECommerce</li>
                    <li class="breadcrumb-item active">Product list</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12"> 
                <div class="card"> 
                  <div class="card-body">
                    <div class="list-product-header">
                      <div> 
                        <div class="light-box"><a data-bs-toggle="collapse" href="#collapseProduct" role="button" aria-expanded="false" aria-controls="collapseProduct"><i class="filter-icon show" data-feather="filter"></i><i class="icon-close filter-close hide"></i></a></div><a class="btn btn-primary" href="{{ route ('add-products') }}"><i class="fa fa-plus"></i>Add Product</a>
                      </div>
                      <div class="collapse" id="collapseProduct">
                        <div class="card card-body list-product-body">
                          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3"> 
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Choose Product</option>
                                <option value="1">Apple iphone 13 Pro</option>
                                <option value="2">Wood Chair</option>
                                <option value="3">M185 Compact Wireless Mouse</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Choose Category</option>
                                <option value="1">Furniture</option>
                                <option value="2">Smart Gadgets</option>
                                <option value="3">Electrics</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Choose Sub Category</option>
                                <option value="1">Smart Phones</option>
                                <option value="2">Smart Watches</option>
                                <option value="3">Wireless headphone</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Status</option>
                                <option value="1">Sold Out </option>
                                <option value="2">In Stock</option>
                                <option value="3">Pre Order</option>
                                <option value="4">Limited Stock </option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Price</option>
                                <option value="1">56000.00</option>
                                <option value="2">19000.00</option>
                                <option value="3">10000.00</option>
                                <option value="3">15000.00</option>
                                <option value="3">99000.00</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-product">
                      <table class="table" id="project-status">
                        <thead> 
                          <tr> 
                            <th>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </th>
                            <th> <span class="f-light f-w-600">Product Name</span></th>
                            <th> <span class="f-light f-w-600">SKU</span></th>
                            <th> <span class="f-light f-w-600">Category</span></th>
                            <th> <span class="f-light f-w-600">Price</span></th>
                            <th> <span class="f-light f-w-600">Qty</span></th>
                            <th> <span class="f-light f-w-600">Status</span></th>
                            <th> <span class="f-light f-w-600">Rating</span></th>
                            <th> <span class="f-light f-w-600">Action</span></th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/laptop.png" alt="laptop"></div>
                                <p>Apple Desktop 2024</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">Laptops</p>
                            </td>
                            <td> 
                              <p class="f-light">56000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">13</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/phone.png" alt="phone"></div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Phones    </p>
                            </td>
                            <td> 
                              <p class="f-light">19000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/headphone.png" alt="headphones"></div>
                                <p>Headphones</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">33KR5689B1</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones       </p>
                            </td>
                            <td> 
                              <p class="f-light">10000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">5</p>
                            </td>
                            <td> 
                              <div class="badge badge-light-primary">In Stock</div>
                            </td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/wireless-headphone.png" alt="wireless headphone"></div>
                                <p>wireless-headphone</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">AD6789HEY0</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones         </p>
                            </td>
                            <td> 
                              <p class="f-light">15000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">4</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-2/product/1.png" alt="chair"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">456DF78DFQ</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture         </p>
                            </td>
                            <td> 
                              <p class="f-light">99000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">2</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/email-template/3.png" alt="chairs"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">5633GD3K54</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture       </p>
                            </td>
                            <td> 
                              <p class="f-light">1000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">8</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/ipad.png" alt="mac laptop"></div>
                                <p>MacBook Air 13.3-inch</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">589KO8PPQ8</p>
                            </td>
                            <td> 
                              <p class="f-light">Laptops         </p>
                            </td>
                            <td> 
                              <p class="f-light">45000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">10</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/mouse.png" alt="mouse"></div>
                                <p>M185 Compact Wireless Mouse</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">E-Commerce         </p>
                            </td>
                            <td> 
                              <p class="f-light">56000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">13</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i><i class="fa fa-star f-light"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/other-images/cart-img.jpg" alt="chairs"></div>
                                <p>Wood chairs</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">568GH3LLQ2</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture </p>
                            </td>
                            <td> 
                              <p class="f-light">78000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">50</p>
                            </td>
                            <td> 
                              <div class="badge badge-light-primary">In Stock</div>
                            </td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/watch.png" alt="watch"></div>
                                <p>Smart watch</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">58FR7K34F6</p>
                            </td>
                            <td> 
                              <p class="f-light">Electric         </p>
                            </td>
                            <td> 
                              <p class="f-light">25000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/dvd.png" alt="DVD"></div>
                                <p>DVD</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">HG5667DFQ1</p>
                            </td>
                            <td> 
                              <p class="f-light">Electric      </p>
                            </td>
                            <td> 
                              <p class="f-light">5600.00</p>
                            </td>
                            <td> 
                              <p class="f-light">10</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/speaker.png" alt="speakers"></div>
                                <p>Speakers</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">Electric</p>
                            </td>
                            <td> 
                              <p class="f-light">12200.00</p>
                            </td>
                            <td> 
                              <p class="f-light">50</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/phone.png" alt="phone"></div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Phones    </p>
                            </td>
                            <td> 
                              <p class="f-light">19000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/headphone.png" alt="headphones"></div>
                                <p>Headphones</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">33KR5689B1</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones       </p>
                            </td>
                            <td> 
                              <p class="f-light">10000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">5</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/other-images/cart-img.jpg" alt="chairs"></div>
                                <p>Wood chairs</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">568GH3LLQ2</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture </p>
                            </td>
                            <td> 
                              <p class="f-light">78000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">50</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/watch.png" alt="watch"></div>
                                <p>Smart watch</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">58FR7K34F6</p>
                            </td>
                            <td> 
                              <p class="f-light">Electric         </p>
                            </td>
                            <td> 
                              <p class="f-light">25000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/phone.png" alt="phone"></div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Phones    </p>
                            </td>
                            <td> 
                              <p class="f-light">19000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/headphone.png" alt="headphones"></div>
                                <p>Headphones</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">33KR5689B1</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones       </p>
                            </td>
                            <td> 
                              <p class="f-light">10000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">5</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/wireless-headphone.png" alt="wireless headphone"></div>
                                <p>wireless-headphone</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">AD6789HEY0</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones         </p>
                            </td>
                            <td> 
                              <p class="f-light">15000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">4</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-2/product/1.png" alt="chair"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">456DF78DFQ</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture         </p>
                            </td>
                            <td> 
                              <p class="f-light">99000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">2</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/email-template/3.png" alt="chairs"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">5633GD3K54</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture       </p>
                            </td>
                            <td> 
                              <p class="f-light">1000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">8</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/laptop.png" alt="laptop"></div>
                                <p>Apple Desktop 2024</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">Laptops</p>
                            </td>
                            <td> 
                              <p class="f-light">56000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">13</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/phone.png" alt="phone"></div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Phones    </p>
                            </td>
                            <td> 
                              <p class="f-light">19000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/headphone.png" alt="headphones"></div>
                                <p>Headphones</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">33KR5689B1</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones       </p>
                            </td>
                            <td> 
                              <p class="f-light">10000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">5</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-8/product-categories/wireless-headphone.png" alt="wireless headphone"></div>
                                <p>wireless-headphone</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">AD6789HEY0</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones         </p>
                            </td>
                            <td> 
                              <p class="f-light">15000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">4</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out </span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/dashboard-2/product/1.png" alt="chair"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">456DF78DFQ</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture         </p>
                            </td>
                            <td> 
                              <p class="f-light">99000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">2</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa fa-star txt-warning"></i><i class="fa fa-star txt-warning"></i><i class="fa fa-star f-light"></i><i class="fa fa-star f-light"></i><i class="fa fa-star f-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="{{ route ('add-products') }}"> 
                                  <svg>    
                                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
    <script src="../assets/js/js-datatables/simple-datatables%40latest.js"></script>
    <script src="../assets/js/custom-list-product.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/ecommerce.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.net/crocs/template/{{ route ('list-products') }} by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:44:43 GMT -->
</html>