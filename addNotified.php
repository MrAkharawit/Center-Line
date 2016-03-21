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
                                <a href="customer.php"> จัดการแจ้งเตือน</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>เพิ่มแจ้งเตือน</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> เพิ่มแจ้งเตือน </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> เพิ่มแจ้งเตือน</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="#" id="form_sample_2">
                                        <div class="form-body col-lg-6">
                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" name="delivery">
                                                    <option value="">กรุณาเลือกลูกค้า</option>
                                                    <option value="1">ธุรการ</option>
                                                    <option value="2">บัญชี</option>
                                                    <option value="3">เอกสาร</option>
                                                </select>
                                                <label for="form_control_1">ลูกค้า
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
                                                <label for="form_control_1">เลขที่ บก.
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>

                                            <div class="form-group form-md-line-input">
                                                <textarea class="form-control" name="memo" rows="2"></textarea>
                                                <label for="form_control_1">รายการ</label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <textarea class="form-control" name="memo" rows="2"></textarea>
                                                <label for="form_control_1">หมายเหตุ</label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                        </div>
                                        <div class="form-body col-lg-6">
                                            <div class="form-group form-md-line-input">
                                                <select class="form-control" name="delivery">
                                                    <option value="">กรุณาเลือกช่าง</option>
                                                    <option value="1">ธุรการ</option>
                                                    <option value="2">บัญชี</option>
                                                    <option value="3">เอกสาร</option>
                                                </select>
                                                <label for="form_control_1">ช่าง
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d" name="name" id="form_control_1">
                                                <label for="form_control_1">วันที่เริ่มทำงาน
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your name...</span>
                                            </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d" name="name" id="form_control_1">
                                                <label for="form_control_1">วันที่สิ้นสุดการทำงาน
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