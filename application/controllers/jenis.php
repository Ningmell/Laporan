<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jenis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_jenis');
		$this->load->model('model_petugas');
	}

	public function index()
	{
		$data['jenis'] = $this->model_jenis->data_jenis()->result();
		$id =$_SESSION['Id_petugas'];
		$data['petugas'] = $this->model_petugas->detail_profil($id)->result();
		$this->load->view('view_jenis', $data);
	}
	public function tambah()
	{
		$id_jenis = $this->input->post('id_jenis'); 
		$jenis = $this->input->post('jenis_antrian'); 
		$ket = $this->input->post('ket');

		$data = array('jenis_antrian' => $jenis, 'ket' => $ket);
		$where = array('id_jenis' => $jenis );

		$this->model_jenis->add($data,$where);
		redirect(base_url('jenis/')); 
	}
	public function ssp_jenis()
	{
		$sql_details = $this->model_jenis->get_sql_detail();

		$table = 'jenis';
		$primary = 'id_jenis';
		$columns = array(
			array('db' => 'id_jenis', 'dt' => 0),
			array('db' => 'jenis_antrian', 'dt' => 1),
			array('db' => 'id_jenis', 'dt' => 2),
			array('db' => 'ket', 'dt' => 3),
			array('db' => 'id_jenis', 'dt' => 4,
				'formatter' => function ($d,$row)
				{
					return '<a href="javascript:void(0);" class="edit_record btn btn-warning btn-flat btn-sm" title="EDIT" data-id_jenis="'.$d.'" data-toggle="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i></a>
					<a href="javascript:void(0);" class="delete_record btn btn-danger btn-sm btn-flat" title="DELETE" data-id_costumer="'.$d.'" data-toggle="modal" data-target="#hapus'.$d.'"><i class="fa fa-trash"></i</a>'
					;
				}
			)
		);

		require 'argon/assets/plugins/datatables/ssp.class.php';
		echo json_encode(
			SSP::simple($_GET, $sql_details, $table, $primary, $columns)
		);
	}

}

/* End of file jenis.php */
/* Location: ./application/controllers/jenis.php */