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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profile</a></li>
                    <li><a class="nav-link scrollto" href="#services">Service</a></li>
                    <li><a class="nav-link   scrollto" href="#product">Product</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
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

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>PROFILE</h2>
                </div>

                <div class="row content">
                    <div class="center" align="center">
                        <p>
                            BC Pet House adalah Salah satu pethop yang berada di malang tepatnya berada di dinoyo kota
                            malang.
                        </p>
                        <p>
                            BC Pet House telah lama didirikan selama 2 tahun pethop ini telah beroperasi, dan
                        </p>
                        <p>
                            jam buka adalah setiap hari namun dikhususkan pada hari minggu BC Pet House buka hingga jam
                            3 sore
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title" >
                    <h2>Service</h2>
                    <p>Menyediakan layanan untuk hewan peliharaan</p>
                </div>

                <div class="row" style="transform: translate(25%, 5%);">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="formPenitipan">Penitipan</a></h4>
                            <p>Pada penitipan ini khusus untuk hewan peliharaan seperti anjing dan kucing</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="formGrooming">Grooming</a></h4>
                            <p>Layanan yang Menyediakan Grooming untuk hewan peliharaan yang terjamin dengan kepuasan
                                pelanggan</p>
                        </div>
                    </div>
                </div>

        </section><!-- End Services Section -->

        <!-- ======= Product Section ======= -->
        <section id="product" class="product">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>PRODUCT</h2>
                    <p>Berikut merupakan produk yang kami jual pada toko kami</p>
                </div>

                <div class="row product-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-makanan">
                        <div class="portfolio-img"><img src="assets/img/produk/BoltTuna1kg.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Bolt Tuna 1 Kg</h4>
                            <p>Rp 22.000,00</p>
                            <a href="assets/img/produk/BoltTuna1kg.jpg" data-gallery="public"
                                class="portfolio-lightbox preview-link" title="Bolt Tuna 1 KgBolt Tuna 1 Kg"><i class="bx bx-plus"></i></a>
                            <a href="pembayaran" class="money-link" title="Pembayaran"><i
                                    class="bx bx-money"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/produk/whiskastuna.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Wishkas Tuna</h4>
                            <p>Rp 23.000,00</p>
                            <a href="assets/img/produk/whiskastuna.jpg" data-gallery="public"
                                class="portfolio-lightbox preview-link" title="Wishkas Tuna"><i class="bx bx-plus"></i></a>
                            <a href="pembayaran" class="money-link" title="Pembayaran"><i
                                    class="bx bx-money"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/produk/felibite1.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Felibite 500g</h4>
                            <p>Rp 13.000,00</p>
                            <a href="assets/img/produk/felibite1.jpg" data-gallery="public"
                                class="portfolio-lightbox preview-link" title="Felibite 500g"><i class="bx bx-plus"></i></a>
                            <a href="pembayaran" class="money-link" title="Pembayaran"><i
                                    class="bx bx-money"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/produk/felibite2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Felibite 500g</h4>
                            <p>Rp 13.000,00</p>
                            <a href="assets/img/produk/felibite2.jpg" data-gallery="public"
                                class="portfolio-lightbox preview-link" title="Felibite 500g"><i class="bx bx-plus"></i></a>
                            <a href="pembayaran" class="money-link" title="Pembayaran"><i
                                    class="bx bx-money"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/produk/excel1.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Excel 500g</h4>
                            <p>Rp 13.000,00</p>
                            <a href="assets/img/produk/excel1.jpg" data-gallery="public"
                                class="portfolio-lightbox preview-link" title="Excel 500g"><i class="bx bx-plus"></i></a>
                            <a href="pembayaran" class="money-link" title="Pembayaran"><i
                                    class="bx bx-money"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/produk/excel2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Excel 500g</h4>
                            <p>Rp 13.000,00</p>
                            <a href="assets/img/produk/excel2.jpg" data-gallery="public"
                                class="portfolio-lightbox preview-link" title="Excel 500g"><i class="bx bx-plus"></i></a>
                            <a href="pembayaran" class="money-link" title="Pembayaran"><i
                                    class="bx bx-money"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/produk/meo.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Meo Persia</h4>
                            <p>Rp 22.000,00</p>
                            <a href="assets/img/produk/meo.jpg" data-gallery="public"
                                class="portfolio-lightbox preview-link" title="Meo Persia"><i class="bx bx-plus"></i></a>
                            <a href="pembayaran" class="money-link" title="Pembayaran"><i
                                    class="bx bx-money"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/produk/meo500g.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Meo Tuna 500g</h4>
                            <p>Rp 20.000,00</p>
                            <a href="assets/img/produk/meo500g.jpg" data-gallery="public"
                                class="portfolio-lightbox preview-link" title="Meo Tuna 500g"><i class="bx bx-plus"></i></a>
                            <a href="pembayaran" class="money-link" title="Pembayaran"><i
                                    class="bx bx-money"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Maxi Cat</h4>
                            <p>Rp 15.000,00</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Bolt Tuna 500g</h4>
                            <p>Rp 12.000,00</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Cleo Persia 500g</h4>
                            <p>Rp 22.000,00</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Bold Kitten 1 Kg</h4>
                            <p>Rp 25.000,00</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Bold Kitten 500g</h4>
                            <p>Rp 14.000,00</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Ori Cat</h4>
                            <p>Rp 22.000,00</p>
                            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Product Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Hubungi kami disini dan berikan review terbaik anda untuk kami</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Jl. MT. Haryono XI No.338A, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Hubungi:</h4>
                                <p>0857-0818-0182</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form name="google-sheet" action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="subject" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control" name="email" id="subject"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Judul</label>
                                <input type="text" class="form-control" name="judul" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Komentar</label>
                                <textarea class="form-control" name="komentar" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim</button></div>
                        </form>
                        <script>
                            const scriptURL = 'https://script.google.com/macros/s/AKfycbwgNFzYiIEe0QTSldlH8vfhvuRqGur9sOQav6WJG7_zBhbKNEeR9oXcvHAmB0o6dIgnfg/exec'
                            const form = document.forms['google-sheet']
                            
                            form.addEventListener('submit', e => {
                                e.preventDefault()
                                fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                                .then(response => $("#form_alerts").html("<div class='alert alert-success'>Data berhasil dikirim.</div>"))
                                .catch(error => $("#form_alerts").html("<div class='alert alert-danger'>Data gagal terkirim!.</div>"))
                                form.reset();
                            })
                        </script>
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
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#product">Product</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Service Kami</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Penitipan Hewan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Grooming</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>Ikuti akun sosial media yang kami punya</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/bcpethouse/" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/bcpethouse/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
