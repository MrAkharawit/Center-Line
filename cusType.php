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
                                <a href="index.html">หน้าหลัก</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>ประเภทลูกค้า</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> ประเภทลูกค้า </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-7">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-red"></i>
                                        <span class="caption-subject font-red bold uppercase">รายการประเภทลูกค้า</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th width="50" class="table-checkbox">
                                                    <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /> 
                                                </th>
                                                <th> ประเภทลูกค้า </th>
                                                <th width="230"> # </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="1" /> 
                                                </td>
                                                <td>
                                                    ลูกค้าทั่วไป
                                                </td>
                                                <td>
                                                    <a href="catProduct.php" class="btn btn-outline btn-circle dark btn-xs green">
                                                        <i class="glyphicon glyphicon-plus"></i> Product 
                                                    </a>
                                                    <a data-toggle="modal" href="#basic" href="javascript:;" class="btn btn-outline btn-circle btn-xs blue">
                                                        <i class="fa fa-edit"></i> View & Edit 
                                                    </a>
                                                    <button class="btn btn-outline btn-circle dark btn-xs red" data-toggle="confirmation" id="bs_confirmation_demo_1">
                                                        <i class="fa fa-trash-o"></i> Delete 
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <input type="checkbox" class="checkboxes" value="2" /> 
                                                </td>
                                                <td>
                                                    ธนาคาร
                                                </td>
                                                <td>
                                                    <a href="catProduct.php" class="btn btn-outline btn-circle dark btn-xs green">
                                                        <i class="glyphicon glyphicon-plus"></i> Product 
                                                    </a>
                                                    <a data-toggle="modal" href="#basic" href="javascript:;" class="btn btn-outline btn-circle btn-xs blue">
                                                        <i class="fa fa-edit"></i> View & Edit 
                                                    </a>
                                                    <button class="btn btn-outline btn-circle dark btn-xs red" data-toggle="confirmation" id="bs_confirmation_demo_1">
                                                        <i class="fa fa-trash-o"></i> Delete 
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">View & Edit</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- BEGIN FORM-->
                                                    <form action="#" id="form_sample_2">
                                                        <div class="form-body">
                                                            <div class="alert alert-danger display-hide">
                                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. 
                                                            </div>
                                                            <div class="alert alert-success display-hide">
                                                                <button class="close" data-close="alert"></button> Your form validation is successful! 
                                                            </div>
                                                            <div class="form-group form-md-line-input">
                                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your text">
                                                                <label for="form_control_1">ประเภทลูกค้า
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <span class="help-block">Enter your text...</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <br><br>
                                                                    <button type="submit" class="btn green"h>Validate</button>
                                                                    <button type="reset" class="btn default">Reset</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- END FORM-->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn green">Save changes</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dribbble font-red"></i>
                                        <span class="caption-subject font-red bold uppercase">เพิ่มประเภทลูกค้า</span>
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
                                            <div class="form-group form-md-line-input">
                                                <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your text">
                                                <label for="form_control_1">ประเภทลูกค้า
                                                    <span class="required">*</span>
                                                </label>
                                                <span class="help-block">Enter your text...</span>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <br><br>
                                                    <button type="submit" class="btn green"h>Validate</button>
                                                    <button type="reset" class="btn default">Reset</button>
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