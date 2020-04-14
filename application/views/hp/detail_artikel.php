<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <title>Artikel</title>
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
    <div class="header header-fixed header-logo-app header-auto-show">
      <a href="index.html" class="header-subtitle">Kembali</a>
      <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
      <a href="#" data-toggle-theme class="header-icon header-icon-2"><i class="fas fa-lightbulb"></i></a>

    </div>
    <?php
       foreach($informasi as $informasi){
     ?>
    <div class="page-content">
      <div data-height="150" class="page-title-bg bg-20"></div>
      <div data-height="150" class="page-title-bg dark-mode-tint"></div>
      <div data-height="150" class="page-title-bg opacity-90 bg-highlight"></div>
      <div class="page-title-small color-white bottom-30">
        <h1><i class="fa fa-arrow-left back-button"></i>Artikel</h1>

      </div>
      <div class="content-boxed content-boxed-full">
        <div data-height="350" class="caption shadow-large bottom-0">
          <div class="caption-bottom bottom-15 left-15">
            <h1 class="color-white bolder font-30"><?php echo $informasi->judul; ?></h1>
            <p class="under-heading color-white opacity-60">
              <?php
              $bulan = array (
                  1 => 'Januari',
                  'Februari',
                  'Maret',
                  'April',
                  'Mei',
                  'Juni',
                  'Juli',
                  'Agustus',
                  'September',
                  'Oktober',
                  'November',
                  'Desember'
                );
                $pecahkan = explode('-', date('d F Y', strtotime($informasi->tanggal)));
                $tanggal= $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                ?><?php echo $tanggal;?>,
            </p>
            <p class="bottom-0">

              <a href="#" class="color-white opacity-30 right-20"><i class="fa fa-tag right-5 font-11"></i><span><?php echo $informasi->nama_jenis_informasi; ?></span></a>

            </p>
          </div>
          <div class="caption-overlay bg-gradient"></div>
          <style media="screen">
          .bg-10 {
            background-image: url(<?php echo site_url(); ?>upload/artikel/<?php echo $informasi->foto; ?>);
        }
          </style>
          <div class="caption-bg bg-10" >

        </div>
        </div>
      </div>
      <div class="content-boxed shadow-small">
        <div class="content bottom-0">
          <p>
          <?php echo $informasi->artikel; ?>
          </p>

        </div>
      </div>


    </div>
     <?php } ?>


    <?php echo $this->load->view('hp/share/menu_bawah', '', TRUE);?>



    <?php echo $this->load->view('hp/share/menu_atas', '', TRUE);?>

    <div class="menu-hider"></div>
    </div>
    <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/jquery.js"></script>
    <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/plugins.js"></script>
    <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/custom.js"></script>
</body>
