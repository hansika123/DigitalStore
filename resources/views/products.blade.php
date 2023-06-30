<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Products</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('import/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('import/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="{{ asset('import/assets/img/digilogo.png') }}" alt="">
    
      </a>
    
    </div><!-- End Logo -->

    <div class="search-bar">
     
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

       

       

        <li class="nav-item dropdown">

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('import/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Name</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="">
          <i class="bi bi-grid"></i>
          <span>Products</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                <h5 class="card-title">Products List<span> <a href="{{ route('products.pdf') }}" class="btn btn-download">Download PDF</a></span></h5>


                  <table class="table table-borderless">
    <thead>
        <tr>
            <th scope="col">Code</th>
            <th scope="col">Name</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <!-- <th scope="col">Actions</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->product_code }}</th>
                <td><a href="#" class="text-primary fw-bold">{{ $product->name }}</a></td>
                <td>{{ $product->stock }}</td>
                <td class="fw-bold">Rs.{{ $product->price }}</td>
                <td>{{ $product->category->name }}</td>
                <!-- <td><button class="btn btn-primary btn-categorylist w-60">Update</button></td> -->
            </tr>
        @endforeach
    </tbody>
</table>


                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Create Product<span>| </span></h5>

              <form action="{{ route('products.store') }}" method="POST" >
    @csrf
    <div class="mb-3">
        <label for="product_code" class="form-label">Code</label>
        <input type="text" name="product_code" id="product_code" class="form-control" required>
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
         <label for="category_id" class="form-label">Category</label>
        <select name="category_id" id="category_id" class="form-control" required>
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <label for="stock" class="form-label">Stock</label>
        <input type="text" name="stock" id="stock" class="form-control" required>
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" id="price" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary btn-category">Create</button>
</form>
             
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

         

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>
    

  </main><!-- End #main -->    

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
   
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('import/{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('import/{{ asset('import/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('import/{{ asset('import/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('import/{{ asset('import/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('import/{{ asset('import/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('import/{{ asset('import/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('import/{{ asset('import/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('import/{{ asset('import/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('import/{{ asset('import/assets/js/main.js"></script>

</body>

</html>
