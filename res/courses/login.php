<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Đăng nhập</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>res/courses/assets/img/favicon.ico">

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
        .modal-backdrop{
            position: unset !important;
        }
    </style>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url(); ?>res/courses/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


    <main class="login-body" data-vide-bg="<?php echo base_url(); ?>res/courses/assets/img/login-bg.mp4">
        <!-- Login Admin -->
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>res/courses/assets/img/logo/loder.png" alt=""></a>
            </div>
            <h2>Đăng Nhập Bằng Email</h2>
            <h3 class="text-white">
            <?php 
                echo validation_errors('- '); 
                if (isset($_SESSION['error'])) {
                    echo '- '.$_SESSION['error'];
                } 
            ?>
            </h3>
            <form class="form-default" action="" method="POST">
                <div class="form-input">
                    <label for="name">Email</label>
                    <input  type="email" name="email" placeholder="" value="quantrivien-web@gmail.com" autocomplete="off">
                </div>
                <div class="form-input">
                    <label for="name">Mật khẩu</label>
                    <input type="password" name="pass" placeholder="" value="123456" autocomplete="off">
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="login" value="Đăng nhập">
                </div>
            </form>
            <!-- Forget Password -->
            <a href="#" class="forget" data-toggle="modal" data-target="#modal-forgot-password">Quên mật khẩu</a>
            <!-- Modal -->
            <div class="modal fade" id="modal-forgot-password" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Tìm lại mật khẩu của bạn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="forgot_password" method="POST" role="form">
                      <div class="modal-body">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Nhập email của bạn" id="forgot-pass" autocomplete="off">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="genric-btn primary-border circle small">Tìm lại mật khẩu</button>
                      </div>
                    </form>   
                </div>
              </div>
            </div>
            <!-- Forget Password -->
            <a href="<?php echo base_url('/auth/register') ?>" class="registration">Đăng ký</a>
        </div>
        <!-- /end login form -->
    </main>


    <script src="<?php echo base_url(); ?>/res/courses/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="<?php echo base_url(); ?>/res/courses/assets/js/jquery.vide.js"></script>

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