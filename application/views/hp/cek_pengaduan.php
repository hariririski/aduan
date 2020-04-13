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
      <a href="index.html" class="header-subtitle">Back to Components</a>
      <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
      <a href="#" data-toggle-theme class="header-icon header-icon-2"><i class="fas fa-lightbulb"></i></a>
      <a href="settings.html" class="header-icon header-icon-3"><i class="fas fa-cog"></i></a>
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
          <table class="caption-center  shadow-large" width="100%" style="background-color: transparent;">
            <tr>
              <td width="90%" style="background-color: #f2f4f3">
                <div style="left: 78%; width: 95%;font-size: 20px; margin-top:0px;}"class=" button button-s bg-highlight button-round-medium button-center-medium search-box search-color bg-green1-dark shadow-tiny round-medium ">
                <i class="fa fa-search"></i>
                <input type="number" name="no_telepon" placeholder="Nomor Hp  ">
                </div>
              </td>
              <td style="background-color: #f2f4f3">
                  <button style="padding: 25px 40px!important; margin-top:0px;"class="button button-full shadow-large button-round-small bg-green1-dark  bottom-0">Cari</button>
              </td>
            </tr>
          </table>
        </form>

        </div>
        <div class="caption-overlay bg-theme opacity-90"></div>
        a
        <div class="caption-bg bg-28"></div>
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
