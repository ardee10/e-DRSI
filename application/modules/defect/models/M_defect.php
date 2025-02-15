<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_defect extends CI_Model
{

	protected $table = '';

	public function __construct()
	{
		parent::__construct();
	}

	function dataDefect()
	{

		/* SELECT * FROM tbl_defect RIGHT JOIN tbl_defect_class ON  tbl_defect.id_defect = tbl_defect_class.id_defect WHERE  tbl_defect.id_defect =1 */
		$datadefect = $this->db->get('tbl_defect')->result();
		return $datadefect;
	}

	function defectClass()
	{


		$this->db->from('tbl_defect');
		$this->db->join('tbl_defect_class', 'tbl_defect.id_defect = tbl_defect_class.id_defect', 'left');

		$defectClass = $this->db->get()->result();
		return $defectClass;
	}

	function defectClass1()
	{
		$this->db->select('*');
		$this->db->from('tbl_defect');
		$defectClass1 = $this->db->get()->result();
		return $defectClass1;
	}
	function subdefectClass()
	{
		/* SELECT * FROM tbl_defect_sub_class LEFT JOIN tbl_defect ON tbl_defect_sub_class.id_defect = tbl_defect.id_defect LEFT JOIN tbl_defect_class ON tbl_defect_sub_class.id_defect_class = tbl_defect_class.id_defect_class */
		$this->db->select('*');
		$this->db->from('tbl_defect_sub_class');
		$this->db->join('tbl_defect', 'tbl_defect_sub_class.id_defect = tbl_defect.id_defect', 'left');
		$this->db->join('tbl_defect_class', 'tbl_defect_sub_class.id_defect_class = tbl_defect_class.id_defect_class', 'left');
		$subdefectClass = $this->db->get()->result();
		return $subdefectClass;
	}


	/* Tambah Data Defect */
	function addDefectStage()
	{
		$stage = $this->input->post('nama_defect');
		$where = [
			'id_defect' => $this->input->post('id_defect'),
		];
		$exist = $this->db->get_where('tbl_defect', $where)->row();

		if ($exist) {
			$data = [
				'id_defect' => $this->input->post('id_defect'),
				'nama_defect' =>  $this->input->post('nama_defect')

			];
			$this->db->where('id_defect', $this->input->post('id_defect'));
			$this->session->set_flashdata('flash', 'Data Defect Stage Berhasil diUpdate');
			$this->db->update('tbl_defect', $data);
		} else {
			$data = [

				'id_defect' 	=> $this->input->post('id_defect'),
				'nama_defect' 	=> $this->input->post('nama_defect')
			];
			$this->session->set_flashdata('flash', 'Data Defect Stage Berhasil Ditambahkan ');
			$this->db->insert('tbl_defect', $data);
			redirect('Defect', 'refresh');
		}
	}

	/* Edit Defect Stage */
	function detailDefectStageId($id)
	{
		$data = $this->db->get_where('tbl_defect', ['id_defect' => $id]);
		return $data;
	}

	/* Hapus Defect Stage */
	public function hapusDefectStage($id)
	{
		$this->db->where($id);
		return $this->db->delete('tbl_defect');
	}

	/* Tambah Defect Class */
	function addDefectClass()
	{

		// $stage = $this->input->post('nama_defect');
		$where = [
			'id_defect' => $this->input->post('id_defect_class'),
		];
		$exist = $this->db->get_where('tbl_defect_class', $where)->row();

		if ($exist) {
			$data = [
				'id_defect_class' => $this->input->post('id_defect_class'),
				'nama_defect_class' =>  $this->input->post('nama_defect_class'),
				'id_defect' =>  $this->input->post('id_defect')

			];
			$this->db->where('id_defect_class', $this->input->post('id_defect_class'));
			$this->session->set_flashdata('flash', 'Data Defect Name Berhasil diUpdate');
			$this->db->update('tbl_defect_class', $data);
		} else {
			$data = [

				'id_defect_class' 	=> $this->input->post('id_defect_class'),
				'nama_defect_class' 	=> $this->input->post('nama_defect_class'),
				'id_defect' 	=> $this->input->post('id_defect')
			];
			$this->session->set_flashdata('flash', 'Data Defect Name Berhasil Ditambahkan ');
			$this->db->insert('tbl_defect_class', $data);
			redirect('Defect/defectClass', 'refresh');
		}
	}

	/* Hapus Defect Name */
	public function hapusDefectName($id)
	{
		$this->db->where($id);
		return $this->db->delete('tbl_defect_class');
	}

	/* Edit Defect Stage */
	function detailDefectNameId($id)
	{
		$data = $this->db->get_where('tbl_defect_class', ['id_defect_class' => $id]);
		return $data;
	}

	/* Defet Name Select Auto */
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

	function addDefectSubClass()
	{
		// $stage = $this->input->post('nama_defect');
		$where = [
			'id_defect_sub_class' => $this->input->post('id_defect_sub_class'),
		];
		$exist = $this->db->get_where('tbl_defect_sub_class', $where)->row();

		if ($exist) {
			/* Update Data */
			$data = [
				'id_defect_sub_class' 	=> 	$this->input->post('id_defect_sub_class'),
				'nama_defect_sub_class' =>  $this->input->post('nama_defect_sub_class'),
				'id_defect' 			=>  $this->input->post('id_defect'),
				'id_defect_class' 		=>  $this->input->post('id_defect_class')

			];
			$this->db->where('id_defect_sub_class', $this->input->post('id_defect_sub_class'));
			$this->session->set_flashdata('flash', 'Data Defect Standart Name Berhasil diUpdate');
			$this->db->update('tbl_defect_sub_class', $data);
		} else {
			/*New Data */
			$data = [

				'id_defect_sub_class' 	=> 	$this->input->post('id_defect_sub_class'),
				'nama_defect_sub_class' =>  $this->input->post('nama_defect_sub_class'),
				'id_defect' 			=>  $this->input->post('id_defect'),
				'id_defect_class' 		=>  $this->input->post('id_defect_class')
			];
			$this->session->set_flashdata('flash', 'Data Defect Standart Name Berhasil Ditambahkan ');
			$this->db->insert('tbl_defect_sub_class', $data);
			redirect('Defect/subdefectClass', 'refresh');
		}
	}

	function detailDefectStandartId($id)
	{
		/* SELECT * FROM tbl_defect_sub_class LEFT JOIN tbl_defect ON tbl_defect_sub_class.id_defect = tbl_defect.id_defect LEFT JOIN tbl_defect_class ON tbl_defect_sub_class.id_defect_class = tbl_defect_class.id_defect_class */
		$this->db->select('*');
		$this->db->from('tbl_defect_sub_class');
		$this->db->join('tbl_defect', 'tbl_defect_sub_class.id_defect = tbl_defect.id_defect', 'left');
		$this->db->join('tbl_defect_class', 'tbl_defect_sub_class.id_defect_class = tbl_defect_class.id_defect_class', 'left');
		$this->db->where('tbl_defect_sub_class.id_defect_sub_class', $id);
		$subdefectStandart = $this->db->get()->row();
		return $subdefectStandart;
	}

	/* Hapus Defect Standart Name */
	public function hapusDefectStandart($id)
	{
		$this->db->where($id);
		return $this->db->delete('tbl_defect_sub_class');
	}
}

/* End of file: M_defect.php */
