<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mdl extends CI_Model 
{
	
	function cek_log($data_login)
	{
		$this->db->where($data_login);
		return $this->db->get('petugas');
	}


	// public function data_petugas_table($input)
	// {
	// 	$draw = $input['draw'];
	// 	$start = $input['start'];
	// 	$length = $input['length'];
	// 	$search = $input['search']['value'];

	// 	$where = '';
	// 	$limit = '';
	// 	if (!empty($search)) {
	// 		$where = "WHERE username LIKE '%$search%'";
	// 	}

	// 	if (!empty($length)) {
	// 		$limit = "LIMIT $start, $length";
	// 	}

	// 	$petugas = $this->db->query("
	// 		SELECT 
	// 			*
	// 		FROM 
	// 			petugas 
	// 		$where 
	// 		$limit
	// 		");

	// 	$hasil['draw'] = $draw;
	// 	$hasil['recordsTotal'] = $this->db->query("SELECT Id_petugas FROM petugas")->num_rows();
	// 	$hasil['recordsFiltered'] = $this->db->query("SELECT Id_petugas FROM petugas $where")->num_rows();

	// 	$no = 0;
	// 	foreach ($petugas->result_array() as $key) {
	// 		$hasil[$no++] = $key; 
	// 	}

	// 	return $hasil;
	// }
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */ ?>