<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class M_drsitrack extends CI_Model

{
	protected $table = 'tbl_finding'; // Ganti dengan nama tabel Anda

	public function __construct()
	{
		parent::__construct();
	}

	public function get_gedung()
	{
		$where = ['active' => '1'];
		$data = $this->db->get_where('tbl_gedung', $where)->result();
		return $data;
	}

	public function getData($gedung, $start, $end, $rangeDate)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('tbl_defect', 'tbl_finding.defect_stage = tbl_defect.id_defect', 'left');
		$this->db->join('tbl_defect_sub_class', 'tbl_finding.defect_name2 = tbl_defect_sub_class.id_defect_sub_class', 'left');

		// Filter berdasarkan gedung
		if ($gedung && $gedung != 'all') { // Tambahkan kondisi != 'all'
			$this->db->where('gedung', $gedung);
		}

		// Filter berdasarkan tanggal
		if ($start && $end) {
			$this->db->where('date >=', $start);
			$this->db->where('date <=', $end);
		}

		// Filter berdasarkan rentang tanggal jika $start dan $end kosong
		if (!$start && !$end && !empty($rangeDate)) {
			$this->db->where_in('date', $rangeDate);
		}

		$query = $this->db->get();
		return $query->result_array();
	}
}
