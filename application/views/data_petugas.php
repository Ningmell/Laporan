<?php include 'template/header.php'; ?>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
	<div class="container-fluid">
		<div class="header-body">
			<div class="card bg-default shadow">
				<div class="card-header bg-default">
					<h3 class="text-white"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah"><i class="ni ni-fat-add"></i></button> DATA PETUGAS</h3>
				</div>
				<div>
					<?php
						$pesan = $this->session->flashdata('pesan');
						if ($pesan) {
							echo '
							<div class="alert alert-danger">'.$pesan.'
								<button class="close" type="button" data-dismiss="alert">x</button>
							</div>
							';
						 } 
						 ?>
				</div>
				<div class="table-responsive card-body">
					<table class="table align-items-center table-dark table-flush" id="tbl_ptg">
						<thead class="thead-dark">
							<tr>
								<th scope="col">No</th>
								<th scope="col" style="width: 12%;">Nama <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col" style="width: 12%;">Username <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col" style="width: 12%;">Jenis Kelamin <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col" style="width: 12%;">Alamat <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col" style="width: 12%;">TTL <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col" style="width: 12%;">Email <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody id="show_data">
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="tambah">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Tambah Petugas</h3>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url('Petugas/save_data'); ?>">

                		<div class="form-group">
                 			<div class="input-group input-group-alternative mb-3">
                   				<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="ni ni-key-25"></i></span>
                    			</div>
                    			<input type="hidden" name="Id_petugas" class="id">
                  			</div>
               		 	</div>
						<div class="form-group">
                  			<div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      			<span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    			</div>
                    			<input type="text" name="nama" placeholder="Nama" class="form-control">
                  			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                				</div>
                				<input type="text" name="username" placeholder="Username" class="form-control">
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                				</div>
                				<input type="password" name="password" placeholder="Password" class="form-control">
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                				</div>
                				<select name="jk" class="form-control">
                					<option value="">--- jenis kelamin ---</option>
                					<option value="Laki-laki">Laki-laki</option>
                					<option value="Perempuan">Perempuan</option>
                				</select>
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                				</div>
                				<input type="text" name="alamat" placeholder="Alamat" class="form-control">
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-world"></i></span>
                				</div>
                				<input type="text" name="ttl" placeholder="Tempat Tanggal Lahir" class="form-control">
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-email-83"></i></span>
                				</div>
                				<input type="text" name="email" placeholder="Email" class="form-control">
                			</div>
                		</div>	
                		<div class="form-group">
                  			<div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    			</div>
                    			<input class="form-control" placeholder="No-KTP" type="text" name="no_ktp">
                  			</div>
                		</div>
                		<div class="form-group">
                  			<div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                   				 </div>
                    			<input class="form-control" placeholder="No-Telpon" type="text" name="hp">
                  			</div>
               			</div>
                		<div class="form-group">
                  			<div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                    			</div>
                    			<select name="id_jenis" class="form-control">
                      				<option value="">--- jenis antrian ---</option>
                      				<option value="1">Administrator</option>
                      				<option value="2">Teller</option>
                    			</select>
                  			</div>
                		</div>
                		<div class="form-group">
                  			<div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    			</div>
                    			<select name="level" class="form-control">
                      				<option value="">--- Level ---</option>
                      				<option value="1">Admin</option>
                     				 <option value="2">Petugas</option>
                    			</select>
                  			</div>
                		</div>
                	<div class="modal-footer">
                		<button class="btn btn-default" data-dismiss="modal">Batal</button>
                		<button class="btn btn-info" type="submit">Simpan</button>
                	</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="edit">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Edit Data</h3>
				</div>
					<div class="modal-body">
						<form method="post" action="<?php echo base_url('Petugas/edit') ?>">
							<input class="id-edit" name="Id_petugas" type="hidden">
							<div class="form-group">
								<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-single-02"></i></span>
									</div>
									<input class="form-control id-nama" name="nama" type="text" placeholder="Nama">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
									</div>
									<input class="form-control id-user" name="username" type="text" placeholder="Username">
								</div>
							</div>
                			<div class="form-group">
                				<div class="input-group input-group-alternative mb-3">
                					<div class="input-group-prepend">
                						<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                					</div>
                					<input type="password" name="password" placeholder="Password" class="form-control">
                				</div>
                			</div>
							<div class="form-group">
								<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-cart"></i></span>
									</div>
									<select name="jk" class="form-control id-jk">
										<option value="">--- jenis kelamin ---</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-square-pin"></i></span>
									</div>
									<input class="form-control id-alamat" name="alamat" type="text" placeholder="Alamat">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-world"></i></span>
									</div>
									<input class="form-control id-ttl" name="ttl" type="text" placeholder="Tempat Tanggal Lahir">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-email-83"></i></span>
									</div>
									<input class="form-control id-email" name="email" type="text" placeholder="Email">
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default" data-dismiss="modal">Batal</button>
								<button class="btn btn-success" type="submit">Edit</button>
							</div>
						</form>
					</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="hapus">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Hapus Data</h3>
				</div>
				<form method="post" action="<?php echo base_url('Petugas/hapus'); ?>">
				<div class="modal-body">
					<input class="id-hapus" name="Id_petugas" type="hidden">
					<p>Anda yakin akan menghapus data <b class="user-hapus">Username</b></p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn btn-danger" type="submit">Hapus</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'template/footer.php'; ?>
