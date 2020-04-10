<!--Header Area Start-->
<?php
  ini_set('display_errors','off');
?>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

#customers td, #customers th {
  border: 0px solid #ddd;
  vertical-align: middle;
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
