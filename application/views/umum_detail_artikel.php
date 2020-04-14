<!DOCTYPE HTML>
<html lang="en">

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Detail</title>
        <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
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
                    <section class="gray-bg no-top-padding-sec" id="sec1">
                        <div class="container">

                            <div class="share-holder hid-share sing-page-share top_sing-page-share">
                                <div class="share-container  isShare"></div>
                            </div>
                            <div class="post-container fl-wrap">
                                <div class="row">
                                    <!-- blog content-->
                                    <div class="col-md-12">
                                        <!-- article> -->
                                        <?php
                                           foreach($informasi as $informasi){
                                         ?>
                                         <br>
                                        <article class="post-article single-post-article">
                                            <div class="list-single-main-media fl-wrap">
                                                <div class="single-slider-wrap">
                                                    <div class="single-slider fl-wrap">
                                                        <div class="swiper-container">
                                                            <div class="swiper-wrapper lightgallery">
                                                                <div class="swiper-slide hov_zoom"><img src="<?php echo site_url(); ?>upload/artikel/<?php echo $informasi->foto; ?>" alt=""><a href="<?php echo site_url(); ?>upload/artikel/<?php echo $informasi->foto; ?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-carousel_pagination">
                                                        <div class="listing-carousel_pagination-wrap">
                                                            <div class="ss-slider-pagination"></div>
                                                        </div>
                                                    </div>
                                                    <div class="ss-slider-cont ss-slider-cont-prev color2-bg"><i class="fal fa-long-arrow-left"></i></div>
                                                    <div class="ss-slider-cont ss-slider-cont-next color2-bg"><i class="fal fa-long-arrow-right"></i></div>
                                                </div>
                                            </div>
                                            <div class="list-single-main-item fl-wrap block_box">
                                                <h2 class="post-opt-title"><a href="#"><?php echo $informasi->judul; ?></a></h2>
                                                <div class="post-author"><a href="#"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/kantah.png" alt=""><span>Kantor Pertanahan Kota Banda Aceh</span></a></div>
                                                <div class="post-opt">
                                                    <ul class="no-list-style">
                                                        <li>
                                                          <i class="fal fa-calendar"></i>
                                                          <span>
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
                                                          </span>
                                                        </li>

                                                        <li><i class="fal fa-tags"></i> <a href="#"><?php echo $informasi->nama_jenis_informasi; ?></a> </li>
                                                    </ul>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <div class="clearfix"></div>
                                                <p><?php echo $informasi->artikel; ?></p>
                                                <span class="fw-separator"></span>
                                                <div class="list-single-tags tags-stylwrap">
                                                    <span class="tags-title"><i class="fas fa-tag"></i> Tags : </span>
                                                    <a href="#"><?php echo $informasi->nama_jenis_informasi; ?></a>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- article end -->
                                        <?php
                                            }
                                         ?>
                                    </div>
                                    <!-- blog conten end-->
                                    <!-- blog sidebar -->

                                    <!-- blog sidebar end -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
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

</html>
