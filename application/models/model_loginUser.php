<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_loginUser extends CI_Model {

	public $variable;


	public function cek($where)
	{
		$this->db->where($where);
		return $this->db->get('coustumer');
	}
	function data_register()
	{
		return $this->db->get('coustumer');
	}
	function cek_reg($cek_data)
	{
		$this->db->insert('coustumer',$cek_data);
	}
	function cek_user($username)
	{
		return $this->db->get_where('coustumer', array('username' => $username));
	}
	public function konfir($data,$where)
	{
		$this->db->update('coustumer',$data,$where);
	}

}

/* End of file model_loginUser.php */
/* Location: ./application/models/model_loginUser.php */