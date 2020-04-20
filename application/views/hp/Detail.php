<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <title>Detail</title>
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/hp/styles/css.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/hp/styles/framework.css">
  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/hp/fonts/css/fontawesome-all.min.css">
  <?php echo $this->load->view('hp/share/logo', '', TRUE);?>
  <body class="theme-light" data-highlight="blue2">
    <div id="page">
      <div id="page-preloader">
        <div class="loader-main"><div class="preload-spinner border-highlight"></div></div>
      </div>
      <div class="header header-fixed header-logo-app header-auto-show">
        <a href="<?php echo site_url(); ?>hp" class="header-subtitle">kembali</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2"><i class="fas fa-lightbulb"></i></a>

      </div>
      <div class="page-content">
        <div data-height="150" class="page-title-bg bg-20"></div>
        <div data-height="150" class="page-title-bg dark-mode-tint"></div>
        <div data-height="150" class="page-title-bg opacity-90 bg-highlight"></div>
        <div class="page-title-small color-white bottom-30">
          <h1><i class="fa fa-arrow-left back-button"></i>Progress Pengaduan</h1>
          <a href="#" data-menu="menu-main" class="shadow-huge scale-box bg-fade-gray2-dark"></a>
        </div>


        <?php
        foreach($data_pengaduan as $detail){
        ?>

        <div class="timeline-body">
          <div class="timeline-deco"></div>
          <div class="timeline-item">
            <i class="fas fa-bullhorn font-20 bg-facebook shadow-large timeline-icon"></i>
            <div class="timeline-item-content-full round-small">

              <br>
                <div class="content bottom-10">
                  <div class="float-left">
                    <h4 class="bolder"><?php echo $detail->nama;?></h4>
                    <p class="font-10 under-heading bottom-15"><?php echo $detail->nama_jenis_pengaduan;?></p>
                  </div>

                  <div class="divider clear bottom-15"></div>
                  <div class="one-half">
                    <strong class="color-theme">Tanggal:</strong>
                    <p class="font-12 bottom-15"><i class="far fa-calendar right-5"></i><?php echo $detail->tanggal_pengaduan;?></p>
                  </div>
                  <div class="one-half last-column">
                    <strong class="color-theme">Nomor Handphone:</strong>
                    <p class="font-12 bottom-15"><?php echo $detail->no_telepon;?></p>
                  </div>
                  <div class="clear"></div>
                  <strong class="color-theme">Uraian</strong>
                  <p>
                    <?php echo $detail->uraian;?>
                  </p>

                </div>

            </div>
          </div>
          <div class="timeline-item">
            <i class="fas fa-clipboard-list font-18 bg-instagram shadow-large timeline-icon"></i>
            <div class="timeline-item-content round-small">

              <div class="content bottom-10">
                <div class="float-left">
                  <h4 class="bolder">Kantor Pertanahan Kota Banda Aceh</h4>
                  <p class="font-10 under-heading bottom-15">Administrator</p>
                </div>

                <div class="divider clear bottom-15"></div>

                <div class="clear"></div>
                <strong class="color-theme">Tindak Lanjut</strong>
                <p>
                  <?php if($detail->status==0){
                    ?>
                    Sedang Dalam Proses Penyelesaian
                    <?php
                  }else{
                    ?>
                    <?php echo $detail->tindak_lanjut;?>
                    <?php
                  }
                  ?>
                </p>

              
              <div class="clear"></div>
            </div>
          </div>
          <div class="timeline-item">
            <i class="fas fa-check bg-blue2-dark shadow-large timeline-icon"></i>
            <div class="timeline-item-content round-small">
              <h4 class="color-theme center-text" >
                Status Pengaduan
              </h5>

              <div class="top-30 ">
                <?php if($detail->status==0){
                  ?>
                  <div class="shadow-large alert alert-large alert-round-medium bg-yellow1-dark">
                    <i class="fa fa-exclamation-triangle"></i>
                    <strong class="uppercase ultrabold">Proses</strong>
                    <span>Terima Kasih Atas Waktunya</span>
                    <i class="fa fa-times"></i>
                  </div>
                  <?php
                }else{
                  ?>
                  <div class="shadow-large alert alert-large alert-round-medium bg-green1-dark">
                    <i class="fa fa-check"></i>
                    <strong class="uppercase ultrabold">Selesai</strong>
                    <span>Terima Kasih</span>
                    <i class="fa fa-times"></i>
                  </div>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>

        </div>
        <?php
        }
        ?>

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
