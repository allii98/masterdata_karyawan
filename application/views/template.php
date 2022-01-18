<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?= $tittle ?> - Masterdata</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace.min.css" class="ace-main-stylesheet"
        id="main-ace-style" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-rtl.min.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.gritter.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->
    <script src="<?php echo base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
    <!-- ace settings handler -->
    <script src="<?php echo base_url() ?>assets/js/ace-extra.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/jquery.gritter.min.js"></script>
    <!-- page specific plugin scripts -->
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.select.min.js"></script>
    <!-- untuk load js nya -->
    <?php if (!empty($js) || $js != '') : echo $this->load->view('js/' . $js . '.php');
    endif; ?>
    <!-- end load js nya -->



    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="<?php echo base_url() ?>assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="index.html" class="navbar-brand">
                    <small>
                        <i class="fa fa-leaf"></i>
                        Ace Admin
                    </small>
                </a>
            </div>

            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">


                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="<?php echo base_url() ?>assets/images/avatars/user.jpg"
                                alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Welcome,</small>
                                <?= $this->session->userdata('user_nama'); ?>
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul
                            class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?= base_url('Login/logout') ?>">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>



    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
        try {
            ace.settings.loadState('main-container')
        } catch (e) {}
        </script>

        <div id="sidebar" class="sidebar responsive ace-save-state">
            <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {}
            </script>



            <ul class="nav nav-list">
                <li class="active">
                    <a href="<?= base_url('Home') ?>">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="<?= base_url('User') ?>">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text"> Data Users </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-desktop"></i>
                        <span class="menu-text">
                            UI &amp; Elements
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-caret-right"></i>

                                Layouts
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="">
                                    <a href="top-menu.html">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Top Menu
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="two-menu-1.html">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Two Menus 1
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="two-menu-2.html">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Two Menus 2
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="mobile-menu-1.html">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Default Mobile Menu
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="mobile-menu-2.html">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Mobile Menu 2
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="mobile-menu-3.html">
                                        <i class="menu-icon fa fa-caret-right"></i>
                                        Mobile Menu 3
                                    </a>

                                    <b class="arrow"></b>
                                </li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="typography.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Typography
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="elements.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Elements
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="buttons.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Buttons &amp; Icons
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="content-slider.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Content Sliders
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="treeview.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Treeview
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="jquery-ui.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                jQuery UI
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="nestable-list.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Nestable Lists
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-caret-right"></i>

                                Three Level Menu
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="">
                                    <a href="#">
                                        <i class="menu-icon fa fa-leaf green"></i>
                                        Item #1
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="#" class="dropdown-toggle">
                                        <i class="menu-icon fa fa-pencil orange"></i>

                                        4th level
                                        <b class="arrow fa fa-angle-down"></b>
                                    </a>

                                    <b class="arrow"></b>

                                    <ul class="submenu">
                                        <li class="">
                                            <a href="#">
                                                <i class="menu-icon fa fa-plus purple"></i>
                                                Add Product
                                            </a>

                                            <b class="arrow"></b>
                                        </li>

                                        <li class="">
                                            <a href="#">
                                                <i class="menu-icon fa fa-eye pink"></i>
                                                View Products
                                            </a>

                                            <b class="arrow"></b>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-list"></i>
                        <span class="menu-text"> Tables </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="tables.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Simple &amp; Dynamic
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="jqgrid.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                jqGrid plugin
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <span class="menu-text"> Forms </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="form-elements.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Form Elements
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="form-elements-2.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Form Elements 2
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="form-wizard.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Wizard &amp; Validation
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="wysiwyg.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Wysiwyg &amp; Markdown
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="dropzone.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Dropzone File Upload
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="widgets.html">
                        <i class="menu-icon fa fa-list-alt"></i>
                        <span class="menu-text"> Widgets </span>
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="calendar.html">
                        <i class="menu-icon fa fa-calendar"></i>

                        <span class="menu-text">
                            Calendar

                            <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                                <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                            </span>
                        </span>
                    </a>

                    <b class="arrow"></b>
                </li>



                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-tag"></i>
                        <span class="menu-text"> More Pages </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="profile.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                User Profile
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="inbox.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Inbox
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="pricing.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Pricing Tables
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="invoice.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Invoice
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="timeline.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Timeline
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="search.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Search Results
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="email.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Email Templates
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="login.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Login &amp; Register
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-o"></i>

                        <span class="menu-text">
                            Other Pages

                            <span class="badge badge-primary">5</span>
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="faq.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                FAQ
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="error-404.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Error 404
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="error-500.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Error 500
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="grid.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Grid
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="blank.html">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Blank Page
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.nav-list -->

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
                    data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>
        </div>

        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul><!-- /.breadcrumb -->

                </div>



                <div class="page-content">


                    <div class="page-header">
                        <h1>
                            <?= $tittle ?>
                            <!-- <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                overview &amp; stats
                            </small> -->
                        </h1>

                    </div>

                    <!-- echo content -->
                    <?php echo $contents ?>
                    <!-- end echo content -->


                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="bigger-120">
                        <span class="blue bolder">Ace</span>
                        Application &copy; 2013-2014
                    </span>

                    &nbsp; &nbsp;
                    <span class="action-buttons">
                        <a href="#">
                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->


    <!-- <![endif]-->

    <!--[if IE]>
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write(
        "<script src='<?php echo base_url() ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
		  <script src="<?php echo base_url() ?>assets/js/excanvas.min.js"></script>
		<![endif]-->
    <script src="<?php echo base_url() ?>assets/js/jquery-ui.custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.sparkline.index.min.js"></script>

    <!-- ace scripts -->
    <script src="<?php echo base_url() ?>assets/js/ace-elements.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->

</body>

</html>