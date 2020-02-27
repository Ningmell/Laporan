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
		$this->db->insert('petugas', $data);
	}
	public function cek_username($username)
	{
		return $this->db->get_where('petugas', array('username' => $username ));
	}
	public function edit_data($data,$where)
	{
		$this->db->update('petugas', $data, $where);
	}
	public function hapus_data($tabel,$where)
	{
		$this->db->delete($tabel, $where);
	}
	public function detail_profil()
	{
		return $this->db->get('petugas');
	}
	public function data_jenis()
	{
		return $this->db->get('jenis');
	}
	public function get_sql_details()
	{
		return array(
			'user' => 'root',
			'pass' => '',
			'db' => 'antrian_online',
			'host' => 'localhost'
		);
	}

}

/* End of file  */
/* Location: ./application/models/ */