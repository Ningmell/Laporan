<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jenis extends CI_Model {

	

	public function data_jenis()
	{
		return $this->db->get('jenis');
	}
	public function get_sql_detail()
	{
		return array(
			'user' => 'root',
			'pass' => '',
			'db' => 'antrian_online',
			'host' => 'localhost'
		);
	}
}

/* End of file model_jenis.php */
/* Location: ./application/models/model_jenis.php */