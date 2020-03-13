<?php include 'template/header.php'; ?>
		<div class="header-body">
			<div class="card bg-default shadow">
				<div class="card-header bg-default">
					<h3 class="text-white"><button class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="ni ni-fat-add"></i>Data User</button></h3>
				</div>
				<div class="table-responsive card-body">
					<table class="table align-items-center table-dark table-flush" id="tbl_user">
						<thead class="thead-dark">
							<tr>
								<th scope="col">No</th>
								<th scope="col" style="width: 20%">Nama <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col" style="width: 15%">Username <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col" style="width: 20%">Alamat <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col">TTL <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col">Email <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col" style="width: 15%">No-HP <input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></input></th>
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
					Tambah Data
				</div>
				<div class="modal-body">
					<form id="form-tambah">
						<div class="form-group">
							<input type="hidden" name="id_costumer">
							<div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      			<span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    			</div>
                    			<input type="text" name="nama" placeholder="Nama" required="required" class="form-control">
                  			</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
								</div>
								<input type="text" name="username" placeholder="Username" required="required" class="form-control"></input>
							</div>
						</div>
						<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                				</div>
                				<input type="password" name="password" placeholder="Password" class="form-control" required="required">
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                				</div>
                				<input type="text" name="alamat" placeholder="Alamat" class="form-control" required="required">
                			</div>
                		</div>
                		<div class="form-group">
                 			 <div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="ni ni-world"></i></span>
                   				</div>
                    			<input class="form-control" placeholder="Tempat Tanggal Lahir" type="text" name="ttl" required="required">
                  			</div>
               			</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-email-83"></i></span>
                				</div>
                				<input type="text" name="email" placeholder="Email" class="form-control" required="required">
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                				</div>
                				<input type="text" name="hp" placeholder="No Hp" class="form-control" required="required">
                			</div>
                		</div>
                		<div class="form-group">
                  			<div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    			</div>
                    			<input class="form-control" placeholder="No-KTP" type="text" name="no_ktp" required="required">
                  			</div>
                		</div>
                	<div class="modal-footer">
                		<button class="btn btn-success" type="submit" id="simpan">Simpan</button>
                		<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
	foreach ($coustumer as $key) {
	 ?>
	<div class="modal fade" id="edit<?=$key->id_costumer?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Edit Data
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url('data_user/update/'.$key->id_costumer); ?>">
						<input type="hidden" name="id_costumer" class="id-edit">
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-single-02"></i></span>
									</div>
									<input class="form-control id-nama" name="nama" type="text" placeholder="Nama" value="<?=$key->nama?>">
								</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
								</div>
								<input type="text" name="username" placeholder="Username" required="required" class="form-control" value="<?=$key->username?>"></input>
							</div>
						</div>
						<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                				</div>
                				<input type="password" name="password" placeholder="Password" class="form-control" value="<?=$key->password?>">
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                				</div>
                				<input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?=$key->alamat?>">
                			</div>
                		</div>
                		<div class="form-group">
                 			 <div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      				<span class="input-group-text"><i class="ni ni-world"></i></span>
                   				</div>
                    			<input class="form-control" placeholder="Tempat Tanggal Lahir" type="text" name="ttl" value="<?=$key->ttl?>">
                  			</div>
               			</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-email-83"></i></span>
                				</div>
                				<input type="text" name="email" placeholder="Email" class="form-control" value="<?=$key->email?>">
                			</div>
                		</div>
                		<div class="form-group">
                			<div class="input-group input-group-alternative mb-3">
                				<div class="input-group-prepend">
                					<span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                				</div>
                				<input type="text" name="hp" placeholder="No Hp" class="form-control" value="<?=$key->hp?>">
                			</div>
                		</div>
                		<div class="modal-footer">
                			<button class="btn btn-success" type="submit">Edit</button>
                			<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                		</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="hapus<?php echo $key->id_costumer?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Hapus Data
				</div>
				<form method="post" action="<?=base_url('data_user/hapus/'.$key->id_costumer);?>">
				<div class="modal-body">
					<input class="id-hapus" name="id_costumer" type="hidden">
					<p>Anda yakin akan menghapus data <b class="user-hapus">Username</b></p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger" type="submit">Hapus</button>
					<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade " id="detail<?=$key->id_costumer?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Detail Data
				</div>
				<div class="modal-body">
					<label for="">Id : <?=$key->id_costumer?></label><br>
					<label for="">Nama : <?=$key->nama?></label><br>
					<label for="">Username : <?=$key->username?></label><br>
					<label for="">Email : <?=$key->email?></label><br>
					<label for="">Alamat : <?=$key->alamat?></label><br>
					<label for="">Tempat Tanggal Lahir : <?=$key->ttl?></label><br>
					<label for="">No Hp : <?=$key->hp?></label><br>
					<label for="">No Ktp : <?=$key->no_ktp?></label>
				</div>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal">Kembali</button>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
<?php include 'template/footer.php'; ?>
<script type="text/javascript">
	var save_method;
	var table;

	$(document).ready(function() {
		$.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
			return {
				"iStart"		: oSettings._iDisplayStart,
				"iEnd"			: oSettings.fnDisplayEnd(),
				"iLength"		: oSettings._iDisplayLength,
				"iTotal"		: oSettings.fnRecordsTotal(),
				"iFilteredTotal": oSettings.fnRecordsDisplay(),
				"iPage"			: Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
				"iTotalPages"	: Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
			}
		};

		table = $('#tbl_user').DataTable({
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
			"ajax"	: '<?php echo site_url('data_user/spp_user'); ?>',
			"order"	: [[1, 'ASC']],
			"columnsDefs"	: [{
				"targets" : [ -1 ],
				"orderable" : false
			}],
			"rowCallback" : function (row, data, _iDisplayIndex) {
				var info = this.fnPagingInfo();
				var page = info.iPage;
				var length = info.iLength;
				var index = page*length+(_iDisplayIndex+1);
				$('td:eq(0)', row).html(index);
			}
		});

		table.columns().every(function() {
			var table = this;
			$('input', this.header()).on('keyup change', function () {
				if (table.search() !== this.value) {
					table.search(this.value).draw();
				}
			});
		});
	});
</script>
<script>
	$(document).ready(function () {
		$('#simpan').click(function () {
			$.ajax({
				url : '<?php echo base_url('data_user/tambah_data'); ?>',
				type : 'post',
				data : $('#form-tambah').serialize(),
				success:function(data){
				 //alert(data);

				if (data == '1') {
					swal("Good job!", "You clicked the button!", "success");
					window.location="<?php echo base_url('Petugas/data'); ?>";
				} //else {
					//swal("opppsss...", "danger", "danger");
				//}
			},
			error:function (data) {
				if (data == '0') {
					swal("oppppsss....", "Nooooo", "danger");
				}
			}
			})
		})
	})
</script>