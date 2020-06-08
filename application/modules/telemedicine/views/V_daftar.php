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

        @media screen and (max-width: 600px) {
        .col-md-2, .col-md-4, .col-md-8, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
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
                        <a href="<?php echo site_url()?>">
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
                    </div>
                </div>
            </nav>
            <!-- Menu header end -->
            <div class="pcoded-main-container">
                <!-- top navigation -->
                <?php $this->load->view('Top_nav') ?>
                <!-- end of top navigation -->
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
                                                                        <form class="wizard-form" id="example-advanced-form" name="example-advanced-form" > 
                                                                            <h3> Isi Data Pribadi </h3>
                                                                            <fieldset style="overflow-x:auto;">
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="userName-2" class="block">Poliklinik</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input id="poli" name="poli" type="text" value="<?php echo $namapoli ?>" readonly class="form-control">
                                                                                            <input id="kode_poli" name="kode_poli" type="hidden" value="<?php echo $kodepoli ?>" readonly class="form-control">
                                                                                        </div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="email-2" class="block">Dokter</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input id="dokter" name="dokter" type="text" value="<?php echo $namadokter ?>" readonly class="form-control">
                                                                                            <input id="kode_dokter" name="kode_dokter" type="hidden" value="<?php echo $kodedokter ?>" readonly class="form-control">
                                                                                        </div>
																					</div>
																				</div>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row" >
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">No Pasien *</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="nopas" name="nopas" type="text" class="required form-control" autofocus placeholder="Nomer Pasien">
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
																							<input id="nama" name="nama" type="text" readonly class="form-control" placeholder="Nama Lengkap">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Tgl Lahir</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="tgllhr" name="tgllhr" type="text" readonly class="form-control" placeholder="Tanggal Lahir">
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Alamat</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="alamat" name="alamat" type="text" readonly class="form-control" placeholder="Alamat">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">No KTP</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="ktp" name="ktp" type="text" readonly class="form-control" placeholder="No. KTP">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">No HP</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="hp" name="hp" type="text" readonly class="form-control" placeholder="Nomor Hp">
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
																							<input type="text" value="<?php echo $namapoli ?>" readonly class="form-control">
                                                                                            
                                                                                        </div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="email-2" class="block">Dokter</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input type="text" value="<?php echo $namadokter ?>" readonly class="form-control">
                                                                                            
                                                                                        </div>
																					</div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
																						<!-- <div class="border-checkbox-group border-checkbox-group-primary">
																							<input class="border-checkbox" type="checkbox" id="checkbox1">
																							<label class="border-checkbox-label" for="checkbox1">Konsul Dokter   ---   Rp 150.000,-</label>
                                                                                        </div> -->
                                                                                        <div class="checkbox-fade fade-in-primary">
                                                                                            <label>
                                                                                                <input type="checkbox" value="" style="display: none;">
                                                                                                <span class="cr">
                                                                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                                                </span>
                                                                                                <span>Konsul Dokter   ---   Rp 150.000,-</span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                                <div class="form-group row">
																				<div class="col-md-4 col-lg-2">
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
																					<!-- <div class="border-checkbox-group border-checkbox-group-primary">
																							<input class="border-checkbox" type="checkbox" id="checkbox2">
																							<label class="border-checkbox-label" for="checkbox2">Home Visit (Perawat)  ---   Rp 100.000,-</label>
																						</div>
                                                                                    </div> -->
                                                                                    <div class="checkbox-fade fade-in-primary">
                                                                                        <label>
                                                                                            <input type="checkbox" value="" style="display: none;">
                                                                                            <span class="cr">
                                                                                                <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                                            </span>
                                                                                            <span>Home Visit (Perawat)  ---   Rp 100.000,-</span>
                                                                                        </label>
                                                                                    </div>
                                                                            </fieldset>
                                                                            <h3> Assesment Mandiri </h3>
                                                                            <fieldset style="overflow-x:auto;">
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="userName-2" class="block">Poliklinik</label>
																						</div>
																						<div class="col-md-8 col-lg-2">
																							<input type="text" value="<?php echo $namapoli ?>" readonly class="form-control">
																						</div>
																						<div class="col-md-4 col-lg-1">
																							<label for="email-2" class="block">Dokter</label>
																						</div>
																						<div class="col-md-8 col-lg-6">
																							<input type="text" value="<?php echo $namadokter ?>" readonly class="form-control">
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
                                                                                        <div><h2>/</h2></div>                                                                                      
                                                                                        <div class="col-md-2 col-lg-1">
																							<input id="diastol" name="diastol" type="text" class="form-control">
																						</div>
                                                                                        <div>
																							mmHg
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Suhu Badan</label>
																						</div>
																						<div class="col-md-2 col-lg-1">
																							<input id="suhu" name="suhu" type="text"  class="form-control" placeholder="&#8451;">
																						</div>
                                                                                        
                                                                                        <div class="col-md-2 col-lg-1">
																							<label for="confirm-2" class="block">Tinggi Badan</label>
																						</div>
																						<div class="col-md-2 col-lg-1">
																							<input id="tinggi" name="tinggi" type="text"  class="form-control" placeholder="cm">
																						</div>
                                                                                     
																					</div>
																				</div>
																				<div class="col-sm-12 col-lg-12">
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Berat Badan</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="berat" name="berat" type="text" class="form-control" placeholder="Berat badan (Kg)">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Keluhan</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="keluhan" name="keluhan" type="text"  class="form-control" placeholder="Keluhan">
																						</div>
																					</div>
																					<div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="confirm-2" class="block">Alergi</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
                                                                                            <input type="button" class="btnalergi btn btn-primary" value="Tambah Alergi">
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
																							<input id="alergi" name="alergi" type="text"  class="form-control" placeholder="Alergi">
																						</div>
																					</div>
                                                                                    <div class="form-group row">
																						<div class="col-md-4 col-lg-2">
																							<label for="email-2" class="block">Gejala Alergi</label>
																						</div>
																						<div class="col-md-8 col-lg-5">
																							<input id="gejala" name="gejala" type="text"  class="form-control" placeholder="Gejala alergi">
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
    $(document).ready(function(){
        $('#btncari').on('click',function(){
            //var nopas = $('#nopas').val(); //tidak dipakai karena sudah menggunakan FormData(obj) --> mengambil semua inputan dari form tersebut
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
                    if(response.metaData.code=='404' || response.metaData.code=='400') {
                        alert('Nomor Pasien tidak ditemukan')
                        $('.reset').val('')
                    } else if (response.metaData.code=='200'){
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
    });
</script>
</body>

</html>
