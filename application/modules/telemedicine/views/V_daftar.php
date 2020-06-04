<!DOCTYPE html>
<html lang="en">

<head>
    <title>Telmi Tugurejo</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url('assets\assets\images\favicon.ico');?>" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\bower_components\bootstrap\css\bootstrap.min.css');?>">

    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\icon\themify-icons\themify-icons.css');?>">

    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\icon\icofont\css\icofont.css');?>">

    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\icon\feather\css\feather.css');?>">

    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\bower_components\jquery.steps\css\jquery.steps.css');?>">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\css\style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\css\jquery.mCustomScrollbar.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\css\pcoded-horizontal.min.css');?>">

    <!-- Select 2 css -->
    <link rel="stylesheet" href="<?php echo base_url('assets\bower_components\select2\css\select2.min.css');?>">

    <style>
        .overlay {
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
            overflow-y: hidden;
            transition: 0.5s;
            display: none;
        }
</style>
</head>
<!-- Menu horizontal fixed layout -->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">

        <div class="pcoded-container">
            <!-- Menu header start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="<?php echo base_url('assets\assets\images\logo.png');?>" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Menu header end -->
            <div class="pcoded-main-container">
                <nav class="pcoded-navbar">
                    <div class="pcoded-inner-navbar">
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                                    <span class="pcoded-mtext">Navigation</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="index-1.htm">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.dash.default">Default</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dashboard-ecommerce.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Ecommerce</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dashboard-crm.htm">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.dash.crm">CRM</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dashboard-analytics.htm">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Analytics</span>
                                                    <span class="pcoded-badge label label-info ">NEW</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="dashboard-project.html">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.dash.project">Project</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layout"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Page layouts</span>
                                            <span class="pcoded-badge label label-warning">NEW</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">

                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Vertical</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class=" ">
                                                        <a href="menu-static.htm" data-i18n="nav.page_layout.vertical.static-layout">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Static Layout</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-header-fixed.htm" data-i18n="nav.page_layout.vertical.header-fixed">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Header Fixed</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-compact.htm" data-i18n="nav.page_layout.vertical.compact">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Compact</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-sidebar.htm" data-i18n="nav.page_layout.vertical.sidebar-fixed">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Sidebar Fixed</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)" data-i18n="nav.page_layout.horizontal.main">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Horizontal</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class=" ">
                                                        <a href="menu-horizontal-static.htm" target="_blank" data-i18n="nav.page_layout.horizontal.static-layout">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Static Layout</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-fixed.htm" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-layout">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Fixed layout</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-icon.htm" target="_blank" data-i18n="nav.page_layout.horizontal.static-with-icon">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Static With Icon</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="menu-horizontal-icon-fixed.htm" target="_blank" data-i18n="nav.page_layout.horizontal.fixed-with-icon">
                                                            <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                            <span class="pcoded-mtext">Fixed With Icon</span>
                                                            <span class="pcoded-mcaret"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-bottom.htm" data-i18n="nav.page_layout.bottom-menu">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Bottom Menu</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="box-layout.htm" target="_blank" data-i18n="nav.page_layout.box-layout">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">Box Layout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="menu-rtl.htm" target="_blank" data-i18n="nav.page_layout.rtl">
                                                    <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                    <span class="pcoded-mtext">RTL</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="">    <a href="navbar-light.htm">        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Navigation</span>        <span class="pcoded-mcaret"></span>    </a></li>
                                    <li class=" ">
                                        <a href="widget.html" data-i18n="nav.widget.main">
                                            <span class="pcoded-micon"><i class="ti-view-grid"></i></span>
                                            <span class="pcoded-mtext">Widget</span>
                                            <span class="pcoded-badge label label-danger">100+</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                    <span class="pcoded-mtext">UI Element</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                            <span class="pcoded-mtext">Basic Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="alert.htm" data-i18n="nav.basic-components.alert">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Alert</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="breadcrumb.htm" data-i18n="nav.basic-components.breadcrumbs">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Breadcrumbs</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="button.htm" data-i18n="nav.basic-components.button">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Button</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="box-shadow.htm" data-i18n="nav.basic-components.box-shadow">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Box-Shadow</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="accordion.htm" data-i18n="nav.basic-components.collapse–accordion">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Accordion</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="generic-class.htm" data-i18n="nav.basic-components.generic-class">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Generic Class</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="tabs.htm" data-i18n="nav.basic-components.tabs">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tabs</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="color.htm" data-i18n="nav.basic-components.color">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Color</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="label-badge.htm" data-i18n="nav.basic-components.label-badge">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Label Badge</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="progress-bar.htm" data-i18n="nav.basic-components.progress-bar">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Progress Bar</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="preloader.htm" data-i18n="nav.basic-components.pre-loader">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Pre-Loader</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="list.htm" data-i18n="nav.basic-components.list">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">List</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="tooltip.htm" data-i18n="nav.basic-components.tooltip-popover">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tooltip And Popover</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="typography.htm" data-i18n="nav.basic-components.typography">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Typography</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="other.htm" data-i18n="nav.basic-components.other">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Other</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.advance-components.main">
                                            <span class="pcoded-micon"><i class="ti-crown"></i></span>
                                            <span class="pcoded-mtext">Advance Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="draggable.htm" data-i18n="nav.advance-components.draggable">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Draggable</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="bs-grid.htm" data-i18n="nav.advance-components.grid-stack">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Grid Stack</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="light-box.htm" data-i18n="nav.advance-components.light-box">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Light Box</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="modal.htm" data-i18n="nav.advance-components.modal">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Modal</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                            <li class=" ">
                                                <a href="notification.htm" data-i18n="nav.advance-components.notifications">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Notifications</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="notify.htm" data-i18n="nav.advance-components.pnotify">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">PNOTIFY</span>
                                                    <span class="pcoded-badge label label-info">NEW</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="rating.htm" data-i18n="nav.advance-components.rating">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Rating</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="range-slider.htm" data-i18n="nav.advance-components.range-slider">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Range Slider</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="slider.htm" data-i18n="nav.advance-components.slider">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Slider</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="syntax-highlighter.htm" data-i18n="nav.advance-components.syntax-highlighter">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Syntax Highlighter</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="tour.htm" data-i18n="nav.advance-components.tour">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tour</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="treeview.htm" data-i18n="nav.advance-components.tree-view">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Tree View</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="nestable.htm" data-i18n="nav.advance-components.nestable">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Nestable</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="toolbar.htm" data-i18n="nav.advance-components.toolbar">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Toolbar</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="x-editable.htm" data-i18n="nav.advance-components.x-editable">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">X-Editable</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.extra-components.main">
                                            <span class="pcoded-micon"><i class="ti-gift"></i></span>
                                            <span class="pcoded-mtext">Extra Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="session-timeout.htm" data-i18n="nav.extra-components.session-timeout">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Session Timeout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="session-idle-timeout.htm" data-i18n="nav.extra-components.session-idle-timeout">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Session Idle Timeout</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="offline.htm" data-i18n="nav.extra-components.offline">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Offline</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="animation.htm" data-i18n="nav.animations.main">
                                            <span class="pcoded-micon"><i class="ti-reload rotate-refresh"></i></span>
                                            <span class="pcoded-mtext">Animations</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="sticky.htm" data-i18n="nav.sticky-notes.main">
                                            <span class="pcoded-micon"><i class="ti-layers-alt"></i></span>
                                            <span class="pcoded-mtext">Sticky Notes</span>
                                            <span class="pcoded-badge label label-danger">HOT</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.icons.main">
                                            <span class="pcoded-micon"><i class="ti-star"></i></span>
                                            <span class="pcoded-mtext">Icons</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="icon-font-awesome.htm" data-i18n="nav.icons.font-awesome">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Font Awesome</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-themify.htm" data-i18n="nav.icons.themify">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Themify</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-simple-line.htm" data-i18n="nav.icons.simple-line-icon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Simple Line Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-ion.htm" data-i18n="nav.icons.ion-icon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Ion Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-material-design.htm" data-i18n="nav.icons.material-design">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Material Design</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-icofonts.htm" data-i18n="nav.icons.ico-fonts">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Ico Fonts</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-weather.htm" data-i18n="nav.icons.weather-icon">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Weather Icon</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-typicons.htm" data-i18n="nav.icons.typicons">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Typicons</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="icon-flags.htm" data-i18n="nav.icons.flags">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Flags</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                    <span class="pcoded-mtext">Forms</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" data-i18n="nav.form-components.main">
                                            <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                            <span class="pcoded-mtext">Form Components</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="form-elements-component.htm" data-i18n="nav.form-components.form-components">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Form Components</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form-elements-add-on.htm" data-i18n="nav.form-components.form-elements-add-on">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Form-Elements-Add-On</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form-elements-advance.htm" data-i18n="nav.form-components.form-elements-advance">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Form-Elements-Advance</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="form-validation.htm" data-i18n="nav.form-components.form-validation">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext">Form Validation</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Sidebar chat start -->
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header m-t-50">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Pendaftaran Telemedicine</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index-1.htm">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Pendaftaran</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Default card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Pendaftaran Telemedicine</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div id="wizard">
                                                                    <section>
                                                                        <form class="wizard-form" id="example-advanced-form" action="#">
                                                                            <h3> Isi Data Pribadi </h3>
                                                                            <fieldset>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="userName-2" class="block">Poliklinik</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input id="poli" name="poli" type="text" readonly class="form-control">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="email-2" class="block">Dokter</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input id="dokter" name="dokter" type="text" readonly class="form-control">
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">No Pasien *</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="nopas" name="nopas" type="text" class="required form-control" autofocus>
																						</div>
																						<div class="col-sm-10 col-lg-5">
                                                                                            <div class="form-group btn-cari">
                                                                                                <a href="javaScript:void(0)" class="btn btn-primary" id="btncari">Cari</a>
                                                                                            </div>
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Nama</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="nama" name="nama" type="text" readonly class="form-control">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Tgl Lahir</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="tgllhr" name="tgllhr" type="text" readonly class="form-control">
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Alamat</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="alamat" name="alamat" type="text" readonly class="form-control">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">No KTP</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="ktp" name="ktp" type="text" readonly class="form-control">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">No HP</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="hp" name="hp" type="text" readonly class="form-control">
																						</div>
																					</div>
																				</div>
                                                                            </fieldset>
                                                                            <h3> Metode Layanan </h3>
                                                                            <fieldset>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="userName-2" class="block">Poliklinik</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input id="poli" name="poli" type="text" readonly class="form-control">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="email-2" class="block">Dokter</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input id="dokter" name="dokter" type="text" readonly class="form-control">
																						</div>
																					</div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
																						<div class="border-checkbox-group border-checkbox-group-primary">
																							<input class="border-checkbox" type="checkbox" id="checkbox1">
																							<label class="border-checkbox-label" for="checkbox1">Konsul Dokter   ---   Rp 150.000,-</label>
																						</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
																				<div class="col-md-4 col-lg-2">
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
																					<div class="border-checkbox-group border-checkbox-group-primary">
																							<input class="border-checkbox" type="checkbox" id="checkbox2">
																							<label class="border-checkbox-label" for="checkbox2">Home Visit (Perawat)  ---   Rp 100.000,-</label>
																						</div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3> Assesment Mandiri </h3>
                                                                            <fieldset>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="userName-2" class="block">Poliklinik</label>
																						</div>
																						<div class="col-md-8 col-lg-2">
																							<input id="poli" name="poli" type="text" readonly class="form-control">
																						</div>
																						<div class="col-md-4 col-lg-1">
																							<label for="email-2" class="block">Dokter</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input id="dokter" name="dokter" type="text" readonly class="form-control">
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Tekanan Darah</label>
																						</div>
																						<div class="col-md-2 col-lg-1">
																							<input id="systol" name="systol" type="text" class="form-control" autofocus>
																						</div>
                                                                                        <div class="col-md-2 col-lg-1">
																							/ 
																						</div>
                                                                                        <div class="col-md-2 col-lg-1">
																							<input id="diastol" name="diastol" type="text" class="form-control">
																						</div>
                                                                                        <div class="col-md-8 col-lg-1">
																							mmHg
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Suhu Badan</label>
																						</div>
																						<div class="col-md-2 col-lg-1">
																							<input id="suhu" name="suhu" type="text"  class="form-control">
																						</div>
                                                                                        <div class="col-md-2 col-lg-1">
																							Celcius
																						</div>
                                                                                        <div class="col-md-2 col-lg-1">
																							<label for="confirm-2" class="block">Tinggi Badan</label>
																						</div>
																						<div class="col-md-2 col-lg-1">
																							<input id="tinggi" name="tinggi" type="text"  class="form-control">
																						</div>
                                                                                        <div class="col-md-2 col-lg-1">
																							cm
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Berat Badan</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="nopas" name="nopas" type="text" class="form-control" >
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Keluhan</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="nama" name="nama" type="text"  class="form-control">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Alergi</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
                                                                                            <input type="button" class="btnalergi" value="Tambah Alergi">
																						</div>
																					</div>
																				</div>
                                                                                <div class="dataalergi">
                                                                                <div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="userName-2" class="block">Jenis Alergi</label>
																						</div>
																						<div class="col-md-8 col-lg-2">
                                                                                            <select name="select" class="form-control form-control-primary">
                                                                                                <option value="">--Pilih Jenis Alergi--</option>
                                                                                                <option value="Obat">Obat</option>
                                                                                                <option value="Makanan">Makanan</option>
                                                                                            </select>
																						</div>
																						<div class="col-md-4 col-lg-1">
																							<label for="email-2" class="block">Alergi</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input id="dokter" name="dokter" type="text"  class="form-control">
																						</div>
																					</div>
                                                                                    <div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="email-2" class="block">Gejala Alergi</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="dokter" name="dokter" type="text"  class="form-control">
																						</div>
                                                                                        <div class="col-md-8 col-lg-1">
                                                                                            <button class="btn btn-info"><i class="icofont icofont-search"></i>Simpan Alergi</button>
																						</div>
																					</div>
																				</div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3> Metode Pembayaran </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <button><img src="<?php echo base_url('assets\images\bank_transfer.png');?>" width="90px"></button>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <button><img src="<?php echo base_url('assets\images\gopay.png');?>" width="110px"></button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <button><img src="<?php echo base_url('assets\images\linkaja.png');?>" width="90px"></button>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <button><img src="<?php echo base_url('assets\images\ovo.png');?>" width="110px"></button>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </form>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Default card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\jquery\js\jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\jquery-ui\js\jquery-ui.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\popper.js\js\popper.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\bootstrap\js\bootstrap.min.js');?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\jquery-slimscroll\js\jquery.slimscroll.js');?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\modernizr\js\modernizr.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\modernizr\js\css-scrollbars.js');?>"></script>
	
    <!--Forms - Wizard js-->
    <script src="<?php echo base_url('assets\bower_components\jquery.cookie\js\jquery.cookie.js');?>"></script>
    <script src="<?php echo base_url('assets\bower_components\jquery.steps\js\jquery.steps.js');?>"></script>
    <script src="<?php echo base_url('assets\bower_components\jquery-validation\js\jquery.validate.js');?>"></script>
    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\assets\pages\form-validation\validate.js');?>"></script>
    <!-- Custom js -->
	<script src="<?php echo base_url('assets\assets\pages\forms-wizard-validation\form-wizard.js');?>"></script>
    <script src="<?php echo base_url('assets\assets\js\pcoded.min.js');?>"></script>
    <script src="<?php echo base_url('assets\assets\js\menu\menu-hori-fixed.js');?>"></script>
    <script src="<?php echo base_url('assets\assets\js\jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\assets\js\script.js');?>"></script>
	
    <!-- Select 2 js -->
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\select2\js\select2.full.min.js');?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script>
     $(document).ready(function(){        
        $('.dataalergi').hide();        

        $('.btnalergi').click(function(){
            $('.dataalergi').show();
        });
    });
</script>
<script>
     $('#btncari').on('click',function(){
        var nopas = $('#nopas').val();
        var obj = document.forms.namedItem("example-advanced-form")
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('telemedicine/get_pasien')?>",
            processData:false,
            contentType:false,
            cache:false,
            async:true,
            crossOrigin : true,
            data: new FormData(obj),
            dataType: "json",
            beforeSend: function() {
                $('.overlay').css('display', 'block');
            },
            success: function (response) {
                $('.overlay').css('display', 'none');
                if(nopas == ""){
                    $('.reset').val('')
                } else if(response.metaData[0].code=='404' || response.metaData[0].code=='400') {
                    $('.reset').val('')
                } else {
                    $('#norm').val(response.data[0].mr_no)
                    $('#nama').val(response.data[0].nama_pasien)
                    $('#tgllhr').val(response.data[0].birth_date)
                    $('#alamat').val(response.data[0].alamat)
                    $('#ktp').val(response.data[0].kartu_identitas_nomor)
                    $('#hp').val(response.data[0].kontak_nomor)
                }
            }
        })
     });
</script>
</body>

</html>
