<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		$this->load->helper('tgl_indo');
	}

	/* Data Finding */
	public function DisplayFinding()
	{

		$bulan = date("m", strtotime(date("Y-m-d")));
		$tahun = date("Y", strtotime(date("Y-m-d")));
		$data = [
			'bulan'     => $bulan,
			'tahun'     => $tahun,
			'gedung' 	=> $this->M_dashboard->get_gedung(),
			'dashboard' => $this->M_dashboard->dashboard(),

		];
		$this->load->view('part/header');
		$this->load->view('Display_Finding', $data);
		$this->load->view('part/_js');
	}

	public function getDefectData()
	{
		$data = $this->M_dashboard->grafikDefect();
		echo json_encode($data);
	}
	/* Top Member 10 */
	public function topMemberSelfInspect()
	{
		$topMemberSelfInspect = $this->M_dashboard->get_inspeksi();
		$arraypush = [];

		if ($topMemberSelfInspect) {
			foreach ($topMemberSelfInspect as $item) {
				// Cari index nama_leader yang sama di $arraypush
				$index = array_search($item->nama_leader, array_column($arraypush, 'nama_leader'));

				if ($index !== false) {
					// Jika ditemukan, tambahkan count2 ke item yang sudah ada
					$arraypush[$index]['count2'] += $item->count2;
				} else {
					// Jika tidak ditemukan, tambahkan item baru ke $arraypush
					$arraypush[] = [
						'nama_leader' => $item->nama_leader,
						'count2' => $item->count2
					];
				}
			}
		}

		echo json_encode($arraypush); // Output data dalam format JSON
	}
	public function DataFindingId($id)
	{
		$data =  $this->M_dashboard->DataFindingId($id);
		echo json_encode($data);
	}

	public function DataFindingBd($id = null)
	{ // Tambahkan nilai default null untuk $id
		try {

			if ($id === null || $id === 'all') { // Tangani kasus $id kosong atau 'all'
				$data = $this->M_dashboard->dataFindingBd(); // Panggil fungsi model tanpa parameter
				// print_r($data);
			} else {
				$data = $this->M_dashboard->dataFindingBd($id); // Panggil fungsi model dengan parameter $id
			}

			if ($data) {
				header('Content-Type: application/json');
				echo json_encode($data);
			} else {
				// Handle jika data tidak ditemukan
				header('Content-Type: application/json');
				echo json_encode(array('error' => 'Data tidak ditemukan'));
			}
		} catch (Exception $e) {
			// Tangkap error dan log atau tampilkan
			log_message('error', $e->getMessage()); // Log error
			header('Content-Type: application/json');
			echo json_encode(array('error' => 'Terjadi kesalahan di server: ' . $e->getMessage())); // Tampilkan pesan error
		}
	}

	function data_cell($id)
	{
		$data = $this->M_dashboard->cell($id);
		echo json_encode($data);
	}
	/* Defect Stage */
	function defectStage($id)
	{
		$data = $this->M_dashboard->defectName($id);
		echo json_encode($data);
	}
	/* Defect Sub Name */
	function subdefectName($id)
	{
		/* http://192.168.44.97/bc-finding/dashboard/subdefectName/CC */
		$data = $this->M_dashboard->subdefectName($id);
		echo json_encode($data);
	}

	function formSubmit()
	{
		// if session_name()

		$data = [
			'title' 		=> 'DEFECT REDUCTION (DR) & SELF INSPECTION (SI)',
			'gedung' 		=> $this->M_dashboard->get_gedung(),
			'defectStage' 	=> $this->M_dashboard->defectStage(),
			'defectSource' 	=> $this->M_dashboard->defectSource(),
			'selfInspect' 	=> $this->M_dashboard->selfInspect(),
			'defectArea' 	=> $this->M_dashboard->defectArea()
		];
		$this->load->view('part/header');
		$this->load->view('formSubmit', $data);
		$this->load->view('part/_js');
	}

	/* Simpan Data Finding */
	function submitFinding()
	{
		$this->session->set_flashdata('flash', 'Terimakasih, Data Berhasil ditambahkan');
		$this->M_dashboard->submit_finding();
		redirect('', 'refresh');
	}

	/* Export To Excel File */
}

/* End of file: Dashboard.php */
