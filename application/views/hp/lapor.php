<!DOCTYPE HTML>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <title>Laporkan Pengaduan</title>
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
      <a href="<?php echo site_url(); ?>hp" class="header-subtitle">Kembali</a>
      <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
      <a href="#" data-toggle-theme class="header-icon header-icon-2"><i class="fas fa-lightbulb"></i></a>

    </div>
    <div class="page-content" style="padding-bottom: 0px;">
      <div data-height="150" class="page-title-bg bg-20"></div>
      <div data-height="150" class="page-title-bg dark-mode-tint"></div>
      <div data-height="150" class="page-title-bg opacity-90 bg-highlight"></div>
      <div class="page-title-small color-white bottom-30">
        <h1><i class="fa fa-arrow-left back-button"></i>Lapor Pengaduan</h1>
        <a href="#" data-menu="menu-main" class="shadow-huge scale-box bg-fade-gray2-dark"></a>
      </div>
      <div class="content-boxed shadow-small">

        <div class="content">
          <h3 class="bolder">Formulir Pengaduan</h3>
          <br>
          <form  action="<?php echo site_url(); ?>pengaduan_hp" method="post" enctype="multipart/form-data">
          <div class="input-style  input-style-1 input-required">
            <span>Nomor Handphone</span>
            <em>(Wajib di isi)</em>
            <input required type="number"  name="no_telepon" placeholder="Homor Handphone">
          </div>
          <div class="input-style input-style-1 input-required">
            <span>Nama Lengkap</span>
            <em>(Wajib di isi)</em>
            <input required type="text" name="nama_lengkap" placeholder="Nama Lengkap">
          </div>
          <div class="input-style input-style-1 input-required">
            <span>NIK (Nomor Induk Kependudukan)</span>
            <em>(Wajib di isi)</em>
            <input required type="number" name="nik" placeholder="NIK">
          </div>
          <div class="input-style input-style-1 input-required">
            <span>ALamat </span>
            <em>(Wajib di isi)</em>
            <input required type="text" name="alamat" placeholder="Alamat">
          </div>
          <div class="input-style input-style-1 input-required">
            <span>Pekerjaan</span>
            <em>(Wajib di isi)</em>
            <input type="text" name="pekerjaan" placeholder="Pekerjaan" required>
          </div>
          <div class="input-style input-style-1 input-required">
            <span>Uraian Pengaduan</span>
            <em>(Wajib di isi)</em>
            <textarea  required name="uraian_pengaduan" placeholder="Uraian Pengaduan"></textarea>
          </div>
          <!-- <h6 >Foto KTP</h6>
          <div class="input-style input-style-1 input-required">
            <span>KTP</span>
            <em>(Wajib di isi)</em>
            <input required type="file" accept="image/*" name="ktp" placeholder="Pekerjaan">
          </div>
          <h6 >Foto Bukti</h6>
          <div class="input-style input-style-1 input-required">
            <span>Bukti</span>
            <em>(Jika Ada)</em>
            <input type="file" accept="image/*" name="bukti1" placeholder="Pekerjaan" >

          </div> -->
          <p align="center">
            <button  style="padding: 15px 100px!important;" class="button button-full button-m shadow-large button-round-small bg-green1-dark top-30 bottom-0">Kirim</button>
          </p>
          </form>
        </div>
        </div>
      </div>





    <?php echo $this->load->view('hp/share/menu_bawah', '', TRUE);?>

    <?php echo $this->load->view('hp/share/menu_samping', '', TRUE);?>

    <?php echo $this->load->view('hp/share/menu_atas', '', TRUE);?>

    <div class="menu-hider"></div>
  </div>
  <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/jquery.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/plugins.js"></script>
  <script type="text/javascript" src="<?php echo site_url(); ?>assets/hp/scripts/custom.js"></script>
</body>
