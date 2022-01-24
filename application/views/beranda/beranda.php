<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LapeMas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Krub:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('template/bikin/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('template/bikin/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('template/bikin/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('template/bikin/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('template/bikin/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('template/bikin/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('template/bikin/') ?>assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?= base_url('') ?>">LaPeMas</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
      <h1>AYO!! Lapor Sekarang</h1>
      <h2>Kami akan menerima semua laporan dan masukan dari masyarakat</h2>
      <a href="#laporan" class="btn-get-started scrollto">Laporkan</a>
      <img src="<?= base_url('assets/ilustrasi/') ?>report.svg" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Layanan Pengaduan Masyarakat Kantor Camat Woja</h3>
              <p>
                Pengaduan masyarakat adalah laporan dari masyarakat mengenai adanya indikasi terjadinya penyimpangan, korupsi, kolusi dan nepotisme yang dilakukan aparat pemerintah daerah dalam penyelenggaraan pemerintahan
              </p>
              <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Masukan Laporan</h4>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Laporan diVerifikasi</h4>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class='bx bx-chevron-down-circle'></i>
                  <h4>Selesai</h4>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p> Montabaru, Woja, Kabupaten Dompu, Nusa Tenggara Barat. 84219</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>camatwoja@gmail.com<br>help_camatwoja@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Contact</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

    <!-- FORM NANTINYA -->
    <section id="laporan" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Form Pengaduan</h2>
          <p>Sampaikan laporan anda kepada kami, kami akan menindak lanjuti laporan anda</p>
        </div>

        <div class="row">
          <div class="col-lg-12 mt-4 mt-md-0">
            <form action="<?= base_url('beranda/index') ?>" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>" id="nama" placeholder="Masukan Nama">
                  <small style="color: red;"><?= form_error('nama'); ?></small>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" value="<?= set_value('email') ?>" name="email" id="email" placeholder="Email">
                  <small style="color: red;"><?= form_error('email'); ?></small>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="alamat" class="form-control" value="<?= set_value('alamat') ?>" id="alamat" placeholder="Alamat">
                  <small style="color: red;"><?= form_error('alamat'); ?></small>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="number" class="form-control" value="<?= set_value('hp') ?>" name="hp" id="HP" placeholder="No HP">
                  <small style="color: red;"><?= form_error('hp'); ?></small>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="judul_laporan" value="<?= set_value('judul_laporan') ?>" placeholder="Judul Laporan">
                <small style="color: red;"><?= form_error('judul_laporan'); ?></small>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="isi_laporan" rows="5" placeholder="Isi Laporan"><?= set_value('isi_laporan') ?></textarea>
                <small style="color: red;"><?= form_error('isi_laporan'); ?></small>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="lokasi_kejadian" value="<?= set_value('lokasi_kejadian') ?>" placeholder="Lokasi Kejadian">
                <small style="color: red;"><?= form_error('lokasi_kejadian'); ?></small>
              </div>
              <div class="my-3">
                <div class="sent-message"><?= $this->session->flashdata('message'); ?></div>
              </div>

              <input type="hidden" name="tgl" id="tgl" value="<?php echo date('Y-m-d'); ?>">

              <div class="text-center"><button class="btn btn-primary">Kirim Laporan</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- AKHIR FORM NANTINYA -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <!-- <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Bikin</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div> -->

    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Bikin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="<?= base_url('') ?>">BootstrapMade</a> and Developed By <a href="https://instagram.com/_cahyadi16" target="_blank">Cahyadi</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 1100)
  </script>
  <!-- Vendor JS Files -->
  <script src="<?= base_url('template/bikin/') ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('template/bikin/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('template/bikin/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('template/bikin/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('template/bikin/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('template/bikin/') ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('template/bikin/') ?>assets/js/main.js"></script>


</body>

</html>