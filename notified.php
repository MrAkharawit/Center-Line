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
                                <span> รับแจ้ง</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> รับแจ้ง </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group">
                                <a href="addNotified.php" class="btn green-meadow"> เพิ่มรับแจ้ง
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div><br><br>

                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-comments"></i> รายการรับแจ้ง </div>
                                    <div class="tools">
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr class="success">
                                                    <th class="table-checkbox" width="50">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /> 
                                                    </th>
                                                    <th> หมายเลข </th>
                                                    <th> เลขที่ บก. </th>
                                                    <th> หน่วยงาน (สาขา) </th>
                                                    <th> หมายเหตุ </th>
                                                    <th> สถานะ </th>
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
                                                        <button type="button" class="btn btn-warning btn-sm"> รอยืนยัน </button>
                                                    </td>
                                                    <td>
                                                        <a data-toggle="modal" href="#basic" href="javascript:;" class="btn btn-outline btn-circle btn-xs yellow">
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
                                                    <div class="form-group form-md-line-input">
                                                        <select class="form-control" name="delivery">
                                                            <option value="">กรุณาเลือกตำแห่งงาน</option>
                                                            <option value="1">ธุรการ</option>
                                                            <option value="2">บัญชี</option>
                                                            <option value="3">เอกสาร</option>
                                                        </select>
                                                        <label for="form_control_1">ตำแหน่งงาน
                                                            <span class="required">*</span>
                                                        </label>
                                                        <span class="help-block">Some help goes here...</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control" name="name" id="form_control_1" placeholder="Enter your name">
                                                        <label for="form_control_1">ชื่อผู้ใช้
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
                                                </div><br>
                                                
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal"> ยกเลิก </button>
                                            <button type="button" class="btn green"> แก้ไข </button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
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