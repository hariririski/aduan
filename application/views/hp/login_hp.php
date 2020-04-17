<!DOCTYPE HTML>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <title>login</title>
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
      <a href="<?php echo site_url(); ?>hp" class="header-subtitle">Kembalis</a>
      <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
      <a href="#" data-toggle-theme class="header-icon header-icon-2"><i class="fas fa-lightbulb"></i></a>

    </div>
    <div class="page-content" style="padding-bottom: 160px;background-color: #ffffff;">
      <div data-height="150" class="page-title-bg bg-20"></div>
      <div data-height="150" class="page-title-bg dark-mode-tint"></div>
      <div data-height="150" class="page-title-bg opacity-90 bg-highlight"></div>
      <div class="page-title-small color-white bottom-30">
        <h1><i class="fa fa-arrow-left back-button"></i>Login</h1>
        <a href="#" data-menu="menu-main" class="shadow-huge scale-box bg-fade-gray2-dark"></a>
      </div>
      <div class="content-boxed content-boxed-full left-20 right-20 shadow-large">
        <div class="content top-10 bottom-20">
          <form class="form-signin" method="post" action="<?php echo site_url(); ?>login/proses_login">
            <div class="input-style has-icon input-style-1 input-required">
              <i class="input-icon fa fa-user font-11"></i>
              <span>Username</span>
              <em>(required)</em>
              <input type="name" name="username" placeholder="Username">
            </div>
            <div class="input-style has-icon input-style-1 input-required">
              <i class="input-icon fa fa-lock font-11"></i>
              <span>Password</span>
              <em>(required)</em>
              <input type="password" name="password" placeholder="Password">
            </div>
            <div class="clear"></div>
            <p align="center">
              <button class="button button-full button-m shadow-large button-round-small bg-green1-dark top-30 bottom-0">LOGIN</button>
            </p>
            <div class="clear"></div>
          </form>
        </div>
      </div>
    <?php echo $this->load->view('hp/share/sosial_media', '', TRUE);?>
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
