<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mdl extends CI_Model 
{
	function cek_login($where)
	{
		$this->db->where($where);
		return $this->db->get('petugas');
	}
	public function cek($where)
	{
		$this->db->where($where);
		return $this->db->get('coustumer');
	}
	function cek_log($data_login)
	{
		$this->db->where($data_login);
		return $this->db->get('petugas');
	}
	function data_register()
	{
		return $this->db->get('coustumer');
	}
	function reg_petugas()
	{
		return $this->db->get('petugas');
	}
	function cek_data($where)
	{
		$this->db->insert('petugas', $where);
	}
	function cek_reg($cek_data)
	{
		$this->db->insert('coustumer',$cek_data);
	}
	public function antrian()
	{
		return $this->db->get('antrian');
	}
	public function data($id_jenis)
	{
		$this->db->where($id_jenis);
		return $this->db->get('antrian');
	}
	public function tambah_antrian($data)
	{
		$this->db->insert('antrian', $data);
	}
	public function ganti($data,$where)
	{
		$this->db->update('antrian', $data, $where);
	}
	public function konfir($data,$where)
	{
		$this->db->update('coustumer',$data,$where);
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */ ?>