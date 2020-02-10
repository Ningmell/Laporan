<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class data_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
	}

	public function index()
	{
		//$jenis = $this->input->post('id_jenis'=> $id);
		//$jenis = array('id_jenis' => $id );
		$data['tellerA'] = $this->model_user->antrian('1')->num_rows();
		$data['tellerB'] = $this->model_user->antrian('2')->num_rows();
		//$data['jml'] = $this->mdl->antrian()->num_rows();
		$this->load->view('user',$data);
	}
	function daftar($a)
	{
		$data = array('id_antrian' => $a, 'id_costumer' => $this->session->userdata('username'), 'id_jenis' => '1');
		$this->model_user->tambah_antrian($data);
		redirect(base_url('data_user/'));
	}
	function teller($b)
	{
		$data = array('id_antrian' => $b, 'id_costumer' => $this->session->userdata('username'), 'id_jenis' => '2');
		$this->model_user->data_teller($data);
		redirect(base_url('data_user/'));
	}

}

/* End of file data_user.php */
/* Location: ./application/controllers/data_user.php */