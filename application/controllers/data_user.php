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
		$data['cosserver'] = $this->model_user->antrian('1')->num_rows();
		$data['teller'] = $this->model_user->antrian('2')->num_rows();
		//$data['jml'] = $this->mdl->antrian()->num_rows();
		$this->load->view('user',$data);
	}
	public function daftar($a)
	{
		$data = array('id_antrian' => $a, 'id_costumer' => $this->session->userdata('username'), 'id_jenis' => '1');
		$this->model_user->tambah_antrian($data);

		$array = array(
			'id_antrian' => $a
		);
		$this->session->set_userdata( $array );
		redirect(base_url('data_user/antrian_user'));
	}
	public function teller($b)
	{
		$data = array('id_antrian' => $b, 'id_costumer' => $this->session->userdata('username'), 'id_jenis' => '2');
		$this->model_user->data_teller($data);

		$array = array(
			'id_antrian' => $b
		);
		$this->session->set_userdata( $array );
		redirect(base_url('data_user/antrian_user'));
	}
	public function antrian_user()
	{
		$this->load->view('user_antri');
	}
	public function data()
	{
		$data['coustumer'] = $this->model_user->data_customer()->result();
		$this->load->view('view_dataUser', $data);
	}
	public function tambah_data()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$alamat = $this->input->post('alamat');
		$ttl = $this->input->post('ttl');
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');

		$data = array('id_costumer' => '',
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'email' => $email,
			'hp' => $hp
		);

		$tes = $this->model_user->save_data($data);
		if ($tes) {
			echo json_encode('1');
		} else {
			echo json_encode('0');
		}
	}
	public function update()
	{
		$id_costumer = $this->uri->segment(3);
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$alamat = $this->input->post('alamat');
		$ttl = $this->input->post('ttl');
		$email = $this->input->post('email');
		$hp = $this->input->post('hp');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'email' => $email,
			'hp' => $hp
		);

		$where = array('id_costumer' => $id_costumer);

		$this->model_user->save_edit($data,$where);
		redirect(base_url('data_user/data'));

	}
	public function hapus()
	{
		$id = $this->uri->segment(3);
		$where = array('id_costumer' => $id);
		$this->model_user->save_hpus('coustumer',$where);
		redirect(base_url('data_user/data'));
	}
	public function spp_user()
	{
		$sql_details = $this->model_user->konek_sql();

		$table = 'coustumer';
		$primaryKey = 'id_costumer';
		$columns = array(
			array('db' => 'id_costumer', 'dt' => 0),
			array('db' => 'nama', 'dt' => 1),
			array('db' => 'username', 'dt' => 2),
			array('db' => 'alamat','dt' => 3),
			array('db' => 'ttl', 'dt' => 4),
			array('db' => 'email', 'dt' => 5),
			array('db' => 'hp', 'dt' => 6),
			array('db' => 'id_costumer', 'dt' => 7,
				'formatter' => function ($d,$row)
				{
					return '<a href="javascript:void(0);" class="detail_record btn btn-success btn-sm btn-flat" title="DETAIL" data-id_costumer="'.$d.'" data-toggle="modal" data-target="#detail'.$d.'"><i class="fa fa-search"></i></a>
							<a href="javascript:void(0);" class="edit_record btn btn-warning btn-sm btn flat" title="EDIT" data-id_costumer="'.$d.'"  data-toggle="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i><a/>
							<a href="javascript:void(0);" class="delete_record btn btn-danger btn-sm btn-flat" title="DELETE" data-id_costumer="'.$d.'"  data-toggle="modal" data-target="#hapus'.$d.'"><i class="fa fa-trash"></i</a>
					';
					
				}
			)
		);
		require 'argon/assets/plugins/datatables/ssp.class.php';
		echo json_encode(
			SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
		);
	}

}

/* End of file data_user.php */
/* Location: ./application/controllers/data_user.php */