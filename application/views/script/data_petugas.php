<script>
	$(document).ready(function() {
		
		function get_petugas() {
			$('table.data-petugas').DataTable({
				// "serverSide" : true,
				// "processing" : true,
				// "order" : [],
				// "deferRender" : true,
				// "ajax" : {
				// 	url : "<?php echo base_url('Data_petugas/get') ?>",
				// 	type : "POST",
				// 	async : true,
				// 	success : function(req) {
				// 		html = '';
				// 		$.each(req, function(nomor,objek) {
				// 			html += '\
				// 			<tr>\
				// 				<td></td>\
				// 				<td></td>\
				// 				<td></td>\
				// 				<td></td>\
				// 				<td></td>\
				// 				<td></td>\
				// 				<td></td>\
				// 				<td></td>\
				// 			</tr>'
				// 		})
				// 	}
				// },
				// "columnDefs" : [
				// 	{
				// 		"targets" : [0],
				// 		"orderable" : false
				// 	}
				// ]
			});
		}

		get_petugas()

	})
</script>