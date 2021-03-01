<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title><?php foreach ($result as $key => $value) { echo $value["ten_cs"]; } ?> | Education</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/res/courses/assets/img/favicon.ico">

   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/slicknav.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/animate.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/hamburgers.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/themify-icons.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/slick.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/nice-select.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>/res/courses/assets/css/style.css">
</head>

<body>
   <style type="text/css">
      .title{
         border-bottom: 1px solid #f0e9ff;
         transition: all 0.3s ease 0s;
         padding-bottom: 12px;
      }
   </style>
   <!--? Preloader Start -->
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
   <?php 
      foreach ($result as $key => $value) {
    ?>
   <form action="" method="POST" role="form">
   <!--? slider Area Start-->
   <section class="slider-area slider-area2">
      <div class="slider-active">
         <!-- Single Slider -->
         <div class="single-slider slider-height2">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-11 col-md-12">
                     <div class="hero__caption hero__caption2">
                        <h1 data-animation="bounceIn" data-delay="0.2s" style="font-size: 50px !important;"><?php echo $value["ten_cs"]; ?></h1>
                        <h2 data-animation="bounceIn" data-delay="0.4s" class="text-white" style="font-size: 30px !important;">Giảng viên: <?php echo $value["name_user"]; ?></h2>
                     </div>
                  </div>
               </div>
            </div>          
         </div>
      </div>
   </section>
<!--? Blog Area Start -->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo base_url(); ?>res/uploads/<?php echo $value['thumb_cs']; ?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h4 style="color: #2d2d2d;"><?php echo $value["info_cs"]; ?>
                     </h4>
                     <h3>Mô tả khoá học</h3>
                     <p class="excert title"><?php echo $value["mota_cs"]; ?></p>
                     <h3 class="title">Giáo trình</h3>
                     <div class="quote-wrapper">
                        <div class="quotes">
                           <?php echo $value["giaotrinh_cs"] ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li>Chia sẻ: </li>
                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                     </ul>
                  </div>
                  
               </div>
         <div class="blog-author">
            <div class="media align-items-center">
               <img src="<?php echo base_url('res/uploads/').$value['avatar_user']; ?>" alt="">
               <div class="media-body">
                  <a href="#">
                     <h4><?php echo $value["name_user"]; ?></h4>
                  </a>
                  <p>Giảng viên 5 năm tại trường đại học Công nghệ thông tin và truyền thông Thái Nguyên</p>
               </div>
            </div>
         </div>
         <div class="comment-form">
            <h4>Để lại lời bình luận của bạn</h4>
               <div class="row">
                  <div class="col-12">
                     <div class="form-group">
                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                        placeholder="Viết bình luận của bạn..."></textarea>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Họ và tên">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <button type="" class="button button-contactForm btn_1 boxed-btn">Chức năng đang phát triển</button>
               </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="blog_right_sidebar sticky-top" style="z-index: 0 !important;">
            <aside class="single_sidebar_widget post_category_widget">
               <h4 class="widget_title" style="color: #2d2d2d;">Giá: <?php echo number_format($value["gia_cs"]); ?>đ</h4>
               <ul class="list cat-list">
                  <li>
                     <p class="d-flex">
                        Thể loại: 
                        <?php 
                           switch ($value['id_cate']) {
                              case 'cntt':
                              echo "Công nghệ thông tin";
                              break;
                              case 'tk':
                              echo "Thiết kế";
                              break;
                              case 'ndc':
                              echo "Nuôi dạy con";
                              break;
                              case 'ptbt':
                              echo "Phát triển bản thân";
                              break;
                              case 'kdkn':
                              echo "Kinh doanh & khởi nghiệp";
                              break;
                              case 'nn':
                              echo "Ngoại ngữ";
                              break;
                              case 'mkt':
                              echo "Marketing";
                              break;
                              case 'thvp':
                              echo "Tin học văn phòng";
                              break;

                              default:
                              echo "Khác";
                              break;
                     } ?>
                     </p>
                     <p class="d-flex">Thể loại: Mọi lứa tuổi</p>
                     <p class="d-flex">Số bài học: <?php echo $value["sobh_cs"]; ?></p>
                     <p class="d-flex">Thời lượng videos: <?php echo $value["time_cs"]; ?></p>
                  </li>
               </ul>
               <?php echo $status; ?>
               <?php
                  if ($hasown == 1) {
                     echo '<a href="'.base_url('learn/course/').$value["id_cs"].'"><button type="button" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn">Học Ngay</button></a>';
                  }
                  else{
                     echo '<button type="submit" name="add_to" value="cart" class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn">Thêm vào Giỏ Hàng</button>';
                  }
                ?>
         </div>
      </div>
   </div>
   </div>
   </section>
<!-- Blog Area End -->
</form>
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