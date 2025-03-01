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
				// 'cell'		=> $this->M_leader->get_gedung(),
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

	/* Import Data Leader */

	function prosesImportLeader()
	{
		$this->M_leader->prosesImportLeader();

		$this->session->set_flashdata('flash', 'Import Data Leader berhasil ditambahkan');
		redirect('Leader', 'refresh');
	}

	/* SelfInspection */
	function selfInspectionLeader()
	{
		/* Code */
		if (!$this->session->userdata('username')) {
			redirect('auth');
		} else {


			// $bulan = date('m');
			// $tahun = date('Y');
			// Mendapatkan tanggal awal dan akhir bulan ini
			$tanggal_awal = date('Y-m-01');
			$tanggal_akhir = date('Y-m-t');

			// 2. Buat array bulan
			$bulan = [
				'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			];

			// Membuat array range tanggal
			$range_tanggal = [];
			$tanggal_sekarang = $tanggal_awal;
			while ($tanggal_sekarang <= $tanggal_akhir) {
				$range_tanggal[] = $tanggal_sekarang;
				$tanggal_sekarang = date('Y-m-d', strtotime($tanggal_sekarang . ' +1 day'));
			}

			$data = [
				'title'  	=> 'WHO STOP DEFECT | SELF INSPECTION TRACKING',
				'user' 		=> $this->db->get_where('tbl_user', ['username' => $this->session->userdata('username')])->row(),
				'gedung'	=> $this->M_leader->get_gedung(),
				'cell'		=> $this->M_leader->get_gedung(),
				'area'		=> $this->M_leader->getArea(),
				'leader'   	=> $this->M_leader->dataLeader()
			];

			$tanggal_awal = date('Y-m-d');
			$data['tanggal_awal'] = $tanggal_awal;
			$data['range_tanggal'] = $range_tanggal;
			$data['bulan'] = $bulan;
			$data['leader'] = $this->M_leader->dataLeader();
			$this->template->load('part/template', 'self_inspection', $data);
		}
	}

	public function selfInspectFilter()
	{
		$bulan_nama = $this->input->get('bulan');
		$tahun = $this->input->get('tahun'); // Ambil tahun dari query string

		// Validasi input bulan dan tahun
		if ($bulan_nama === NULL || $tahun === NULL) {
			$response = array(
				'status' => 'error',
				'message' => 'Bulan dan tahun harus diisi.'
			);
			echo json_encode($response);
			return;
		}

		$bulan_angka = $this->get_month_number($bulan_nama);

		if ($bulan_angka === FALSE) {
			$response = array(
				'status' => 'error',
				'message' => 'Nama bulan tidak valid.'
			);
			echo json_encode($response);
			return;
		}

		// Panggil model dengan bulan dan tahun
		$data = $this->M_leader->get_finding_by_month($bulan_angka, $tahun);
		// echo json_encode($data);

		$range_tanggal = $this->generate_range_tanggal($bulan_angka, $tahun);

		// Tambahkan range_tanggal ke data yang akan dikirim ke view
		$data_with_range = array(
			'data' => $data, // Data inspeksi dari database
			'range_tanggal' => $range_tanggal
		);

		header('Content-Type: application/json');
		echo json_encode($data_with_range);
	}

	private function get_month_number($nama_bulan)
	{
		$nama_bulan = strtolower($nama_bulan); // Mengubah menjadi huruf kecil
		$bulan_array = array(
			'januari' 	=> 1,
			'februari' 	=> 2,
			'maret' 	=> 3,
			'april' 	=> 4,
			'mei' 		=> 5,
			'juni' 		=> 6,
			'juli' 		=> 7,
			'agustus' 	=> 8,
			'september' => 9,
			'oktober' 	=> 10,
			'november' 	=> 11,
			'desember' 	=> 12
		);
		if (array_key_exists($nama_bulan, $bulan_array)) {
			return $bulan_array[$nama_bulan];
		} else {
			return FALSE;
		}
	}


	private function generate_range_tanggal($bulan, $tahun)
	{
		$tanggal_awal = date('Y-m-01', mktime(0, 0, 0, $bulan, 1, $tahun));
		$tanggal_akhir = date('Y-m-t', strtotime($tanggal_awal));

		$range_tanggal = array();
		$current_date = $tanggal_awal;

		while ($current_date <= $tanggal_akhir) {
			$range_tanggal[] = $current_date;
			$current_date = date('Y-m-d', strtotime($current_date . ' +1 day'));
		}

		return $range_tanggal;
	}

	function inspeksiLeader($tanggal, $nik)
	{

		$data = $this->M_leader->get_inspeksi($tanggal, $nik);
		return $data;
	}
}

/* End of file: Leader.php */
