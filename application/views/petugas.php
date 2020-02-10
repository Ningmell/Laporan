<?php include 'template/header.php'; ?>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
        	<div class="card bg-default shadow">
                <div class="card-header bg-default">
                    <h3 class="text-white">Data Antrian</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
            		<!--<table class="table table-bordered" id="data" style="color: white">-->
            			<thead class="thead-dark">
                            <tr>
                				<th scope="col">No</th>
                				<th scope="col">Kode Antrian</th>
                				<th scope="col">Pendding</th>
                				<th scope="col">Proses</th>
                                <th scope="col">Selesai</th>
                			</tr>
                        </thead>
                        <tbody>
                			<?php $no=1;
                			foreach ($antrian as $isi) {
            			 ?>
            			 <tr>
            			 	<td align="center"><?php echo $no++; ?></td>
                            <td class="id"><?php echo $isi->id_antrian; ?></td>
                            <?php  
                            if ($isi->status=='1') {
                                ?>
                                    <td class="pen">
                                    </td>
                                    <td class="pro">
                                    </td>
                                    <td class="sel">
                                        <button class="btn btn-success proses" data-toggle="modal" data-target="#selesai" data-id="<?php echo $isi->id_antrian ?>">Selesai</button>
                                    </td>
                                <?php
                            } else if ($isi->status=='2') {
                                ?>
                                    <td class="pen">
                                        <button class="btn btn-warning pending" data-toggle="modal" data-target="#ganti" data-id="<?php echo $isi->id_antrian ?>">Pending</button>
                                    </td>
                                    <td class="pro">
                                    </td>
                                    <td class="sel">
                                    </td>
                                <?php
                            } else {
                                ?>
                                    <td class="pen">
                                    </td>
                                    <td class="pro">
                                        <button class="btn btn-primary proses" data-toggle="modal" data-target="#selesai" data-id="<?php echo $isi->id_antrian ?>">Proses</button>
                                    </td>
                                    <td class="sel">
                                    </td>
                                <?php
                            }
                            ?>
                            <td class="stts" hidden="true"><?php echo $isi->status; ?></td>
                         </tr>
                         <?php } ?>
                        </tbody>
            		</table>
                </div>
        	</div>
        </div>
      </div>
    <div class="modal fade" id="ganti">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Pemrosesan</h3>
                </div>
                <form action="<?php echo base_url('Petugas/ganti/'.'3'); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" class="id-proses" name="id">
                    <p>Anda yakin memproses data dengan id <b class="id-proses">id-antrian</b></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Iya</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="selesai">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Penyelesaian</h3>
                </div>
                <form action="<?php echo base_url('Petugas/ganti/'.'1'); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" class="id-selesai" name="id">
                    <p>Anda yakin menyelesaikan data dengan id <b class="id-selesai">id-antrian</b></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Iya</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
<?php include 'template/footer.php'; ?>

<script>
    $(document).ready(function() {
        $(document).on('click','button.pending',function() {
            id = $(this).data('id');
            $('input.id-proses').val(id);
            $('b.id-proses').html(id);
        })
    });
    $(document).ready(function() {
        $(document).on('click','button.proses',function() {
            id = $(this).data('id');
            $('input.id-selesai').val(id);
            $('b.id-selesai').html(id);
        })
    });
</script>