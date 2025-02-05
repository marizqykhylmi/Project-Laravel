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

      <!-- Page Body Start-->
      <div class="page-body-wrapper">
         <!-- Page Sidebar Start-->
         <div class="sidebar-wrapper" data-layout="fill-svg">
          <div>
            <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a>
              <div class="toggle-sidebar">
                <svg class="sidebar-toggle">
                  <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
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

                  </li>
                  <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title" href="{{ route('index') }}">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-home"></use>
                      </svg><span  href="{{ route('index') }}">Home</span></a>
                  </li>
                  <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title" href="{{ route('gallery') }}">
                      <svg class="stroke-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-gallery"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-gallery"></use>
                      </svg><span  href="{{ route('gallery') }}">Gallery</span></a>
                    <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title" href="{{ route('list-products') }}">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-product"></use>
                    </svg>
                  <svg class="fill-icon">
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-product"></use>
                  </svg><span  href="{{ route('list-products') }}">Product</span></a>
                  <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title" href="{{ route('program') }}">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-program"></use>
                    </svg>
                  <svg class="fill-icon">
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-program"></use>
                  </svg><span  href="{{ route('program') }}">Program</span></a>
                  <li class="sidebar-list"><i class=""></i><a class="sidebar-link sidebar-title" href="{{ route('sponsor') }}">
                    <svg class="stroke-icon">
                      <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#stroke-sponsor"></use>
                    </svg>
                  <svg class="fill-icon">
                    <use href="https://admin.pixelstrap.net/crocs/assets/svg/icon-sprite.svg#fill-sponsor"></use>
                  </svg><span  href="{{ route('sponsor') }}">Sponsor</span></a>
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
                        <div class="col-6">
                            <h4>Product List</h4>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">
                                        <span class="material-icons" style="font-size: 24px; color: black;">home</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">ECommerce</li>
                                <a href="{{ route('list-product.create') }}" class="breadcrumb-item active">Add Product</a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts -->
            <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="list-product-header d-flex justify-content-between">
                                  <h4>Product List</h4>
                                  <a class="btn btn-primary" href="{{ route('list-product.create') }}">
                                      <i class="fa fa-plus"></i> Add Product
                                  </a>
                              </div>
                              <div class="list-product">
                                  <table class="table table-bordered" id="product-list">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Details</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($products as $index => $product)
                                              <tr>
                                                  <td>{{ $index + 1 }}</td>
                                                  <td>
                                                      <div class="product-details">
                                                          <div class="d-flex align-items-center mb-2">
                                                              <img src="{{ asset('/storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-thumbnail" width="100">
                                                              <h5 class="ms-3">{{ $product->name }}</h5>
                                                          </div>
                                                          <ul class="list-group">
                                                              <li class="list-group-item"><strong>Color:</strong> {{ $product->color }}</li>
                                                              <li class="list-group-item"><strong>Category:</strong> {{ optional($product->category)->name ?? 'Not available' }}</li>
                                                              <li class="list-group-item"><strong>System:</strong> {{ $product->system }}</li>
                                                              <li class="list-group-item"><strong>Power Supply:</strong> {{ $product->power_supply }}</li>
                                                              <li class="list-group-item"><strong>Status:</strong> {{ $product->status }}</li>
                                                              <li class="list-group-item"><strong>Front Port:</strong> {{ $product->front_port }}</li>
                                                              <li class="list-group-item"><strong>Display Size:</strong> {{ $product->display_size }}</li>
                                                              <li class="list-group-item"><strong>Product Size:</strong> {{ $product->product_size }}</li>
                                                              <li class="list-group-item"><strong>Package Size:</strong> {{ $product->package_size }}</li>
                                                              <li class="list-group-item"><strong>Net Weight:</strong> {{ $product->net_weight }}</li>
                                                              <li class="list-group-item"><strong>Gross Weight:</strong> {{ $product->gross_weight }}</li>
                                                              <li class="list-group-item"><strong>Quantity:</strong> {{ $product->quantity }}</li>
                                                              <li class="list-group-item">
                                                                  <strong>Rating:</strong>
                                                                  <div class="rating">
                                                                      @for ($i = 1; $i <= 5; $i++)
                                                                          <i class="fa {{ $i <= $product->rating ? 'fa-star txt-warning' : 'fa-star f-light' }}"></i>
                                                                      @endfor
                                                                      {{ $product->rating }}
                                                                  </div>
                                                              </li>
                                                          </ul>
                                                          <div class="mt-3">
                                                              <a href="{{ route('list-product.edit', $product->id) }}" class="btn btn-sm btn-info">
                                                                  <i class="fa fa-edit"></i> Edit
                                                              </a>
                                                              <form action="{{ route('list-product.delete', $product->id) }}" method="POST" style="display: inline;" id="delete-form-{{ $product->id }}">
                                                                  @csrf
                                                                  @method('DELETE')
                                                                  <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $product->id }})">
                                                                      <i class="fa fa-trash"></i> Delete
                                                                  </button>
                                                              </form>
                                                          </div>
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
          
          @section('styles')
              <style>
                  .rating {
                      font-size: 1.2rem;
                  }
                  .txt-warning {
                      color: yellow;
                  }
                  .f-light {
                      color: lightgray;
                  }
                  .product-details ul {
                      list-style-type: none;
                      padding: 0;
                  }
                  .product-details ul li {
                      padding: 5px;
                      border-bottom: 1px solid #ddd;
                  }
                  .product-details ul li:last-child {
                      border-bottom: none;
                  }
              </style>
          @endsection
          
          @section('scripts')
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
              <script>
                  function confirmDelete(productId) {
                      Swal.fire({
                          title: 'Are you sure?',
                          text: 'You won\'t be able to revert this!',
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Yes, delete it!'
                      }).then((result) => {
                          if (result.isConfirmed) {
                              document.getElementById('delete-form-' + productId).submit();
                          }
                      });
                  }
              </script>
          @endsection
          
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
