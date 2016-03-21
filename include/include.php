<?php
function fn_header() {
?>
	<head>
        <meta charset="utf-8" />
        <title>Metronic | Blank Page Layout</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
<?php
}

function fn_begin_theme() {
?>
	<!-- BEGIN THEME PANEL -->
    <div class="theme-panel hidden-xs hidden-sm">
        <div class="toggler"> </div>
        <div class="toggler-close"> </div>
        <div class="theme-options">
            <div class="theme-option theme-colors clearfix">
                <span> THEME COLOR </span>
                <ul>
                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                </ul>
            </div>
            <div class="theme-option">
                <span> Theme Style </span>
                <select class="layout-style-option form-control input-sm">
                    <option value="square" selected="selected">Square corners</option>
                    <option value="rounded">Rounded corners</option>
                </select>
            </div>
            <div class="theme-option">
                <span> Layout </span>
                <select class="layout-option form-control input-sm">
                    <option value="fluid" selected="selected">Fluid</option>
                    <option value="boxed">Boxed</option>
                </select>
            </div>
            <div class="theme-option">
                <span> Header </span>
                <select class="page-header-option form-control input-sm">
                    <option value="fixed" selected="selected">Fixed</option>
                    <option value="default">Default</option>
                </select>
            </div>
            <div class="theme-option">
                <span> Top Menu Dropdown</span>
                <select class="page-header-top-dropdown-style-option form-control input-sm">
                    <option value="light" selected="selected">Light</option>
                    <option value="dark">Dark</option>
                </select>
            </div>
            <div class="theme-option">
                <span> Sidebar Mode</span>
                <select class="sidebar-option form-control input-sm">
                    <option value="fixed">Fixed</option>
                    <option value="default" selected="selected">Default</option>
                </select>
            </div>
            <div class="theme-option">
                <span> Sidebar Menu </span>
                <select class="sidebar-menu-option form-control input-sm">
                    <option value="accordion" selected="selected">Accordion</option>
                    <option value="hover">Hover</option>
                </select>
            </div>
            <div class="theme-option">
                <span> Sidebar Style </span>
                <select class="sidebar-style-option form-control input-sm">
                    <option value="default" selected="selected">Default</option>
                    <option value="light">Light</option>
                </select>
            </div>
            <div class="theme-option">
                <span> Sidebar Position </span>
                <select class="sidebar-pos-option form-control input-sm">
                    <option value="left" selected="selected">Left</option>
                    <option value="right">Right</option>
                </select>
            </div>
            <div class="theme-option">
                <span> Footer </span>
                <select class="page-footer-option form-control input-sm">
                    <option value="fixed">Fixed</option>
                    <option value="default" selected="selected">Default</option>
                </select>
            </div>
        </div>
    </div>
    <!-- END THEME PANEL -->
<?php
}

function fn_top_nav() {
?>
	<!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="icon-bell"></i>
                    <span class="badge badge-default"> 7 </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="external">
                        <h3>
                            <span class="bold">12 pending</span> notifications</h3>
                        <a href="page_user_profile_1.html">view all</a>
                    </li>
                    <li>
                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                            <li>
                                <a href="javascript:;">
                                    <span class="time">just now</span>
                                    <span class="details">
                                        <span class="label label-sm label-icon label-success">
                                            <i class="fa fa-plus"></i>
                                        </span> New user registered. </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <span class="time">3 mins</span>
                                    <span class="details">
                                        <span class="label label-sm label-icon label-danger">
                                            <i class="fa fa-bolt"></i>
                                        </span> Server #12 overloaded. </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
            <li class="dropdown dropdown-user">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" class="img-circle" src="assets/layouts/layout/img/avatar3_small.jpg" />
                    <span class="username username-hide-on-mobile"> Nick </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-default">
                    <li>
                        <a href="page_user_profile_1.html">
                            <i class="icon-user"></i> My Profile </a>
                    </li>
                    <li>
                        <a href="app_calendar.html">
                            <i class="icon-calendar"></i> My Calendar </a>
                    </li>
                    <li>
                        <a href="app_inbox.html">
                            <i class="icon-envelope-open"></i> My Inbox
                            <span class="badge badge-danger"> 3 </span>
                        </a>
                    </li>
                    <li>
                        <a href="app_todo.html">
                            <i class="icon-rocket"></i> My Tasks
                            <span class="badge badge-success"> 7 </span>
                        </a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="page_user_lock_1.html">
                            <i class="icon-lock"></i> Lock Screen </a>
                    </li>
                    <li>
                        <a href="page_user_login_1.html">
                            <i class="icon-key"></i> Log Out </a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
<?php
}

