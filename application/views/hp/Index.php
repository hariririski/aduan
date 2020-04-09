<!doctype html>
<html lang="en" class="color-theme-blue">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title>Pengaduan</title>

    <!-- Material design icons CSS -->
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/hp/vendor/materializeicon/material-icons.css">

    <!-- Roboto fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url(); ?>assets/hp/vendor/bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="<?php echo site_url(); ?>assets/hp/vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo site_url(); ?>assets/hp/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Loader -->
    <?php echo $this->load->view('share/Loading', '', TRUE);?>
    <!-- Loader ends -->

    <!-- sidebar -->
    <?php echo $this->load->view('share/Menu_hpside', '', TRUE);?>
    <!-- sidebar ends -->

    <!-- wrapper starts -->
    <div class="wrapper">

        <!-- header -->
        <?php echo $this->load->view('share/Hp_header', '', TRUE);?>
        <!-- header ends -->


        <!-- page content here -->
        <div class="container-fluid bg-template mb-4">
            <div class="row hn-290 position-relative">
                <div class="background opac heightset">
                    <img src="<?php echo site_url(); ?>assets/hp/images/latar.png" alt="">
                </div>
                <div class="container align-self-end">
                    <h2 class="font-weight-light text-uppercase">Aplikasi Pengaduan</h2>
                    <p class="text-mute mb-2">Anda Dapat Melaporkan dan Memantau Pengaduan Anda dengan Memasukkan Nomor Telepon Anda Saat Melakukan Pengaduan</p>

                      <form class="row" action="<?php echo site_url(); ?>hp/cek" method="get">
                      <div class="col-10 col-md-6 col-lg-10 mb-3">
                      <input type="number" name="no_telepon"class="form-control" id="validationTooltip01" placeholder="Nomor HP" value="" required="">
                      </div>
                      <div class="col-2 col-md-6 col-lg-2 mb-3">

                              <button class="btn btn-default btn-rounded-34"><i class="material-icons md-16">send</i></button>

                      </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 px-0">
                    <!-- Swiper -->
                    <div class="swiper-container swiper-shares">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide px-3">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <p class="mb-0">
                                            <span class="text-uppercase">Jumlah Pengaduan</span>



                                        </p>
                                    </div>
                                    <div class="col-auto pl-0 align-self-center">
                                      <?php
                                         foreach($jumlah_pengaduan as $pengaduan){
                                       ?>
                                       <h4><?php echo $pengaduan->jumlah; ?></h4>
                                       <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-3 border-left-dashed">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <p class="mb-0">
                                            <span class="text-uppercase">Pengaduan Selesai</span>

                                        </p>
                                    </div>
                                    <div class="col-auto pl-0 align-self-center">
                                      <?php
                                         foreach($pengaduan_selesai as $selesai){
                                       ?>
                                       <h4><?php echo $selesai->jumlah; ?></h4>
                                       <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide px-3 border-left-dashed">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <p class="mb-0">
                                            <span class="text-uppercase">Pengaduan Dalam Proses</span>

                                        </p>
                                    </div>
                                    <div class="col-auto pl-0 align-self-center">
                                      <?php
                                         foreach($pengaduan_proses as $proses){
                                       ?>
                                       <h4><?php echo $proses->jumlah; ?></h4>
                                       <?php } ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-2 bg-light mb-5">

        </div>
        <div class="container mb-5">
          <form class="needs-validation was-validated" novalidate="" action="<?php echo site_url(); ?>Lapor_hp/tambah_hp" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label for="validationTooltip01">Nomor HP</label>
                        <input type="number"  name="no_telepon" class="form-control" id="validationTooltip01" placeholder="Nomor HP"  required="">

                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label for="validationTooltip02">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control"   placeholder="Last name"  required="">

                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label for="validationTooltip02">Alamat</label>
                        <input type="text" name="alamat"  class="form-control"   placeholder="Last name" required="">

                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label for="validationTooltip02">Email</label>
                        <input type="text" name="email" class="form-control"   placeholder="Last name" value="-" >

                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label for="validationTooltip02">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control"   placeholder="Last name"  required="">

                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label>Uraian Pengaduan</label>
                        <textarea name="uraian_pengaduan" class="form-control form-control-lg" rows="5" required=""></textarea>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label for="exampleFormControlSelect1">Jenis Pengaduan</label>
                        <select  name="jenis_pengaduan" class="form-control" id="exampleFormControlSelect1" required="">
                          <option value="">Pilih Jenis Pengaduan</option>
                          <?php
                             foreach($jenis_pengaduan as $pengaduan){
                           ?>
                           <option value="<?php echo $pengaduan->id_jenis_pengaduan; ?>"><?php echo $pengaduan->nama_jenis_pengaduan; ?></option>
                           <?php } ?>
                        </select>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label>Upload KTP</label>
                        <input type="file" name="ktp" accept="image/*" capture class="form-control form-control-lg" required>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 mb-3">
                        <label>Upload Bukti 1</label>
                        <input type="file" name="bukti1" accept="image/*" capture class="form-control form-control-lg" required>
                    </div>

                </div>
                <button  class="btn btn-lg btn-block btn-default text-uppercase position-relative"><span>Laporkan</span><i class="material-icons right-absoute">arrow_forward</i></button>
              </form>

        </div>



        <!-- footer -->
          <?php echo $this->load->view('share/Menu_hp', '', TRUE);?>
        <!-- footer ends -->
    </div>
    <!-- wrapper ends -->

    <!-- color chooser menu start -->
    <div class="modal fade " id="colorscheme" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-header theme-header border-0">
                    <h6 class="">Color Picker</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-0">
                    <div class="text-center theme-color">
                        <button class="m-1 btn red-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="red"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn blue-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="blue"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn yellow-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="yellow"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn green-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="green"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn pink-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="pink"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn orange-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="orange"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn purple-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="purple"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn deeppurple-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="deeppurple"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn lightblue-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="lightblue"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn teal-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="teal"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn lime-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="lime"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn deeporange-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="deeporange"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn gray-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="gray"><i class="material-icons w-50">color_lens_outline</i></button>
                        <button class="m-1 btn black-theme-bg text-white btn-rounded-54 shadow-sm" data-theme="black"><i class="material-icons w-50">color_lens_outline</i></button>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-6 text-left">
                        <div class="row">
                            <div class="col-auto text-right align-self-center"><i class="material-icons text-warning md-36 vm">wb_sunny</i></div>
                            <div class="col-auto text-center align-self-center px-0">
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" name="themelayout" class="custom-control-input" id="theme-dark">
                                    <label class="custom-control-label" for="theme-dark"></label>
                                </div>
                            </div>
                            <div class="col-auto text-left align-self-center"><i class="material-icons text-dark md-36 vm">brightness_2</i></div>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="row">
                            <div class="col-auto text-right align-self-center">LTR</div>
                            <div class="col-auto text-center align-self-center px-0">
                                <div class="custom-control custom-switch float-right">
                                    <input type="checkbox" name="rtllayout" class="custom-control-input" id="theme-rtl">
                                    <label class="custom-control-label" for="theme-rtl"></label>
                                </div>
                            </div>
                            <div class="col-auto text-left align-self-center">RTL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- color chooser menu ends -->


    <div class="modal" tabindex="-1" role="dialog" id="statusmodal">
        <div class="modal-dialog vh-100 my-0 mx-auto" role="document">
            <div class="modal-content h-100 border-0 bg-dark text-white rounded-0">
                <div class="progress m-2 h-3">
                    <div class="progress-bar statusbar" role="progressbar"></div>
                </div>
                <div class="modal-header border-0 py-2">
                    <div class="row no-gutters w-100">
                        <div class="col-auto">
                            <figure class="avatar avatar-40">
                                <img src="<?php echo site_url(); ?>assets/hp/images/joy-2483926_640%402x.png" alt="">
                            </figure>
                        </div>
                        <div class="col pl-2 align-self-center">
                            <h6 class="mb-1 font-weight-normal">Ms. Happylime</h6>
                            <p class="small text-mute">59 min ago</p>
                        </div>
                        <div class="col-auto pl-0 align-self-center">
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-body my-0">
                    <div class="row h-100">
                        <div class="col-12 align-self-center text-center">
                            <figure class="h-100 w-100">
                                <img src="<?php echo site_url(); ?>assets/hp/images/joy-2483926_640%402x.png" alt="" class="mw-100 vm">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center text-center border-0">
                    Joy of the day enjoy best moment with the best template ever you meet
                </div>
            </div>
        </div>
    </div>

    <!-- jquery, popper and bootstrap js -->
<script src="<?php echo site_url(); ?>assets/hp/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo site_url(); ?>assets/hp/js/popper.min.js"></script>
<script src="<?php echo site_url(); ?>assets/hp/vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

<!-- cookie js -->
<script src="<?php echo site_url(); ?>assets/hp/vendor/cookie/jquery.cookie.js"></script>

<!-- swiper js -->
<script src="<?php echo site_url(); ?>assets/hp/vendor/swiper/js/swiper.min.js"></script>

<!-- swiper js -->
<script src="<?php echo site_url(); ?>assets/hp/vendor/sparklines/jquery.sparkline.min.js"></script>

<!-- template custom js -->
<script src="<?php echo site_url(); ?>assets/hp/js/main.js"></script>

<!-- page level script -->
<script>
    $(window).on('load', function() {
        $(".sparklinechart").sparkline([5, 6, -7, 2, 0, -4, -2, 4], {
            type: 'bar',
            zeroAxis: false,
            barColor: '#00bf00',
            height: '30',
        });
        $(".sparklinechart2").sparkline([-5, -6, 4, -2, 0, 4, 2, -4], {
            type: 'bar',
            zeroAxis: false,
            barColor: '#00bf00',
            height: '30',
        });

        /* Swiper slider */
        var swiper = new Swiper('.swiper-prices', {
            slidesPerView: 'auto',
            spaceBetween: 0,
            pagination: false,
        });
        var swiper = new Swiper('.swiper-categories', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            pagination: false,
        });
        var swiper = new Swiper('.swiper-shares', {
            slidesPerView: 5,
            spaceBetween: 0,
            pagination: false,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

        /* status */
        function start() {
            var duration = 4000; // it should finish in 3 seconds !
            $(".statusbar").stop().css("width", 0).animate({
                width: '100%'
            }, {
                duration: duration,
            });

            setTimeout(function() {
                $('#statusmodal').modal('hide');
                $(".statusbar").stop()
                $(".statusbar").css("width", '0');
            }, duration)
        }
        $('#statusmodal').on('shown.bs.modal', function(e) {
            start()
        });
        $('#statusmodal').on('hide.bs.modal', function(e) {
            $(".statusbar").stop().css("width", '0');
        });
    })

</script>

</body>



</html>
