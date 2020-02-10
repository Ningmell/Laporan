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
		$this->load->view('petugas',$data);
	}
	public function teller()
	{
		$jenis = $this->session->userdata('id_jenis');
		$data['antrian'] = $this->model_petugas->data_t($jenis)->result();
		$this->load->view('petugas',$data);
	}
	public function smua_teller()
	{
		$data['antrian'] = $this->model_petugas->smua_data()->result();
		$this->load->view('petugas',$data);
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
		$id_petugas = $this->input->post('Id_petugas');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$ttl = $this->input->post('ttl');
		$email = $this->input->post('email');
		$no_ktp = $this->input->post('no_ktp');
		$hp = $this->input->post('hp');
		$ket = $this->input->post('ket');

		$data = array(
			'Id_petugas' => $id_jenis,
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'jk' => $jk,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'email' => $email,
			'no_ktp' => $no_ktp,
			'hp' => $hp,
			'ket' => $ket
		);
		$this->model_petugas->save_petugas($data);
		redirect(base_url('Petugas/data'));
	}
	public function hapus()
	{
		$id = $this->input->post('id');
		$where = array('id_petugas' => $id );
		$this->model_petugas->hapus_data($where);
		redirect(base_url('Petugas/data'));
	}

}

/* End of file  */
/* Location: ./application/controllers/ */