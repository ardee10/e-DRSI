<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Defect extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_defect');
	}

	public function index()
	{
		if (!$this->session->userdata('username')) {
			redirect('auth');
		} else {
			$data = [
				'title'  => 'DATA DEFECT',
				'user' 	=> $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row(),
				'defect'   => $this->M_defect->dataDefect()
			];
			$this->template->load('part/template', 'index_defect', $data);
		}
	}

	/* Tambah data Defect */
	function addDefectStage()
	{
		$this->session->set_flashdata('flash', 'Data Defect Stage Berhasil Ditambahkan');
		$this->M_defect->addDefectStage();
		redirect('Defect', 'refresh');
	}

	/* Edit Data Defect */
	function detailDefecftStage($id)
	{
		$detailDefectStage =  $this->M_defect->detailDefectStageId($id)->row();
		echo json_encode($detailDefectStage);
	}

	/* Hapus Data Defect */
	function hapusDefectStage($id)
	{
		$id = [
			'id_defect' => $id
		];

		$this->M_defect->hapusDefectStage($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Defect', 'refresh');
	}

	function defectClass()
	{
		/* Defect Class */

		if (!$this->session->userdata('username')) {
			redirect('auth');
		} else {
			$data = [
				'title'  => 'DATA DEFECT CLASS',
				'user' 	=> $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row(),
				'defectclass'    => $this->M_defect->defectClass(),
				'defectclass1'    => $this->M_defect->defectClass1()
			];
			$this->template->load('part/template', 'index_defect_class', $data);
		}
	}
	function subdefectClass()
	{
		/* Defect Class */

		if (!$this->session->userdata('username')) {

			redirect('Auth');
		} else {
			$data = [
				'title'  		=> 'DATA DEFECT STANDART NAME',
				'user' 			=> $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row(),
				'stage'   		=> $this->M_defect->dataDefect(),
				'defectclass'   => $this->M_defect->subdefectClass()
			];

			$this->template->load('part/template', 'index_sub_defect_class', $data);
		}
	}
	/* Tambah Defect Class */
	function addDefectClass()
	{
		$this->session->set_flashdata('flash', 'Data Defect Name Berhasil Ditambahkan');
		$this->M_defect->addDefectClass();
		redirect('Defect/defectClass', 'refresh');
	}

	/* Hapus Data Defect */
	function hapusDefectName($id)
	{
		$id = [
			'id_defect_class' => $id
		];
		$this->M_defect->hapusDefectName($id);
		$this->session->set_flashdata('flash', 'Data Defect Name berhasil dihapus');
		redirect('Defect/defectClass', 'refresh');
	}
	/* Edit Data Defect Name */
	function detailDefecftName($id)
	{
		$detailDefectName =  $this->M_defect->detailDefectNameId($id)->row();
		echo json_encode($detailDefectName);
	}

	/* Defect Stage Select */
	function defectStage($id)
	{
		$data = $this->M_defect->defectName($id);
		echo json_encode($data);
	}

	/* Tambah Defect Standart Name */
	function addDefectStandart()
	{
		$this->session->set_flashdata('flash', 'Data Defect Standart Name Berhasil Ditambahkan');
		$this->M_defect->addDefectSubClass();
		redirect('Defect/subdefectClass', 'refresh');
	}

	/* Edit Data Defect Standart Name */
	function detailDefecStandart($id)
	{
		$detailDefecStandart =  $this->M_defect->detailDefectStandartId($id);
		echo json_encode($detailDefecStandart);
	}

	/* Hapus Data Defect */
	function hapusDefectStandart($id)
	{
		$id = [
			'id_defect_sub_class' => $id
		];
		$this->M_defect->hapusDefectStandart($id);
		$this->session->set_flashdata('flash', 'Data Defect Standart Name berhasil dihapus');
		redirect('Defect/subdefectClass', 'refresh');
	}
}

/* End of file: Defect.php */
