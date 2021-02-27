<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/res/courses/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/animated-headline.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/style.css">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url(); ?>/res/courses/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <!-- Header Start -->
    <?php include "res/courses/header.php" ?>
    <!-- Header End -->
    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Khoá học của chúng tôi</h1>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <h3><?php if ($keyword != '') { echo 'Bạn đang tìm kiếm với từ khóa - '.$keyword.' -'; }?></h3>
                <div class="form locsp">
                    <form action="<?php echo base_url('courses'); ?>" method="POST" role="form">
                        <div class="form-group">
                            <label for="">Lọc Sản Phẩm:</label>
                            <div class="form-group row">
                                <div class="col-lg-2">
                                    <select name="name" class="default-select">
                                        <option value="" selected="">Theo tên</option>
                                        <option value="ten_cs asc">A => Z</option>
                                        <option value="ten_cs desc">Z => A</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <select name="price" class="default-select">
                                        <option value="" selected="">Theo giá</option>
                                        <option value="gia_cs asc">Thấp => Cao</option>
                                        <option value="gia_cs desc">Cao => Thấp</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="genric-btn success circle" name="filter" value="filter" title="Vui lòng chỉ chọn một loại lọc">Lọc<i class="fas fa-search"></i></button>
                                </div>
                                <div class="col-lg-2">
                                    <a href="<?php echo base_url('courses/cancel_search'); ?>"><button type="button" class="genric-btn warning circle">Huỷ Lọc<i class="fas fa-ban"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </form><br><br><br>
                </div>
                <div class="row">
                    <?php foreach($query_poster->result() as $row){  ?>
                        <div class="col-lg-4">
                            <div class="properties properties2 mb-30">
                                <div class="properties__card">
                                    <div class="properties__img overlay1">
                                        <a href="<?php echo base_url('display?id=').$row->id_cs; ?>"><img src="<?php echo base_url(); ?>res/uploads/<?php echo $row->thumb_cs; ?>" alt=""></a>
                                    </div>
                                    <div class="properties__caption">
                                        <p><?php echo $row->name_user; ?></p>
                                        <h3><a href="<?php echo base_url('display?id=').$row->id_cs; ?>"><?php echo $row->ten_cs; ?></a></h3>
                                        <div class="properties__footer d-flex justify-content-between align-items-center">
                                            <div class="price">
                                                <span><?php echo number_format($row->gia_cs); ?>đ</span>
                                            </div>
                                        </div>
                                        <a href="<?php echo base_url('display?id=').$row->id_cs; ?>" class="border-btn border-btn2">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mt-40">
                            <!-- <a href="#" class="border-btn">Load More</a> -->
                            <?php echo $paginator; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!--? top subjects Area Start -->
        <div class="topic-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Danh mục khóa học</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($allcate as $row) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-topic text-center mb-30">
                                <div class="topic-img">
                                    <img src="<?php echo base_url() ?>/res/courses/assets/img/gallery/topic<?php echo $row['stt_cate'] ?>.png" alt="">
                                    <div class="topic-content-box">
                                        <div class="topic-content">
                                            <h3><a href="<?php echo base_url('courses/category/').$row['id_cate'] ?>"><?php echo $row['name_cate']; ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
        <!-- top subjects End -->  
    </main>
    <footer>
        <div class="footer-wrappper footer-bg">
           <!-- Footer Start-->
           <?php include "res/courses/footer.php" ?>
           <!-- Footer End-->
          </div>
      </footer> 
      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/animated.headline.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/contact.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.form.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/mail-script.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/main.js"></script>
    
</body>
</html>