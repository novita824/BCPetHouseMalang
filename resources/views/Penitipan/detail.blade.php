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
                  <li class="nav-item"> <a class="nav-link" href="{{ route('Penitipan.index') }}"> Penitipan </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> DETAIL </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                <input type="hidden" name="id" value="{{ $penitipan->id }}" >
                <div class="form-group col-md-6">
                  <label for="name">Nama Hewan</label>
                  <input type="text" value="{{ $penitipan->namahewan }}" name="namahewan" class="form-control" id="subject" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Nama Pemilik</label>
                  <input type="text" value="{{ $penitipan->namapemilik }}" class="form-control" name="email" id="subject" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Alamat (beserta sharelock)</label>
                <input type="text" value="{{ $penitipan->alamat}}" class="form-control" name="alamat" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Sedia Pet Cargo (Ya/Tidak)</label>
                <input type="text" value="{{ $penitipan->petcargo }}" class="form-control" name="sediapetcargo" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Sedia Kandang (Ya/Tidak)</label>
                <input type="text"  value="{{ $penitipan->kandang }}" class="form-control" name="sediakandang" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Tanggal Penitipan (Tanggal)</label>
                <input type="date" value="{{ $penitipan->tanggal }}" class="form-control" name="tanggalpenitipan" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Jenis Paket</label>
                <input type="text" value="{{ $penitipan->jenispaket }}" class="form-control" name="jenispaket" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">1. Sehari biasa makan berapa kali</label>
                <input type="text" value="{{ $penitipan->berapakalimakan }}" class="form-control" name="berapakalimakan" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">2. Pakan</label>
                <input type="text" value="{{ $penitipan->pakan }}" class="form-control" name="pakan" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">3. Riwayat Vaksin</label>
                <input type="text" value="{{ $penitipan->riwayatvaksin }}" class="form-control" name="riwayatvaksin" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">4. Kontak yang bisa dihubungi (WhatsApp)</label>
                <input type="text" value="{{ $penitipan->kontak }}" class="form-control" name="kontak" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">5. Riwayat Penyakit</label>
                <input type="text" value="{{ $penitipan->riwayatpenyakit }}" class="form-control" name="riwayatpenyakit" id="subject" required>
              </div>
                  </div>
                </div>
              </div>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © BC Pet House</span>
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