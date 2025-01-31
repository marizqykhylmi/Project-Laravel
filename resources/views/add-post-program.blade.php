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
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.css">
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
                                <h3>Post Program</h3>
                            </div>
                            <div class="col-sm-6 p-0">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">
                                            <span class="material-icons"
                                                style="font-size: 24px; color: black;">home</span>
                                        </a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('program') }}">Program</a></li>
                                    <li class="breadcrumb-item active">Add Post</li>
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
                                <div class="card-header pb-0">
                                    <h4>Post Edit</h4>
                                </div>
                                <div class="card-body add-post">
                                    <form class="row needs-validation" novalidate="" id="formPost"
                                        action="{{ route('program.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="title">Title:</label>
                                                <input class="form-control" id="title" name="title"
                                                    type="text" placeholder="Post Title" required="">
                                                <div class="invalid-feedback">Please fill in the title.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="description">Description:</label>
                                                <!-- Tempat Quill Editor -->
                                                <div id="description-editor" style="height: 150px; border: 1px solid #ced4da; border-radius: 5px;"></div>
                                        
                                                <!-- Input hidden untuk menyimpan data ke Laravel -->
                                                <input type="hidden" id="description" name="description">
                                                
                                                <div class="invalid-feedback">Please fill in the description.</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="image">Image:</label>
                                                <input class="form-control" id="image" name="image"
                                                    type="file" required="" accept="image/*">
                                                <div class="invalid-feedback">Please upload an image.</div>

                                                <!-- Area untuk preview gambar -->
                                                <div class="mt-3 position-relative" style="display: inline-block;">
                                                    <img id="imagePreview" src="#" alt="Preview Image"
                                                        class="img-fluid d-none"
                                                        style="max-height: 300px; border: 1px solid #ddd; border-radius: 5px;">

                                                    <!-- Ukuran file di tengah gambar -->
                                                    <div id="fileInfo"
                                                        class="position-absolute text-white bg-dark rounded-pill px-3 py-1 d-none"
                                                        style="top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 0.8;">
                                                    </div>

                                                    <!-- Tombol untuk menghapus gambar -->
                                                    <button id="removeImage"
                                                        class="btn btn-danger btn-sm position-absolute d-none"
                                                        style="top: 10px; right: 10px; border-radius: 50%;">X</button>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            // Elemen DOM
                                            const imageInput = document.getElementById('image');
                                            const imagePreview = document.getElementById('imagePreview');
                                            const fileInfo = document.getElementById('fileInfo');
                                            const removeImage = document.getElementById('removeImage');

                                            // Event listener untuk memilih file
                                            imageInput.addEventListener('change', function(event) {
                                                const file = event.target.files[0]; // Ambil file pertama

                                                if (file) {
                                                    const reader = new FileReader();

                                                    // Setelah file dibaca
                                                    reader.onload = function(e) {
                                                        // Tampilkan preview gambar
                                                        imagePreview.src = e.target.result;
                                                        imagePreview.classList.remove('d-none');

                                                        // Tampilkan informasi ukuran file
                                                        const fileSizeInMB = (file.size / 1024 / 1024).toFixed(2); // Konversi ke MB
                                                        fileInfo.textContent = `${fileSizeInMB} MB`;
                                                        fileInfo.classList.remove('d-none');

                                                        // Tampilkan tombol hapus
                                                        removeImage.classList.remove('d-none');
                                                    };

                                                    reader.readAsDataURL(file); // Baca file sebagai URL data
                                                }
                                            });

                                            // Event listener untuk tombol hapus
                                            removeImage.addEventListener('click', function() {
                                                // Reset input file
                                                imageInput.value = '';

                                                // Sembunyikan elemen preview, ukuran file, dan tombol hapus
                                                imagePreview.src = '#';
                                                imagePreview.classList.add('d-none');
                                                fileInfo.classList.add('d-none');
                                                removeImage.classList.add('d-none');
                                            });

                                            //text editor
                                            document.addEventListener("DOMContentLoaded", function () {
                                            // Inisialisasi Quill
                                            var quill = new Quill('#description-editor', {
                                                theme: 'snow',
                                                placeholder: 'Post Description...',
                                                modules: {
                                                    toolbar: [
                                                        ['bold', 'italic', 'underline', 'strike'],
                                                        [{ 'header': [1, 2, false] }],
                                                        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                                                        ['link', 'image']
                                                    ]
                                                }
                                            });

                                            // Simpan data ke input hidden saat user mengetik
                                            quill.on('text-change', function () {
                                                document.getElementById('description').value = quill.root.innerHTML;
                                            });
                                        });
                                        </script>


                                        <div class="btn-showcase text-end">
                                            <button class="btn btn-primary" type="submit">Post</button>
                                            <input class="btn btn-light" type="reset" onclick="clearForm()"
                                                value="Discard">
                                        </div>
                                    </form>
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
    <script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/email-app.js"></script>
    <script src="../assets/js/form-validation-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</body>

<!-- Mirrored from admin.pixelstrap.net/crocs/template/add-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 06:46:27 GMT -->

</html>
