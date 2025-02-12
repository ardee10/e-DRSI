<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Home');
		$this->load->helper('tgl_indo');
	}

	public function index()
	{

		if (!$this->session->userdata('username')) {
			redirect('auth');
		} else {

			$data = [
				'title' => 'DATA DRSI (Defective Reduction Throught Self Inspection)',
				'user' => $this->db->get_where('tbl_user', ['username' =>  $this->session->userdata('username')])->row(),
				'gedung' => $this->M_Home->get_gedung(),
				'finding' => $this->M_Home->dashboard()
			];
			$this->template->load('part/template', 'index', $data);
		}
	}

	/* Hapus data Finding */

	function hapusFinding($id)
	{

		$id = [
			'id_finding' => $id
		];
		$this->M_Home->hapusFinding($id);
		$this->session->set_flashdata('flash', 'Data berhasil dihapus');
		redirect('Home', 'refresh');
	}

	/* Data Finding By ID */
	// http://192.168.44.97/e-drsi/Home/detailFinding/33
	public function detailFinding($id)
	{
		$data =  $this->M_Home->detailFinding($id);
		echo json_encode($data);
	}
}

/* End of file: Home.php */
