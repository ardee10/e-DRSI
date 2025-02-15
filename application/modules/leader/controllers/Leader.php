<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leader extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_leader');
	}

	public function index()
	{
		if (!$this->session->userdata('username')) {
			redirect('auth');
		} else {
			$data = [
				'title'  	=> 'DATA LEADER',
				'user' 		=> $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row(),
				'gedung'	=> $this->M_leader->get_gedung(),
				'cell'		=> $this->M_leader->get_gedung(),
				'area'		=> $this->M_leader->getArea(),
				'leader'   	=> $this->M_leader->dataLeader()

			];
			$this->template->load('part/template', 'index', $data);
		}
	}

	/* Data Cell */
	function data_cell($id)
	{
		$data = $this->M_leader->cell($id);
		echo json_encode($data);
	}

	function addLeader()
	{

		/* Tambah Data Leader */
		$this->session->set_flashdata('flash', 'Data Leader berhasil ditambahkan');
		$this->M_leader->addLeader();
		redirect('Leader', 'refresh');
	}

	/* Edit data leader */
	function detailLeader($id)
	{
		$detailLeader =  $this->M_leader->detailLeader($id);
		echo json_encode($detailLeader);
	}

	/* Hapus data leader */
	function hapusLeader($id)
	{
		$id = [
			'id_leader' => $id
		];
		$this->M_leader->hapusLeader($id);
		$this->session->set_flashdata('flash', 'Data Leader berhasil dihapus');
		redirect('Leader', 'refresh');
	}
}

/* End of file: Leader.php */
