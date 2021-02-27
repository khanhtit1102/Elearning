<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>res/courses/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/animated-headline.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/courses/assets/css/style.css">
</head>
<body>
    <style type="text/css">
        .nice-select.default-select{
            width: 100%;
        }
        .hidden {
            display: none!important;
            visibility: hidden!important;
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


<!-- Register -->

<main class="login-body" data-vide-bg="<?php echo base_url(); ?>res/courses/assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <form class="form-default" action="" method="POST">
        
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>res/courses/assets/img/logo/loder.png" alt=""></a>
            </div>
            <h2>Đăng Ký Bằng Email</h2>
            <h3 class="text-white">
                <?php 
                    echo validation_errors('- '); 
                    if (isset($_SESSION['error'])) {
                        echo '- '.$_SESSION['error'];
                    } 
                ?>
            </h3>
            <div class="form-input">
                <label for="name">Họ và tên</label>
                <input  type="text" name="username" placeholder="" autocomplete="off">
            </div>
            <div class="form-input">
                <label for="name">Email</label>
                <input type="email" name="email" placeholder="" autocomplete="off">
            </div>
            <div class="form-input">
                <label for="name">Mật khẩu</label>
                <input type="password" name="pass" placeholder="" autocomplete="off">
            </div>
            <div class="form-input hidden" id="job">
                <label for="name">Công việc hiện tại</label>
                <input type="text" name="job" class="" placeholder="" autocomplete="off">
            </div>
            <div class="pb-30">
                <select name="type_account" class="default-select" id="type_account" onchange="change_option()">
                    <option value="0" selected="">Học viên</option>
                    <option value="2">Giảng viên</option>
                </select>
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="register" value="Đăng ký">
            </div>
            <a href="<?php echo base_url('auth/login') ?>" class="registration">Đăng nhập</a>
        </div>
    </form>
    <!-- /end login form -->
</main>

    <script type="text/javascript">
        function change_option() {
            var x = document.getElementById("type_account").value;
            var job = document.getElementById('job');
            if (x == '2') {
                job.classList.remove("hidden");
            }
            else {
                job.classList.add("hidden");
            }
        }
    </script>
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