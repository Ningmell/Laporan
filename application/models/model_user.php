<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_user extends CI_Model {

	public $variable;

	public function antrian($id)
	{
		$this->db->where('id_jenis', $id);
		return $this->db->get('antrian');
	}
	public function tambah_antrian($data)
	{
		$this->db->insert('antrian', $data);
	}
	public function data_teller($teller)
	{
		$this->db->insert('antrian',$teller);
	}

}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */