
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Shift Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Jadwal Presensi <?php echo $this->session->userdata('username')?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-2">
                  <button type="button" class="btn btn-block btn-info btntambah">Tambah Jadwal</button>
                </div>
                <br>
                <table class="table table-bordered table-striped" id="tabelJadwal">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ID WAKTU KERJA</th>
                      <th>KET WAKTU KERJA</th>
                      <th>JAM MASUK</th>
                      <th>JAM PULANG</th>
                      <th>DURASI</th>
                      <th>STATUS</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <form >
                    <?php $no_urut = 0;
                      //for ($a = 0; $a < count($data); $a++) {
                        foreach ($data as $dt){
                        $no_urut++;
                        echo "
                        <tr>
                          <td>".$no_urut."</td>
                          <td><input type='hidden' name='id' id='id' value='".$dt['IDWKTKERJA']."'>".$dt['IDWKTKERJA']."</td>
                          <td>".$dt['KETJNSWKTKERJA']."</td>
                          <td>".substr($dt['CHECKIN'],11,8)."</td>
                          <td>".substr($dt['CHECKOUT'],11,8)."</td>
                          <td>".$dt['DURASI']."</td>
                          <td>".$dt['STATUS']."</td>
                          <td><button  data-id_waktu='" . $dt['IDWKTKERJA'] . "' data-toggle='modal' data-target='#ubah-data' class='btn btn-warning btnedit'>Ubah</button></></td>
                          </tr>
                        ";
                      }
                    ?>
                    </form>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->
            <div class="card card-default formTambah">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Jadwal</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <form name="FormSimpanJadwal" id="FormSimpanJadwal">
                <div class="card-body">
                  <div class="row">
                  <input type="hidden" class="form-control" placeholder="Username" name="private_token" id="private_token" value="<?php echo $token; ?>">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ID WAKTU KERJA</label>
                        <input type="text" class="form-control" name="idwktkerja" id="idwktkerja" placeholder="REG, REGP, REGM, dll" maxlength="5" autofocus required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label>JAM MASUK</label>
                          </div>
                          <div class="col-6">
                            <label>MENIT MASUK</label>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col-6">
                              <select class="form-control jammasuk" name="jammasuk" id="jammasuk" style="width: 100%; ">
                                <?php for($a=0; $a<=23; $a++){
                                  echo "<option value='".sprintf("%02d", $a)."'>".sprintf("%02d", $a)."</option>";
                                }?>                            
                              </select>
                            </div>
                            <div class="col-6">
                              <select class="form-control menitmasuk" name="menitmasuk" id="menitmasuk" style="width: 100%;">
                                <?php for($a=0; $a<=59; $a++){
                                  echo "<option value='".sprintf("%02d", $a)."'>".sprintf("%02d", $a)."</option>";
                                }?>                            
                              </select>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>KETERANGAN WAKTU KERJA</label>
                        <textarea class="form-control" rows="3" name="ketwktkerja" id="ketwktkerja" placeholder="Reguler Pagi, Reguler Sabtu, dll" required></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label>JAM PULANG</label>
                          </div>
                          <div class="col-6">
                            <label>MENIT PULANG</label>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col-6">
                              <select class="form-control jampulang" name="jampulang" id="jampulang" style="width: 100%;">
                                <?php for($a=0; $a<=23; $a++){
                                  echo "<option value='".sprintf("%02d", $a)."'>".sprintf("%02d", $a)."</option>";
                                }?>                            
                              </select>
                            </div>
                            <div class="col-6">
                              <select class="form-control menitpulang" name="menitpulang" id="menitpulang" style="width: 100%;">
                                <?php for($a=0; $a<=59; $a++){
                                  echo "<option value='".sprintf("%02d", $a)."'>".sprintf("%02d", $a)."</option>";
                                }?>                            
                              </select>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer btnsimpan">
                  <button type="submit" id="btnsimpan" class="btn btn-info float-right">SIMPAN</button>
                  <button type="submit" class="btn btn-default">KEMBALI</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!--#####Modal Ubah Data Mulai#####-->
    <div id="btnedit" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1" style="padding-top: 10px; padding-right: 50px; padding-bottom: 10px; padding-left: 50px;">
                <h4 class="modal-title">Ubah Data Jadwal Shift</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body" style="padding-top: 15px; padding-right: 30px; padding-bottom: 0px; padding-left: 30px;">
                <!-- <form method="POST" id="editForm" action="<?php echo site_url('admin/ubah_data'); ?>"> -->
                <form method="POST" name='editForm' id="editForm">
                    <input type="hidden" value="ubah" class="form-control" name="action">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="login2 pull-left pull-left-pro">ID Waktu Kerja</label>
                                <input type="text" name="id_waktu" class="form-control" id="id_waktu" autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="login2 pull-left pull-left-pro">Jenis Waktu Kerja</label>
                                <input type="text" name="jenis" id="jenis" class="form-control" autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="login2 pull-left pull-left-pro">Jam Masuk</label>
                                <!-- <input type="text" name="jammasukubah" id="jammasukubah" class="form-control" autocomplete="off" required /> -->
                                <select class="form-control jammasukubah" name="jammasukubah" id="jammasukubah" style="width: 100%; ">
                                                          
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="login2 pull-left pull-left-pro">Menit Masuk</label>
                                <input type="text" name="menitmasukubah" id="menitmasukubah" class="form-control" autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="login2 pull-left pull-left-pro">Jam Keluar</label>
                                <!-- <input type="text" name="jamkeluarubah" id="jamkeluarubah" class="form-control" autocomplete="off" required /> -->
                                <select class="form-control jamkeluarubah" name="jamkeluarubah" id="jamkeluarubah" style="width: 100%; ">
                                  <?php for($a=0; $a<=23; $a++){
                                    echo "<option value='".sprintf("%02d", $a)."'>".sprintf("%02d", $a)."</option>";
                                  }?>                            
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="login2 pull-left pull-left-pro">Menit Keluar</label>
                                <input type="text" name="menitkeluarubah" id="menitkeluarubah" class="form-control" autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="padding-left:0px; padding-right:0px; ">
                        <button class="btn btn-large btn-danger" data-dismiss="modal" type="button">Kembali</button>
                        <button class="btn btn-large btn-primary" type="submit" id="btn_simpanubah">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--#####Modal Ubah Data Berakhir#####-->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://rstugurejo.jatengprov.go.id" target=_blank>IPDE RSUD Tugurejo</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>\
