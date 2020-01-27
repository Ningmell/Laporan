<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class awal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username' => $username );

		$cek_user = $this->mdl->cek($where);
		if ($cek_user->num_rows()>0) {
			foreach ($cek_user->result_array() as $key) {
			$this->session->set_userdata($key);
				if (md5($password) == $key['password']) {
					redirect(base_url('user/usern'));
				} else {
					redirect(base_url('awal/'));
				}
			}
		} else {
			echo "username Salah";
		}
	}
	public function login_petugas()
	{
		$this->load->view('login_petugas');
	}
	public function petugas()
	{
		$user = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where = array('username' => $user);

		$cek = $this->mdl->cek_login($where);
		if ($cek->num_rows()>0) {
			foreach ($cek->result_array() as $key) {
				if (md5($password) == $key['password']) {
					$this->session->set_userdata($key);
					if ($key['level'] == '1') {
						redirect(base_url('awal/administrator'));
					} else {
						redirect(base_url('awal/pelayan'));
					}
				} else {
					echo "password salah";
				}
			}
		} else {
			echo "eror username";
		}
	}
	/*public function masuk()
	{
		$user = $this->input->post('username');
		$id = $this->input->post('id');
		$data_login = array('username' => $user);

		$cek_data = $this->mdl->cek_login($data_login)->num_rows();
		$cek_petugas = $this->mdl->cek_log($data_login)->num_rows();
		if ($cek_data>0) {
			$data2 = array('username' => $user, 'id' => $id );
			$cek = $this->mdl->cek_login($data2)->num_rows();
			if ($cek>0) {
				$lihat = $this->mdl->cek_login($data2)->row();
				$cek_level = array('alamat' => $lihat->alamat, 'level' => $lihat->level);
				$this->session->set_userdata($cek_level);
				$this->session->set_userdata('user',$user);
				redirect(base_url('awal/usern'));
			} else {
				$this->session->set_userdata('username','Data tidak ditemukan!!!');
				redirect(base_url('awal/'));
			}
		} else {
			$data3 = array('username' => $user, 'Idpetugas' => $id );
			$cek2 = $this->mdl->cek_log($data3)->num_rows();
			if ($cek2>0) {
				$lihat2 = $this->mdl->cek_log($data3)->row();
				$cek_level2 = array('alamat' => $lihat2->alamat, 'level' => $lihat2->level );
				$this->session->set_userdata($cek_level2);
				redirect(base_url('awal/pelayan'));
			} else {
				$this->session->set_userdata('username','Data tidak ditemukan!!!');
				redirect(base_url('awal/'));
			}
		}
		$this->session->sess_destroy();
		
	}
	/*public function halo()
	{
		$petugas = $this->session->userdata('username');
		$ide = $this->session->userdata('id');
		if ($petugas==""&&$ide=="") {
			echo "Eror";
			redirect(base_url('awal/'));
		} else {
			redirect(base_url('awal/pelayan'));
		}
		$this->session->sess_destroy();
	}*/
	
	public function register_petugas()
	{
		$data_reg['petugas'] = $this->mdl->reg_petugas()->result();
		$this->load->view('register_petugas', $data_reg);
	}
	public function cek_petugas()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jk = $this->input->post('jk');
		$jabatan = $this->input->post('jabatan');
		$alamat = $this->input->post('alamat');
		$ttl = $this->input->post('ttl');
		$email = $this->input->post('email');
		$no_ktp = $this->input->post('no_ktp');
		$hp = $this->input->post('hp');
		
		$where = array(
			'nama' => $nama,
			'username' => $username,
			'password' => md5($password),
			'jk' => $jk,
			'jabatan' => $jabatan,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'email' => $email,
			'no_ktp' => $no_ktp,
			'hp' => $hp,
		);
		$this->mdl->cek_data($where);
		redirect(base_url('awal/login_petugas'));
	}
	
	public function pelayan()
	{
		//$jenis = $this->session->userdata('id_jenis');
		//echo $jenis;
		$data['antrian'] = $this->mdl->data($jenis)->result();
		$this->load->view('petugas',$data);
	}
	/*Controller buat Tellernya blom dibuat yaa mell */
	public function teller($antri)
	{
		$teller = array('id_antrian' => $antri, 'id_costumer' => $this->session->userdata('username'));
		$this->mdl->data_teller($teller);
		redirect(base_url('user/usern'));
	}
	public function ganti($status)
	{
		$id = $this->input->post('id');
		$data = array('status' => $status);
		$where = array('id_antrian' => $id);
		$this->mdl->ganti($data,$where);
		redirect(base_url('awal/pelayan'));
	}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */ ?>