function fn_sidebar() {
?>
	<!-- BEGIN SIDEBAR -->
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
	    <!-- BEGIN SIDEBAR MENU -->
	    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
	    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
	    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
	    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
	    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
	        <li class="sidebar-toggler-wrapper hide">
	            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
	            <div class="sidebar-toggler"> </div>
	            <!-- END SIDEBAR TOGGLER BUTTON -->
	        </li>
	        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
	        <li class="sidebar-search-wrapper">
	            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
	            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
	            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
	            <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
	                <a href="javascript:;" class="remove">
	                    <i class="icon-close"></i>
	                </a>
	                <div class="input-group">
	                    <input type="text" class="form-control" placeholder="Search...">
	                    <span class="input-group-btn">
	                        <a href="javascript:;" class="btn submit">
	                            <i class="icon-magnifier"></i>
	                        </a>
	                    </span>
	                </div>
	            </form>
	            <!-- END RESPONSIVE QUICK SEARCH FORM -->
	        </li>
	        <li class="nav-item start ">
	            <a href="javascript:;" class="nav-link nav-toggle">
	                <i class="icon-home"></i>
	                <span class="title"> หน้าหลัก</span>
	                <span class="arrow"></span>
	            </a>
	            <ul class="sub-menu">
	                <li class="nav-item start ">
	                    <a href="main.php" class="nav-link ">
	                        <i class="icon-bar-chart"></i>
	                        <span class="title"> หน้าหลัก</span>
	                    </a>
	                </li>
	            </ul>
	        </li>
	        <li class="heading">
	            <h3 class="uppercase">Pages</h3>
	        </li>
	        <li class="nav-item  ">
	            <a href="javascript:;" class="nav-link nav-toggle">
	                <i class="icon-basket"></i>
	                <span class="title"> จัดการลูกค้า</span>
	                <span class="arrow"></span>
	            </a>
	            <ul class="sub-menu">
                    <li class="nav-item  ">
    	                <a href="cusType.php" class="nav-link">
                            <i class="icon-basket"></i>
                            <span class="title"> ประเภทลูกค้า</span>
                        </a>
                    </li>
	                <li class="nav-item  ">
	                    <a href="customer.php" class="nav-link ">
	                        <i class="icon-basket"></i>
	                        <span class="title"> จัดการลูกค้า</span>
	                    </a>
	                </li>
	            </ul>
	        </li>
	        <li class="nav-item  ">
	            <a href="javascript:;" class="nav-link nav-toggle">
	                <i class="icon-docs"></i>
	                <span class="title">จัดการรับแจ้ง</span>
	                <span class="arrow"></span>
	            </a>
	            <ul class="sub-menu">
	                <li class="nav-item  ">
	                    <a href="notified.php" class="nav-link ">
	                        <i class="icon-clock"></i>
	                        <span class="title"> รับแจ้ง </span>
	                    </a>
	                </li>
	            </ul>
	        </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title"> พนักงาน</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="employee.php" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">จัดการพนักงาน</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="technician.php" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">จัดการช่าง</span>
                        </a>
                    </li>
                </ul>
            </li>

	        <li class="nav-item  ">
	            <a href="javascript:;" class="nav-link nav-toggle">
	                <i class="icon-user"></i>
	                <span class="title">อื่น ๆ</span>
	                <span class="arrow"></span>
	            </a>
	            <ul class="sub-menu">
	                <li class="nav-item  ">
	                    <a href="unit.php" class="nav-link ">
	                        <i class="icon-user"></i>
	                        <span class="title">จัดการหน่วยนับ</span>
	                    </a>
	                </li>
                    <li class="nav-item  ">
                        <a href="position.php" class="nav-link ">
                            <i class="icon-user"></i>
                            <span class="title">จัดการตำแหน่งาน</span>
                        </a>
                    </li>
	            </ul>
	        </li>

	    </ul>
	    <!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
<?php
}

function fn_footer() {
?>
	 <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2014 &copy; Metronic by keenthemes.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
		<script src="assets/global/plugins/respond.min.js"></script>
		<script src="assets/global/plugins/excanvas.min.js"></script> 
		<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/jstree/dist/jstree.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/ui-blockui.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/table-datatables-editable.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/form-validation-md.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

        <script src="assets/pages/scripts/ui-tree.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/ui-confirmations.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
<?php
}
?>