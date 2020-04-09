<!--Header Area Start-->
<?php ini_set('display_errors','off');?>
<div class="user-profile-menu-wrap fl-wrap block_box">
    <!-- user-profile-menu-->
    <div class="user-profile-menu">
        <h3>Main</h3>
        <ul class="no-list-style">
            <li><a href="<?php echo site_url(); ?>admin" class="user-profile-act"><i class="fal fa-chart-line"></i>Beranda</a></li>
            <li><a href="<?php echo site_url(); ?>data"><i class="fal fa-rss"></i>Data Pengaduan</a></li>
            <li><a href="dashboard-myprofile.html"><i class="fal fa-user-edit"></i> Tambah Pengaduan</a></li>
            <li><a href="<?php echo site_url(); ?>admin_info"><i class="fal fa-envelope"></i> Informasi </a></li>
            <li><a href="dashboard-password.html"><i class="fal fa-key"></i>Tambah Informasi</a></li>
        </ul>
    </div>
    <!-- user-profile-menu end-->
    <!-- user-profile-menu-->
    <div class="user-profile-menu">
        <h3>Setting</h3>
        <ul  class="no-list-style">
            <li><a href="<?php echo site_url(); ?>data_admin"><i class="fal fa-th-list"></i> Admin  </a></li>
            <li><a href="<?php echo site_url(); ?>jenis_pengaduan"> <i class="fal fa-calendar-check"></i> Jenis Pengaduan </a></li>
            <li><a href="<?php echo site_url(); ?>jenis_informasi"><i class="fal fa-comments-alt"></i> Jenis Informasi </a></li>
            <li><a href="dashboard-add-listing.html"><i class="fal fa-file-plus"></i> Konfigurasi</a></li>
        </ul>
    </div>
    <!-- user-profile-menu end-->
    <a href="<?php echo site_url(); ?>logout" class="logout_btn color2-bg">Keluar <i class="fas fa-sign-out"></i></a>
</div>
