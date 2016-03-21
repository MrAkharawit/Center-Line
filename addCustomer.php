<?php
include("include/include.php");
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <?php fn_header(); ?>

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <?php fn_top_nav(); ?>
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <?php fn_sidebar(); ?>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <?php //fn_begin_theme(); ?>
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="main.php">หน้าหลัก</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="customer.php"> จัดการลูกค้า</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>เพิ่มลูกค้า</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> เพิ่มลูกค้า </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> เพิ่มลูกค้า </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="#" id="form_sample_2">
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. 
                                            </div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! 
                                            </div>
                                        </div>
                                        <div class="form-body col-lg-6">
                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" name="delivery">
                                                    <option value="">กรุณาเลือกประเภทลูกค้า</option>
                                                    <option value="1">KTB</option>
                                                    <option value="2">KBANT</option>
                                                    <option value="3">BAY</option>
                                                </select>
                                                <label for="form_control_1">ประเภทลูกค้า
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">สาขา
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">ชื่อผู้ใช้
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="password" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">รหัสผ่าน
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="password" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">ยืนยันรหัสผ่าน
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                             <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">ชื่อ
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">นามสกุล
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="__/__/____">
                                                <label for="form_control_1">วันเกิด
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                        </div>
                                        <div class="form-body col-lg-6">
                                            

                                            <div class="form-group form-md-line-input">
                                                <textarea class="form-control" name="memo" rows="2"></textarea>
                                                <label for="form_control_1">ที่อยู่</label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" name="delivery">
                                                    <option value="">กรุณาเลือกจังหวัด</option>
                                                    <option value="1">KTB</option>
                                                    <option value="2">KBANT</option>
                                                    <option value="3">BAY</option>
                                                </select>
                                                <label for="form_control_1">จังหวัด
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" name="delivery">
                                                    <option value="">กรุณาเลือกอำเภอ</option>
                                                    <option value="1">KTB</option>
                                                    <option value="2">KBANT</option>
                                                    <option value="3">BAY</option>
                                                </select>
                                                <label for="form_control_1">อำเภอ
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" name="delivery">
                                                    <option value="">กรุณาเลือกตำบล</option>
                                                    <option value="1">KTB</option>
                                                    <option value="2">KBANT</option>
                                                    <option value="3">BAY</option>
                                                </select>
                                                <label for="form_control_1">ตำบล
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">เบอร์โทร
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="email" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                <label for="form_control_1">อีเมล
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12"><br><br>
                                                    <button type="submit" class="btn green"> บันทึกข้อมูล </button>
                                                    <button type="reset" class="btn default"> เริ่มใหม่ </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
       <?php fn_footer(); ?>
    </body>

</html>