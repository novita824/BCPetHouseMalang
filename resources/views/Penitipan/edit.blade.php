<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BC Pet House</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets2/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets2/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets2/images/logo2.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="admin">BC PET HOUSE</a>
          <a class="navbar-brand brand-logo-mini" href="admin"><img src="../../assets2/images/logo2.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets2/images/faces/woman1.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Admin</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('login') }}">
                  <i href="logout.php" class="mdi mdi-logout me-2 text-primary"></i> Log out </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="../../assets2/images/faces/woman1.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">ADMIN</span>
                  <span class="text-secondary text-small">BC Pet House</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Data Penjualan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="Produk"> Product </a></li>
                  <li class="nav-item"> <a class="nav-link" href="Grooming"> Grooming </a></li>
                  <li class="nav-item"> <a class="nav-link" href="Penitipan"> Penitipan </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->

    <!-- ======= Contact Section ======= -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="right" class="page-title"> EDIT DATA PENITIPAN </h3>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info"></br>
                <h4>List Paket Penitipan</h4><br/><br/>
                <h4>* Paket Kos :</h4>
                <p>Rp 20.000,00</p>
                <h4>* Paket Losman :</h4>
                <p>Rp 25.000,00</p>
                <h4>* Paket Apartemen :</h4>
                <p>Rp 35.000,00</p>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('PenitipanUpdate') }}" method="POST" class="php-email-form">
              @csrf
              <div class="row">
                <input type="hidden" name="id" value="{{ $penitipan->idpenitipan }}">
                <div class="form-group">
                  <label for="name">No</label>
                  <input type="text" value="{{ $penitipan->nopenitipan }}"class="form-control" name="nopenitipan" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Pemilik</label>
                  <input type="text" value="{{ $penitipan->pemilik }}" class="form-control" name="pemilik" id="subject" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Tipe Penitipan</label>
                  <input type="text" value="{{ $penitipan->tipe }}" name="tipe" class="form-control" id="subject" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Penanggungjawab</label>
                  <input type="text" value="{{ $penitipan->pj }}" class="form-control" name="pj" id="subject" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Harga</label>
                <input type="text" value="{{ $penitipan->harga }}" class="form-control" name="harga" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Harga Pokok</label>
                <input type="text" value="{{ $penitipan->hargapokok }}" class="form-control" name="hargapokok" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Status</label>
                <input type="text" value="{{ $penitipan->status }}" class="form-control" name="status" id="subject" required>
              </div>
              <div class="text-center"><button class="btn btn-gradient-primary btn-sm" type="submit">Update</button></div>
           </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ?? BC Pet House</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets2/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets2/js/off-canvas.js"></script>
    <script src="../../assets2/js/hoverable-collapse.js"></script>
    <script src="../../assets2/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>