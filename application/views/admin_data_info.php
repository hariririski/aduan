<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Data Informasi Pertanahan</title>
        <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/dashboard-style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">

        <style>
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;

        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 15px 10px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #2e3f6e;
          color: white;
          font-size: 14px;
        }
        </style>
<script type="text/javascript" src="<?php echo site_url(); ?>assets/assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/assets/DataTables/media/js/jquery.dataTables.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/assets/DataTables/media/css/dataTables.bootstrap.css">

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
                                    <h3>Data Informasi Pertanahan</h3>
                                </div>
                                <!-- list-single-facts -->

                                <!-- list-single-facts end -->
                                <div class="list-single-main-item fl-wrap block_box " style="padding: 20px;">
                                  <div >
                                		<table class=" data" id="customers">
                                			<thead>
                                				<tr>
                                					<th>Nama</th>
                                					<th>Alamat</th>
                                					<th>Pekerjaan</th>
                                					<th>Usia</th>
                                					<th>Status</th>
                                				</tr>
                                			</thead>
                                			<tbody>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Malas Ngoding</td>
                                					<td>Bandung</td>
                                					<td>Web Developer</td>
                                					<td>26</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Malas Ngoding</td>
                                					<td>Bandung</td>
                                					<td>Web Developer</td>
                                					<td>26</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
                                				<tr>
                                					<td>Andi</td>
                                					<td>Jakarta</td>
                                					<td>Web Designer</td>
                                					<td>21</td>
                                					<td>Aktif</td>
                                				</tr>
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
        <script type="text/javascript">
  	$(document).ready(function(){
  		$('.data').DataTable();
  	});
  </script>
        <!-- <script src="<?php echo site_url(); ?>assets/umum/js/jquery.min.js"></script> -->
        <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/charts.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/dashboard.js"></script>

</html>
