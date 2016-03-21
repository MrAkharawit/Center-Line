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
                                <span> จัดการสินค้า</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> KTB </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-6">


                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i> หมวดหมู่สินค้า </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body flip-scroll">
                                    <div id="tree_1" class="tree-demo">
                                        <ul>
                                            <li data-jstree='{ "selected" : true }'> <a href="cusProduct.php"> หมวดอุกรณ์</a>
                                                <ul>
                                                    <li data-jstree='{ "selected" : false }'> หมวด A </li>
                                                    <li data-jstree='{ "selected" : false }'> หมวด B
                                                        <ul>
                                                            <li data-jstree='{ "selected" : false }'> พื้น </li>
                                                            <li data-jstree='{ "selected" : false }'> เพดาน </li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{ "selected" : false }'> หมวด C </li>
                                                </ul>
                                            </li>
                                            <li data-jstree='{ "type" : "file" }'>
                                                <a href="http://www.jstree.com"> หมวดงาน</a>
                                                <ul>
                                                    <li data-jstree='{ "selected" : false }'> หมวด A </li>
                                                    <li data-jstree='{ "selected" : false }'> หมวด B
                                                        <ul>
                                                            <li data-jstree='{ "selected" : false }'> พื้น </li>
                                                            <li data-jstree='{ "selected" : false }'> เพดาน </li>
                                                        </ul>
                                                    </li>
                                                    <li data-jstree='{ "selected" : false }'> หมวด C </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-directions font-green-sharp"></i>
                                        <span class="caption-subject font-green-sharp sbold"> เพิ่มหมวดหมู่สินค้า</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="#" id="form_sample_2">
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="กรุณากรอกข้อมูล">
                                                <label for="form_control_1">ชื่อประเภทสินค้า
                                                    <span class="required">*</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
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