<!DOCTYPE HTML>
<html lang="en">

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Error Halaman Tidak Di Temukan</title>

                <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/umum/images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header -->
            <?php echo $this->load->view('share/menu', '', TRUE);?>
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section small-par" data-scrollax-parent="true">
                        <div class="bg"  data-bg="<?php echo site_url(); ?>assets/umum/images/bg/hero/4.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="error-wrap">
                                <div class="bubbles">
                                    <h2>404</h2>
                                </div>
                                <p>Mohon Maaf, Kami Tidak Menemukan Halaman Yang Anda Cari</p>
                                <div class="clearfix"></div>

                                <div class="clearfix"></div>

                                <a href="<?php echo site_url(); ?>" class="btn   color2-bg">Back to Home Page<i class="far fa-home-alt"></i></a>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
              <?php echo $this->load->view('share/footer', '', TRUE);?>
            <!--footer end -->
            <!--register form -->
              <?php echo $this->load->view('share/login', '', TRUE);?>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="<?php echo site_url(); ?>assets/umum/js/jquery.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/map-single.js"></script>
</html>
