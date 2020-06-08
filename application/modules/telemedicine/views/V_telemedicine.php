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
    <link rel="icon" href="<?php echo base_url('assets\images\logo.ico')?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\bower_components\bootstrap\css\bootstrap.min.css')?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\icon\themify-icons\themify-icons.css')?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\icon\icofont\css\icofont.css')?>">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\icon\feather\css\feather.css')?>">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\pages\prism\prism.css')?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\css\style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\css\jquery.mCustomScrollbar.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\assets\css\pcoded-horizontal.min.css')?>">
     <!-- Data Table Css -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')?>">
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
            <nav class="navbar header-navbar pcoded-header" >
                <div class="navbar-wrapper">

                    <div class="navbar-logo" >
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="<?php echo base_url ('assets\images\rsud.png')?>" alt="Theme-Logo">
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
                        <ul class="nav-right">
                            <li class="header-notification" style="display:none;">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?php echo base_url ('assets\assets\images\avatar-4.jpg')?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?php echo base_url ('assets\assets\images\avatar-3.jpg')?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?php echo base_url ('assets\assets\images\avatar-4.jpg')?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification" style="display:none;">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
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
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                <!-- Sidebar chat start -->
                
                <!-- Sidebar inner chat start-->
                
                <!-- Sidebar inner chat end-->
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
                                                        <h4>Telemedicine</h4>
                                                        <span>RSUD Tugurejo Provinsi Jawa Tengah</span>
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
                                                        <li class="breadcrumb-item"><a href="#!">Telemedicine</a>
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
                                                <div class="card loadpage" style="display: block;">
                                                    <div class="poli">
                                                        <div class="card-header">
                                                            <h5>Daftar Poli Telemedicine</h5>
                                                            <!-- <span>use class <code>table-primary, table-*</code> inside thead tr element</span> -->
                                                        </div>
                                                        <div class="card-block table-border-style">
                                                            <div class="table-responsive">
                                                                <table class="table table-styling table-hover" id="tbpoli">
                                                                    <thead>
                                                                        <tr class="table-primary">
                                                                            <th>#</th>
                                                                            <th>Kode</th>
                                                                            <th>Poli</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>9002</td>
                                                                            <td>Paru</td>
                                                                            <td><button class="btn btn-sm btn-default" id="btn-paru"><i class="icofont icofont-plus-circle"></i></button></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>9003</td>
                                                                            <td>Mata</td>
                                                                            <td><button class="btn btn-sm btn-default"><i class="icofont icofont-plus-circle"></i></button></td>
                                                                        </tr>
                                                                    
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>                                                 
                                                </div>
                                                
                                                <div class="card poli-detail" style="display:none;">
                                                    <div class="konten-paru">
                                                        <div class="card-header">
                                                            <div class="icon-btn">
                                                                <button class="btn btn-inverse btn-outline-inverse btn-icon" id="btn-back"><i class="icofont icofont-arrow-left"></i>
                                                                </button> <h5>Daftar Dokter yang melakukan Telemedicine</h5> 
                                                            </div>
                                                           
                                                            <!-- <span>use class <code>table-primary, table-*</code> inside thead tr element</span> -->
                                                        </div>
                                                        <div class="card-block table-border-style">
                                                            <div class="table-responsive">
                                                                <table class="table table-styling" id="tbpolidetail">
                                                                    <thead>
                                                                        <tr class="table-primary">
                                                                           
                                                                            <th>Kode</th>
                                                                            <th>Poli</th>
                                                                            <th>Dokter</th>
                                                                            <th>Action</th>
                                                                           
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <!-- <tr>
                                                                           
                                                                           <td rowspan="2"><h3>9002</h3></td>
                                                                           <td rowspan="2"><h3>Paru</h3></td>
                                                                           <td>Dr. Budi</td>
                                                                           <td><button class="btn btn-sm btn-primary" id="">Daftar</button></td>
                                                                    </tr> -->
                                                                    </tbody>
                                                                </table>
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
                            <div id="styleSelector" style="display:none;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer text-center">
                    <div class="">RSUD TUGUREJO PROVINSI JAWA TENGAH</div>
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
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\jquery\js\jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\jquery-ui\js\jquery-ui.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\popper.js\js\popper.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\bootstrap\js\bootstrap.min.js')?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\jquery-slimscroll\js\jquery.slimscroll.js')?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\modernizr\js\modernizr.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\bower_components\modernizr\js\css-scrollbars.js')?>"></script>

    <!-- Syntax highlighter prism js -->
    <script type="text/javascript" src="<?php echo base_url('assets\assets\pages\prism\custom-prism.js')?>"></script>
    <!-- Custom js -->
    <script src="<?php echo base_url('assets\assets\js\pcoded.min.js')?>"></script>
    <script src="<?php echo base_url('assets\assets\js\menu\menu-hori-fixed.js')?>"></script>
    <script src="<?php echo base_url('assets\assets\js\jquery.mCustomScrollbar.concat.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets\assets\js\script.js')?>"></script>
    <!-- data-table js -->
    <script src="<?php echo base_url('assets\bower_components\datatables.net\js\jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js')?>"></script>
    <script src="<?php echo base_url('assets\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo base_url('assets\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')?>"></script>

<script>

  $(document).ready(function () {
      $('#tbpoli').on('click','#btn-paru', function(){
        //   var paru = $('.konten-paru')
        //   $('.loadpage').html(paru)
      
        var kodebagian = $(this).data('kodebagian');
        
        var tabel_polidetail = $('#tbpolidetail').DataTable({
            
            "destroy": true,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": false,
            "bInfo": false,
            "bDeferRender": false,
            "fixedColumns": true,
            "sAjaxSource": "<?php echo base_url()?>telemedicine/get_poli_detail/"+kodebagian,
            "aoColumns": [
                {
                    "mData": "kodebagian"
                },
                {
                    "mData": "namabagian"
                },
                {
                    "mData": "namadokter"
                },
                {
                    "mData": "action",					
                }
            ]
         })
        $('.poli-detail').css('display','block')
        $('.loadpage').css('display', 'none');
      })

      $('#btn-back').on('click', function(){
        $('.poli-detail').css('display','none')
        $('.loadpage').css('display', 'block')
      })

      var tabel_poli = $('#tbpoli').DataTable({
            "destroy": true,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": false,
            "bInfo": false,
            "bDeferRender": false,
            "fixedColumns": true,
            "sAjaxSource": "<?php echo base_url()?>telemedicine/get_poli",
            "aoColumns": [
                {
                    "mData": "nomor"
                },
                {
                    "mData": "kodebagian"
                },
                {
                    "mData": "namabagian"
                },
                {
                    "mData": "action",					
                }
            ]
      })
  });
  
</script>
</body>

</html>
