<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tham gia khóa học | Education</title>
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
        .overflow {
            overflow-y: auto;
            height: 175px;
        }
        .hiencmt {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            border-radius: 5px;
            padding-left: 10px;
            padding-top: 2px;
        }
        .hiencmt .infocmt {
            font-weight: bold;
            color: blue;
        }
        p.infocmt{
            margin: unset;
        }
        p.ndcmt{
            margin: unset;
        }
        li.active a b{
            color: #17a2b8;
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
        <?php foreach ($course as $key => $value) {
        ?>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s" style="font-size: 50px !important;"><?php echo $value['ten_cs'] ?></h1>
                                    <h2 data-animation="bounceIn" data-delay="0.4s" class="text-white" style="font-size: 30px !important;">Giảng Viên: <?php echo $value['name_user'] ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <section class="blog_area single-post-area pt-30 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12">
                        <?php foreach ($link_episode as $col => $row) { ?>
                        <h3><?php echo 'Bài '.$row['ep_number'].': '.$row['ep_title']; ?></h3>
                        <span class="thumbnail">
                        <video width="" height="" controls autoplay controlsList="nodownload" style="max-width: 100%">
                            <source src="<?php echo base_url('res/uploads/').$row['video_name']; ?>" type="video/mp4">
                        </video>
                    </span>
                        <?php } ?>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 mt-20">
                        <div class="accordion" id="accordionExample">
                          <div class="card">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card" aria-expanded="true" aria-controls="card" style="width: 100%;">
                                      Bình luận
                                    </button>
                                </h5>
                            <div id="card" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                <div class="overflow">
                                <?php foreach ($comment as $key => $value) {
                                    ?>
                                    <div class="hiencmt">
                                        <p class="infocmt">[<?php echo $value['ten_cmt'] ?> | <?php echo $value['email_cmt'] ?>]</p>
                                        <p class="ndcmt">Nội dung: <?php echo $value['nd_cmt'] ?></p>
                                    </div>
                                <?php } ?>
                                </div>
                                <br><br>
                                <form action="" method="POST" role="form">
                                    <input type="hidden" name="txtname" value="<?php echo $_SESSION['name_user'] ?>">
                                    <input type="hidden" name="txtemail" value="<?php echo $_SESSION['email_user'] ?>">
                                    <textarea name="txtnd" class="single-input" placeholder="Nội dung (Không quá 200 ký tự)" rows="3" maxlength="200"></textarea>
                                    <br>
                                    <button type="submit" class="genric-btn info-border circle" name="comment" value="submit" style="width: 100%">Bình luận</button>
                                </form>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                              <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 100%;">
                                  Lộ trình - Bài học
                                </button>
                              </h5>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                <div class="overflow" style="height: 300px;">
                                    <ul>
                                        <?php $i=0; foreach ($all_episodes as $key => $value) { $i++;
                                            ?>
                                            <li class="<?php if (isset($_GET['episode'])){if ($value['ep_number'] == $_GET['episode']) { echo 'active'; }} ?>">
                                                <a href="?episode=<?php echo $value['ep_number']; ?>">
                                                    <b>Bài <?php echo $i.' - '.$value['ep_title']; ?></b>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
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
    <script type="text/javascript">
        $(function() {
            $(this).bind("contextmenu", function(e) {
                return false;
            });
            $(this).keydown(function(event) {
                if (event.keyCode == 123 || (event.ctrlKey && event.keyCode == 85) || (event.ctrlKey && event.shiftKey && event.keyCode == 73)) {
                    alert('Disabled');
                    return false;
                }
                else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
                    alert('Disabled');
                    return false;
                }
            });
        });
    </script>
</body>
</html>