<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" type="ico" href="<?php echo base_url()?>assets/images/logo.ico">
  <title>Monitoring Presensi</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');?>">
   <!-- Select2 -->
   <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css');?>">

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <style>
  /* Style the form */
#regForm {
  background-color: #ffffff;
  margin: 0px auto;
  padding: 0px;
  width: 100%;
  min-width: 300px;
}

/* Style the input fields */
/* input {
  padding: 10px;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
} */

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

.cardku {
  background-color: #ffdddd;
}
/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

.batas{
    border-bottom: 1px solid rgba(0,0,0,.125);
    margin-bottom: 10px;
}

@media(max-width: 599px){
  	.btn-cari {
	    padding-top: 0px;
	  }
}
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

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
  
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #dc3545;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
  position: fixed;
  z-index: 100;
  right: 50%;
  left: 45%;
  top: 50%;
  bottom: 0px;
  display: block;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
/* Back to top button */
.back-to-top {
  position: fixed;
  display: none;
  background: #18d26e;
  color: #fff;
  display: inline-block;
  width: 44px;
  height: 44px;
  text-align: center;
  line-height: 1;
  font-size: 16px;
  border-radius: 50%;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
  z-index: 11;
}

.back-to-top i {
  padding-top: 12px;
  color: #fff;
}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }
}
  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?php echo base_url('informasi-covid19');?>" class="navbar-brand">
        <img src="<?php echo base_url('assets/dist/img/logo.png');?>" alt="RSUD TUGUREJO" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>Monitoring Presensi</strong> RSUD Tugurejo</span>
      </a>
    
      <ul class="menu navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <?php echo $this->session->userdata('username')?>
          <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB4Ij48Zz48cGF0aCBkPSJtMjU2IDAtMTYwLjM5OCAyNTYgMTYwLjM5OCAyNTZjMTQxLjM4NSAwIDI1Ni0xMTQuNjE1IDI1Ni0yNTZzLTExNC42MTUtMjU2LTI1Ni0yNTZ6IiBmaWxsPSIjMjhhYmZhIi8+PHBhdGggZD0ibTAgMjU2YzAgMTQxLjM4NSAxMTQuNjE1IDI1NiAyNTYgMjU2di01MTJjLTE0MS4zODUgMC0yNTYgMTE0LjYxNS0yNTYgMjU2eiIgZmlsbD0iIzE0Y2ZmZiIvPjxwYXRoIGQ9Im0yNTYgNjAtNjUuNzg4IDEwNSA2NS43ODggMTA1YzU3Ljk5IDAgMTA1LTQ3LjAxIDEwNS0xMDVzLTQ3LjAxLTEwNS0xMDUtMTA1eiIgZmlsbD0iIzM3M2U5ZiIvPjxwYXRoIGQ9Im0xNTEgMTY1YzAgNTcuOTkgNDcuMDEgMTA1IDEwNSAxMDV2LTIxMGMtNTcuOTkgMC0xMDUgNDcuMDEtMTA1IDEwNXoiIGZpbGw9IiM2MjQxZWEiLz48cGF0aCBkPSJtNDI0LjY0OSAzMzUuNDQzYy0xOS45MzMtMjIuNTI1LTQ4LjYtMzUuNDQzLTc4LjY0OS0zNS40NDNoLTkwbC02MCA3NiA2MCA3NmM3MC4zMjIgMCAxMzUuNjM2LTM4LjAxIDE3MC40NTQtOTkuMTk4bDUuMzA2LTkuMzI1eiIgZmlsbD0iIzM3M2U5ZiIvPjxwYXRoIGQ9Im0xNjYgMzAwYy0zMC4wNDkgMC01OC43MTYgMTIuOTE4LTc4LjY0OSAzNS40NDNsLTcuMTEgOC4wMzUgNS4zMDYgOS4zMjVjMzQuODE3IDYxLjE4NyAxMDAuMTMxIDk5LjE5NyAxNzAuNDUzIDk5LjE5N3YtMTUyeiIgZmlsbD0iIzYyNDFlYSIvPjwvZz48L3N2Zz4K"
          alt="RSUD TUGUREJO" class="brand-image img-circle elevation-3" style="opacity: .8" />
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="position: absolute;">
            <a href="<?php echo site_url('signout')?>" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBoZWlnaHQ9IjEyOHB4IiB2aWV3Qm94PSItNDQgMCA1MTIgNTEyIiB3aWR0aD0iMTI4cHgiPjxwYXRoIGQ9Im0yMTEuODYzMjgxIDUxMmMtMTE2LjgyMDMxMiAwLTIxMS44NjMyODEtOTUuMDM1MTU2LTIxMS44NjMyODEtMjExLjg2MzI4MSAwLTk1LjE1MjM0NCA2NC4wMDc4MTItMTc5LjE3MTg3NSAxNTUuNjY0MDYyLTIwNC4zMjgxMjUgOS4zODY3MTktMi41MzEyNSAxOS4xMDkzNzYgMi45NDkyMTggMjEuNjk5MjE5IDEyLjM2MzI4MSAyLjU3NDIxOSA5LjM5ODQzNy0yLjk0OTIxOSAxOS4xMjEwOTQtMTIuMzU1NDY5IDIxLjY5MTQwNi03Ni4zNTkzNzQgMjAuOTY0ODQ0LTEyOS42OTkyMTggOTAuOTgwNDY5LTEyOS42OTkyMTggMTcwLjI3MzQzOCAwIDk3LjM0Mzc1IDc5LjE5OTIxOCAxNzYuNTU0Njg3IDE3Ni41NTQ2ODcgMTc2LjU1NDY4NyA5Ny4zNTE1NjMgMCAxNzYuNTUwNzgxLTc5LjIxMDkzNyAxNzYuNTUwNzgxLTE3Ni41NTQ2ODcgMC03Ny40Mjk2ODgtNTEuNzU3ODEyLTE0Ni45OTYwOTQtMTI1Ljg2MzI4MS0xNjkuMTcxODc1LTkuMzQzNzUtMi43OTI5NjktMTQuNjQ0NTMxLTEyLjYzNjcxOS0xMS44NTE1NjItMjEuOTgwNDY5IDIuODAwNzgxLTkuMzI4MTI1IDEyLjY2NDA2Mi0xNC42MjEwOTQgMjEuOTcyNjU2LTExLjg0Mzc1IDg4LjkzNzUgMjYuNjE3MTg3IDE1MS4wNTA3ODEgMTEwLjA4MjAzMSAxNTEuMDUwNzgxIDIwMi45OTYwOTQgMCAxMTYuODI4MTI1LTk1LjAzOTA2MiAyMTEuODYzMjgxLTIxMS44NTkzNzUgMjExLjg2MzI4MXptMCAwIiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTIxMS44NjMyODEgMjI5LjUxNTYyNWMtOS43NSAwLTE3LjY1NjI1LTcuODk0NTMxLTE3LjY1NjI1LTE3LjY1MjM0NHYtMTk0LjIwNzAzMWMwLTkuNzYxNzE5IDcuOTA2MjUtMTcuNjU2MjUgMTcuNjU2MjUtMTcuNjU2MjVzMTcuNjUyMzQ0IDcuODk0NTMxIDE3LjY1MjM0NCAxNy42NTYyNXYxOTQuMjA3MDMxYzAgOS43NTc4MTMtNy45MDIzNDQgMTcuNjUyMzQ0LTE3LjY1MjM0NCAxNy42NTIzNDR6bTAgMCIgZmlsbD0iIzAwMDAwMCIvPjwvc3ZnPgo="
                 alt="User Avatar" class="img-size-50 mr-3 img-circle" style="height: 20px;">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Signout
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                 </div>
              </div>
              <!-- Message End -->
            </a>
        </div>
        </li>
      </ul>
      
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark"> Form <small>Deteksi Awal</small></h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<div class="content">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">

		  <!-- /.col-md-12 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header" style="text-align: center;align-items: center;display: grid;font-family: fantasy;">
                <h1 class="card-title m-0" style="text-align: center;font-size: 34px;">Papan Monitoring Presensi</h1>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>Absensi</h3>
                        <p>Bulanan</p>
                      </div>
                      <div class="icon">
                        <i class="far fa-address-card"></i>
                      </div>
                      <a href="#" class="btnbulanan small-box-footer">
                        Detail <i class="fas fa-arrow-circle-right"></i>
                      </a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-6 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>Cek</h3>

                        <p>Kehadiran</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="btncek small-box-footer">
                        Detail <i class="fas fa-arrow-circle-right"></i>
                      </a>
                    </div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- Memunculkan tab absensi bulanan -->
                <div class="absensibulanan">
                  <div class="card card-outline card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Absensi Bulanan</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                        </button>
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <form class="wizard-form" id="formPeg" name="formPeg" >
                    <div class="card-body">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Pilih Pegawai</label>
                          <select class="form-control select2" id="pegawai" name="pegawai" style="width: 100%;">
                            <?php
                            $no_urut=0;
                              foreach ($pegawai as $dt){
                                $no_urut++;
                                echo "<option value='".$dt['NIP2']."'>".$dt['NIP2']." - ".$dt['NAMA']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tahun</label>
                          <select class="form-control select2" id="tahun" name="tahun" style="width: 100%;">
                            <?php 
                              for($thn=2020; $thn<=date("Y"); $thn++){
                                echo "<option value=$thn>$thn</option>";
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Bulan</label>
                          <select class="form-control select2" id="bulan" name="bulan" style="width: 100%;">
                            <?php
                              $current = date('M');
                              for ($i = 1; $i <= 12; $i++)
                              {
                                $month = date("M",mktime(0,0,0,$i,1,date("Y")));
                                $bln = ($i < 10) ? '0'.$i : $i;
                                  echo '<option value="'.$bln.'"';
                                  if ($i == date("n")) echo ' selected="selected"';
                                  echo '>'.$month.'</option>';
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group btn-cari">
                          <button type="submit" id="btncari" class="btn btn-info float-right ">CARI</button>
                        </div>
                      </div>
                    </div>
                    </form>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- ./Memunculkan tab absensi bulanan -->

                <!-- Memunculkan tab cek kehadiran -->
                <div class="cekkehadiran">
                  <div class="card card-outline card-success">
                      <div class="card-header">
                        <h3 class="card-title">Cek Kehadiran</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        The body of the card
                      </div>
                      <!-- /.card-body -->
                  </div>
                </div>
                <!-- ./Memunculkan tab cek kehadiran -->
              </div>
              </div>
            </div>
          </div>
          <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <div class="text-center">
      <strong>Copyright &copy; 2020 <a href="https://rstugurejo.jatengprov.go.id">RSUD Tugurejo Provinsi Jawa Tengah</a>.</strong>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/plugins/select2/js/select2.full.min.js');?>"></script>
<script>
     $(document).ready(function(){        
        $('.absensibulanan').hide(); 
        $('.cekkehadiran').hide();     
        $('.tabelabsensi').hide();   

        $('.btnbulanan').click(function(){
            $('.absensibulanan').show();
            $('.cekkehadiran').hide(); 
            $('.tabelabsensi').hide();
        });
        $('.btncek').click(function(){
            $('.cekkehadiran').show();
            $('.absensibulanan').hide(); 
            $('.tabelabsensi').hide();
        });

        $('.select2').select2({
          theme: 'bootstrap4'
        });

        $('#btncari').on('click',function(){
          var obj = document.forms.namedItem("formPeg")
          $.ajax({
            type: "POST",
            url: "<?php echo base_url('manajemen/Monitoring/get_absen_by_bulannip')?>",
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
              if(response[0]['CODE'] == '404'){
                alert("Data tidak ditemukam");
                var exp = '<?php echo base_url('manajemen/')?>';
                window.location.replace(exp);
              }else if(response[0]['CODE'] == '200'){   
                var orpeg = '<?php echo base_url('orpeg/Dashboard/view_jadwal')?>';
                window.location.replace(orpeg);
              }
            }
          });
          return false;
        });
    });
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
 
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function Form() {
  // This function deals with validation of the form fields
  var x, y, i, a, valid = true;
  x = document.getElementsByClassName("tab");
  z = x[currentTab].getElementsByClassName("-card");
  y = x[currentTab].getElementsByClassName("");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      var idku = y[i].id
      console.log(idku)
      
      $('html, body').animate({scrollTop : 0},600);
      swal('Informasi','Ada form yang belum di isi.','info')
      // and set the current valid status to false
      valid = false;
    } else {
      var idku = y[i].id
     
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function allowContactNumberOnly(a){
  if(!/^[0-9.]+$/.test(a.value)){
    a.value = a.value.substring(0,a.value.length-1000);
  }
}

function allowNumbersOnly(a, event) {
   
    // if(!/^[0-9.]+$/.test(a.value))
    if(!/^\d+$/.test(a.value))
    {
    a.value = a.value.substring(0,a.value.length-1000);
    }
    //ambil data ktp
    var kode = $(this).event;
    // var telp = $('#telp').val();
    // $('#telp_lengkap').html(telp);
    var code = (event.which) ? event.which : event.keyCode;
    
    //if(code == 13){
      
    //} 
  }

  $(function () {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
      } else {
        $('.back-to-top').fadeOut('slow');
      }
    });
    $('.back-to-top').click(function(){
      $('html, body').animate({scrollTop : 0},1500);
      return false;
    });
  });
</script>
</body>
</html>
