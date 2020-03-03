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
	public function row_data()
	{
		return $this->db->get('jenis');
	}
	public function data_teller($teller)
	{
		$this->db->insert('antrian',$teller);
	}
	public function data_customer()
	{
		return $this->db->get('coustumer');
	}
	public function save_data($data)
	{
		$this->db->insert('coustumer', $data);
	}
	public function save_edit($data, $where)
	{
		$this->db->update('coustumer', $data, $where);
	}
	public function save_hpus($tabel,$where)
	{
		$this->db->delete($tabel,$where);
	}
	public function konek_sql()
	{
		return array(
			'user' => 'root',
			'pass' => '',
			'db' => 'antrian_online',
			'host' => 'localhost'
		);
	}

}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */