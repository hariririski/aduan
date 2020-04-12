<!DOCTYPE HTML>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <title>Informasi Pertanahan</title>
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
    <div class="header header-fixed header-logo-app header-auto-show">
      <a href="index.html" class="header-subtitle">Back to Media</a>
      <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
      <a href="#" data-toggle-theme class="header-icon header-icon-2"><i class="fas fa-lightbulb"></i></a>
      <a href="settings.html" class="header-icon header-icon-3"><i class="fas fa-cog"></i></a>
    </div>
    <div class="page-content">
      <div data-height="150" class="page-title-bg bg-20"></div>
      <div data-height="150" class="page-title-bg dark-mode-tint"></div>
      <div data-height="150" class="page-title-bg opacity-90 bg-highlight"></div>
      <div class="page-title-small color-white bottom-30">
        <h1><i class="fa fa-arrow-left back-button"></i>Informasi Pertanahan</h1>
        <a href="#" data-menu="menu-main" class="shadow-huge scale-box bg-fade-gray2-dark"></a>
      </div>


		<?php
		$no = $this->uri->segment('3') + 1;
		foreach($user as $u){
		?>

          <div class="one-half">
            <div class="content-boxed content-boxed-full shadow-small">
              <a href="#" class="caption bottom-15" data-height="200">
                <div class="caption-bottom left-10 bottom-10">
                  <h4 class="color-white"><?php echo $u->judul ?></h4>
                </div>
                <div class="caption-overlay bg-gradient"></div>
                <div class="caption-bg bg-10"></div>
              </a>
              <div class="content bottom-0">
                <p>
                  <?php echo $u->tanggal ?>
                  <?php echo $u->artikel ?>
                </p>
                <a href="#" class="button bg-highlight button-xs button-full button-round-medium shadow-small bottom-10">READ MORE</a>
              </div>
            </div>
          </div>

	<?php } ?>

	<?php
	echo $this->pagination->create_links();
	?>
  <div class="pagination">
<a href="#"><i class="fa fa-angle-left"></i></a>
<a href="#" class="no-border">1</a>
<a href="#" class="no-border">2</a>
<a href="#" class="bg-highlight color-white">3</a>
<a href="#" class="no-border">4</a>
<a href="#" class="no-border">5</a>
<a href="#"><i class="fa fa-angle-right"></i></a>
</div>
<div class="clear"></div>



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
