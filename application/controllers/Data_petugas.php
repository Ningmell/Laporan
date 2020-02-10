<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl');
	}

	// public function get()
	// {
	// 	$data = $this->mdl->data_petugas_table();
	// 	$hasil = array();
	// 	$no = $_POST['start'];
	// 	foreach ($data as $key) {
	// 		$no++;
	// 		$row = array();
	// 		$row[] = $no;
	// 		$row[] = $key->nama;
	// 		$row[] = $key->username;
	// 		$row[] = $key->jk;
	// 		$row[] = $key->alamat;
	// 		$row[] = $key->ttl;
	// 		$row[] = $key->email;
	// 		$row[] = $key->id;

	// 		$hasil = array();
	// 	}

	// 	// $output = array(
	// 	// 	'draw' => $_POST['draw'],
	// 	// 	'recordsTotal' => $this->
	// 	// );

	// 	echo json_encode($output);
	// }

}

/* End of file Data_petugas.php */
/* Location: ./application/controllers/Data_petugas.php */