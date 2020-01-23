<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class send_email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
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
            'newline' => "\r\n"
            ];

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('amel56139@email.com', 'Amel Lia');
            $this->email->to('ningmell8367@gmail.com');
            
            $this->email->subject('Silahkan Coba Login');
            // $this->email->message("COBA COBA,, <br><br> Klik <strong><a href='
			// $http = (isset($_SERVER['HTTPS'])) ? https:// : http://;'
			// $url = str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
			// $config['base_url'] = $http . $_SERVER['SERVER_NAME'] . $url;
			// </a></strong> untuk melakukan Login Antrian Online");
            $this->email->message("heleh heleh");

            // return $this->email->send();
            $tez = $this->email->send();
            if ($tez) {
                  echo "berhasil";
            }else{
                  echo "gagal";
            }
        
	}

}

/* End of file  */
/* Location: ./application/controllers/ */