<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tài khoản | Education</title>
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
        .nav-tabs{
            display: flex;
            justify-content: space-around;
            background-color: #4255a4;
            padding: 10px 0px;
        }
        .profile .nav.nav-tabs li a {
            border-radius: 20px;
        }
        .tab-content .avatar{
            margin-top: 76px;
        }
        .tab-content .avatar img {
            width: 140px;
            height: 140px;
            display: flex;
            align-items: center;
            border: 1px solid #afafaf;
            border-radius: 50%;
        }
        .profile-info, .change-password, .courses-owner{
            margin-top: 35px;
        }
        .properties__img img {
            width: 100%;
            border-radius: 10px 10px 0 0;
            position: relative;
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
        
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Hi, <?php echo $_SESSION['name_user']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <section class="profile">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin cá nhân</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bảo mật</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Khóa học của tôi</a>
                </li>
            </ul>
            <?php 
                foreach ($data as $row) {
            ?>
                <div class="tab-content pb-40" id="myTabContent">
                    <div class="tab-pane container fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-4 avatar" align="center">
                                <img src="<?php echo base_url('res/uploads/').$row['avatar_user']; ?>" alt="Avatar">
                                <br>
                                <form action="" method="POST" role="form" enctype="multipart/form-data">
                                    <input type="file" accept=".png, .jpg, .jpeg" name="image" class="single-input primary-border" style="width: 80%;"><br>
                                    <button type="submit" class="genric-btn primary-border circle" name="change_image" value="submit" style="width: 80%;">Thay đổi ảnh đại diện</button><br><br>
                                <?php 
                                    if ($row['permission_user'] == 3) {
                                        echo "Status: <b>Administrator</b>";
                                    }
                                    if ($row['permission_user'] == 2) {
                                        echo "Status: <b>Teacher</b>";
                                    }
                                    if ($row['permission_user'] == 1) {
                                        echo "Status: <b>Member</b>";
                                    }
                                    if ($row['permission_user'] == 0) {
                                        echo "Status: <b>Non-active</b>";
                                    }
                                    echo '<br>Số tiền: <b>'.number_format($_SESSION['coin_user']).'</b>đ';
                                ?>
                                <br><a href="auth/money" class="genric-btn primary-border circle">Nạp thêm tiền</a>
                                
                                </form>
                            </div>
                            <div class="col-md-8 profile-info">
                                <form action="" method="POST" role="form" enctype="multipart/form-data">
                                    <?php if (isset($_SESSION['error'])) {
                                        echo '<div class="alert alert-success" role="alert">'.$_SESSION['error'].'</div>';
                                    } ?>
                                    <h2>Thông tin cơ bản</h2>
                                    <label for="">Họ tên đầy đủ:</label>
                                    <input type="text" class="single-input" name="name_user" id="" value="<?php echo $row['name_user']; ?>">
                                    <br>
                                    <label for="">Nghề nghiệp:</label>
                                    <input type="text" class="single-input" name="job_user" id="" value="<?php echo $row['job_user']; ?>">
                                    <br>
                                    <label for="">Giới thiệu bản thân:</label>
                                    <textarea name="about_user" id="" class="single-input" rows="3"><?php echo $row['about_user']; ?></textarea>
                                    <button type="submit" name="changeinfo" value="changeinfo" class="genric-btn info circle" style="float: right;">Lưu thay đổi</button>
                                    <a href="auth/logout"><button type="button" class="genric-btn danger circle" onclick="return confirm('Bạn thực sự muốn đăng xuất?')">ĐĂNG XUẤT</button></a>
                                    <?php 
                                        if ($row['permission_user'] == 3) {
                                            echo "<a href='".base_url('admin_panel')."'><button type='button' class='genric-btn warning circle'>Admin Panel</button></a>";
                                        }
                                        if ($row['permission_user'] == 2) {
                                            echo "<a href='".base_url('teacher_panel')."'><button type='button' class='genric-btn warning circle'>Teacher Panel</button></a>";
                                        }
                                        if ($row['permission_user'] == 0) {
                                            echo "<a href='".base_url('')."' target='_blank'><button type='button' class='genric-btn warning circle'>Kích hoạt Email</button></a>";
                                        }
                                     ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row justify-content-center">
                        <div class="col-6 change-password">
                            <?php if (isset($_SESSION['error'])) {
                                echo '<div class="alert alert-success" role="alert">'.$_SESSION['error'].'</div>';
                            } ?>
                            <form action="" method="POST" role="form">
                                <h2>Đổi mật khẩu</h2>
                                <label for="">Email: </label>
                                <input type="text" class="single-input" id="" value="<?php echo $row['email_user']; ?>" disabled>
                                <br>
                                <label for="">Mật khẩu hiện tại: </label>
                                <input type="password" class="single-input" name="oldpass" id="" placeholder="●●●●●●●●●●">
                                <br>
                                <label for="">Mật khẩu mới: </label>
                                <input type="password" class="single-input" name="newpass" id="" placeholder="●●●●●●●●●●">
                                <button type="submit" name="changepass" value="changepass" class="genric-btn info circle" style="float: right;">Lưu thay đổi</button>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade container" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                        <?php 
                            if ($owner == null) {
                                echo "<center><b>Bạn chưa sở hữu khóa học nào!</b><br>Vui lòng mua thêm khóa học <a href='courses' class='text-primary'>tại đây</a>!</center>";
                            }
                            else{
                                foreach ($owner as $key => $value) { ?> 
                                <div class="col-xl-4 col-lg-6 col-md-12 courses-owner">
                                    <div class="properties properties2 mb-30">
                                        <div class="properties__card">
                                            <div class="properties__img overlay1">
                                                <a href="<?php echo base_url('learn/course/').$value['id_cs']; ?>"><img src="<?php echo base_url(); ?>res/uploads/<?php echo $value['thumb_cs']; ?>" alt=""></a>
                                            </div>
                                            <div class="properties__caption">
                                                <h3><a href="<?php echo base_url('learn/course/').$value['id_cs']; ?>"><?php echo $value['ten_cs']; ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php   }
                            } ?> 
                        </div>     
                    </div>
                </div>
            <?php } ?>
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