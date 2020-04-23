<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Tindak Lanjut</title>
        <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/dashboard-style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
        <script src="<?php echo site_url(); ?>assets/ckeditor/ckeditor.js"></script>
        <style>
                /* Style the CKEditor element to look like a textfield */
        .cke_textarea_inline
        {
          padding: 10px;
          height: 200px;
          overflow: auto;

          border: 1px solid gray;
          -webkit-appearance: textfield;
        }

        </style>
      	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
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
                                    <h3>Detail Pengaduan</h3>
                                </div>
                                <!-- list-single-facts -->

                                <!-- list-single-facts end -->
                                <?php
                                   foreach($detail as $detail){
                                 ?>
                                <div class="list-single-main-item fl-wrap block_box " style="padding: 20px;">
                                  <div class="custom-form" style="padding: 20px;">
                                    <form action="<?php echo site_url(); ?>p_tindak_lanjut?id=<?php echo $detail->id_pengaduan; ?>&&id2=<?php echo $detail->id_pelapor; ?>" method="post" enctype="multipart/form-data">

                                      <div class="row">
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">NIK <i class="fal fa-user" style="top: 50px;"></i></label>
                                          <input required type="text"  disabled name="nik" placeholder="NIK" value="<?php echo $detail->nik; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Nama Lengkap  <i class="fal fa-user" style="top: 50px;"></i></label>
                                          <input required type="text" disabled name="nama_lengkap" placeholder="Nama Anda" value="<?php echo $detail->nama; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Nomor HP  <i class="far fa-phone" style="top: 50px;"></i></label>
                                          <input required type="text"  disabled name="no_telepon" placeholder="0822 3788 3433" value="<?php echo $detail->no_telepon; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Alamat<i class="far fa-envelope" style="top: 50px;"></i>  </label>
                                          <input required type="text"  disabled name="alamat" placeholder="Desa Setu, Kecamatan Baiturahman" value="<?php echo $detail->alamat; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Pekerjaan<i class="far fa-user" style="top: 50px;"></i>  </label>
                                          <input required type="text" disabled name="pekerjaan" placeholder="Pegawai Negeri Sipil" value="<?php echo $detail->pekerjaan; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                          <label style="padding: 10px;">Jenis Pengaduan<i class="far fa-user" style="top: 50px;"></i>  </label>
                                          <div class="listsearch-input-item">
                                            <select data-placeholder="City" disabled name="jenis_pengaduan" class="chosen-select no-search-select" required >
                                                <option value="<?php echo $detail->id_jenis_pengaduan; ?>"><?php echo $detail->nama_jenis_pengaduan; ?></option>
                                                <?php
                                                   foreach($jenis_pengaduan as $pengaduan){
                                                     if($detail->id_jenis_pengaduan!=$pengaduan->id_jenis_pengaduan){
                                                 ?>
                                                 <option value="<?php echo $pengaduan->id_jenis_pengaduan; ?>"><?php echo $pengaduan->nama_jenis_pengaduan; ?></option>
                                               <?php
                                                    }
                                                  }
                                                ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-sm-12">
                                          <label style="padding: 10px;">Media Pelaporan<i class="far fa-user" style="top: 50px;"></i>  </label>
                                          <div class="listsearch-input-item">
                                            <select name="media_pelaporan"disabled class="chosen-select no-search-select" required >
                                              <option value="<?php echo $detail->id_media_pelaporan; ?>"><?php echo $detail->nama_media_pelaporan; ?></option>
                                              <?php
                                                 foreach($media_pelaporan as $media_pelaporan){
                                                   if($detail->id_media_pelaporan!=$media_pelaporan->id_media_pelaporan){
                                               ?>
                                               <option value="<?php echo $media_pelaporan->id_media_pelaporan; ?>"><?php echo $media_pelaporan->nama_media_pelaporan; ?></option>
                                             <?php
                                                  }
                                                }
                                              ?>
                                            </select>
                                          </div>
                                        </div>

                                      </div>
                                      <label style="padding: 10px;"> Uraian Pengaduan</label>
                                      <textarea cols="40" rows="3"  disabled name="uraian_pengaduan" placeholder="Uraikan Pengaduan Anda" style="margin-bottom:20px;"><?php echo $detail->uraian; ?></textarea>

                                      <div class="row">
                                      <div class="col-sm-12">
                                        <label style="padding: 10px;">Bidang<i class="far fa-user" style="top: 50px;"></i>  </label>
                                        <div class="listsearch-input-item">
                                          <select name="bidang" class="chosen-select no-search-select" required >
                                            <option value="<?php echo $detail->id_bidang; ?>"><?php echo $detail->nama_bidang; ?></option>
                                            <?php
                                               foreach($bidang as $bidang){
                                                 if($detail->id_bidang!=$bidang->id_bidang){
                                             ?>
                                             <option value="<?php echo $bidang->id_bidang; ?>"><?php echo $bidang->nama_bidang; ?></option>
                                           <?php
                                                }
                                              }
                                            ?>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                      <label style="padding: 10px;"> Tindak Lanjut</label>
                                      <br>
                                      <!-- <textarea cols="40" rows="3"  name="tindak_lanjut" placeholder="Tindak Lanjut" style="margin-bottom:20px;"><?php //echo $detail->tindak_lanjut; ?></textarea> -->
                                      <!-- <input cols="40" required  rows="3"  name="tindak_lanjut" id="editor" style="margin-bottom:20px;" value="<?php echo $detail->tindak_lanjut; ?>"> -->
                                      <textarea name="tindak_lanjut" placeholder="Tindak Lanjut" style="margin-bottom:20px;" style="height: 200px">
                                        <?php echo $detail->tindak_lanjut; ?>

                                      </textarea>
                                      <div class="col-sm-12">
                                        <?php
                                        if($detail->jenis_pengaduan==0){

                                        ?>
                                        <div class="dashboard-list fl-wrap btn-warning" style="padding: 10px 20px;">
                                                <div class="dashboard-message">

                                                    <div class="dashboard-message-text">
                                                        <i class="far fa-info green-bg"></i>
                                                        <p style="color:white;font-size: 18px;"> Data Belum Lengkap, Mohon Di Lengkapi! </p>
                                                    </div>

                                                </div>
                                            </div>
                                        <?php
                                        }else{

                                        }

                                        ?>
                                        <p align="center">
                                        <button type="submit" class="btn btn-primary">Update</button>




                                        </p>
                                      </div>

                                    </form>
                                  </div>
                                </div>
                                <?php } ?>
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
        <script>
      		CKEDITOR.inline( 'tindak_lanjut' );
      	</script>

        <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/charts.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/dashboard.js"></script>

</html>
