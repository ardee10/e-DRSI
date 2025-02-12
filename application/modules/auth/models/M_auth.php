<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

	protected $table = '';

	// fungsi cek login
	function cek_login($username, $password)
	{
		$this->db->select("*");
		$this->db->from("tbl_user");
		$this->db->where("username", $username);
		$query = $this->db->get();
		$user = $query->row();
		/**
		 * Check password
		 */
		if (!empty($user)) {
			if (password_verify($password, $user->password)) {
				return $query->result();
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}
}

/* End of file: M_auth.php */
