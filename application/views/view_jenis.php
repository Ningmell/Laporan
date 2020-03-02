<?php include 'template/header.php'; ?>
<div class="header bg-gradient-primary  pb-8 pt-5 pt-md-8">
	<div class="container-fluid">
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
</div>
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
				"iFilteredTotal": oSettings.fnRecordDisplay(),
				"iPage"			: Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
				"iTotalPages"	: Math.ceil(oSettings.fnRecordDisplay() / oSettings._iDisplayLength)
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
	});
</script>