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
	public function antrian($id)
	{
		$this->db->where('id_jenis', $id);
		return $this->db->get('antrian');
	}
	public function data($jenis)
	{
		$this->db->where('id_jenis', $jenis);
		return $this->db->get('antrian');
	}
	public function data_t($jenis)
	{
		return $this->db->get_where('antrian', array('id_jenis' => '2'));
	}
	public function tambah_antrian($data)
	{
		$this->db->insert('antrian', $data);
	}
	public function data_teller($teller)
	{
		$this->db->insert('antrian',$teller);
	}
	public function ganti($data,$where)
	{
		$this->db->update('antrian', $data, $where);
	}
	public function konfir($data,$where)
	{
		$this->db->update('coustumer',$data,$where);
	}
	public function konfirmasi($data,$where)
	{
		$this->db->update('petugas',$data,$where);
	}

	public function cek_username($username)
	{
		return $this->db->get_where('petugas', array('username' => $username));
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */ ?>