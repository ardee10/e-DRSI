<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cell extends CI_Model
{

	protected $table = '';

	public function __construct()
	{
		parent::__construct();
	}

	function dataCell()
	{
		$dataCell =  $this->db->get('tbl_cell')->result();
		return $dataCell;
	}
}

/* End of file: M_cell.php */
