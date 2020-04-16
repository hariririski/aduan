<!DOCTYPE HTML>
<html lang="en">

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Tentang </title>
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
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="<?php echo site_url(); ?>assets/umum/images/bg/18.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <h2><span>Aplikasi KIBAN <BR> Konsultasi Informasi Beserta Pengaduan</span></h2>
                                <span class="section-separator"></span>

                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
                        </div>
                    </section>
                    <!--  section  end-->
                    <section   id="sec1" data-scrollax-parent="true">
                        <div class="container">

                            <!--about-wrap -->
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="list-single-main-media fl-wrap" style="box-shadow: 0 9px 26px rgba(58, 87, 135, 0.2);">
                                            <img src="<?php echo site_url(); ?>assets/umum/images/all/55.jpg" class="respimg" alt="">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Kantor Pertanahan Kota Banda Aceh</h3>

                                            <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <p>Kantor Pertanahan Kota Banda Aceh merupakan Kantor Pelayanan dalam bidang pertanahan, merupakan perpanjangan pelayanan bagi masyarakat setempat dari seluruh program yang dibuat oleh Kementerian Agraria dan Tata Ruang/Badan Pertahanan Nasional.
                                              Persoalan pertanahan yang berada dalam wilayah Kota Banda Aceh bukanlah suatu pekerjaan yang mudah karena begitu kompleks untuk di selesaikan. Maka dari itu Kantor Pertanahan Kota Banda Aceh mencoba mencari jalan bagaimana dapat menampung permasalahan dan pengaduan dari masyarakat agar bisa terpetakan dan segera bisa dicarikan solusinya, baik itu untuk peningkatan pelayanan pada Kantor Pertanahan Kota Banda Aceh dan pengaduan terkait pertanahan. Hal tersebutlah yang melatarbelakangi pembuatan Aplikasi KIBAN (Konsultasi Informasi Beserta Pengaduan).
                                            </p>
                                            <BR>
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Aplikasi KIBAN</span></h3>

                                            <span class="section-separator fl-sec-sep"></span>
                                            <p>
                                              KIBAN Merupakan sistem informasi Pengaduan berbasis WEB, yang merupakan pengembangan dari aplikasi pengaduan yang telah aktif sejak tahun 2019 dimana terdapat perombakan total  aplikasi dari desain hingga fitur yang diberikan yang dapat melaporkan segala persoalan pertanahan.
                                              Aplikasi KIBAN dapat dengan cepat menanggapi, mensikapi dan memberikan jawaban/solusi dari berbagai pengaduan yang masuk melalui Aplikasi KIBAN, Twitter, Whatsapp, Instagram, Maupun Aplikasi Lapor.go.id.
                                              Kami berharap dengan adanya Aplikasi KIBAN dapat memberikan pelayanan yang maksimal yang dibutuhkan oleh masyarakat Kota Banda Aceh.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about-wrap end  -->

                        </div>
                    </section>
                    <!--section end-->

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
        <script src="<?php echo site_url(); ?>assets/umum/js/map-single.js"></script>
</html>
