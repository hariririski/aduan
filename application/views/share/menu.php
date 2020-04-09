<!--Header Area Start-->
<?php
  ini_set('display_errors','off');
?>
<header class="main-header">
    <!-- logo-->
    <a href="index.html" class="logo-holder"><img src="<?php echo site_url(); ?>assets/umum/images/logo.png" alt=""></a>
    <!-- logo end-->

    <?php
        $level=$this->session->userdata('level');
        if(isset($level)){
    ?>
            <a href="<?php echo site_url(); ?>logout"class="show-reg-form avatar-img" data-srcav="<?php echo site_url(); ?>assets/umum/images/avatar/3.jpg"><i class="fal fa-user"></i>Logout</a>
    <?php
        }else{
    ?>
        <!-- header opt -->
        <div class="show-reg-form modal-open avatar-img" data-srcav="<?php echo site_url(); ?>assets/umum/images/avatar/3.jpg"><i class="fal fa-user"></i>Login</div>
        <!-- header opt end-->
    <?php
        }
    ?>

    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!--  navigation -->
    <div class="nav-holder main-menu">
        <nav>
            <ul class="no-list-style">
                <li>
                    <?php
                        $level=$this->session->userdata('level');
                        if(($level)>0){
                    ?>
                          <a href="<?php echo site_url(); ?>admin" >Admin </i></a>
                    <?php
                        }else{
                    ?>
                          <a href="<?php echo site_url(); ?>beranda" >Beranda </i></a>
                    <?php
                        }
                    ?>
                    <!--second level -->

                    <!--second level end-->
                </li>
                <li>
                    <a href="#">Pengaduan <i class="fa fa-caret-down"></i></a>
                    <!--second level -->
                    <ul>
                        <li><a href="listing.html">Data Pengaduan</a></li>
                        <li><a href="listing2.html">Laporan Pengaduan</a></li>
                    </ul>
                    <!--second level end-->
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>tentang" >Tentang</a>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>info">Informasi Pertanahan</a>
                </li>

            </ul>
        </nav>
    </div>
    <!-- navigation  end -->
</header>
