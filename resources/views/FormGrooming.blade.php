<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BC Pet House</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="home">BC PET HOUSE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="home">Home</a></li>
          <li><a class="nav-link scrollto" href="home">Profile</a></li>
          <li><a class="nav-link scrollto" href="home">Service</a></li>
          <li><a class="nav-link   scrollto" href="home">Product</a></li>
          <li><a class="nav-link scrollto" href="home">Contact</a></li>
          <li> <a class="dropdown-item" href="{{ url('login') }}"
            onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>SELAMAT DATANG DI BC PET HOUSE</h1>
          <h2>We Love We Care</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/Ilustrasi.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        
        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/logo bc.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Grooming</h2>
          <p>Isi form dan check terlebih dahulu untuk data form grooming hewan peliharaan</p>
        </div>

        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info"><br/>
              <h4>List Tipe Grooming</h4><br/><br/>
                <h4>* Regular :</h4>
                <p>Rp 40.000,00</p>
                <h4>* Regular (Kitten) :</h4>
                <p>Rp 30.000,00</p>
                <h4>* Regular (Anjing) :</h4>
                <p>Rp 50.000,00</p>
                <h4>* Kutu/Jamur :</h4>
                <p>Rp 50.000,00</p>
                <h4>* Kutu/Jamur (Kitten) :</h4>
                <p>Rp 40.000,00</p>
                <h4>* Kutu/Jamur (Anjing) :</h4>
                <p>Rp 65.000,00</p>
                <h4>* Lengkap :</h4>
                <p>Rp 55.000,00</p>
                <h4>* Sebazol :</h4>
                <p>Rp 70.000,00</p>
                <h4>* Kering :</h4>
                <p>Rp 20.000,00</p>
                <br/>
                <h4>* Harga untuk penambahan</h4>
                <br/>
                <p>- DEGREASER (+ Rp10.000,00)</p>
                <p>- WHITENING (+ Rp5.000,00)</p>
                <br/>
                <h5>Jika terdapat kendala atau cancel</h5>
                <h6>Klik dibawah ini untuk menghubungi kami</h6>
                <a href="https://bit.ly/BCPetHouse" class="center"><button type="submit">BC Pet House</button></a>
                <br/><br/>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form name="google-sheet" action="{{ route('formGromming') }}" method="post" role="form" class="php-email-form">
               @csrf
              <div class="row">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" name="nama" id="subject" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Nama Hewan</label>
                  <input type="text" name="namahewan" class="form-control" id="subject" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Jenis Hewan</label>
                  <input type="text" class="form-control" name="jenishewan" id="subject" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Umur</label>
                <input type="text" class="form-control" name="umur" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">No.Telp (WhatsApp)</label>
                <input type="text" class="form-control" name="notelp" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Tipe Grooming</label>
                <input type="text" class="form-control" name="tipegrooming" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Sedia Pet Cargo (Ya/Tidak)</label>
                <input type="text" class="form-control" name="sediapetcargo" id="subject" required>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BC PET HOUSE</h3>
            <p>
              Jl. MT. Haryono XI No.338A, Dinoyo,<br>
              Kec. Lowokwaru, Kota Malang,<br>
              Jawa Timur, Indonesia <br><br>
              <strong>No.Telp:</strong> 0857-0818-0182<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="home">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="home">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="home">Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="home">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Service Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Penitipan">Penginapan Hewan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Grooming">Grooming</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Ikuti akun sosial media yang kami punya</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/bcpethouse/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/bcpethouse/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>BC Pet House</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
 <!--  <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbwvCm5aR-ofLsnF2s5Fc-Lw5vNmrjz5xjs0KIHhOdunXYEalX2EzQZnUhpHRZHsKsHROg/exec'
      const form = document.forms['google-sheet']
      
      form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => $("#form_alerts").html("<div class='alert alert-success'>Data berhasil dikirim.</div>"))
          .catch(error => $("#form_alerts").html("<div class='alert alert-danger'>Data gagal terkirim!.</div>"))
          form.reset();
      })
  </script> -->

</body>

</html>