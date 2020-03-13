<?php include 'template/header.php'; ?>
		<div class="header-body">
			<div class="card bg-default shadow">
				<div class="card-header bg-default">
					<h3 class="text-white"><button class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="ni ni-fat-add"></i>Data Jenis Antrian</button></h3>
				</div>
				<div class="table-responsive card-body ">
					<table class="table align-items-center table-dark table-flush" id="tbl_jns">
						<thead class="thead-dark">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama Jenis<input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col">Id Jenis<input class="form-control form-control-sm" type="text" placeholder="SEARCH.."></th>
								<th scope="col">Ket</th>
								<th scope="col">Waktu</th>
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

	<div class="modal fade " id="tambah">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Tambah Data
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('jenis/tambah'); ?>">
						<input type="hidden" name="id_jenis">
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
                    		<div class="input-group-prepend">
                      			<span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    		</div>
                    			<input type="text" name="jenis_antrian" placeholder="Nama Jenis" class="form-control">
                  			</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
                    		<div class="input-group-prepend">
                      			<span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    		</div>
                    			<input type="text" name="ket" placeholder="Keterangan" class="form-control">
                  			</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
                    		<div class="input-group-prepend">
                      			<span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    		</div>
                    			<input type="text" name="waktu" placeholder="Waktu" class="form-control">
                  			</div>
						</div>
						<div class="modal-footer">
						<button class="btn btn-success" type="submit">Tambah</button>
						<button class="btn btn-secondary" data-dismiss="modal" type="reset">Batal</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php 
	foreach ($jenis as $key) {
	 ?>
	<div class="modal fade " id="hapus<?=$key->id_jenis?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Hapus Data
				</div>
				<form action="<?=base_url('jenis/hapus/'.$key->id_jenis);?>">
					<div class="modal-body">
						<input type="hidden" class="id-hapus" name="id_jenis">
						<p>
							Anda Yakin Akan Menghapus data <b value="<?=$key->jenis_antrian;?>"></b>
						</p>
						<div class="modal-footer">
							<button class="btn btn-danger" type="submit">Hapus</button>
							<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade " id="edit<?=$key->id_jenis?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Edit Data
				</div>
				<div class="modal-body">
					<form action="<?=base_url('jenis/update/'.$key->id_jenis)?>">
						<input type="hidden" name="id_jenis" class="id-edit">
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-single-02"></i></span>
								</div>
									<input class="form-control" name="jenis_antrian" type="text" placeholder="Nama Jenis" value="<?=$key->jenis_antrian?>">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-single-02"></i></span>
								</div>
									<input class="form-control" name="ket" type="text" placeholder="Keterangan" value="<?=$key->ket?>">
							</div>
						</div>

						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
                    		<div class="input-group-prepend">
                      			<span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    		</div>
                    			<input type="time" name="waktu" placeholder="Waktu" required="required" class="form-control">
                  			</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-info" type="submit">Simpan</button>
							<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
<?php include 'template/footer.php'; ?>
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
				"iFilteredTotal": oSettings.fnRecordsDisplay(),
				"iPage"			: Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
				"iTotalPages"	: Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
			}
		};

		table = $('#tbl_jns').DataTable({
			"processing"	: true,
			"serverSide"	: true,
			"searching"		: true,
			"pagingType"	: 'full_numbers',
			"lengthMenu"	: [
				[100, 150, 200, 300, -1],
				['100 Rows', '150 Rows', '200 Rows', '300 Rows', 'All']
			],
			"ajax"	: '<?php echo site_url('jenis/ssp_jenis'); ?>',
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