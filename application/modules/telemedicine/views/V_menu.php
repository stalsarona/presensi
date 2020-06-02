<div class="right_col" role="main">
	<div class="">
	<div class="page-title">
		<div class="title_left">
		<h3>Master Menu <small>SIMRS</small></h3>
		</div>

		<div class="title_right">
		<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
			<div class="input-group"></div>
		</div>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
				<button class="btn btn-primary" data-toggle="modal" data-target="#modal_add">Tambah menu</button>
				<!-- add menu -->
				<div class="modal fade bs-example-modal-lg" id="modal_add" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Tambah Menu</h4>
						</div>
						<div class="modal-body">
							<!-- start form for validation -->
							<form id="form_add">
								<div class="alert alert-danger print-error-msg col-md-12 col-sm-12 col-xs-12" style="display:none"></div>
								<div class="row">
								<div class="form-horizontal">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fullname">Parent Node * :</label>
											<select id="parentnode"  name="parentnode" class="form-control selectpicker show-tick" data-live-search="true" required></select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="fullname">Sort Id * :</label>
											<input type="number" id="sortid" name="sortid" class="form-control reset" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="fullname">Displaytext * :</label>
											<input type="text" id="displaytext" name="displaytext" class="form-control reset" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="fullname">Link Address * :</label>
											<input type="text" id="linkaddress" name="linkaddress" class="form-control reset" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">											
											<div class="">
												<label>
													<input type="checkbox" class="js-switch" id="stat_check" name="stat_check" /> Status OFF / ON
													<input type="hidden" name="stat" id="stat" value="0">
												</label>
											</div>
											<div class="">
												<label>
													<input type="checkbox" class="js-switch" id="mobile_check" name="mobile_check" /> Mobile OFF / ON
													<input type="hidden" name="mobile" id="mobile" value="0">
													<input type="hidden" id="private_key" name="private_key">
												</label>
											</div>
										</div>
									</div>
									
								</div>
								</div>                   
							</form>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
								<button type="button" class="btn btn-primary" id="btn_simpan">Simpan</button>
							</div>
							<!-- end form for validations -->
						</div>
						</div>
					</div>
					</div>
				<!-- end of add menu -->
				<!-- edit modal -->
					<div class="modal fade bs-example-modal-lg" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Edit</h4>
						</div>
						<div class="modal-body">
							<!-- start form for validation -->
							<form id="form_edit">
							<div class="alert alert-danger print-error-msg-edit col-md-12 col-sm-12 col-xs-12" style="display:none"></div>
								<div class="row">
								<div class="form-horizontal">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fullname">Parent Node * :</label>
											<input type="hidden" name="edit_node" id="edit_node">
											<select id="edit_parentnode"  name="edit_parentnode" class="form-control selectpicker show-tick reset" data-live-search="true" required></select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="fullname">Sort Id * :</label>
											<input type="number" id="edit_sortid" name="edit_sortid" class="form-control reset" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="fullname">Displaytext * :</label>
											<input type="text" id="edit_displaytext" name="edit_displaytext" class="form-control reset" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="fullname">Link Address * :</label>
											<input type="text" id="edit_linkaddress" name="edit_linkaddress" class="form-control reset" required />
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">											
											<div class="">
												<label>Status</label>
													<select name="edit_stat" id="edit_stat" class="form-control">
														<option value="0">OFF</option>
														<option value="1">ON</option>
													</select>
												
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">											
											<div class="">
												<label>Inmobile</label>
													<select name="edit_mobile" id="edit_mobile" class="form-control">
														<option value="0">OFF</option>
														<option value="1">ON</option>
													</select>
												
											</div>
										</div>
									</div>
									
								</div>
								</div>         		
							</form>
							<!-- end form for validations -->
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
							<button type="button" class="btn btn-primary" id="btn_update">Simpan</button>
						</div>
						</div>
					</div>
					</div>
				<!-- edit modal -->
			
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown"></li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
				</div>
				<div class="x_content">
				<table id="tbmaster_menu" class="table table-striped table-bordered table-hover">
					<thead>
					<tr>
						<th>No</th>
						<th>Parentnode</th>
						<th>SortID</th>
						<th>Display</th>
						<th>Link</th>
						<th>Status</th>
						<th>Mobile</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var urlku = '<?php echo site_url() ?>';
		
		get_parent()
		function get_parent(){
			$.ajax({
				url : urlku+'Administrasi/menu/get_parent',
				type : 'GET',
				dataType: 'JSON',
				processData:false,
				contentType:false,
				cache:false,
				async:true,
				crossOrigin : true,
				success : function(data){
					$('#parentnode').html(data.aaData);
					$('#edit_parentnode').html(data.aaData);
				}
			})
		}
		private_key()
		function private_key(){
			$.ajax({
				url : urlku+'Administrasi/menu/private_token',
				type : 'GET',
				dataType: 'JSON',
				success : function(data){
					$('#private_key').val(data)
				}
			})
		}

		$('#stat_check').click(function(e, checked){
			if(this.checked){
				$('#stat').val(1)
			}else{
				$('#stat').val(0)
			}
		})

		$('#mobile_check').click(function(e, checked){
			if(this.checked){
				$('#mobile').val(1)
			}else{
				$('#mobile').val(0)
			}
		})

		$('#tbmaster_menu').DataTable({
				"destroy": 		true,
				"bProcessing": 	true,
				"bAutoWidth": 	false,
				"order": 		[],
				"sAjaxSource" : '<?php echo site_url('administrasi/menu/get_daftar_menu') ?>',
				"aoColumns":	[
									{ "mData"	: "nomor"},
									{ "mData"	: "parentnode"},
									{ "mData" 	: "sortid"},
									{ "mData"	: "displaytext"},
									{ "mData"	: "linkaddress"},
                                    { "mData"   : "stat"},
                                    { "mData"   : "inmobile"},
									{ "mData"	: "action",orderable: false}
								],
				"fixedColumns" : true,
				"columnDefs": 	[
									{ className: "text-center", "targets": [0,3,4,5,7] },
									{ width: 30, targets: [0]},
									{ width: 90, targets: [5]}
								],
		});
		
		$('#tbmaster_menu').on('click', '#btn_edit', function(){
			var node = $(this).data('node');
			var parentnode = $(this).data('parentnode');
			var displaytext = $(this).data('displaytext');
			var sortid = $(this).data('sortid');
			var stat = $(this).data('stat');
			var inmobile = $(this).data('inmobile');
			var linkaddress = $(this).data('linkaddress');

			stat == 1 ? $('#edit_stat').val(1) : $('#edit_stat').val(0);
			inmobile == 1 ? $('#edit_mobile').val(1) : $('#edit_mobile').val(0);

			$('#edit_node').val(node)
			$('#edit_parentnode').val(parentnode);
			$('#edit_parentnode').selectpicker('refresh')
			$('#edit_displaytext').val(displaytext);
			$('#edit_sortid').val(sortid);
			$('#edit_linkaddress').val(linkaddress);
			
			$('#modal_edit').modal('show');	
		})

		$('#btn_simpan').on('click', function() {
			
			var obj = document.forms.namedItem("form_add")
			$.ajax({
				url: urlku+'administrasi/menu/add_menu_master',
				type: 'POST',
				dataType: 'json',
				processData:false,
		        contentType:false,
		        cache:false,
		        async:true,
		        crossOrigin : true,
		        data: new FormData(obj),
		        success: function(data){
					private_key();
				  if(data.status == false){
						swal('Token Expired', '', 'info')
				  } else if ($.isEmptyObject(data.error)) {
		            $(".print-error-msg").css('display','none');
		            swal('Berhasil','','success');
		        	$('#tbmaster_menu').DataTable().ajax.reload();
		        	$('#modal_add').modal('hide');	
		            $('.reset').val('');
		          } else {
		            $(".print-error-msg").css('display','block');
		            $(".print-error-msg").html(data.error);
		          }	    	
		        }
			})
		});

		$('#btn_update').on('click', function() {
			
			var obj = document.forms.namedItem("form_edit")
			$.ajax({
				url: urlku+'administrasi/menu/edit_menu_master',
				type: 'POST',
				dataType: 'json',
				processData:false,
		        contentType:false,
		        cache:false,
		        async:true,
		        crossOrigin : true,
		        data: new FormData(obj),
		        success: function(data){
		        	if ($.isEmptyObject(data.error)) {
						$(".print-error-msg-edit").css('display','none');
						swal('Berhasil','','success');
						$('#tbmaster_menu').DataTable().ajax.reload();
						$('#modal_edit').modal('hide');	
						$('.reset').val('');
					} else {
						$(".print-error-msg-edit").css('display','block');
						$(".print-error-msg-edit").html(data.error);
					}	
		        }
			})
		});

		$('#tbmaster_menu').on('click', '#btn_delete', function(){
			 var node = $(this).data('node');

			swal({
				title: "Hapus Data ini?",
				type: "info",
				showCancelButton: true,
				confirmButtonText: "Simpan",
				cancelButtonText: "Cancel",
				closeOnConfirm: true,
				closeOnCancel: false
			},
			function(isConfirm){
				if (isConfirm) {
					$.ajax({
						url: urlku+'administrasi/menu/delete_menu',
						type: 'POST',
						dataType: 'json',
						data: {node: node},
						success : function(data){
							swal('Berhasil','','success')
							$('#tbmaster_menu').DataTable().ajax.reload();
						}
					})
				}else{
					swal('Batal');
				}
			})				
		});

		$('#tb_layanan').on('click', '#btn_check', function(){
			// var id_gambar = $(this).data('id');

			// swal({
			// 	title: "Aktifkan layanan ini?",
			// 	type: "info",
			// 	showCancelButton: true,
			// 	confirmButtonText: "Simpan",
			// 	cancelButtonText: "Cancel",
			// 	closeOnConfirm: true,
			// 	closeOnCancel: false
			// },
			// function(isConfirm){
			// 	if (isConfirm) {
			// 		$.ajax({
			// 			url: urlku+'Setting_front/aktifkan_layanan',
			// 			type: 'POST',
			// 			dataType: 'json',
			// 			data: {id_gambar: id_gambar},
			// 			success : function(data){
			// 				if (data == true) {
			// 					swal('Berhasil','','success')	
			// 				} else {
			// 					swal('Layanan penuh','','info')
			// 				}
			// 				$('#tb_layanan').DataTable().ajax.reload();
			// 			}
			// 		})
			// 	}else{
			// 		swal('Batal');
			// 	}
			// })				
		});

		$('#tb_layanan').on('click', '#btn_off', function(){
			// var id_gambar = $(this).data('id');

			// swal({
			// 	title: "Non aktifkan layanan ini?",
			// 	type: "info",
			// 	showCancelButton: true,
			// 	confirmButtonText: "Simpan",
			// 	cancelButtonText: "Cancel",
			// 	closeOnConfirm: true,
			// 	closeOnCancel: false
			// },
			// function(isConfirm){
			// 	if (isConfirm) {
			// 		$.ajax({
			// 			url: urlku+'Setting_front/non_aktifkan_layanan',
			// 			type: 'POST',
			// 			dataType: 'json',
			// 			data: {id_gambar: id_gambar},
			// 			success : function(data){
			// 				swal('Berhasil','','success')
			// 				$('#tb_layanan').DataTable().ajax.reload();
			// 			}
			// 		})
			// 	}else{
			// 		swal('Batal');
			// 	}
			// })				
		});
	});
</script>
