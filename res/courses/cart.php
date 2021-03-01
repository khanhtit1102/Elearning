<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giỏ hàng | Education</title>
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
    <style type="text/css">
        .trai .list-item .course-list .course-content .title{
            color: red;
            font-weight: bold;  
        }
        .trai .list-item .course-list .course-content .price{
            font-weight: bold;
        }
        .trai .list-item td{
            padding: 20px 10px;
            border-bottom: 1px solid #e1e5ea;  
        }
        .trai .list-item .course-list .course-action i{
            float: right;
            transition: 0.5s;
        }
        .trai .list-item .course-list .course-action i:hover{
            transform: rotate(360deg);
        }
    </style>
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Giỏ hàng của bạn</h1>
                                    <h2 data-animation="bounceIn" data-delay="0.4s" class="text-white">Có: <?php echo $count; ?> khoá học</h2>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <section class="cart container">
            <?php if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-warning mt-30" role="alert">'.$_SESSION['error'].'</div>';
            } ?>
            <div class="row pt-30 pb-50">
                <div class="col-xl-8 col-lg-11 col-md-12 trai">
                    <div class="list-item">
                        <table>
                            <?php 
                            $price = 0;
                                    foreach ($result as $key => $value) {
                                        $price += $value['gia_cs'];
                                 ?>
                            <tr>
                                <td>
                                    <div class="course-list row">
                                        <div class="course-image col-4">
                                            <a href="<?php echo base_url('display?id=').$value['id_cs']; ?>"><img src="res/uploads/<?php echo $value['thumb_cs']; ?>" alt="" width="100%"></a>
                                        </div>
                                        <div class="course-content col-7 pt-10">
                                            <a href="<?php echo base_url('display?id=').$value['id_cs']; ?>"><h4 class="title"><?php echo $value['ten_cs']; ?></h4></a>
                                            <p class="author">Giảng viên: <b><?php echo $value['name_user']; ?></b></p>
                                            <h4 class="price"><?php echo number_format($value['gia_cs']); ?>đ</h4>
                                        </div>
                                        <div class="course-action col-1">
                                            <a href="cart?delete=<?php echo $value['id_cs']; ?>" class="genric-btn danger small" onclick="return confirm('Bạn thực sự muốn hủy khóa học này?');" style="padding: 5px;"><i class="fas fa-times"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php }
                            // Tính giá tiền và số tiền được giảm
                                $discount = $price*$coupon_discount['percent_discount']/100;
                                $price = $price - $discount;
                            ?>
                        </table>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 phai">
                    <h3>Hóa đơn của bạn</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tiền của bạn: </th>
                                <th><?php echo number_format($_SESSION['coin_user']); ?>đ</th>
                            </tr>
                            <tr>
                                <th>Tổng tiền: </th>
                                <th><?php echo number_format($price); ?>đ</th>
                            </tr>
                            <?php if($discount>0){ ?>
                            <tr>
                                <th>Giảm giá: </th>
                                <th>-<?php echo number_format($discount); ?>đ</th>
                            </tr>
                            <?php } ?>
                            <tr>
                                <th>Số tiền còn lại: </th>
                                <th><?php echo number_format($_SESSION['tien_thua'] = $_SESSION['coin_user'] - $price); ?>đ</th>
                            </tr>
                        </thead>
                    </table>
                    <?php 
                        if ($price >= 0 && $count != 0) {
                        
                     ?>
                     <tr>
                        <td colspan="2">
                            <?php if (isset($_SESSION['coupon_noti'])) {
                                echo '<div class="alert alert-success" role="alert">'.$_SESSION['coupon_noti'].'</div>';
                            } ?>
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-7">
                                        <input type="text" name="coupon" class="single-input" style="width: 100%" value="<?php echo $coupon_discount['code_cp']; ?>" placeholder="Bạn có mã giảm giá?" >
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="genric-btn success circle" style=""><i class="fa fa-check"></i></button>
                                    </div>
                                    <div class="col-2">
                                        <a href="cart/remove_coupon"><button type="button" class="genric-btn danger-border circle" style=""><i class="fa fa-times" style="color: red;"></i></button></a>
                                    </div>
                                </div>
                            </form> 
                        </td>
                     </tr><br>
                    <form action="<?php echo base_url('cart') ?>" method="POST">
                        <?php 
                        if ($coupon_discount['code_cp']!='') {
                            $code_cp = $coupon_discount['code_cp'];
                            echo '<input type="hidden" name="code_cp" class="form-control" value="'.$code_cp.'">';
                        }
                        ?>
                        <button type="submit" name="action" value="buy" class="genric-btn primary circle" style="width: 100%">Mua Khoá Học</button>
                        <br><br>
                        <button type="submit" name="action" value="cancel" class="genric-btn warning-border circle" style="width: 100%">Huỷ Hoá Đơn</button>
                    </form>
                    <?php } ?>
                    <input type="text" hidden="">
                </div>
            </div>
        </section>
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