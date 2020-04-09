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

    <!-- wrapper starts -->
    <div class="wrapper">
        <!-- header -->
          <?php echo $this->load->view('share/Hp_header', '', TRUE);?>
        <!-- header ends -->

        <div class="container">
            <!-- page content here -->
            <div class="row flex-colum">
                <div class="col-12 col-md-6 col-lg-5 mx-auto login-row">
                    <div class="row h-100">
                        <div class="col-12 align-self-center">
                            <h1 class="font-weight-light mb-5 text-center"><small class="font-weight-light">Selamat Datang</small></h1>
                            <form class="form-signin" method="post" action="<?php echo site_url(); ?>login/proses_login">
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-mute mt-2">account_circle</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="form-group float-label active">
                                            <input type="text" id="inputEmail" name="username" class="form-control" required autofocus>
                                            <label for="inputEmail" class="form-control-label">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-auto align-self-center">
                                        <i class="material-icons text-mute mt-1">lock</i>
                                    </div>
                                    <div class="col pl-0">
                                        <div class="form-group float-label">
                                            <input type="password" name="password" id="inputPassword" class="form-control" required>
                                            <label for="inputPassword" class="form-control-label">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-12 mt-auto pb-4 col-md-6 col-lg-5 mx-auto login-footer">
                                    <button class="btn btn-lg btn-block btn-default text-uppercase position-relative"><span>Login</span><i class="material-icons right-absoute">arrow_forward</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- page content ends -->
        </div>

    </div>
    <!-- wrapper ends -->

    <!-- jquery, popper and bootstrap js -->
    <script src="<?php echo site_url(); ?>assets/hp/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/hp/js/popper.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/hp/vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <!-- cookie js -->
    <script src="<?php echo site_url(); ?>assets/hp/vendor/cookie/jquery.cookie.js"></script>

    <!-- swiper js -->
    <script src="<?php echo site_url(); ?>assets/hp/vendor/swiper/js/swiper.min.js"></script>

    <!-- template custom js -->
    <script src="<?php echo site_url(); ?>assets/hp/js/main.js"></script>

    <!-- page level script -->
    <script>
        $(window).on('load', function() {
            $('body').addClass('header-dark');
        })

    </script>

</body>


</html>
