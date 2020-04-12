<!--Script Javascript-->
<script src="<?php echo site_url(); ?>assets/umum/jquery-1.12.4.js"></script>
<script src="<?php echo site_url(); ?>assets/umum/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url(); ?>assets/umum/dataTables.responsive.min.js"></script>
<script src="<?php echo site_url(); ?>assets/umum/dataTables.buttons.min.js"></script>
<script src="<?php echo site_url(); ?>assets/umum/buttons.colVis.min.js"></script>
<script>
   $(document).ready(function() {
      $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        'colvis'
        ]
    } );
  } );
</script>
