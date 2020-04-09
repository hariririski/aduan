
<?php ini_set('display_errors','off');?>
<div class="footer">
    <div class="no-gutters">
        <div class="col-auto mx-auto">
            <div class="row no-gutters justify-content-center">
                <div class="col-auto">

                    <a href="<?php echo site_url(); ?>Hp/home" class="btn btn-link-default <?php if($this->uri->segment('2')=="home"){echo"active";} ?>">
                        <span class="icon-text"><i class="material-icons">feedback</i></span>
                        <span class="text-name">Lapor</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="<?php echo site_url(); ?>Hp/cek" class="btn btn-link-default <?php if($this->uri->segment('2')=="cek"){echo"active";} ?>">
                        <span class="icon-text"><i class="material-icons">timeline</i></span>
                        <span class="text-name">Cek Aduan</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="<?php echo site_url(); ?>Hp/login" class="btn btn-link-default <?php if($this->uri->segment('2')=="login"){echo"active";} ?>">
                        <span class="icon-text"><i class="material-icons">account_circle</i></span>
                        <span class="text-name">Profile</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