<script>
	$(document).ready(function () {

		$(document).on('click','button.edit', function () {
			id = $(this).data('id');
			nama = $(this).data('nama');
			username = $(this).data('user');
			jk = $(this).data('jk');
			alamat = $(this).data('alamat');
			ttl = $(this).data('ttl');
			email = $(this).data('email');
			$('input.id-edit').val(id);
			$('id-user').html(username);
		})

		$(document).on('click','button.hapus',function () {
		id = $(this).data('id');
		username = $(this).data('username');
		$('input.id-hapus').val(id);
		$('user-hapus').html(username);
		})
	});
</script>
<script type="text/javascript">
	var save_method;
	var table;


	$(document).ready(function () {
		$.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
			return {
				"iStart"		: oSettings._iDisplayStart,
				"iEnd"			: oSettings.fnDisplayEnd(),
				"iLength"		: oSettings._iDisplayLength,
				"iTotal"		: oSettings.fnRecordsTotal(),
				"iFilteredTotal": oSettings.fnRecordDisplay(),
				"iPage"			: Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
				"iTotalPages"	: Math.ceil(oSettings.fnRecordDisplay() / oSettings._iDisplayLength)
			}
		};

		table = $('#tbl_ptg').DataTable({
			"processing"	: true,
			"serverSide"	: true,
			"searching"		: true,
			"pagingType"	: 'full_numbers',
			// "dom"			: 'Bfrtip',
			// "buttons"		: [
			// 	{"extend"	: 'excel', "className" : 'btn btn-success btn-flat'},
			// 	{"extend"	: 'pdf', "className" : 'btn btn-danger btn-flat'},
			// 	{"extend"	: 'pageLength', "className" : 'btn btn-default btn-flat'}
			// ],
			"lengthMenu"	: [
				[100, 150, 200, 300, -1],
				['100 Rows', '150 Rows', '200 Rows', '300 Rows', 'All']
			],
			"ajax"	: '<?php echo site_url('Petugas/ssp_petugas'); ?>',
			"order"	: [[1, 'asc']],
			"columnsDefs"	: [{
				"targets" : [ -1 ],
				"orderable" : false
			}]
		});

		table.columns().every(function() {
			var table = this;
			$('input', this.header()).on('keyup change', function () {
				if (table.search() !== this.value) {
					table.search(this.value).draw();
				}
			});
		});

		$('#tbl_ptg').on('click', 'detail_record', function () {
			var id_petugas = $(this).data('Id_petugas');
			location= '<?php echo site_url('Petugas/detail_petugas/'); ?>'+id_petugas;
		});

		$('#tbl_ptg').on('click', 'edit_record', function () {
			var id_petugas = $(this).data('Id_petugas');
			location= '<?php echo site_url('Petugas/edit_petugas/'); ?>'+id_petugas;
		});

		$('#tbl_ptg').on('click', 'delete_record', function () {
			var id_petugas = $(this).data('Id_petugas');
			var y = confirm('Yakin Hapus Data ini??');
			if (y == true) {location='<?php echo site_url('Petugas/delete_petugas/') ?>'+id_petugas}else{}
		});
	});
</script>