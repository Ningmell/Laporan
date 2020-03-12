<?php include 'template/header.php'; 
foreach ($petugas as $key) {
?>
<div class="row">
		<div class="col-md-7 mb-3">
			<div class="card bg-secondary shadow">
				<div class="card-body">
					<h3>Profil</h3>
					<div class="form-group">
						<label>Nama :</label>
            			<input type="text" name="nama"  value="<?=$key->nama?>" class="form-control">
        			</div>
        			<div class="form-group row">
        				<div class="col">
							<label>Username :</label>
							<input type="text" name="username" class="form-control" value="<?=$key->username?>"></div>
        				<div class="col">
        					<label for="">Password :</label>
        					<input type="password" class="form-control" value="<?=$key->password?>"></div>
        				<div class="col-4">
        					<label for="">Jenis Kelamin :</label>
							<select name="jk" value="<?=$key->jk?>" class="form-control">
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
        				</div>
        			</div>
        			<div class="form-group row">
        				<div class="col-7">
        					<label for="">Email :</label>
        					<input type="text" class="form-control" value="<?=$key->email?>"></div>
        				<div class="col">
        					<label for="">Alamat :</label>
        					<input type="text" class="form-control" value="<?=$key->alamat?>"></div>
        				<div class="col-3">
        					<label for="">TTL:</label>
        					<input type="text" class="form-control" value="<?=$key->ttl?>"></div>
        			</div>
        			<div class="form-group row">
        				<div class="col">
        					<label for="">No Ktp :</label>
        					<input type="text" class="form-control" value="<?=$key->no_ktp?>"></div>
        				<div class="col">
        					<label for="">No Hp :</label>
        					<input type="text" class="form-control" value="<?=$key->hp?>"></div>
        			</div>
        			<div class="form-group">
        				<textarea rows="6" class="form-control" placeholder="Keterangan" style="resize: none;"></textarea>
        			</div>
        			<button class="btn btn-info" type="submit">Simpan</button>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="card card-profile shadow">
	            <div class="row justify-content-center">
	              <div class="col-lg-3 order-lg-2">
	                <div class="card-profile-image">
	                  <a href="#ganti-foto" data-toggle="modal">
	                  	<?php  
	                  	if ($key->foto == '') {
	                  		$foto = 'default.jpeg';
	                  	} else {
	                  		$foto = $key->foto;
	                  	}
	                  	?>
	                  	<img src="<?php echo base_url('argon/image/'.$foto) ?>" width="200px" height="200px" class="rounded">
	                  </a>
	                </div>
	              </div>
	            </div>
	            <div class="card-body pt-0 pt-md-4" style="margin-top: 150px">
	              <div class="text-center">
	                <h3>
	                  <?=$key->nama?><span class="font-weight-light"></span>
	                </h3>
	                <div class="h5 font-weight-300">
	                  <i class="ni location_pin mr-2"></i><?=$key->alamat?>
	                </div>
	                <div class="h5 mt-4">
	                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
	                </div>
	                <div>
	                  <i class="ni education_hat mr-2"></i>University of Computer Science
	                </div>
	                <hr class="my-4" />
	                <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
	                <a href="#">Show more</a>
	              </div>
	            </div>
	          </div>
		</div>
</div>
<div class="modal fade" id="ganti-foto">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<?php echo form_open_multipart('Petugas/foto/'.$this->session->userdata('Id_petugas')); ?>
				<div class="modal-body">
					<div class="form-group">
						<div class="custom-file">
							<input type="file" name="foto" class="custom-file-input">
							<label for="" class="custom-file-label">Choose File</label>
						</div>
					</div>
					<img src="<?php echo base_url('argon/image/'.$foto) ?>" width="100%" class="rounded">
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" type="button">Batal</button>
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php }
 include 'template/footer.php'; ?>