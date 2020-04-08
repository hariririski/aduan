<!DOCTYPE HTML>
<html lang="en">

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Informasi Pertanahan</title>
          <?php echo $this->load->view('share/author', '', TRUE);?>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
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
                                    <h1>Cari Informasi Pertanahan</h1>
                                </div>

                            </div>
                            <!-- main-search-input-tabs-->
                            <div class="main-search-input-tabs  tabs-act fl-wrap">
                                <ul class="tabs-menu change_bg no-list-style">
                                    <li class="current"><a href="#tab-inpt1" data-bgtab="<?php echo site_url(); ?>assets/umum/images/bg/hero/1.jpg">Cari</a></li>
                                </ul>
                                <!--tabs -->
                                <div class="tabs-container fl-wrap  ">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt1" class="tab-content first-tab">
                                            <div class="main-search-input-wrap fl-wrap" width="100%">
                                                <div class="main-search-input fl-wrap" width="100%" >
                                                    <div class="main-search-input-item" style="width: 100%;">
                                                        <label><i class="fal fa-keyboard"></i></label>
                                                        <input type="text" placeholder="Apa Yang Anda Ingin Ketahui" width="100%" value=""/>
                                                    </div>

                                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Cari <i class="far fa-search"></i></button>
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
                    <!--  section  end-->
                    <section class="gray-bg small-padding no-top-padding-sec" id="sec1">
                        <div class="container">
                            <!-- list-main-wrap-header-->
                            <div class="list-main-wrap-header fl-wrap   block_box no-vis-shadow no-bg-header fixed-listing-header">
                                <!-- list-main-wrap-title-->
                                <div class="list-main-wrap-title">

                                </div>
                                <!-- list-main-wrap-title end-->
                                <!-- list-main-wrap-opt-->
                                <div class="list-main-wrap-opt">
                                    <!-- price-opt-->
                                    <div class="price-opt">
                                        <span class="price-opt-title">Sort   by:</span>
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                                                <option>Popularity</option>
                                                <option>Average rating</option>
                                                <option>Price: low to high</option>
                                                <option>Price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- price-opt end-->
                                    <!-- price-opt-->
                                    <div class="grid-opt">
                                        <ul class="no-list-style">
                                            <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                                            <li class="grid-opt_act"><span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                                        </ul>
                                    </div>
                                    <!-- price-opt end-->
                                </div>
                                <!-- list-main-wrap-opt end-->
                                <a class="custom-scroll-link back-to-filters clbtg" href="#lisfw"><i class="fal fa-search"></i></a>
                            </div>
                            <!-- list-main-wrap-header end-->
                            <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                            <div class="fl-wrap">

                                <!-- listing-item-container -->
                                <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
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
                                    <div class="pagination fwmpag">
                                        <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                                        <a href="#">1</a>
                                        <a href="#" class="current-page">2</a>
                                        <a href="#">3</a>
                                        <a href="#">...</a>
                                        <a href="#">7</a>
                                        <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                                <!-- listing-item-container end -->
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
            <?php echo $this->load->view('share/footer', '', TRUE);?>
            <!--footer end -->
            <!--map-modal -->

            <!--map-modal end -->
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
