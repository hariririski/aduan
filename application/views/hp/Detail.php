<!doctype html>
<html lang="en" class="color-theme-blue">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Maxartkiller">

    <title>Detail Pengaduan</title>

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

      <?php
      foreach($data_pengaduan as $detail){
      ?>


        <!-- page content here -->
        <div class="container-fluid bg-template">
            <div class="row hn-114 position-relative">
            </div>
        </div>
        <div class="container top-30 position-relative">
            <div class="card shadow-sm">
                <div class="card-body">

                    <div class="row mb-4">
                        <div class="col-auto">
                            <figure class="avatar avatar-100">
                                <img src="<?php echo site_url(); ?>assets/hp/images/avatar.png" alt="">
                            </figure>
                        </div>
                        <div class="col pl-0 align-self-center">

                            <h5 class="mb-1 font-weight-normal"><?php echo $detail->nama;?></h5>
                            <p class="small text-mute"><?php echo $detail->no_telepon;?></p>
                            <p class="small text-mute"><?php echo $detail->pekerjaan;?></p>
                        </div>
                    </div>
                    <div class="row py-3 border-top border-bottom mb-4">
                        <div class="col">
                            <p class="my-0 text-secondary text-mute">Status</p>
                            <h5 class="font-weight-normal mb-0"><?php if($pengaduan->status==0){echo"Sedang Diproses";}else{echo"Selesai";} ?></h5>

                        </div>
                        <div class="col border-left-dashed">
                            <p class="my-0 text-secondary text-mute">Jenis</p>
                            <h5 class="font-weight-normal mb-0">  <?php echo $detail->nama_jenis_pengaduan;?></h5>

                        </div>
                        <div class="col border-left-dashed">
                            <p class="my-0 text-secondary text-mute">Tanggal </p>
                            <h5 class="font-weight-normal mb-0">
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
                                $pecahkan = explode('-', $detail->tanggal_pengaduan);
                                $tanggal= $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                              ?>
                              <?php echo $tanggal;?>

                            </h5>

                        </div>
                    </div>

                    <h4>Uraian Pengaduan</h4>
                    <p class="text-mute">  <?php echo $detail->uraian;?></p>
                    <div class="col-4 mb-3">
                              <figure class="overflow-hidden rounded text-center">
                                  <img src="<?php echo site_url(); ?>assets/upload/<?php echo $detail->nama_bukti1;?>" alt="" class="w-100 mx-auto">
                              </figure>
                          </div>
                    <div class="col-4 mb-3">
                              <figure class="overflow-hidden rounded text-center">
                                  <img src="<?php echo site_url(); ?>assets/upload/<?php echo $detail->nama_bukti1;?>" alt="" class="w-100 mx-auto">
                              </figure>
                          </div>
                    <h4>Balasan</h4>
                     <?php echo $detail->tindak_lanjut;?>
                </div>
            </div>
        </div>

      <?php
      }
      ?>

    </div>
    <!-- wrapper ends -->

<?php echo $this->load->view('share/Menu_hp', '', TRUE);?>
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
        })

    </script>

</body>



</html>
