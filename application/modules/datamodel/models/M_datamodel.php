
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_datamodel extends CI_Model
{

	protected $table = '';

	public function __construct()
	{
		parent::__construct();
	}

	function get_gedung()
	{
		$where = [
			'active'      => '1',
		];
		$data = $this->db->get_where('tbl_gedung', $where)->result();
		return $data;
	}

	function data_model()
	{
		$data_model = $this->db->get('tbl_model')->result();
		return $data_model;
	}
}

/* End of file: M_datamodel.php */
