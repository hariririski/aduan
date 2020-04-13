<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <title>Pantau Pengaduan</title>
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
      <a href="<?php echo site_url(); ?>hp" class="header-subtitle">Back</a>
      <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
      <a href="#" data-toggle-theme class="header-icon header-icon-2"><i class="fas fa-lightbulb"></i></a>
      <a href="<?php echo site_url(); ?>hp" class="header-icon header-icon-3"><i class="fas fa-cog"></i></a>
    </div>
    <div class="page-content" style="padding-bottom: 0px;">
      <div data-height="150" class="page-title-bg bg-20"></div>
      <div data-height="150" class="page-title-bg dark-mode-tint"></div>
      <div data-height="150" class="page-title-bg opacity-90 bg-highlight"></div>
      <div class="page-title-small color-white bottom-30">
        <h1><i class="fa fa-arrow-left back-button"></i>Pantau Pengaduan</h1>
        <a href="#" data-menu="menu-main" class="shadow-huge scale-box bg-fade-gray2-dark"></a>
      </div>
      <div data-height="150" class="caption caption-margins round-medium shadow-large">
        <div class="caption-center">
        <form class="row" action="<?php echo site_url(); ?>pengecekan" method="post">
          <table class="caption-center  shadow-large" width="100%">
            <tr>
              <td width="90%">
                <div style="left: 78%;     width: 95%;font-size: 20px;"class=" button button-s bg-highlight button-round-medium button-center-medium search-box search-color bg-green1-dark shadow-tiny round-medium ">
                <i class="fa fa-search"></i>
                <input type="number" name="no_telepon" placeholder="Nomor Hp  ">
                </div>
              </td>
              <td>
                  <button style="padding: 25px 40px!important;"class="button button-full shadow-large button-round-small bg-green1-dark  bottom-0">Cari</button>
              </td>
            </tr>
          </table>
        </form>

        </div>
        <div class="caption-overlay bg-theme opacity-90"></div>
        <div class="caption-bg bg-28"></div>
      </div>


      <div class="container mb-5">
        <?php
        foreach($data_pengaduan as $detail){
        ?>
        <a href="<?php echo site_url(); ?>hp/detail/<?php echo $detail->id_pengaduan;?>">
        <div data-height="175" class="caption caption-margins round-medium shadow-large">
          <div class="caption-center right-20">
            <?php if($detail->status==0){
              ?>
              <p class="text-right color-yellow1-dark bottom-0"><img align="right" src="<?php echo site_url(); ?>assets/hp/images/proses.png" width="15%"></p>
              <?php
            }else{
              ?>
              <p class="text-right color-green1-dark bottom-0"><i class="fa fa-check fa-3x"></i></p>
              <?php
            }
            ?>

          </div>
          <div class="caption-center left-20">
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
              $pecahkan = explode('-', $detail->tanggal_pengaduan);
              $tanggal= $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
            ?>
            <h1 class="color-white bolder"><?php echo $tanggal;?>,</h1>
            <p class="under-heading color-white opacity-90 bottom-0">
              <?php if($detail->status==0){
               echo'Status Proses';
             }else{
                echo'Status Selesai';
             }
              ?>
              <br>
                <?php echo $detail->nama_jenis_pengaduan;?>
              <br>
                <?php
                  $str = $detail->uraian;
                  $arr = explode(" ", str_replace(",", ", ", $str));
                  for ($index = 0; $index < 15; $index++) {
                     echo $arr[$index]. " ";
                  }

                ?>

            </p>
          </div>
          <div class="caption-overlay bg-black opacity-70"></div>
          <div class="caption-bg bg-29"></div>
        </div>
      </a>
        <?php
        }
        ?>
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
