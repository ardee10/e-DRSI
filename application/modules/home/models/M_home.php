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

	function defectStage()
	{
		$defectStage = $this->db->get('tbl_defect')->result();
		return $defectStage;
	}
	function defectSource()
	{
		$defectSource = $this->db->get('tbl_defect_source')->result();
		return $defectSource;
	}
	function selfInspect()
	{
		$selfInspect = $this->db->get('tbl_self_inspect')->result();
		return $selfInspect;
	}
	function defectArea()
	{
		$defectArea = $this->db->get('tbl_defect_area')->result();
		return $defectArea;
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

	/* Cell */
	function cell($id)
	{
		$query = $this->db->get_where('tbl_cell', ['kode_factory' => $id])->result();
		return $query;
	}

	function defectName($id)
	{
		/* SELECT * FROM tbl_defect LEFT JOIN tbl_defect_class ON tbl_defect.id_defect = tbl_defect_class.id_defect  */
		$this->db->select('*');
		$this->db->from('tbl_defect');
		$this->db->join('tbl_defect_class', 'tbl_defect.id_defect = tbl_defect_class.id_defect', 'left');
		$this->db->where('tbl_defect.id_defect', $id);
		$defectName = $this->db->get()->result();
		return $defectName;
	}

	function subdefectName($id)
	{
		$subdefectName = $this->db->get_where('tbl_defect_sub_class', ['id_defect_class' => $id])->result();
		return $subdefectName;
	}


	/* Submit Form DRSI */
	public function submit_finding()
	{
		// $res = [];

		$date 			=  $this->input->post('date');
		$gedung 		=  $this->input->post('gedung');
		$cell	 		=  $this->input->post('cell');
		$artikel 		=  $this->input->post('artikel');
		$model 			=  $this->input->post('model');
		$defect_stage 	=  $this->input->post('defect_stage');
		$defect_name 	=  $this->input->post('defectName');
		$defect_name2 	=  $this->input->post('defectName2');
		$pairs 			=  $this->input->post('pairs');
		$defect_source 	=  $this->input->post('defectSource');
		$self_inspect 	=  $this->input->post('selfInspect');
		$who_defect_go 	=  $this->input->post('who_defect_go');
		$count 			=  $this->input->post('count');
		$defect_area 	=  $this->input->post('defectArea');
		$who_stop_defect =  $this->input->post('who_stop_defect');
		$count2 		=  $this->input->post('count2');
		$remark 		= $this->input->post('remark');
		$nama_file  		= str_replace(' ', '_', $artikel) . '.png';
		$nama_file			= strtoupper($nama_file);

		/* Config File yang akan di Upload */
		$config['upload_path']          = './assets/img/img-finding/';
		$config['allowed_types'] 		= 'jpg|jpeg|png|gif';
		$config['file_name']           	= $nama_file;
		$config['max_size'] 			= 1024; // 1MB

		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!$this->upload->do_upload('picture')) {
			$this->upload->display_errors();
			// $res = [

			// 	'kode'		=> 'error',
			// 	'message'	=> $msg
			// ];
		} else {
			$this->upload->data();
			$data = [
				/* Datanya ada disini */
				'date'		=> $date,
				'gedung'	=> $gedung,
				'cell'		=> $cell,
				'artikel'	=> strtoupper($artikel),
				'model'		=> strtoupper($model),
				'defect_stage'		=> $defect_stage,
				'defect_name'		=> $defect_name,
				'defect_name2'		=> $defect_name2,
				'picture'			=> $nama_file,
				'pairs'				=> $pairs,
				'defect_source'		=> $defect_source,
				'self_inspect'		=> $self_inspect,
				'who_defect_go'		=> $who_defect_go,
				'count'				=> $count,
				'defect_area'		=> $defect_area,
				'who_stop_defect'	=> $who_stop_defect,
				'count2'			=> $count2,
				'remark'			=> $remark
			];
			$this->session->set_flashdata('flash', 'Terimakasih, Data Berhasil dikirim');
			$this->db->insert('tbl_finding', $data);
		}
		// return $res;
	}

	/* Data DRSI */

	function dataDrsi($where)
	{
		$where = $this->session->userdata('nik');
		$this->db->select('*');
		$this->db->from('tbl_finding');
		$this->db->join('tbl_defect_sub_class', 'tbl_finding.defect_name2 = tbl_defect_sub_class.id_defect_sub_class', 'left');
		$this->db->join('tbl_defect', 'tbl_finding.defect_stage = tbl_defect.id_defect', 'left');
		$this->db->where('tbl_finding.who_stop_defect', $where);
		$dataDashboard = $this->db->get()->result();
		return $dataDashboard;
	}

	function dataDrsiAll()
	{
		$this->db->select('*');
		$this->db->from('tbl_finding');
		$this->db->join('tbl_defect_sub_class', 'tbl_finding.defect_name2 = tbl_defect_sub_class.id_defect_sub_class', 'left');
		$this->db->join('tbl_defect', 'tbl_finding.defect_stage = tbl_defect.id_defect', 'left');
		$dataDrsiAll = $this->db->get()->result();
		return $dataDrsiAll;
	}
}

/* End of file: M_home.php */
