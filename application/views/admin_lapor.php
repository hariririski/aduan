<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Tambah Pengaduan</title>
        <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/dashboard-style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">

        <?php echo $this->load->view('share/table_header', '', TRUE);?>
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
                    <?php echo $this->load->view('share/avatar', '', TRUE);?>
                <!--  section  end-->
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="gray-bg main-dashboard-sec" id="sec1">
                        <div class="container">
                            <!--  dashboard-menu-->
                            <div class="col-md-3">
                                <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard menu</div>
                                <div class="clearfix"></div>
                                <div class="fixed-bar fl-wrap" id="dash_menu">
                                    <?php echo $this->load->view('share/menu_admin', '', TRUE);?>
                                </div>
                                <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Back to Menu<i class="fas fa-caret-up"></i></a>
                            </div>
                            <!-- dashboard-menu  end-->
                            <!-- dashboard content-->
                            <div class="col-md-9">
                                <div class="dashboard-title fl-wrap">
                                    <h3>Tambah Pengaduan</h3>
                                </div>
                                <!-- list-single-facts -->

                                <!-- list-single-facts end -->
                                <div class="list-single-main-item fl-wrap block_box " style="padding: 20px;">
                                  <div class="custom-form" style="padding: 20px;">
                                    <form action="<?php echo site_url(); ?>pengaduan_admin" method="post" enctype="multipart/form-data">
                                      <div class="row">
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">NIK <i class="fal fa-user" style="top: 50px;"></i></label>
                                          <input required type="text" name="nik" placeholder="NIK" value="">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Nama Lengkap  <i class="fal fa-user" style="top: 50px;"></i></label>
                                          <input required type="text" name="nama_lengkap" placeholder="Nama Anda" value="">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Nomor HP  <i class="far fa-phone" style="top: 50px;"></i></label>
                                          <input required type="text"  name="no_telepon" placeholder="0822 3788 3433" value="">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Alamat<i class="far fa-envelope" style="top: 50px;"></i>  </label>
                                          <input required type="text"  name="alamat" placeholder="Desa Setu, Kecamatan Baiturahman" value="">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Pekerjaan<i class="far fa-user" style="top: 50px;"></i>  </label>
                                          <input required type="text" name="pekerjaan" placeholder="Pegawai Negeri Sipil" value="">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Tanggal<i class="far fa-user" style="top: 50px;"></i>  </label>
                                          <input required type="date" name="tanggal_pengaduan" placeholder="Pegawai Negeri Sipil" >
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Jenis Pengaduan<i class="far fa-user" style="top: 50px;"></i>  </label>
                                          <div class="listsearch-input-item">
                                            <select required data-placeholder="City" name="jenis_pengaduan" class="chosen-select no-search-select" >
                                                <option value="">Pilih Jenis Pengaduan</option>
                                                <?php
                                                   foreach($jenis_pengaduan as $pengaduan){
                                                 ?>
                                                 <option value="<?php echo $pengaduan->id_jenis_pengaduan; ?>"><?php echo $pengaduan->nama_jenis_pengaduan; ?></option>
                                                 <?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Media Pelaporan<i class="far fa-user" style="top: 50px;"></i>  </label>
                                          <div class="listsearch-input-item">
                                            <select required name="media_pelaporan" class="chosen-select no-search-select" >
                                              <option value="">Pilih Media Pelaporan</option>
                                              <?php
                                                 foreach($media_pelaporan as $media_pelaporan){
                                               ?>
                                               <option value="<?php echo $media_pelaporan->id_media_pelaporan; ?>"><?php echo $media_pelaporan->nama_media_pelaporan; ?></option>
                                               <?php } ?>
                                            </select>
                                          </div>
                                        </div>

                                      </div>
                                      <label style="padding: 10px;"> Uraian Pengaduan</label>
                                      <textarea cols="40" rows="3" required  name="uraian_pengaduan" placeholder="Uraikan Pengaduan Anda" style="margin-bottom:20px;"></textarea>
                                      <p align="center"> <button type="submit" class="btn color2-bg "> Kirim Pengaduan <i class="fas fa-caret-right"></i></button></p>
                                    </form>
                                  </div>
                                </div>

                            </div>
                            <!-- dashboard content end-->
                        </div>
                    </section>
                    <!--  section  end-->
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
        <?php echo $this->load->view('share/table_footer', '', TRUE);?>
        <!-- <script src="<?php echo site_url(); ?>assets/umum/js/jquery.min.js"></script> -->
        <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/charts.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/dashboard.js"></script>

</html>