<!-- Select2 -->
<script src="<?php echo base_url('assets/plugins/select2/js/select2.full.min.js');?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-validation/additional-methods.min.js');?>"></script>

<!-- DataTables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
<script>
  $(document).ready(function(){
    $('.jammasuk').select2()
    $('.menitmasuk').select2()
    $('.jampulang').select2()
    $('.menitpulang').select2()
    $('.jammasukubah').select2()
    $('.menitmasukubah').select2()
    $('.jamkeluarubah').select2()
    $('.menitkeluarubah').select2()
    $("#tabelJadwal").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('.formTambah').hide();        

    $('.btntambah').click(function(){
        $('.formTambah').show();
    });

    $('#FormSimpanJadwal').validate({
      rules: {
        idwktkerja: {
          required: true,
          maxlength: 5
        },
        ketwktkerja: {
          required: true
        },
      },
      messages: {
        idwktkerja: {
          required: "ID Waktu Kerja harus diisi",
          maxlength: "ID Waktu maksimal 5 karakter"
        },
        ketwktkerja: {
          required: "Keterangan waktu kerja harus diisi"
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });

    $('#btnsimpan').on('click',function(){
        //var nopas = $('#nopas').val(); //tidak dipakai karena sudah menggunakan FormData(obj) --> mengambil semua inputan dari form tersebut
        var obj = document.forms.namedItem("FormSimpanJadwal")
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('orpeg/Dashboard/simpan_jadwal')?>",
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
              if(response[0]['CODE'] == '515'){
                alert("Nilai NULL tidak diperbolehkan");
                var exp = '<?php echo base_url('orpeg/Dashboard/error')?>';
                window.location.replace(exp);
              } else if(response[0]['CODE'] == '2627'){
                alert("ID Waktu Kerja yang Anda masukkan sudah Ada, silahkan masukkan ID yang lain.");
                var orpeg = '<?php echo base_url('orpeg/Dashboard/view_jadwal')?>';
                window.location.replace(orpeg);
              }else if(response[0]['CODE'] == '200'){     
                alert("Berhasil Simpan");
                var orpeg = '<?php echo base_url('orpeg/Dashboard/view_jadwal')?>';
                window.location.replace(orpeg);
              }
            }
          });
          return false;
      });

      // $('#btnedit').on('show.bs.modal', function (event) {
      //     var div   = $(event.relatedTarget) // Tombol dimana modal di tampilkan
      //     var modal = $(this)

      //     // Isi nilai pada field
      //     modal.find('#id').attr("value",div.data('id'));
      //     modal.find('#jenis').attr("value",div.data('jenis'));
      //     modal.find('#jammasukubah').attr("value",div.data('jammasukubah'));
      //     modal.find('#menitmasukubah').attr("value",div.data('menitmasukubah'));
      //     modal.find('#jamkeluarubah').attr("value",div.data('jamkeluarubah'));
      //     modal.find('#menitkeluarubah').attr("value",div.data('menitkeluarubah'));
      // });

      $('.btnedit').on('click',function(){
            var id =  $(this).data('id_waktu');
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('orpeg/Dashboard/get_jadwal_by_id')?>",
                // processData:false,
                // contentType:false,
                // cache:false,
                // async:true,
                // crossOrigin : true,
                data: {id:id}, 
                dataType: "json",
                // beforeSend: function() {
                //     $('.overlay').css('display', 'block');
                // },
                success: function (response) {
                  $('#btnedit').modal('show');
                    // $('.overlay').css('display', 'none');
                    // if(response.metaData.code=='404' || response.metaData.code=='400') {
                    //     alert('Nomor Pasien tidak ditemukan')
                    //     $('.reset').val('')
                    // } else if (response.metaData.code=='200'){
                        $('#id_waktu').val(response[0]['IDWKTKERJA'])
                        $('#jenis').val(response[0]['KETJNSWKTKERJA'])

                        var html = '';
                        var i;
                        for (i = 0; i <= 12; i++) {
                          //html += '<option value=' + response[0]['CHECKIN'].substr(11,2) + '>' + response[0]['CHECKIN'].substr(11,2) + '</option>';
                          if(i== response[0]['CHECKIN'].substr(11,2)){
                          html += '<option value=' + response[0]['CHECKIN'].substr(11,2) + ' selected>' +  i  + '</option>';
                        }else{
                          html += '<option value=' + response[0]['CHECKIN'].substr(11,2) + ' >' +  i  + '</option>';
                          }

                        }
                        $("#jammasukubah").html(html);
                        // $('#jammasukubah').val(response[0]['CHECKIN'].substr(11,2))
                        
                   // }
                }
            })
        });
  });
</script>
</body>
</html>