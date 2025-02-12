<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cell extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cell');
	}

	public function index()
	{
		/* DATA CELL */
		$data = [

			'title' => 'DATA CELL',
			'user' 			=> $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row(),
			'cell' => $this->M_cell->dataCell()

		];

		$this->template->load('part/template', 'index_cell', $data);
	}
}

/* End of file: Cell.php */
