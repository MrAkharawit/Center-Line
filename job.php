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
                                <span> เปิดงาน</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> เปิดงาน </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">



                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-green"></i>
                                        <span class="caption-subject font-green bold uppercase"> รายการเปิดงาน </span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-wrench"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                            <i class="icon-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="table-checkbox" width="50">
                                                    <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /> 
                                                </th>
                                                <th> หมายเลข </th>
                                                <th> เลขที่ บก. </th>
                                                <th> หน่วยงาน (สาขา) </th>
                                                <th> หมายเหตุ </th>
                                                <th width="150"> สถานะ </th>
                                                <th width="80"> # </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> 
                                                </td>
                                                <td> 59-0087 </td>
                                                <td> บก.1601/9258-A </td>
                                                <td> TMB (แม่แตง) </td>
                                                <td> หมายเหตุ </td>
                                                <td> 
                                                    <span class="label label-sm label-info"> ดำเนินงาน </span>&nbsp;
                                                    <span class="label label-sm label-info"> รูป </span>
                                                </td>
                                                <td>
                                                    <a href="statusNotified.php" href="javascript:;" class="btn btn-outline btn-circle btn-xs yellow">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <button class="btn btn-outline btn-circle dark btn-xs red" data-toggle="confirmation" id="bs_confirmation_demo_1">
                                                        <i class="fa fa-trash-o"></i> 
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> 
                                                </td>
                                                <td> 59-0087 </td>
                                                <td> บก.1601/9258-A </td>
                                                <td> TMB (แม่แตง) </td>
                                                <td> หมายเหตุ </td>
                                                <td> 
                                                    <span class="label label-sm label-success"> เสร็จสิน </span>
                                                </td>
                                                <td>
                                                    <a href="statusNotified.php" href="javascript:;" class="btn btn-outline btn-circle btn-xs yellow">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <button class="btn btn-outline btn-circle dark btn-xs red" data-toggle="confirmation" id="bs_confirmation_demo_1">
                                                        <i class="fa fa-trash-o"></i> 
                                                    </button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
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