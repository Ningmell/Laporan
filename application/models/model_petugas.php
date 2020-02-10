<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_petugas extends CI_Model {

	public $variable;

	
	public function data($jenis)
	{
		$this->db->where('id_jenis', $jenis);
		return $this->db->get('antrian');
	}
	public function data_t($jenis)
	{
		return $this->db->get_where('antrian', array('id_jenis' => '2'));
	}
	public function smua_data()
	{
		return $this->db->get('antrian');
	}
	public function ganti($data,$where)
	{
		$this->db->update('antrian', $data, $where);
	}
	public function prosing($data,$where)
	{
		$this->db->update('antrian', $data, $where);
	}
	public function d_petugas()
	{
		return $this->db->get('petugas');
	}
	public function save_petugas($data)
	{
		return $this->db->get_where('petugas', $data);
	}
	public function hapus_data($username)
	{
		$this->db->where('username', $username);
		return $this->db->delete('petugas');
	}

}

/* End of file  */
/* Location: ./application/models/ */