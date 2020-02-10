<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_loginUser');
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

		$cek_user = $this->model_loginUser->cek($where);
		if ($cek_user->num_rows()>0) {
			foreach ($cek_user->result_array() as $key) {
			$this->session->set_userdata($key);
				if (md5($password) == $key['password']) {
					redirect(base_url('data_user/'));
				} else {
					$this->session->set_flashdata(array(
						'pesan' => 'Password Salah!!',
						'type' => 'danger'
					));
					redirect(base_url('user/'));
				}
			}
		} else {
			$this->session->set_flashdata(array(
				'pesan' => 'Username Salah!!',
				'type' => 'danger'
			));
			redirect(base_url('user/'));
		}
	}
	public function reg()
	{
		$data['coustumer'] = $this->model_loginUser->data_register()->result();
		$this->load->view('register',$data);
	}
	public function kirim_email($link,$penerima)
	{ //AmeliaMalik8367
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

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('amel56139@email.com', 'Amel Lia');
        $this->email->to($penerima);
        
        $this->email->subject('Silahkan Coba Login');
        // $this->email->message("COBA COBA,, <br><br> Klik <strong><a href='
		// $http = (isset($_SERVER['HTTPS'])) ? https:// : http://;'
		// $url = str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
		// $config['base_url'] = $http . $_SERVER['SERVER_NAME'] . $url;
		// </a></strong> untuk melakukan Login Antrian Online");
		$this->email->message($link);

        $tes = $this->email->send();
        if ($tes) {
        	echo "berhasil";
        }else{
        	echo "gagal";
        }
        redirect(base_url('user/'));
        // return $this->email->send();
	}
	public function regis()
	{
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$ttl = $this->input->post('ttl');
		$hp = $this->input->post('hp');
		$ktp = $this->input->post('no_ktp');

		$cek_username = $this->model_loginUser->cek_user($username);
		if ($cek_username->num_rows() > 0) 
		{
			$this->session->set_flashdata(array(
				'pesan' => 'Username sudah digunakan',
				'type' => 'danger'
			));
			redirect(base_url('user/reg'));
		}

		$id_user = strtoupper(substr(md5(time().$email.$username), 0,8));

		$cek_data = array( 
			'id_costumer' => $id_user,
			'nama' => $nama, 
			'username' => $username, 
			'password' => md5($password), 
			'email' => $email,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'hp' => $hp,
			'no_ktp' => $ktp,
		);
		$this->model_loginUser->cek_reg($cek_data);
		$konfirmasi = base_url('/user/verifikasi/'.$id_user);
		$this->kirim_email($konfirmasi,$email);
		redirect(base_url('user/'));
	}
	function verifikasi()
	{
		$id = $this->uri->segment(3);
		$data = array('status' => '1');
		$where = array('id_costumer' => $id);
		$this->model_loginUser->konfir($data,$where);
	}
	
}

/* End of file  */
/* Location: ./application/controllers/ */