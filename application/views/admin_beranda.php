<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Beranda Admin</title>
        <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/dashboard-style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
        <!--=============== favicons ===============-->
        <?php echo $this->load->view('share/table_header', '', TRUE);?>

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

                                <!-- list-single-facts -->
                                <div class="list-single-facts fl-wrap">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap gradient-bg ">
                                                <div class="inline-facts">

                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="<?php
                                                               foreach($jumlah_pengaduan as $pengaduan){
                                                             ?>
                                                             <?php echo $pengaduan->jumlah; ?>
                                                             <?php } ?>"></div>
                                                        </div>
                                                    </div>
                                                    <h6>Jumlah Pengaduan</h6>
                                                </div>
                                                <div class="stat-wave">
                                                    <svg viewbox="0 0 100 25">
                                                        <path fill="#fff" d="M0 30 V12 Q30 17 55 2 T100 11 V30z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                        </div>
                                        <div class="col-md-3">
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap gradient-bg ">
                                                <div class="inline-facts">

                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="<?php
                                                               foreach($pengaduan_proses as $proses){
                                                             ?>
                                                             <?php echo $proses->jumlah; ?>
                                                             <?php } ?>"></div>
                                                        </div>
                                                    </div>
                                                    <h6>Pengaduan Proses</h6>
                                                </div>
                                                <div class="stat-wave">
                                                    <svg viewbox="0 0 100 25">
                                                        <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                        </div>
                                        <div class="col-md-3">
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap gradient-bg ">
                                                <div class="inline-facts">

                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="<?php
                                                               foreach($pengaduan_selesai as $selesai){
                                                             ?>
                                                             <?php echo $selesai->jumlah; ?>
                                                             <?php } ?>"></div>
                                                        </div>
                                                    </div>
                                                    <h6>Pengaduan Selesai </h6>
                                                </div>
                                                <div class="stat-wave">
                                                    <svg viewbox="0 0 100 25">
                                                        <path fill="#fff" d="M0 30 V12 Q30 12 55 5 T100 11 V30z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                        </div>
                                        <div class="col-md-3">
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap gradient-bg ">
                                                <div class="inline-facts">
                                                    
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="<?php
                                                               foreach($jumlah_informasi as $informasi){
                                                             ?>
                                                             <?php echo $informasi->jumlah; ?>
                                                             <?php } ?>"></div>
                                                        </div>
                                                    </div>
                                                    <h6>informasi </h6>
                                                </div>
                                                <div class="stat-wave">
                                                    <svg viewbox="0 0 100 25">
                                                        <path fill="#fff" d="M0 30 V12 Q30 12 55 5 T100 11 V30z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-facts end -->
                                <div class="dashboard-title dt-inbox fl-wrap">
                                    <h3>Pengaduan Menunggu Tindak Lanjut</h3>
                                </div>
                                <div class="list-single-main-item fl-wrap block_box " style="padding: 20px;">
                                  <div >
                                    <table id="example" class="display responsive nowrap" style="width:100%">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Jenis Pengaduan</th>
                                            <th>Media Lapor</th>
                                            <th>Detail</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                            $i=0;
                                               foreach($proses_data as $pengaduan){
                                                 $i++;
                                          ?>
                                          <tr>
                                               <td><?php echo $i; ?></td>
                                               <td>
                                                 <?php if($pengaduan->status==0){
                                                  ?>
                                                  <div class="alert alert-warning" style="padding: 10px; margin-bottom: 0px;" role="alert">
                                                      <?php echo"Proses";}else{ ?>
                                                  </div>
                                                  <div class="alert alert-success" style="padding: 10px; margin-bottom: 0px;" role="alert">
                                                      <?php echo"Selesai";} ?>
                                                  </div>
                                               </td>
                                               <td><?php echo date('d F Y', strtotime($pengaduan->tanggal_pengaduan));  ?></td>
                                               <td><?php echo $pengaduan->nama; ?></td>
                                               <td><?php echo $pengaduan->nama_jenis_pengaduan; ?></td>

                                               <td><?php echo $pengaduan->nama_media_pelaporan; ?></td>
                                               <td><a href="<?php echo site_url(); ?>detail_lapor_admin?id=<?php echo $pengaduan->id_pengaduan; ?>"><button type="button" class="btn btn-primary">Detail</button></a></td>
                                           </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>

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
