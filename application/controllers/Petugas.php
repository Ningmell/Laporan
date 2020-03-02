<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class petugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_petugas');
	}
	public function index()
	{
		$jenis = $this->session->userdata('id_jenis');
		$data['antrian'] = $this->model_petugas->data($jenis)->result();
		$data['petugas'] = $this->model_petugas->detail_profil()->result();
		$this->load->view('petugas',$data);
	}
	public function teller()
	{
		$jenis = $this->session->userdata('id_jenis');
		$data['antrian'] = $this->model_petugas->data_t($jenis)->result();
		$data['petugas'] = $this->model_petugas->detail_profil()->result();
		$this->load->view('petugas',$data);
	}
	public function smua_antrian()
	{
		$data['antrian'] = $this->model_petugas->smua_data()->result();
		$data['petugas'] = $this->model_petugas->detail_profil()->result();
		$this->load->view('petugas',$data);
	}
	public function detail_servis()
	{
		$data['petugas'] = $this->model_petugas->detail_profil()->result();
		$this->load->view('detail_profil', $data);
	}
	public function ganti($status)
	{
		$id = $this->input->post('id');
		$data = array('status' => $status);
		$where = array('id_antrian' => $id);
		$this->model_petugas->ganti($data,$where);
		if ($this->session->userdata('level') == '1') {
			redirect(base_url('Petugas/smua_teller'));
		} else {
		redirect(base_url('Petugas'));
			}
		}
	public function proses($status)
	{
		$id = $this->input->post('id');
		$data = array('status' => $status );
		$where = array('id_antrian' => $id );
		$this->model_petugas->prosing($data,$where);
		redirect(base_url('Petugas/teller'));
	}
	public function data()
	{
		$data['js'] = "script/data_petugas";
		$data['petugas'] = $this->model_petugas->d_petugas()->result();
		$this->load->view('data_petugas', $data);
	}
	public function save_data()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$ttl = $this->input->post('ttl');
		$email = $this->input->post('email');
		$ktp = $this->input->post('no_ktp');
		$hp = $this->input->post('hp');
		$id_jenis = $this->input->post('id_jenis');
		$level = $this->input->post('level');

		// if (empty($nama)) {
		// 	$pesan = "nama harus diisi.";
		// 	goto gagal;
		// } else if (empty($username)) {
		// 	$pesan = "username harus diisi.";
		// 	goto gagal;
		// } else if (empty($password)) {
		// 	$pesan = "password harus diisi.";
		// 	goto gagal;
		// } else if (empty($jk)) {
		// 	$pesan = "jk harus diisi.";
		// 	goto gagal;
		// } else if (empty($alamat)) {
		// 	$pesan = "alamat harus diisi.";
		// 	goto gagal;
		// } else if (empty($ttl)) {
		// 	$pesan = "ttl harus diisi.";
		// 	goto gagal;
		// } else if (empty($email)) {
		// 	$pesan = "email harus diisi.";
		// 	goto gagal;
		// } else if (empty($ktp)) {
		// 	$pesan = "ktp harus diisi.";
		// 	goto gagal;
		// } else if (empty($hp)) {
		// 	$pesan = "hp harus diisi.";
		// 	goto gagal;
		// } else if (empty($id_jenis)) {
		// 	$pesan = "id_jenis harus diisi.";
		// 	goto gagal;
		// } else if (empty($level)) {
		// 	$pesan = "level harus diisi.";
		// 	goto gagal;
		// }

		$data = array(
			'Id_petugas' => '',
			'nama' => $nama,
			'username' => $username,
			'password' => md5($password),
			'jk' => $jk,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'email' => $email,
			'no_ktp' => $ktp,
			'hp' => $hp,
			'id_jenis' => $id_jenis,
			'level' => $level
		);
		$pesan = true;

		$this->model_petugas->save_petugas($data);
		gagal:
		echo json_encode($pesan);
	}
	public function edit()
	{
		$id_petugas = $this->input->post('Id_petugas');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$ttl = $this->input->post('ttl');
		$email = $this->input->post('email');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'jk' => $jk,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'email' => $email 
		);
		$where = array(
			'Id_petugas' => $id_petugas 
		);

		$this->model_petugas->edit_data($data,$where);
		$this->session->set_flashdata('pesan', 'Berhasil di edit');
		redirect(base_url('Petugas/data'));
	}
	public function hapus()
	{
		$id = $this->uri->segment(3);
		$where = array('Id_petugas' => $id );
		$this->model_petugas->hapus_data('petugas',$where);
		$this->session->set_flashdata('pesan', 'Berhasil di hapus');
		redirect(base_url('Petugas/data'));
	}
	public function ssp_petugas()
	{
		//$sess_login = $this->session->userdata('login');
		$sql_details = $this->model_petugas->get_sql_details();

		$table = 'petugas';
		$primarykey = 'Id_petugas'; 
		$columns = array(
			array('db' => 'Id_petugas', 'dt' => 0),
			array('db' => 'nama', 'dt' => 1),
			array('db' => 'username', 'dt' => 2),
			array('db' => 'jk', 'dt' => 3),
			array('db' => 'alamat', 'dt' => 4),
			array('db' => 'ttl', 'dt' => 5),
			array('db' => 'email', 'dt' => 6),
			array('db' => 'Id_petugas', 'dt' => 7,
				'formatter' => function ($d,$row){
					return '<a href="javascript:void(0);" class="detail_record btn btn-success btn-xs btn-flat btn-sm" title="DETAIL" data-id_petugas="'.$d.'"  data-toggle="modal" data-target="#detail'.$d.'"><i class="fa fa-search"></i></a>
							<a href="javascript:void(0);" class="edit_record btn btn-warning btn-xs btn-flat btn-sm" title="EDIT" data-id_petugas="'.$d.'" data-toggle="modal" data-target="#edit'.$d.'"><i class="fa fa-edit"></i></a>
							<a href="javascript:void(0);" class="delete_record btn btn-danger btn-xs btn-flat btn-sm" title="HAPUS" data-id_petugas="'.$d.'" data-toggle="modal" data-target="#hapus'.$d.'"><i class="fa fa-trash"></i></a>
					';
				}
			)
		);

		require 'argon/assets/plugins/datatables/ssp.class.php';
		echo json_encode(
			SSP::simple($_GET, $sql_details, $table, $primarykey, $columns)
		);

	}

}

/* End of file  */
/* Location: ./application/controllers/ */