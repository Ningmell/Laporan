<?php include 'template/header.php'; ?>
<div class="header bg-gradient-primary  pb-8 pt-5 pt-md-8">
	<div class="container-fluid">
		<div class="header-body">
			<div class="card bg-default shadow">
				<div class="card-header bg-default">
					<h3 class="text-white">DATA PETUGAS</h3>
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
</div>
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
				"iFilteredTotal": oSettings.fnRecordDisplay(),
				"iPage"			: Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
				"iTotalPages"	: Math.ceil(oSettings.fnRecordDisplay() / oSettings._iDisplayLength)
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

		$('#tbl_user').on('click', 'detail_record', function () {
			var id_costumer = $(this).data('id_costumer');
			location= '<?php echo site_url('data_user/detail_user/'); ?>'+id_costumer;
		});

		$('#tbl_user').on('click', 'edit_record', function () {
			var id_costumer = $(this).data('id_costumer');
			location= '<?php echo site_url('data_user/edit_user/'); ?>'+id_costumer;
		});

		$('#tbl_user').on('click','delete_record', function () {
			var id_costumer = $(this).data('id_costumer');
			var ya = confirm('Anda yakin akan menghapus data ini??');
			if (y == true) {
			location= '<?php echo site_url('data_user/delete_user/') ?>'+id_costumer;
			} else{}
		});
	});
</script>