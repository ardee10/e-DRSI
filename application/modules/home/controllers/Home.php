<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->helper('tgl_indo');
	}

	/* Index Admin */
	public function index()
	{

		if (!$this->session->userdata('username')) {
			redirect('auth');
		} else {
			$bulan = date("m", strtotime(date("Y-m-d")));
			$tahun = date("Y", strtotime(date("Y-m-d")));
			$data = [
				'title' 	=> 'DATA DRSI (Defective Reduction Throught Self Inspection)',
				'bulan'		=> $bulan,
				'tahun'		=> $tahun,
				'user' 		=> $this->db->get_where('tbl_user', ['username' =>  $this->session->userdata('username')])->row(),
				'gedung' 	=> $this->M_home->get_gedung(),
				'finding' 	=> $this->M_home->dashboard()
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
		$this->M_home->hapusFinding($id);
		$this->session->set_flashdata('flash', 'Data berhasil dihapus');
		redirect('Home', 'refresh');
	}

	/* Data Finding By ID */
	// http://192.168.44.97/e-drsi/Home/detailFinding/33
	public function detailFinding($id)
	{
		$data =  $this->M_home->detailFinding($id);
		echo json_encode($data);
	}

	/* Mengambil data FIlter by Bulan */

	public function getDefectData($bulan)
	{

		$data = $this->M_home->getDefectData($bulan);
		echo json_encode($data);
	}

	/* Index Leader */

	public function PageLeader($where = null)
	{

		if (!$this->session->userdata('nik')) {
			redirect('auth/index_leader');
		} else {

			$data = [
				'title' 		=> 'Halaman Leader',
				'leader' 		=> $this->db->get_where('tbl_leader', ['nik' =>  $this->session->userdata('nik')])->row(),
				'drsidata'		=> $this->M_home->dataDrsi($where) //Benar
			];

			$this->template->load('part/template', 'index_leader', $data);
		}
	}

	/* Detail data finding */

	public function DataFindingId($id)
	{
		$data =  $this->M_home->DataFindingId($id);
		echo json_encode($data);
	}

	/* Open Form DRSI */
	public function drsiform()
	{

		if (!$this->session->userdata('nik')) {
			redirect('auth/index_leader');
		} else {

			$data = [
				'title' 		=> 'DEFECT REDUCTION (DR) & SELF INSPECTION (SI)',
				'gedung' 		=> $this->M_home->get_gedung(),
				'defectStage' 	=> $this->M_home->defectStage(),
				'defectSource' 	=> $this->M_home->defectSource(),
				'selfInspect' 	=> $this->M_home->selfInspect(),
				'defectArea' 	=> $this->M_home->defectArea(),
				'leader' 		=> $this->db->get_where('tbl_leader', ['nik' =>  $this->session->userdata('nik')])->row()
			];

			$this->template->load('part/template', 'formdrsi', $data);
		}
	}

	/* JSON FILE */

	function data_cell($id)
	{
		$data = $this->M_home->cell($id);
		echo json_encode($data);
	}

	/* Defect Stage */
	function defectStage($id)
	{
		$data = $this->M_home->defectName($id);
		echo json_encode($data);
	}

	/* Defect Sub Name */
	function subdefectName($id)
	{
		/* http://192.168.44.97/bc-finding/dashboard/subdefectName/CC */
		$data = $this->M_home->subdefectName($id);
		echo json_encode($data);
	}

	/* Simpan Data Finding */
	function submitFinding()
	{
		$this->session->set_flashdata('flash', 'Terimakasih, Data Berhasil ditambahkan');
		$this->M_home->submit_finding();
		redirect('Home/PageLeader', 'refresh');
	}

	/* Lihat Grafik user */

	public function displayGraph($where = null)
	{
		if (!$this->session->userdata('nik')) {
			redirect('auth/index_leader');
		} else {

			$where = $this->session->userdata('nik');
			$drsidata = $this->M_home->dataDrsi($where);
			if ($drsidata) {
				/* Jika ada datanya */
				$bulan = date('m', strtotime($drsidata[0]->date)); // Ambil bulan dari data pertama 
				$tahun = date('Y', strtotime($drsidata[0]->date)); // Ambil tahun dari data pertama
				$jumlahHari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); // Hitung jumlah hari dalam bulan
				$tanggalArray = []; // Array untuk menyimpan tanggal

				for ($i = 1; $i <= $jumlahHari; $i++) {
					$tanggal = date('Y-m-d', strtotime($tahun . '-' . $bulan . '-' . $i));
					$tanggalArray[] = $tanggal;
				}
				$dataGrafik = []; // Array untuk menyimpan data grafik

				foreach ($tanggalArray as $tanggal) {
					$jumlah = 0; // Inisialisasi jumlah untuk setiap tanggal
					$dataGrafik = []; // Array untuk menyimpan data grafik

					// Loop melalui data yang diambil dari database
					foreach ($drsidata as $data) {
						$tanggal = $data->date; // Ambil tanggal dari data
						$jumlah = $data->count2; // Ambil jumlah dari data

						// Periksa apakah tanggal sudah ada di array $dataGrafik
						if (isset($dataGrafik[$tanggal])) {
							// Jika sudah ada, tambahkan jumlahnya
							$dataGrafik[$tanggal]['jumlah'] += $jumlah;
						} else {
							// Jika belum ada, buat entri baru
							$dataGrafik[$tanggal] = [
								'tanggal' => $tanggal,
								'jumlah' => $jumlah
							];
						}
					}
					// Ubah format array agar sesuai dengan yang dibutuhkan oleh grafik
					$dataGrafikArray = [];
					foreach ($dataGrafik as $tanggal => $data) {
						$dataGrafikArray[] = [
							'tanggal' => $tanggal,
							'jumlah' => $data['jumlah']
						];
					}

					// Periksa apakah $dataGrafikArray kosong
					if (empty($dataGrafikArray)) {
						// Jika kosong, buat data default
						$dataGrafikArray[] = [
							'tanggal' 	=> date('Y-m-d'), // Tanggal saat ini
							'jumlah' 	=>  0

						];
					}
					$data['dataGrafik'] = $dataGrafikArray;
				}
			} else {
				echo "Data tidak ditemukan.";
			}

			$dataDefect = $this->db->get('tbl_defect')->result(); // Ambil data dari tbl_defect

			$dataGrafikDefect = [];
			foreach ($dataDefect as $defect) {
				$jumlah = $this->db->where('defect_stage', $defect->id_defect)->count_all_results('tbl_finding'); // Hitung jumlah pairs
				$dataGrafikDefect[] = [
					'nama_defect' => $defect->nama_defect,
					'jumlah' => $jumlah
				];
			}

			$data['title'] = 'GRAFIK';
			$data['leader'] = $this->db->get_where('tbl_leader', ['nik' => $this->session->userdata('nik')])->row();
			// $data['dataGrafik'] = $dataGrafikArray;

			if (isset($dataGrafikArray) && !empty($dataGrafikArray)) {
				$data['dataGrafik'] = $dataGrafikArray;
			} else {
				// echo 'ANDA BELUM MENGISI APAPUN'; // Atau tampilkan pesan lain yang sesuai
				$data['dataGrafik'] = 'ANDA BELUM MENGISI APAPUN';
			}
			$data['dataGrafikDefect'] = $dataGrafikDefect;
			$this->template->load('part/template', 'graph_leader', $data);
		}
	}
}

/* End of file: Home.php */
