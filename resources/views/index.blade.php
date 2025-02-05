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
                            <div class="row"></div>
                        </div>

                        <!-- About Our Company -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            <h4 class="card-title">About Our Company</h4>
                                        </div>
                                        <div class="card-body">
                                            @php $about = $contents->where('type', 'about')->first(); @endphp
                                            <p id="company-description">
                                                {{ $about->content ?? 'No description available.' }}
                                            </p>
                                            <a href="{{ $about ? route('edit-content', ['type' => 'about', 'id' => $about->id]) : route('create-content', 'about') }}"
                                                class="btn btn-primary">
                                                {{ $about ? 'Edit' : 'Add' }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vision and Mission -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            <h5>Vision</h5>
                                        </div>
                                        <div class="card-body ">
                                            @php $vision = $contents->where('type', 'visi')->first(); @endphp
                                            <p id="vision-text">
                                                {{ $vision->content ?? 'No vision available.' }}
                                            </p>
                                            <a href="{{ $vision ? route('edit-content', ['type' => 'visi', 'id' => $vision->id]) : route('create-content', 'visi') }}"
                                                class="btn btn-primary">
                                                {{ $vision ? 'Edit' : 'Add' }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card  text-center">
                                        <div class="card-header">
                                            <h5>Mission</h5>
                                        </div>
                                        <div class="card-body">
                                            @php $mission = $contents->where('type', 'misi')->first(); @endphp
                                            <p id="mission-text">
                                                {{ $mission->content ?? 'No mission available.' }}
                                            </p>
                                            <a href="{{ $mission ? route('edit-content', ['type' => 'misi', 'id' => $mission->id]) : route('create-content', 'misi') }}"
                                                class="btn btn-primary">
                                                {{ $mission ? 'Edit' : 'Add' }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Our Team -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Our Team</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @php $teams = $contents->where('type', 'team'); @endphp
                                                @if ($teams->isEmpty())
                                                    <p class="text-center">No team members available.</p>
                                                    <div class="text-center">
                                                        <a href="{{ route('create-content', 'team') }}"
                                                            class="btn btn-primary">Add Team Member</a>
                                                    </div>
                                                @else
                                                    @foreach ($teams as $team)
                                                        <div class="col-sm-4 text-center">
                                                            @if ($team->image)
                                                                <img src="{{ asset('storage/' . $team->image) }}"
                                                                    alt="{{ $team->name }}"
                                                                    class="img-fluid rounded-circle mb-3"
                                                                    style="width: 150px; height: 150px; object-fit: cover;">
                                                            @else
                                                                <img src="{{ asset('images/default-profile.png') }}"
                                                                    alt="Default Image"
                                                                    class="img-fluid rounded-circle mb-3"
                                                                    style="width: 150px; height: 150px; object-fit: cover;">
                                                            @endif
                                                            <h6>{{ $team->name }}</h6>
                                                            <p>{{ $team->content }}</p>
                                                            <a href="{{ route('edit-content', ['type' => 'team', 'id' => $team->id]) }}"
                                                                class="btn btn-primary">Edit</a>
                                                        </div>
                                                    @endforeach
                                                    <div class="text-center pt-2">
                                                        <a href="{{ route('create-content', 'team') }}"
                                                            class="btn btn-primary">Add Team Member</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End of container-fluid -->
                    </div> <!-- End of page-body -->
                    <div class="container-fluid project-dashboard">
                      <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4">
                          <div class="row"> 
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                              <div class="card project-task">
                                <div class="card-body">
                                  <div class="website-design">
                                    <div class="d-flex"> 
                                      <h4 class="font-primary">Website Design</h4><span>Done</span>
                                    </div>
                                    <div class="progress-value"> 
                                      <h5>Task Completed: 10/10</h5>
                                      <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                    <div class="client">
                                      <div class="flex-grow-1"> 
                                        <h6>Client: Brave Wings</h6><span>Deadline: 25 April 2024</span>
                                      </div>
                                      <div class="flex-shrink-0"> 
                                        <div class="design-card bg-light-primary"> 
                                          <svg>
                                            <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#website-design"></use>
                                          </svg>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                              <div class="card project-task">
                                <div class="card-body">
                                  <div class="website-design">
                                    <div class="d-flex"> 
                                      <h4 class="font-secondary">NFT App Design</h4><span>Running</span>
                                    </div>
                                    <div class="progress-value"> 
                                      <h5>Task Completed: 4/10</h5>
                                      <div class="progress">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                    <div class="client">
                                      <div class="flex-grow-1"> 
                                        <h6>Client: Brave Wings</h6><span>Deadline: 25 April 2024</span>
                                      </div>
                                      <div class="flex-shrink-0"> 
                                        <div class="design-card bg-light-secondary"> 
                                          <svg>
                                            <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#nft-app"></use>
                                          </svg>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-5 col-md-5">
                          <div class="card upgrade-card">
                            <div class="card-body">
                              <div class="d-flex"> 
                                <div class="flex-grow-1"> 
                                  <h4>Upgrade Your Subscription Plan</h4>
                                  <p>The goal of this message is to welcome you to our app.</p><a class="btn btn-primary" href="">Go Premium</a>
                                </div>
                                <div class="flex-shrink-0"> <img src="../assets/images/dashboard-3/upgrade.png" alt=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-5 col-lg-7 col-md-7">
                          <div class="card today-task">
                            <div class="card-header pb-0">
                              <div class="header-top">
                                <h5>Today Post</h5>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body"> 
                              <div class="d-flex header-tab">
                                <ul class="nav nav-tabs border-tab mb-0" id="bottom-tab" role="tablist">
                                  <li class="nav-item"><a class="nav-link nav-border tab-primary active pt-0" id="bottom-home-tab" data-bs-toggle="tab" href="#bottom-home" role="tab" aria-controls="bottom-home" aria-selected="true">All<span class="ms-2 bg-primary">5</span></a></li>
                                  <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-inbox-tab" data-bs-toggle="tab" href="#bottom-inbox" role="tab" aria-controls="bottom-inbox" aria-selected="false">Gallery</a></li>
                                  <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-contact-tab" data-bs-toggle="tab" href="#bottom-contact" role="tab" aria-controls="bottom-contact" aria-selected="false">Product</a></li>
                                  <li class="nav-item"><a class="nav-link nav-border tab-primary" id="bottom-links-tab" data-bs-toggle="tab" href="#bottom-links" role="tab" aria-controls="bottom-links" aria-selected="false">Sponsor</a></li>
                                </ul>
                              </div>
                              <div class="tab-content content-tab" id="bottom-tabContent">
                                <div class="tab-pane fade show active" id="bottom-home" role="tabpanel">
                                  <div class="table-responsive custom-scrollbar">
                                    <table class="table display" style="width:100%">
                                      <tbody>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Create a Userflow. Social Application Design</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-success">Done</button>
                                          </td>
                                          <td>Nov 03,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Slimmuch Product Design Main Page</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-secondary">Pending</button>
                                          </td>
                                          <td>Aug 06,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Design of Interactive Prototypes</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-primary">In Progress</button>
                                          </td>
                                          <td>Nov 03,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Create Userflow Social Application Design</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-success">Done</button>
                                          </td>
                                          <td>Dec 20,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Create Userflow Social Application Design</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-primary">In Progress</button>
                                          </td>
                                          <td>Sep 20,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-content content-tab" id="bottom-tabContent-2">
                                <div class="tab-pane fade show" id="bottom-inbox" role="tabpanel">
                                  <div class="table-responsive custom-scrollbar">
                                    <table class="table display" style="width:100%">
                                      <tbody>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Create a Userflow. Social Application Design</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-success">Done</button>
                                          </td>
                                          <td>Nov 03,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Slimmuch Product Design Main Page</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-secondary">Pending</button>
                                          </td>
                                          <td>Aug 06,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Design of Interactive Prototypes</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-primary">In Progress</button>
                                          </td>
                                          <td>Nov 03,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-content content-tab" id="bottom-tabContent-3">
                                <div class="tab-pane fade show" id="bottom-contact" role="tabpanel">
                                  <div class="table-responsive custom-scrollbar">
                                    <table class="table display" style="width:100%">
                                      <tbody>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Create a Userflow. Social Application Design</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-success">Done</button>
                                          </td>
                                          <td>Nov 03,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Slimmuch Product Design Main Page</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-secondary">Pending</button>
                                          </td>
                                          <td>Aug 06,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-content content-tab" id="bottom-tabContent-4">
                                <div class="tab-pane fade show" id="bottom-links" role="tabpanel">
                                  <div class="table-responsive custom-scrollbar">
                                    <table class="table display" style="width:100%">
                                      <tbody>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Create a Userflow. Social Application Design</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-success">Done</button>
                                          </td>
                                          <td>Nov 03,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Slimmuch Product Design Main Page</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-secondary">Pending</button>
                                          </td>
                                          <td>Aug 06,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Design of Interactive Prototypes</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-primary">In Progress</button>
                                          </td>
                                          <td>Nov 03,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete"></use>
                                                </svg></a></span></td>
                                        </tr>
                                        <tr>
                                          <td> 
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="">
                                              <label class="form-check-label"></label>
                                            </div>
                                          </td>
                                          <td>
                                            <p>Create Userflow Social Application Design</p>
                                          </td>
                                          <td> 
                                            <button class="btn btn-success">Done</button>
                                          </td>
                                          <td>Dec 20,2024</td>
                                          <td> <span class="delete-option"> <a href="javascript:void(0)">
                                                <svg class="remove">
                                                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#Delete">                  </use>
                                                </svg></a></span></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-12">
                          <div class="card">
                            <div class="card-header pb-0">
                              <div class="header-top">
                                <h5>Project Summery</h5>
                                <div class="dropdown icon-dropdown">
                                  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                  <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                </div>
                              </div>
                            </div>
                            <div class="card-body pt-0 project-summary">
                              <div class="table-responsive custom-scrollbar">
                                <table class="table display" id="project-summary" style="width:100%">
                                  <thead>
                                    <tr>
                                      <th>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </th>
                                      <th> <span>Project name</span></th>
                                      <th> <span>Project Type</span></th>
                                      <th> <span>Teams</span></th>
                                      <th> <span>Start Date</span></th>
                                      <th> <span>Clients Location</span></th>
                                      <th> <span>Status</span></th>
                                      <th> </th>
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
                                      <td><span>Landing page</span></td>
                                      <td>Website</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/14.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/15.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/16.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Oct 26,2024</td>
                                      <td>UK-John Peter</td>
                                      <td class="font-success">Active</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </td>
                                      <td><span>NFT Website Page</span></td>
                                      <td>Campaign</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/17.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/3.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/7.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Nov 10,2024</td>
                                      <td>Srinsoft technology</td>
                                      <td class="font-secondary">Pending</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </td>
                                      <td><span>Email Design</span></td>
                                      <td>Design</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/12.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/18.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/19.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Feb 19,2024</td>
                                      <td>CA William sck</td>
                                      <td class="font-success">Active</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </td>
                                      <td><span>Banner Design</span></td>
                                      <td>Banner</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/14.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/15.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/16.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Nov 10,2024</td>
                                      <td>USA</td>
                                      <td class="font-secondary">Pending</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </td>
                                      <td><span>Redesign Layout</span></td>
                                      <td>Landing</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/17.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/3.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/7.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Jan 10,2024</td>
                                      <td>Design technology</td>
                                      <td class="font-Success">Active</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </td>
                                      <td><span>Login & Sign Up Ui</span></td>
                                      <td>Ui Design</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/12.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/18.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/19.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Feb 19,2024</td>
                                      <td>CA William sck</td>
                                      <td class="font-success">Active</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </td>
                                      <td><span>Front-End Website</span></td>
                                      <td>Website</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/14.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/15.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/16.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Nov 26,2024</td>
                                      <td>New zealand</td>
                                      <td class="font-success">Active</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </td>
                                      <td><span>NFT Website Page</span></td>
                                      <td>Campaign</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/17.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/3.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/7.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Nov 10,2024</td>
                                      <td>Srinsoft technology</td>
                                      <td class="font-secondary">Pending</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <label class="form-check-label"></label>
                                        </div>
                                      </td>
                                      <td><span>Social Design</span></td>
                                      <td>Product Design</td>
                                      <td> 
                                        <div class="user-details customers">
                                          <ul> 
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/12.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/18.png" alt="user"></li>
                                            <li class="d-inline-block"><img src="../assets/images/dashboard-3/user/19.png" alt="user"></li>
                                          </ul>
                                        </div>
                                      </td>
                                      <td>Feb 19,2024</td>
                                      <td>CA William</td>
                                      <td class="font-success">Active</td>
                                      <td> 
                                        <div class="dropdown icon-dropdown">
                                          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                                          <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
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
