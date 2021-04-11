<style type="text/css">
    .modal-backdrop{
        position: unset !important;
    }
</style>
<div class="header-area header-transparent">
    <div class="main-header ">
        <div class="header-bottom  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/res/courses/assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="menu-wrapper d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                          
                                        <li class="active" ><a href="<?php echo base_url() ?>">Trang chủ</a></li>
                                        <li><a href="<?php echo base_url('courses') ?>">Tất cả khóa học</a></li>
                                        <!-- <li><a href="<?php echo base_url() ?>">About</a></li> -->
                                        <li><a>Danh mục khóa học</a>
                                            <ul class="submenu" style="width: max-content;">
                                                <li><a href="<?php echo base_url('courses/category/cntt') ?>">Công nghệ thông tin</a></li>
                                                <li><a href="<?php echo base_url('courses/category/tk') ?>">Thiết kế action</a></li>
                                                <li><a href="<?php echo base_url('courses/category/ndc') ?>">Nuôi dạy con</a></li>
                                                <li><a href="<?php echo base_url('courses/category/ptbt') ?>">Phát triển bản thân</a></li>
                                                <li><a href="<?php echo base_url('courses/category/kdkn') ?>">Kinh doanh & Khởi nghiệp</a></li>
                                                <li><a href="<?php echo base_url('courses/category/nn') ?>">Ngoại ngữ</a></li>
                                                <li><a href="<?php echo base_url('courses/category/mkt') ?>">Marketing</a></li>
                                                <li><a href="<?php echo base_url('courses/category/thvp') ?>">Tin học văn phòng</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('cart') ?>">Giỏ hàng</a></li>
                                        <li>
                                            <a href="#" class="forget" data-toggle="modal" data-target="#modal-search"><span class="fas fa-search"></span></a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-search" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel">Tìm kiếm khóa học</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                                          <form action="<?php echo base_url('courses'); ?>" method="POST" role="search">
                                                              <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="text" name="keyword" class="form-control" placeholder="Nhập từ khóa" id="forgot-pass" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="search" value="search" class="genric-btn primary-border circle small">Tìm kiếm khóa học</button>
                                                            </div>
                                                        </form>   
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Button -->
                                        <li class="button-header">
                                            <a href="<?php echo base_url('auth') ?>" class="btn btn3"><i class="fas fa-user-circle"></i>
                                                <?php
                                                if (isset($_SESSION['name_user'])) {
                                                    echo $_SESSION['name_user'];
                                                }
                                                else echo "Tài khoản";   
                                                ?>
                                            </a>
                                        </li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                  </div> 
                  <!-- Mobile Menu -->
                  <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>