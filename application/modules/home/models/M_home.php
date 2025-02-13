<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

	protected $table = '';

	public function __construct()
	{
		parent::__construct();
	}

	function dashboard()
	{
		$this->db->select('*');
		$this->db->from('tbl_finding');
		$dataDashboard = $this->db->get()->result();
		return $dataDashboard;
	}

	function get_gedung()
	{
		$where = [
			'active'      => '1'
		];
		$data = $this->db->get_where('tbl_gedung', $where)->result();
		return $data;
	}

	/* Hapus Data Finding */

	function hapusFinding($id)
	{

		$this->db->where($id);
		return $this->db->delete('tbl_finding');
	}

	function detailFinding($id)
	{
		// 	/* SELECT * FROM tbl_finding LEFT JOIN tbl_defect_sub_class ON tbl_finding.defect_name2 = tbl_defect_sub_class.id_defect_sub_class WHERE tbl_finding.id_finding = 8; */
		$this->db->select('*');
		$this->db->from('tbl_finding');
		$this->db->join('tbl_defect_sub_class', 'tbl_finding.defect_name2 = tbl_defect_sub_class.id_defect_sub_class', 'left');
		$this->db->where('tbl_finding.id_finding', $id);
		$datafindingid = $this->db->get()->row();
		return $datafindingid;
	}

	/* Defect Finding Bulan */
	// function getDefectData($bulan) {}
}

/* End of file: M_home.php */
