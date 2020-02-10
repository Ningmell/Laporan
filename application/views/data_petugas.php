<?php include 'template/header.php'; ?>
<div class="header bg-gradient-primary  pb-8 pt-5 pt-md-8">
	<div class="container-fluid">
		<div class="header-body">
			<div class="card bg-default shadow">
				<div class="card-header bg-default">
					<h3 class="text-white"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambah"><i class="ni ni-single-02"></i></button>DATA PETUGAS</h3>
				</div>
				<div class="table-responsive card-body">
					<table class="table align-items-center table-dark table-flush data-petugas">
						<thead class="thead-dark">
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">Username</th>
								<th scope="col">Jenis Kelamin</th>
								<th scope="col">Alamat</th>
								<th scope="col">TTL</th>
								<th scope="col">Email</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($petugas as $key) {
							 ?>
							 <tr>
							 	<td><?php echo $no++; ?></td>
							 	<td><?php echo $key->nama; ?></td>
							 	<td><?php echo $key->username; ?></td>
							 	<td><?php echo $key->jk; ?></td>
							 	<td><?php echo $key->alamat; ?></td>
							 	<td><?php echo $key->ttl; ?></td>
							 	<td><?php echo $key->email; ?></td>
							 	<td>
							 		<button class="btn btn-primary btn-sm">
							 			<i class="fa fa-edit"></i>
							 		</button>
							 		<button class="btn btn-danger btn-sm hapus" data-toggle="modal" data-target="#hapus" data-user="<?php echo $key->username; ?>">
							 			<i class="fa fa-trash"></i>
							 		</button>
							 	</td>
							 </tr>
						<?php } ?>
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
					<form method="post" action="<?php echo base_url('Petugas/tambah'); ?>">
						<div class="form-group">
                  			<div class="input-group input-group-alternative mb-3">
                    			<div class="input-group-prepend">
                      			<span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    			</div>
                    			<input type="text" name="nama" placeholder="Nama" class="form-control">
                  			</div>
                		</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="modal fade" id="hapus">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3>Hapus Data</h3>
				</div>
				<form method="post" action="<?php //echo base_url('Petugas/hapus'); ?>">
				<div class="modal-body">
					<input class="id-hapus" name="id" type="hidden">
					<p>Anda yakin akan menghapus data <b class="user-hapus">Username</b></p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Batal</button>
					<button class="btn btn-danger" type="submit">Hapus</button>
				</div>
				</form>
			</div>
		</div>
	</div>-->
</div>
<?php include 'template/footer.php'; ?>
<!--<script>
	$(document).on('click','button.hapus',function () {
		id = $(this).data('id');
		username = $(this).data('username');
		$('input.id-hapus').val(id);
		$('user-hapus').html(username);
	})
</script>-->