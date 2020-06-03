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
  <?php echo $this->load->view('hp/share/logo', '', TRUE);?>

</head>
<body class="theme-light" data-highlight="blue2">
  <div id="page">
    <div id="page-preloader">
      <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
    </div>
    <?php echo $this->load->view('hp/share/header', '', TRUE);?>
    <div class="page-content">
      <div class="page-title-large color-white bottom-30" >
        <h2 data-username="Selamat Datang di Aplikasi Pengaduan" >KIBAN</h2>
        <h6 data-username="Selamat Datang di Aplikasi Pengaduan" >Konsultasi Informasi Beserta Pengaduan</h6>
        <a href="#" data-menu="menu-main" class="shadow-huge scale-box bg-fade-gray2-dark" ></a>
      </div>
      <div data-height="210" class="page-title-bg preload-image" data-src="<?php echo site_url(); ?>assets/hp/images/pictures/20s.jpg"></div>
      <div data-height="210" class="page-title-bg dark-mode-tint"></div>
      <div data-height="210" class="page-title-bg opacity-90 bg-highlight"></div>

      <div class="single-slider slider-full owl-no-dots owl-carousel">
        <div class="caption bottom-0 round-medium shadow-large" data-height="350">
          <div class="caption-bottom bottom-10 center-text">

          </div>
          <div class="caption-overlay "></div>
          <div class="caption-bg owl-lazy" data-src="<?php echo site_url(); ?>assets/hp/images/play.png"></div>
        </div>
        <div class="caption bottom-0 round-medium shadow-large" data-height="350">
          <div class="caption-bottom bottom-10 center-text">

          </div>
          <div class="caption-overlay "></div>
          <div class="caption-bg owl-lazy" data-src="<?php echo site_url(); ?>assets/hp/images/newsletter.png"></div>
        </div>
        <div class="caption bottom-0 round-medium shadow-large" data-height="350">
          <div class="caption-bottom bottom-10 center-text">

          </div>
          <div class="caption-overlay "></div>
          <div class="caption-bg owl-lazy" data-src="<?php echo site_url(); ?>assets/hp/images/1.png"></div>
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
                Anda Dapat Melaporkan Masalah Tanah Anda Terkait Sertifikat Tanah, Layanan Pengaduan, Pegawai Kantor Pertanahan Kota Banda Aceh Dan Lain Lain.
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
        <h2 class="color-white opacity-80 bottom-30 center-text">Newsletter</h2>
        <!-- <p class="color-white opacity-80 bottom-30">Adanda Dapat Mengakses Aplikasi Pengaduan Melalui Perangkat Dekstop/Laptop Maupun Smartphone/Handphone, Silahkan Pilih Tampilan Aplikasi Anda</p> -->
      </div>
      <?php
         foreach($newsletter as $newsletter){
       ?>
       <div class="content-boxed shadow-small">
         <div class="content">


           <a href="<?php echo site_url(); ?>newsletter">
             <?php echo $newsletter->gambar; ?>

           </a>
         </div>

       </div>

       <?php } ?>

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
