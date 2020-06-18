<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="ico" href="<?php echo base_url()?>assets/images/logo.ico">
  <title>Monitoring Presensi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
  </style>
</head>
<body class="hold-transition login-page">
<div class="overlay">
  <div class="overlay-content">
    <div class="loader"></div>
  </div>
</div>
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url('informasi-covid19')?>"><img src="<?php echo base_url()?>assets/images/logo.png" alt="" style="width: 20%;height: auto;">
    <b>RSUD</b> Tugurejo</a>
  </div>
  <!-- /.login-logo -->
  <div class="col-md-12 text-center"><?php echo $this->session->flashdata('errorMessage');?></div>     
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form id="formlogin">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="Username" name="username" id="username">
          <input type="hidden" class="form-control" placeholder="Username" name="private_token" id="private_token" value="<?php echo $token; ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" required>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          </form>
          <!-- /.col -->
          <div class="col-4">
            <button id="btnlogin" type="button" class="btn btn-primary">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
  $(document).ready(function () {
    //if($("#remember").prop('checked'))
        //console.log('cek')  // checked
    //else
        //console.log('rak')  // uncheck
    $('#btnlogin').click(function(){
      var username = $('#username').val();
      var password = $('#password').val();
      var private_token = $('#private_token').val();
      if(username == "" || password == ""){
        swal('Username / Password','harus di isi','info');
      } else {
        if($('#remember').prop('checked')){
          $.ajax({
            type: "POST",
            url: "<?php echo base_url('Login/login_pendataan')?>",
            data: {username:username, password:password, private_token:private_token},
            dataType: "json",
            beforeSend: function() {
                $('.overlay').css('display', 'block');
            },
            success: function (response) {
              //console.log(response[0]['kode']).
              if(response[0]['kode'] == '200' && response[0]['TIPEUSER'] == 'MANAJEMEN'){
                var manajemen = '<?php echo base_url('manajemen')?>/'
                window.location.replace(manajemen);
              } else if(response[0]['kode'] == '200' && response[0]['TIPEUSER'] == 'ORPEG'){
                var orpeg = '<?php echo base_url('orpeg')?>/'
                window.location.replace(orpeg);
              } else if(response[0]['kode'] == '400' || response[0]['kode'] == '300'){
                swal("username / password salah ",'','info');
                $('.overlay').css('display', 'none');
              } else {
                var exp = '<?php echo base_url('404_override')?>';
                window.location.replace(exp);
              }
            }
          });
        } else {
          swal('Chexbox','harus di isi','info');
        }
      }
    })
  });
</script>
</body>
</html>
