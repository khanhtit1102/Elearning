<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="res/courses/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="res/courses/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="res/courses/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="res/courses/assets/css/slicknav.css">
    <link rel="stylesheet" href="res/courses/assets/css/flaticon.css">
    <link rel="stylesheet" href="res/courses/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="res/courses/assets/css/gijgo.css">
    <link rel="stylesheet" href="res/courses/assets/css/animate.min.css">
    <link rel="stylesheet" href="res/courses/assets/css/animated-headline.css">
    <link rel="stylesheet" href="res/courses/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="res/courses/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="res/courses/assets/css/themify-icons.css">
    <link rel="stylesheet" href="res/courses/assets/css/slick.css">
    <link rel="stylesheet" href="res/courses/assets/css/nice-select.css">
    <link rel="stylesheet" href="res/courses/assets/css/style.css">
    
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="res/courses/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <?php include "res/courses/header.php" ?>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Hệ thống học<br> trực tuyến</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Hãy cùng bắt đầu khám phá bằng việc giúp chúng tôi hiểu về bạn hơn!</p>
                                    <a href="<?php echo base_url('courses') ?>" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Lựa chọn khóa học</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="res/courses/assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Chủ động học</h3>
                                <p>Học bất cứ đâu, bất cứ khi nào, chỉ cần có internet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="res/courses/assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Giáo viên kinh nghiệm</h3>
                                <p>Các giáo viên đều có kinh nghiệm trong việc giảng dạy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="res/courses/assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Cập nhật khóa học</h3>
                                <p>Liên tục thêm mới các khóa học mới của các giáo viên.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Các khóa học mới nhất</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <?php 
                        foreach ($slide_new as $row) {
                        ?>
                        <div class="properties pb-20">
                            <div class="properties__card">
                                <div class="properties__img overlay1">
                                    <a href="<?php echo base_url('display?id=').$row['id_cs']; ?>"><img src="res/uploads/<?php echo $row['thumb_cs']; ?>" alt=""></a>
                                </div>
                                <div class="properties__caption">
                                    <p><?php echo $row['name_user']; ?></p>
                                    <h3><a href="<?php echo base_url('display?id=').$row['id_cs']; ?>"><?php echo $row['ten_cs']; ?></a></h3>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                                        <div class="price">
                                            <span><?php echo number_format($row['gia_cs']); ?>đ</span>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url('display?id=').$row['id_cs']; ?>" class="border-btn border-btn2">Xem thông tin</a>
                                </div>

                            </div>
                        </div>
                    <?php } ?>  
                    
                    
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!--? top subjects Area Start -->
        <div class="topic-area section-padding20">
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
                                    <img src="res/courses/assets/img/gallery/topic<?php echo $row['stt_cate'] ?>.png" alt="">
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
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mt-20">
                            <a href="<?php echo base_url('courses') ?>" class="border-btn">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top subjects End -->
        <!--? About Area-3 Start -->
        <section class="about-area3 fix">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                    <!-- img -->
                    <div class="right-img">
                        <img src="res/courses/assets/img/gallery/about3.png" alt="">
                    </div>
                </div>
                <div class="left-content3">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Lợi ích khi tham gia hệ thống của chúng tôi</h2>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="res/courses/assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Học tập mọi lúc, mọi nơi và trên mọi thiết bị có internet.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="res/courses/assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Dễ dùng, dễ học, hiệu quả thú vị.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="res/courses/assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Phù hợp với mọi trình độ tiểu học, trung học...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <footer>
     <div class="footer-wrappper footer-bg">
        <!-- Footer Start-->
        <?php include "res/courses/footer.php" ?>
      </div>
  </footer> 
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="res/courses/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="res/courses/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="res/courses/assets/js/popper.min.js"></script>
<script src="res/courses/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="res/courses/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="res/courses/assets/js/owl.carousel.min.js"></script>
<script src="res/courses/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="res/courses/assets/js/wow.min.js"></script>
<script src="res/courses/assets/js/animated.headline.js"></script>
<script src="res/courses/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="res/courses/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="res/courses/assets/js/jquery.nice-select.min.js"></script>
<script src="res/courses/assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="res/courses/assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="res/courses/assets/js/jquery.counterup.min.js"></script>
<script src="res/courses/assets/js/waypoints.min.js"></script>
<script src="res/courses/assets/js/jquery.countdown.min.js"></script>
<script src="res/courses/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="res/courses/assets/js/contact.js"></script>
<script src="res/courses/assets/js/jquery.form.js"></script>
<script src="res/courses/assets/js/jquery.validate.min.js"></script>
<script src="res/courses/assets/js/mail-script.js"></script>
<script src="res/courses/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="res/courses/assets/js/plugins.js"></script>
<script src="res/courses/assets/js/main.js"></script>

</body>
</html>