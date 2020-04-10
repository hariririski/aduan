<!--Header Area Start-->
<?php echo $this->load->view('share/e', '', TRUE);?>
<section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
    <div class="container">
        <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
            <h1><?php echo $this->session->userdata('nama');?></h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="dashboard-header fl-wrap">
        <div class="container">
            <div class="dashboard-header_conatiner fl-wrap">
                <div class="dashboard-header-avatar">

                    <?php
                        if($this->session->userdata('level')==1){
                          echo"<img src='".site_url()."assets/umum/images/avatar/operator.png'";
                        }else if($this->session->userdata('level')==2){
                          echo"<img src='".site_url()."assets/umum/images/avatar/administrator.png'";
                        }
                    ?>" alt="">

                </div>
                <div class="dashboard-header-stats-wrap">
                    <h1 style="color:black;">
                      <?php
                          if($this->session->userdata('level')==1){
                            echo"Operator";
                          }else if($this->session->userdata('level')==2){
                            echo"Administrator";
                          }
                      ?>
                    </h1>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
    <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
    <div class="circle-wrap" style="left:120px;bottom:120px;" data-scrollax="properties: { translateY: '-200px' }">
        <div class="circle_bg-bal circle_bg-bal_small"></div>
    </div>
    <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
        <div class="circle_bg-bal circle_bg-bal_big"></div>
    </div>
    <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
        <div class="circle_bg-bal circle_bg-bal_big"></div>
    </div>
    <div class="circle-wrap" style="left:40%;bottom:-70px;"  >
        <div class="circle_bg-bal circle_bg-bal_middle"></div>
    </div>
    <div class="circle-wrap" style="right:40%;top:-10px;"  >
        <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
    </div>
    <div class="circle-wrap" style="right:55%;top:90px;"  >
        <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
    </div>
</section>
