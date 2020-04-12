
<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Home</title>
        <!--=============== author  ===============-->
        <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/umum/images/favicon.ico">


        <script>
        <?php
          $id=$_GET['id'];
          if($id==1){
        ?>
    		    alert("Maaf Gagal Login!");
        <?php
      }else if($id==2) {
        ?>
        alert("Maaf Gagal Menambahkan Pengaduan Anda");
        <?php
      }
        ?>
        </script>

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
                    <!--section  -->
                    <section class="hero-section"   data-scrollax-parent="true">
                        <div class="bg-tabs-wrap">
                            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                                <div class="bg bg_tabs"  data-bg="<?php echo site_url(); ?>assets/umum/images/bg/hero/1.jpg"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>Laporkan Keluhan Anda</h1>
                                </div>
                            </div>
                            <!-- main-search-input-tabs-->
                            <div class="main-search-input-tabs  tabs-act fl-wrap">
                                <ul class="tabs-menu change_bg no-list-style">
                                    <li class="current"><a href="#tab-inpt1" data-bgtab="<?php echo site_url(); ?>assets/umum/images/bg/hero/1.jpg">Lapor</a></li>
                                </ul>
                                <!--tabs -->

                                <div class="tabs-container fl-wrap  ">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt1" class="tab-content first-tab">
                                          <div class="profile-edit-container fl-wrap block_box">
                                          <div class="custom-form" style="padding: 20px;">
                                            <form action="<?php echo site_url(); ?>pengaduan" method="post" enctype="multipart/form-data">
                                              <div class="row">
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">NIK <i class="fal fa-user" style="top: 50px;"></i></label>
                                                      <input type="text" name="nik" placeholder="NIK" value="">
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">Nama Lengkap  <i class="fal fa-user" style="top: 50px;"></i></label>
                                                      <input type="text" name="nama_lengkap" placeholder="Nama Anda" value="">
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">Nomor HP  <i class="far fa-phone" style="top: 50px;"></i></label>
                                                      <input type="text"  name="no_telepon" placeholder="0822 3788 3433" value="">
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">Alamat<i class="far fa-envelope" style="top: 50px;"></i>  </label>
                                                      <input type="text"  name="alamat" placeholder="Desa Setu, Kecamatan Baiturahman" value="">
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">Pekerjaan<i class="far fa-user" style="top: 50px;"></i>  </label>
                                                      <input type="text" name="pekerjaan" placeholder="Pegawai Negeri Sipil" value="">
                                                  </div>

                                              </div>
                                              <label style="padding: 10px;"> Uraian Pengaduan</label>
                                              <textarea cols="40" rows="3"  name="uraian_pengaduan" placeholder="Uraikan Pengaduan Anda" style="margin-bottom:20px;"></textarea>
                                              <!-- <label style="padding: 10px;">KTP</label>
                                              <div class="photoUpload">
                                                  <span><i class="fal fa-image"></i> <strong>KTP</strong></span>
                                                  <input type="file" class="upload">
                                              </div>
                                              <label style="padding: 10px;">Upload Bukti (Bila Ada)</label>
                                              <div class="photoUpload">
                                                  <span><i class="fal fa-image"></i> <strong>Upload Bukti</strong></span>
                                                  <input type="file" class="upload">
                                              </div> -->
                                              <button class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu" style="z-index: auto; position: relative; top: 0px;">Kirim Pengaduan</button>
                                           </form>
                                          </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <!--tabs end-->
                            </div>
                            <!-- main-search-input-tabs end-->

                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
                        </div>
                    </section>
                    <!--section end-->

                    <div class="sec-circle fl-wrap"></div>

                    <!--section  -->
                    <section>
                        <div class="container big-container">
                            <div class="section-title">
                                <h2><span>Informasi Pertanahan</span></h2>
                                <div class="section-subtitle">Info</div>
                                <span class="section-separator"></span>

                            </div>
                            <div class="listing-filters gallery-filters fl-wrap">
                              <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All Categories</a>
                            <?php
                              foreach($jenis_informasi as $jenis_informasi){
                            ?>
                            <a href="#" class="gallery-filter" data-filter=".<?php echo $jenis_informasi->id_informasi; ?>"><?php echo $jenis_informasi->nama_jenis_informasi; ?></a>
                            <?php } ?>

                            </div>
                            <div class="grid-item-holder gallery-items fl-wrap">

                              <?php
                                foreach($jenis_informasi1 as $jenis_informasi1){
                                    foreach( ${'informasi' . $jenis_informasi1->id_informasi} as $informasi){
                              ?>
                              <!--  gallery-item-->
                                <div class="gallery-item <?php echo $informasi->id_informasi; ?>">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">

                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>upload/artikel/<?php echo $informasi->foto; ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html"><?php echo $informasi->judul; ?></a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">
                                                      <?php
                                                      $str = $informasi->artikel;
                                                        $arr = explode(" ", str_replace(",", ", ", $str));
                                                        for ($index = 0; $index < 40; $index++) {
                                                            echo $arr[$index]. " ";
                                                        }

                                                      ?></p>

                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap" >

                                                        <span style="top: 0px;"><?php echo $informasi->nama_jenis_informasi; ?></span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        &nbsp; &nbsp;<button type="button" class="btn  color2-bg" style="padding: 5px 20px 5px 20px;top: -10px;">Detail</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                              <?php
                                  }
                                }
                              ?>


                            </div>
                            <a href="<?php echo site_url(); ?>info" class="btn  dec_btn  color2-bg">Lihat Semua<i class="fal fa-arrow-alt-right"></i></a>
                        </div>
                    </section>
                    <!--section end-->

                    <!--section end-->
                    <section class="parallax-section small-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="<?php echo site_url(); ?>assets/umum/images/bg/18.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay  op7"></div>
                        <div class="container">
                            <div class=" single-facts single-facts_2 fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php
                                                   foreach($jumlah_pengaduan as $pengaduan){
                                                 ?>
                                                 <?php echo $pengaduan->jumlah; ?>
                                                 <?php } ?>">

                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jumlah Pengaduan</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
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
                                        <h6>Pengaduan Sedang Di Proses</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
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
                                        <h6>Pengaduan Selesai</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
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
                                        <h6>Jumlah Informasi</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                        </div>
                    </section>
                    <!--section end-->

                    <!--section  -->
                    <section      data-scrollax-parent="true">
                        <div class="container">
                            <div class="section-title">
                                <h2>Alur Pengaduan</h2>
                                <div class="section-subtitle">Laporkan  &amp;Masalah Anda </div>
                                <span class="section-separator"></span>
                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                            </div>
                            <div class="process-wrap fl-wrap">
                                <ul class="no-list-style">
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">01 </span>
                                            <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                            <h4>Laporkan Masalah Anda</h4>
                                            <p>Anda Dapat Melaporkan Maslah Tanah Anda, Sertifikat Tanah, Layanan Pengaduan, Pegawai Kantor Pertanahan Kota Banda Aceh Dll..</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">02</span>
                                            <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                            <h4> Pengaduan Anda Akan di Proses</h4>
                                            <p>Pengaduan Anda Akan Di Proses Dengan Cepat Berdasarkan Aduan dan Data Yang Anda Berikan. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">03</span>
                                            <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                            <h4>Pengaduan Selesai</h4>
                                            <p>Setelah di Proses, Pengaduan Anda Akan di Upload Ke Dalam Aplikasi dan Anda Dapat Memantau Pengaduan Dengan Memasukkan Nomor HP.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="process-end"><i class="fal fa-check"></i></div>
                            </div>
                        </div>
                        <div class="waveWrapper waveAnimation">

                          <div class="waveWrapperInner bgMiddle">
                            <div class="wave-bg-anim waveMiddle" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
                          </div>
                          <div class="waveWrapperInner bgBottom">
                            <div class="wave-bg-anim waveBottom" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
                          </div>
                        </div>
                    </section>

                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2> Pengaduan Sudah Ditanggapi</h2>
                                <span class="section-separator"></span>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="testimonilas-carousel-wrap fl-wrap">
                            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
                            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="testimonilas-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                      <?php
                                        $i=0;
                                           foreach($max5 as $pengaduan){

                                      ?>
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/umum.webp" alt=""></div>
                                                <div class="testimonilas-text fl-wrap" style="height: 300px;">

                                                    <p>"<?php echo $pengaduan->uraian;
                                                        echo ", ";
                                                      $tanggal=$pengaduan->tanggal_pengaduan;
                                                      $bulan = array (
                                                    		1 =>   'Januari',
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
                                                    	$pecahkan = explode('-', $tanggal);
                                                    	echo $newtanggal=$pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                                      ?>
                                                    "</p>
                                                    <a href="#" class="testi-link" target="_blank"><?php echo $pengaduan->media_lapor; ?></a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3><?php echo $pengaduan->nama; ?></h3>
                                                        <h4><?php echo $pengaduan->Pekerjaan; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <?php
                                            }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="tc-pagination"></div>
                        </div>
                        <div class="waveWrapper waveAnimation">

                          <div class="waveWrapperInner bgMiddle">
                            <div class="wave-bg-anim waveMiddle" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
                          </div>
                          <div class="waveWrapperInner bgBottom">
                            <div class="wave-bg-anim waveBottom" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
                          </div>
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->

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


</html>
