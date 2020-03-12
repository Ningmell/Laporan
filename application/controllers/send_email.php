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

            $this->load->library('email',$config);
            $this->email->set_newline("\r\n");
            $this->email->from('amel56139@gmail.com', 'Mell mell');
            $this->email->to('iansyahalvey@gmail.com');
            $this->email->subject('Login Petugasx');
            $this->email->message('helo');
            
            $tes = $this->email->send();
            if ($tes) {
                  echo "Yes";
            } else {
                  echo "No";
            }
        
	}

}

/* End of file  */
/* Location: ./application/controllers/ */