<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_loginPetugas extends CI_Model {

	public $variable;

	function cek_login($where)
	{
		$this->db->where($where);
		return $this->db->get('petugas');
	}
	function select_jenis()
	{
		return $this->db->get('jenis');
	}
	function reg_petugas()
	{
		return $this->db->get('petugas');
	}
	public function cek_username($username)
	{
		return $this->db->get_where('petugas', array('username' => $username));
	}
	function cek_data($where)
	{
		$this->db->insert('petugas', $where);
	}
	public function konfirmasi($data,$where)
	{
		$this->db->update('petugas',$data,$where);
	}

}

/* End of file  */
/* Location: ./application/models/ */