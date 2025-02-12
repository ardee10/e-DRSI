<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datamodel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_datamodel');
	}

	public function index()
	{
		$data = [

			'title' 	=> 'DATA MODEL',
			'gedung'    => $this->M_datamodel->get_gedung(),
			'user' 		=> $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row(),
			'model'    	=> $this->M_datamodel->data_model()
		];

		$this->template->load('part/template', 'index', $data);
	}
}

/* End of file: Datamodel.php */
