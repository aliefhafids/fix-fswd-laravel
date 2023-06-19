<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/dashboard/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="/img/logo.svg" class="mr-2"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/img/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="/img/faces/face28.jpg" alt="profile" />
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-flex">
                        <a class="nav-link">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="nav-link px-3 bg-white border-0">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </button>
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/staffs">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Products</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- ----------------------------------- dashboard ----------------------------------- -->

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post" action="/admin/staffs" class="mb-5"
                                        enctype="multipart/form-data">
                                        <h4 class="card-title">Product form</h4>
                                        <form class="forms-sample">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="form-label">Product Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    name="name" required value="{{ old('name') }}">
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="price" class="form-label">Price</label>
                                                <input type="text"
                                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                                    name="price" required value="{{ old('price') }}">
                                                @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="category" class="form-label">Category</label>
                                                <select class="form-select form-select-lg mb-3" name="category_id">
                                                    @foreach ($categories as $category)
                                                    @if(old('category_id') == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                    </option>
                                                    @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Product Image</label>
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                <input class="form-control @error('image') is-invalid @enderror"
                                                    type="file" id="image" name="image" onchange="previewImage()">
                                                @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="form-label">Deskripsi</label>
                                                <textarea type="text"
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    id="description" name="description" rows="5" required
                                                    value="{{ old('description') }}">
                                                    @error('description')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    </textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="/vendors/chart.js/Chart.min.js"></script>
        <script src="/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="/js/off-canvas.js"></script>
        <script src="/js/hoverable-collapse.js"></script>
        <script src="/js/template.js"></script>
        <script src="/js/settings.js"></script>
        <script src="/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="/js/dashboard.js"></script>
        <script src="/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
        <script>
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');
                imgPreview.style.display = 'block';
                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                oFReader.onload = function (oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        
        </script>
</body>

</html>

