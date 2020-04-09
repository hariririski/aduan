
<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Home</title>
        <!--=============== author  ===============-->
        <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/umum/images/favicon.ico">


        <script>
        <?php
          $id=$_GET['id'];
          if($id==1){
        ?>
    		    alert("Maaf Gagal Login!");
        <?php
          }
        ?>
        </script>

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
                    <!--section  -->
                    <section class="hero-section"   data-scrollax-parent="true">
                        <div class="bg-tabs-wrap">
                            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                                <div class="bg bg_tabs"  data-bg="<?php echo site_url(); ?>assets/umum/images/bg/hero/1.jpg"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>Laporkan Keluhan Anda</h1>
                                </div>
                            </div>
                            <!-- main-search-input-tabs-->
                            <div class="main-search-input-tabs  tabs-act fl-wrap">
                                <ul class="tabs-menu change_bg no-list-style">
                                    <li class="current"><a href="#tab-inpt1" data-bgtab="<?php echo site_url(); ?>assets/umum/images/bg/hero/1.jpg">Lapor</a></li>
                                </ul>
                                <!--tabs -->

                                <div class="tabs-container fl-wrap  ">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt1" class="tab-content first-tab">
                                          <div class="profile-edit-container fl-wrap block_box">
                                          <div class="custom-form" style="padding: 20px;">
                                            <form action="<?php echo site_url(); ?>Lapor_hp/tambah" method="post" enctype="multipart/form-data">
                                              <div class="row">
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">Nama Lengkap  <i class="fal fa-user" style="top: 50px;"></i></label>
                                                      <input type="text" placeholder="Nama Anda" value="">
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">Nomor HP  <i class="far fa-phone" style="top: 50px;"></i></label>
                                                      <input type="text" placeholder="0822 3788 3433" value="">
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">Alamat<i class="far fa-envelope" style="top: 50px;"></i>  </label>
                                                      <input type="text" placeholder="Desa Setu, Kecamatan Baiturahman" value="">
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <label style="padding: 10px;">Pekerjaan<i class="far fa-user" style="top: 50px;"></i>  </label>
                                                      <input type="text" placeholder="Pegawai Negeri Sipil" value="">
                                                  </div>

                                              </div>
                                              <label style="padding: 10px;"> Uraian Pengaduan</label>
                                              <textarea cols="40" rows="3" placeholder="Uraikan Pengaduan Anda" style="margin-bottom:20px;"></textarea>
                                              <label style="padding: 10px;">Upload Bukti (Bila Ada)</label>
                                              <div class="photoUpload">
                                                  <span><i class="fal fa-image"></i> <strong>Tambah Bukti</strong></span>
                                                  <input type="file" class="upload">
                                              </div>
                                              <button class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu" style="z-index: auto; position: relative; top: 0px;">Kirim Pengaduan</button>
                                           </form>
                                          </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <!--tabs end-->
                            </div>
                            <!-- main-search-input-tabs end-->

                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
                        </div>
                    </section>
                    <!--section end-->

                    <div class="sec-circle fl-wrap"></div>

                    <!--section  -->
                    <section>
                        <div class="container big-container">
                            <div class="section-title">
                                <h2><span>Informasi Pertanahan</span></h2>
                                <div class="section-subtitle">Best Listings</div>
                                <span class="section-separator"></span>
                                <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                            </div>
                            <div class="listing-filters gallery-filters fl-wrap">
                                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All Categories</a>
                                <a href="#" class="gallery-filter" data-filter=".restaurant">Restaurants </a>
                                <a href="#" class="gallery-filter" data-filter=".hotels">Hotels</a>
                                <a href="#" class="gallery-filter" data-filter=".events">Events</a>
                                <a href="#" class="gallery-filter" data-filter=".fitness">Fitness</a>
                            </div>
                            <div class="grid-item-holder gallery-items fl-wrap">
                                <!--  gallery-item-->
                                <div class="gallery-item restaurant events">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>assets/umum/images/all/1.jpg" alt="">
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/1.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                                </div>
                                                <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">4.8</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                        <br>
                                                        <div class="reviews-count">12 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Luxary Resaturant</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap">
                                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                        <span>Restaurants</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                            <li><a href="#1" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>1</strong></span> </a></li>
                                                            <li>
                                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo site_url(); ?>assets/umum/images/all/1.jpg'},{'src': '<?php echo site_url(); ?>assets/umum/images/all/24.jpg'}, {'src': '<?php echo site_url(); ?>assets/umum/images/all/12.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-level geodir-category_price">
                                                        <span class="price-level-item" data-pricerating="3"></span>
                                                        <span class="price-name-tooltip">Pricey</span>
                                                    </div>
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                                <!--  gallery-item-->
                                <div class="gallery-item events">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>assets/umum/images/all/9.jpg" alt="">
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/2.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                                                </div>
                                                <div class="geodir_status_date color-bg"><i class="fal fa-clock"></i>27 may 2019</div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">4.2</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                        <br>
                                                        <div class="reviews-count">6 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap ">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Rocko Band in Marquee Club</a></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  75 Prince St,  NY, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap">
                                                        <div class="listing-item-category purp-bg"><i class="fal fa-cocktail"></i></div>
                                                        <span>Events</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                            <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>2</strong></span></a></li>
                                                            <li>
                                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo site_url(); ?>assets/umum/images/all/9.jpg'},{'src': '<?php echo site_url(); ?>assets/umum/images/all/32.jpg'}, {'src': '<?php echo site_url(); ?>assets/umum/images/all/23.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-level geodir-category_price">
                                                        <span class="price-level-item" data-pricerating="4"></span>
                                                        <span class="price-name-tooltip">Ultra High</span>
                                                    </div>
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                                <!-- gallery-item  -->
                                <div class="gallery-item fitness">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>assets/umum/images/all/31.jpg" alt="">
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/4.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now</div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">3.8</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                                        <br>
                                                        <div class="reviews-count">4 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Premium Fitness Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap">
                                                        <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i></div>
                                                        <span>Fitness / Gym</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                            <li><a href="#" class="single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>3</strong></span> </a></li>
                                                            <li>
                                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo site_url(); ?>assets/umum/images/all/31.jpg'},{'src': '<?php echo site_url(); ?>assets/umum/images/all/10.jpg'}, {'src': '<?php echo site_url(); ?>assets/umum/images/all/15.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-level geodir-category_price">
                                                        <span class="price-level-item" data-pricerating="2"></span>
                                                        <span class="price-name-tooltip">Moderate</span>
                                                    </div>
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                                <!-- gallery-item  -->
                                <div class="gallery-item hotels">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>assets/umum/images/all/16.jpg" alt="">
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/3.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                                                </div>
                                                <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">5.0</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                        <br>
                                                        <div class="reviews-count">4 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">MontePlaza Hotel</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 Bright St New York, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap">
                                                        <div class="listing-item-category  yellow-bg"><i class="fal fa-bed"></i></div>
                                                        <span>Hotels</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                            <li><a href="#" class="single-map-item" data-newlatitude="40.72228267" data-newlongitude="-73.99246214"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>4</strong></span></a></li>
                                                            <li>
                                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo site_url(); ?>assets/umum/images/all/16.jpg'},{'src': '<?php echo site_url(); ?>assets/umum/images/all/27.jpg'}, {'src': '<?php echo site_url(); ?>assets/umum/images/all/20.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-level geodir-category_price">
                                                        <span class="price-level-item" data-pricerating="4"></span>
                                                        <span class="price-name-tooltip">Ultra High</span>
                                                    </div>
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                                <!-- gallery-item  -->
                                <div class="gallery-item hotels">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>assets/umum/images/all/28.jpg" alt="">
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/5.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                                </div>
                                                <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">4.7</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                        <br>
                                                        <div class="reviews-count">9 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Handmade Shop</a></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap">
                                                        <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                                        <span>Shopping</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                            <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                                            <li>
                                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo site_url(); ?>assets/umum/images/all/28.jpg'},{'src': '<?php echo site_url(); ?>assets/umum/images/all/29.jpg'}, {'src': '<?php echo site_url(); ?>assets/umum/images/all/30.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-level geodir-category_price">
                                                        <span class="price-level-item" data-pricerating="3"></span>
                                                        <span class="price-name-tooltip">Pricey</span>
                                                    </div>
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                                <!-- gallery-item  -->
                                <div class="gallery-item  restaurant hotels">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>assets/umum/images/all/18.jpg" alt="">
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/1.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                                </div>
                                                <div class="geodir_status_date gsd_close"><i class="fal fa-lock-open"></i>Close Now</div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">4.1</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                        <br>
                                                        <div class="reviews-count">26 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Iconic Cafe in Manhattan</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ,  USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap">
                                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                        <span>Restaurants</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                            <li><a href="#" class="single-map-item" data-newlatitude="40.76221766" data-newlongitude="-73.96511769"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>6</strong></span> </a></li>
                                                            <li>
                                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo site_url(); ?>assets/umum/images/all/18.jpg'},{'src': '<?php echo site_url(); ?>assets/umum/images/all/21.jpg'}, {'src': '<?php echo site_url(); ?>assets/umum/images/all/22.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-level geodir-category_price">
                                                        <span class="price-level-item" data-pricerating="2"></span>
                                                        <span class="price-name-tooltip">Moderate</span>
                                                    </div>
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                                <!-- gallery-item  -->
                                <div class="gallery-item fitness">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>assets/umum/images/all/52.jpg" alt="">
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/6.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                </div>
                                                <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now</div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">4.1</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                        <br>
                                                        <div class="reviews-count">56 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">BodyStrong Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York,  USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap">
                                                        <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i></div>
                                                        <span>Fitness / Gym</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                            <li><a href="#" class="single-map-item" data-newlatitude="40.94982541" data-newlongitude="-73.84357452"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>7</strong></span> </a></li>
                                                            <li>
                                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo site_url(); ?>assets/umum/images/all/10.jpg'},{'src': '<?php echo site_url(); ?>assets/umum/images/all/14.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-level geodir-category_price">
                                                        <span class="price-level-item" data-pricerating="2"></span>
                                                        <span class="price-name-tooltip">Moderate</span>
                                                    </div>
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                                <!-- gallery-item  -->
                                <div class="gallery-item hotels">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                <img src="<?php echo site_url(); ?>assets/umum/images/all/62.jpg" alt="">
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/4.jpg" alt=""></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                                </div>
                                                <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">4.7</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                        <br>
                                                        <div class="reviews-count">9 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html">Family Store</a></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                                    <div class="facilities-list fl-wrap">
                                                        <div class="facilities-list-title">Facilities : </div>
                                                        <ul class="no-list-style">
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-footer fl-wrap">
                                                    <a class="listing-item-category-wrap">
                                                        <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                                        <span>Shopping</span>
                                                    </a>
                                                    <div class="geodir-opt-list">
                                                        <ul class="no-list-style">
                                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                            <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                                            <li>
                                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo site_url(); ?>assets/umum/images/all/28.jpg'},{'src': '<?php echo site_url(); ?>assets/umum/images/all/29.jpg'}, {'src': '<?php echo site_url(); ?>assets/umum/images/all/30.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price-level geodir-category_price">
                                                        <span class="price-level-item" data-pricerating="3"></span>
                                                        <span class="price-name-tooltip">Pricey</span>
                                                    </div>
                                                    <div class="geodir-category_contacts">
                                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                </div>
                                <!-- gallery-item  end-->
                            </div>
                            <a href="listing.html" class="btn  dec_btn  color2-bg">Check Out All Listings<i class="fal fa-arrow-alt-right"></i></a>
                        </div>
                    </section>
                    <!--section end-->

                    <!--section end-->
                    <section class="parallax-section small-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="<?php echo site_url(); ?>assets/umum/images/bg/18.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay  op7"></div>
                        <div class="container">
                            <div class=" single-facts single-facts_2 fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php
                                                   foreach($jumlah_pengaduan as $pengaduan){
                                                 ?>
                                                 <?php echo $pengaduan->jumlah; ?>
                                                 <?php } ?>">

                                                </div>
                                            </div>
                                        </div>
                                        <h6>Jumlah Pengaduan</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php
                                                   foreach($pengaduan_proses as $proses){
                                                 ?>
                                                 <?php echo $proses->jumlah; ?>
                                                 <?php } ?>"></div>
                                            </div>
                                        </div>
                                        <h6>Pengaduan Sedang Di Proses</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php
                                                   foreach($pengaduan_selesai as $selesai){
                                                 ?>
                                                 <?php echo $selesai->jumlah; ?>
                                                 <?php } ?>"></div>
                                            </div>
                                        </div>
                                        <h6>Pengaduan Selesai</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="<?php
                                                   foreach($jumlah_informasi as $informasi){
                                                 ?>
                                                 <?php echo $informasi->jumlah; ?>
                                                 <?php } ?>"></div>
                                            </div>
                                        </div>
                                        <h6>Jumlah Informasi</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                        </div>
                    </section>
                    <!--section end-->

                    <!--section  -->
                    <section      data-scrollax-parent="true">
                        <div class="container">
                            <div class="section-title">
                                <h2>Alur Pengaduan</h2>
                                <div class="section-subtitle">Laporkan  &amp;Masalah Anda </div>
                                <span class="section-separator"></span>
                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                            </div>
                            <div class="process-wrap fl-wrap">
                                <ul class="no-list-style">
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">01 </span>
                                            <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                            <h4>Laporkan Masalah Anda</h4>
                                            <p>Anda Dapat Melaporkan Maslah Tanah Anda, Sertifikat Tanah, Layanan Pengaduan, Pegawai Kantor Pertanahan Kota Banda Aceh Dll..</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">02</span>
                                            <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                            <h4> Pengaduan Anda Akan di Proses</h4>
                                            <p>Pengaduan Anda Akan Di Proses Dengan Cepat Berdasarkan Aduan dan Data Yang Anda Berikan. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">03</span>
                                            <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                            <h4>Pengaduan Selesai</h4>
                                            <p>Setelah di Proses, Pengaduan Anda Akan di Upload Ke Dalam Aplikasi dan Anda Dapat Memantau Pengaduan Dengan Memasukkan Nomor HP.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="process-end"><i class="fal fa-check"></i></div>
                            </div>
                        </div>
                        <div class="waveWrapper waveAnimation">

                          <div class="waveWrapperInner bgMiddle">
                            <div class="wave-bg-anim waveMiddle" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
                          </div>
                          <div class="waveWrapperInner bgBottom">
                            <div class="wave-bg-anim waveBottom" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
                          </div>
                        </div>
                    </section>

                    <!--section end-->
                    <!--section  -->
                    <!-- <section class="gradient-bg hidden-section" data-scrollax-parent="true">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="colomn-text  pad-top-column-text fl-wrap">
                                        <div class="colomn-text-title">
                                            <h3>Our App   Available Now</h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</p>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-apple"></i>  Apple Store </a>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-android"></i>  Google Play </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="collage-image">
                                        <img src="<?php echo site_url(); ?>assets/umum/images/api.png" class="main-collage-image" alt="">
                                        <div class="<?php echo site_url(); ?>assets/umum/images-collage-title color2-bg icdec"> <img src="<?php echo site_url(); ?>assets/umum/images/logo.png"   alt=""></div>
                                        <div class="<?php echo site_url(); ?>assets/umum/images-collage_icon green-bg" style="right:-20px; top:120px;"><i class="fal fa-thumbs-up"></i></div>
                                        <div class="collage-image-min cim_1"><img src="<?php echo site_url(); ?>assets/umum/images/api/1.jpg" alt=""></div>
                                        <div class="collage-image-min cim_2"><img src="<?php echo site_url(); ?>assets/umum/images/api/2.jpg" alt=""></div>
                                        <div class="collage-image-btn green-bg">Booking now</div>
                                        <div class="collage-image-input">Search <i class="fa fa-search"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
                        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
                        <div class="circle-wrap" style="left:270px;top:120px;" data-scrollax="properties: { translateY: '-200px' }">
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
                    </section> -->
                    <!--section end-->
                    <!--section  -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2> Pengaduan Sudah Ditanggapi</h2>
                                <span class="section-separator"></span>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="testimonilas-carousel-wrap fl-wrap">
                            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
                            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="testimonilas-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                      <?php
                                        $i=0;
                                           foreach($max5 as $pengaduan){

                                      ?>
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/umum.webp" alt=""></div>
                                                <div class="testimonilas-text fl-wrap" style="height: 300px;">

                                                    <p>"<?php echo $pengaduan->uraian;
                                                        echo ", ";
                                                      $tanggal=$pengaduan->tanggal_pengaduan;
                                                      $bulan = array (
                                                    		1 =>   'Januari',
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
                                                    	$pecahkan = explode('-', $tanggal);
                                                    	echo $newtanggal=$pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                                      ?>
                                                    "</p>
                                                    <a href="#" class="testi-link" target="_blank"><?php echo $pengaduan->media_lapor; ?></a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3><?php echo $pengaduan->nama; ?></h3>
                                                        <h4><?php echo $pengaduan->Pekerjaan; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <?php
                                            }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="tc-pagination"></div>
                        </div>
                        <div class="waveWrapper waveAnimation">

                          <div class="waveWrapperInner bgMiddle">
                            <div class="wave-bg-anim waveMiddle" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
                          </div>
                          <div class="waveWrapperInner bgBottom">
                            <div class="wave-bg-anim waveBottom" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
                          </div>
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->

                    <!--section end-->
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
        <script src="<?php echo site_url(); ?>assets/umum/js/jquery.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
        <script src="<?php echo site_url(); ?>assets/umum/js/map-single.js"></script>

</html>
