<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <title>Smartphone -  Aplikasi Pengaduan</title>
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/hp/styles/css.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/hp/styles/framework.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/hp/fonts/css/fontawesome-all.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url(); ?>assets/hp/app/icons/icon-192x192.png">
</head>
<body class="theme-light" data-highlight="blue2">
  <div id="page">
    <div id="page-preloader">
      <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>
    <?php echo $this->load->view('hp/share/header', '', TRUE);?>
    <div class="page-content">
      <div class="page-title-large color-white bottom-30">
        <h2 data-username="Selamat Datang di Aplikasi Pengaduan" >KIBAN</h2>
        <h6 data-username="Selamat Datang di Aplikasi Pengaduan" >Konsultasi Informasi Beserta Pengaduan</h6>
        <a href="#" data-menu="menu-main" class="shadow-huge scale-box bg-fade-gray2-dark"></a>
      </div>
      <div data-height="210" class="page-title-bg preload-image" data-src="<?php echo site_url(); ?>assets/hp/images/pictures/20s.jpg"></div>
      <div data-height="210" class="page-title-bg dark-mode-tint"></div>
      <div data-height="210" class="page-title-bg opacity-90 bg-highlight"></div>

      <div class="single-slider slider-full owl-no-dots owl-carousel">
        <div class="caption bottom-0 round-medium shadow-large" data-height="350">
          <div class="caption-bottom bottom-10 center-text">
            <h1 class="bolder font-28">KIBAN</h1>
            <p class="color-theme boxed-text-huge opacity-60">
              Konsultasi Informasi Beserta Pengaduan
            </p>
          </div>
          <div class="caption-overlay bg-gradient-fade"></div>
          <div class="caption-bg owl-lazy" data-src="<?php echo site_url(); ?>assets/hp/images/pictures/17m.jpg"></div>
        </div>
        <div class="caption bottom-0 round-medium shadow-large" data-height="350">
          <div class="caption-bottom bottom-10 center-text">
            <h1 class="bolder font-24">Beyond Powerful Aplikasi Pengaduan</h1>
            <p class="color-theme boxed-text-huge opacity-60">
              Azures is a Mobile Web App Kit, fully featured, supporting PWA and Native Dark Mode!
            </p>
          </div>
          <div class="caption-overlay bg-gradient-fade"></div>
          <div class="caption-bg owl-lazy" data-src="<?php echo site_url(); ?>assets/hp/images/pictures/8m.jpg"></div>
        </div>
        <div class="caption bottom-0 round-medium shadow-large" data-height="350">
          <div class="caption-bottom bottom-10 center-text">
            <h1 class="bolder font-24">Pentingnya Pengaduan masyarakat</h1>
            <p class="color-theme boxed-text-huge opacity-60">
              We build custom, premium products, that are easy to use and provide all features for you!
            </p>
          </div>
          <div class="caption-overlay bg-gradient-fade"></div>
          <div class="caption-bg owl-lazy" data-src="<?php echo site_url(); ?>assets/hp/images/pictures/14m.jpg"></div>
        </div>
      </div>


      <div class="content-boxed shadow-small bottom-30">
        <div class="content">

          <div class="clear"></div>

        </div>
        <div class="content top-0 center-text bottom-20">
          <div class="one-third">
            <h1 class="bolder">
              <?php
                 foreach($jumlah_pengaduan as $pengaduan){
               ?>
               <?php echo $pengaduan->jumlah; ?>
               <?php } ?>
            </h1>
            <p class="under-heading font-10 bottom-15">Total Pengaduan</p>
          </div>
          <div class="one-third">
            <h1 class="bolder">
              <?php
                 foreach($pengaduan_selesai as $selesai){
               ?>
               <?php echo $selesai->jumlah; ?>
               <?php } ?>
            </h1>
            <p class="under-heading font-10 bottom-15">Selesai</p>
          </div>
          <div class="one-third last-column">
            <h1 class="bolder">
              <?php
                 foreach($pengaduan_proses as $proses){
               ?>
               <?php echo $proses->jumlah; ?>
               <?php } ?>
            </h1>
            <p class="under-heading font-10 bottom-15">Proses</p>
          </div>
          <div class="clear"></div>
          <div class="divider bottom-20"></div>

          <div class="clear"></div>
        </div>
      </div>


      <div class="content-boxed shadow-small bottom-40 top-50">
        <div class="content">
          <h2 class="center-text">Laporkan Masalah Anda</h2>

          <div class="divider divider-small bg-highlight bottom-30"></div>
          <div class="list-columns-left bottom-25">
            <div>
              <i class="fas fa-bullhorn color-yellow1-dark fa-3x"></i>
              <h1 class="bold font-16">Laporkan Masalah Anda</h1>
              <p>
                Anda Dapat Melaporkan Maslah Tanah Anda, Sertifikat Tanah, Layanan Pengaduan, Pegawai Kantor Pertanahan Kota Banda Aceh .
              </p>
            </div>
          </div>
          <div class="list-columns-left bottom-25">
            <div>
              <i class="fas fa-clipboard-list color-highlight fa-3x"></i>
              <h1 class="bold font-16">Pengaduan Anda Akan di Proses</h1>
              <p>
                Pengaduan Anda Akan Di Proses Dengan Cepat Berdasarkan Aduan dan Data Yang Anda Berikan.
              </p>
            </div>
          </div>
          <div class="list-columns-left bottom-25">
            <div>
              <i class="far fa-check-circle color-green1-dark fa-3x"></i>
              <h1 class="bold font-16">Pengaduan Selesai</h1>
              <p>
                Setelah di Proses, Pengaduan Anda Akan di Upload Ke Dalam Aplikasi dan Anda Dapat Memantau Pengaduan Dengan Memasukkan Nomor HP.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div data-height="300" class="content-bg round-none top-10 bg-bg preload-image" data-src="<?php echo site_url(); ?>assets/hp/images/pictures/20s.jpg"></div>
      <div data-height="300" class="content-bg round-none top-10 dark-mode-tint"></div>
      <div data-height="300" class="content-bg round-none top-10 opacity-90 bg-highlight"></div>
      <div class="content bottom-0">
        <br>
        <h4 class="color-white top-30 bottom-0">Kemudahan Untuk Mengakses</h4>
        <p class="color-white opacity-80 bottom-30">Adanda Dapat Mengakses Aplikasi Pengaduan Melalui Perangkat Dekstop/Laptop Maupun Smartphone/Handphone, Silahkan Pilih Tampilan Aplikasi Anda</p>
      </div>
      <div class="content-boxed shadow-small">
        <div class="content">
          <div class="one-half">
            <a href="<?php echo site_url(); ?>beranda" data-height="180" class="caption round-medium shadow-large bg-theme bottom-15" style="height: 180px;">
              <div class="caption-center">
                <h1 class="center-text">
                  <img src="<?php echo site_url(); ?>assets/hp/images/dekstop.jfif" width="55" height="55" >
                </h1>
                <h4 class="center-text color-theme">Dekstop</h4>

              </div>

            </a>
          </div>
          <div class="one-half last-column">
            <a href="<?php echo site_url(); ?>hp" data-height="180" class="caption round-medium shadow-large bg-theme bottom-15" style="height: 180px;">
              <div class="caption-center">
                <h1 class="center-text">
                  <img src="<?php echo site_url(); ?>assets/hp/images/hp.jfif" width="65" height="55" >
                </h1>
                <h4 class="center-text color-theme">Smartphone</h4>

              </div>

            </a>
          </div>

        </div>

      </div>
    </div>

    <?php echo $this->load->view('hp/share/sosial_media', '', TRUE);?>

    <?php echo $this->load->view('hp/share/menu_bawah', '', TRUE);?>

    <?php echo $this->load->view('hp/share/menu_samping', '', TRUE);?>

    <?php echo $this->load->view('hp/share/menu_atas', '', TRUE);?>

    <div class="menu-hider"></div>
  </div>
  <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/jquery.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/plugins.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/custom.js"></script>
</body>
