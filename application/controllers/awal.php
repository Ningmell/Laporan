<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class awal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_loginPetugas');
	}
	
	public function index()
	{
		$this->load->view('login_petugas');
	}
	public function petugas()
	{
		$user = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where = array('username' => $user);

		$cek = $this->model_loginPetugas->cek_login($where);
		if ($cek->num_rows()>0) {
			foreach ($cek->result_array() as $key) {
				if (md5($password) == $key['password']) {
					$this->session->set_userdata($key);
					if ($key['level'] == '1') {
						redirect(base_url('Petugas/smua_antrian'));
					} else {
						if ($key['id_jenis'] == '1') {
							redirect(base_url('Petugas/'));
						} else if ($key['id_jenis'] == '2') {
							redirect(base_url('Petugas/'));
						}
					}
				} else {
					$this->session->set_flashdata(array(
						'pesan' => 'password salah!!',
						'type' => 'danger'
					));
					redirect(base_url('awal/'));
				}
			}
		} else {
			$this->session->set_flashdata(array(
				'pesan' => 'username salah',
				'type' => 'danger'
			));
			redirect(base_url('awal/'));
		}
	}
	
	
	public function register_petugas()
	{
		$data_reg['petugas'] = $this->model_loginPetugas->reg_petugas()->result();
		$this->load->view('register_petugas', $data_reg);
	}
	public function send_email($link,$penerima)
	{
		$config = [
		'mailtype'  => 'html',
        'charset'   => 'utf-8',
        'protocol'  => 'smtp',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_user' => 'amel56139@gmail.com',  // Email gmail
        'smtp_pass'   => 'Malik676',  // Password gmail
        'smtp_crypto' => 'ssl',
        'smtp_port'   => 465,
        'crlf'    => "\r\n",
        'newline' => "\r\n"];
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from('amel56139@gmail.com', 'Mell mell');
		$this->email->to($penerima);
		$this->email->subject('Login Petugasx');
		$this->email->message($link);
		
		$tes = $this->email->send();
		if ($tes) {
			echo "Yes";
		} else {
			echo "No";
		}
		redirect('awal/');
	}
	public function cek_petugas()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jk = $this->input->post('jk');
		$id_jenis = $this->input->post('id_jenis');
		$alamat = $this->input->post('alamat');
		$ttl = $this->input->post('ttl');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$no_ktp = $this->input->post('no_ktp');
		$hp = $this->input->post('hp');
		

		$cek = $this->model_loginPetugas->cek_username($username);

		if ($cek->num_rows() > 0) {
			$this->session->set_flashdata(array(
				'pesan' => "username sudah digunakan.",
				'type' => "warning"
			));
			redirect(base_url('awal/register_petugas'));
		}

		$id_petugas = strtoupper(substr(md5(time().$email.$username), 0,8));

		$where = array(
			'id_petugas' => $id_petugas,
			'nama' => $nama,
			'username' => $username,
			'password' => md5($password),
			'jk' => $jk,
			'id_jenis' => $id_jenis,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'email' => $email,
			'level' => $level,
			'no_ktp' => $no_ktp,
			'hp' => $hp,
		);
		
		$this->model_loginPetugas->cek_data($where);
		$konfir = base_url('/awal/veri/'.$id_petugas);
		$this->send_email($konfir,$email);
		redirect(base_url('awal/'));
	}
	public function veri()
	{
		$id = $this->uri->segment(3);
		$data = array('status' => '1' );
		$where = array('id_petugas' => $id);
		$this->model_loginPetugas->konfirmasi($data,$where);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('awal/');
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

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */ ?>