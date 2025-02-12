<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set('memory_limit', '512M');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing; // Tambahkan baris ini
class Drsitrack extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('spreadsheet_library');
		$this->load->model('M_drsitrack');
		$this->load->library('session'); // Pastikan session di-load
	}

	function filterDrsi($gedung = null, $start = null, $end = null)
	{
		/* Code */
		$gedung =  $this->input->post('filter_gedung');
		$start = $this->input->post('startFilter');
		$end = $this->input->post('endFilter');
		$rangeDate = [];
		if ($end) {
			$startDate = strtotime($start);
			$endDate = strtotime($end);
			for ($currentDate = $startDate; $currentDate <= $endDate; $currentDate += (86400)) {
				$date = date('Y-m-d', $currentDate);
				$rangeDate[] = $date;
			}
		}

		$data = [
			'date'              => $rangeDate,
			'gedung' 			=> $this->M_drsitrack->get_gedung(),
			'filterStart'       => $start ? $start : date('Y-m-d'),
			'filterEnd'         => $end ? $end : date('Y-m-d'),
			'dataDrsi'          => $this->M_drsitrack->getData($gedung, $start, $end, $rangeDate)
		];
		// Simpan data yang difilter di session
		$this->session->set_userdata('filtered_data', $data['dataDrsi']);
		$this->load->view('part/header');
		$this->load->view('index', $data);
	}

	public function exportToExcel()
	{
		$data = $this->session->userdata('filtered_data');
		// $data = $this->session->userdata('filtered_data', $data['dataDrsi']);

		// Jika data kosong, tampilkan pesan error 
		if (empty($data)) {
			echo "Data tidak ditemukan.";
			return;
		}
		$spreadsheet = $this->spreadsheet_library->buatSpreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		// Ambil data dari model atau sumber data lainnya
		$data = $this->M_drsitrack->getData(
			$this->input->get('filter_gedung'),
			$this->input->get('startFilter'),
			$this->input->get('endFilter'),
			[]
		);

		// Tambahkan header kolom ke Excel
		$sheet->setCellValue('A1', 'No');
		$sheet->setCellValue('B1', 'Date');
		$sheet->setCellValue('C1', 'Gedung');
		$sheet->setCellValue('D1', 'Cell');
		$sheet->setCellValue('E1', 'Artikel');
		$sheet->setCellValue('F1', 'Model');
		$sheet->setCellValue('G1', 'Defect Stage');
		$sheet->setCellValue('H1', 'Defect Name');
		$sheet->setCellValue('I1', 'Defect Photo');
		$sheet->setCellValue('J1', 'Pairs');
		$sheet->setCellValue('K1', 'Defect Source');
		$sheet->setCellValue('L1', 'Prod Self Inspection');
		$sheet->setCellValue('M1', 'Who Let Defect Go');
		$sheet->setCellValue('N1', 'Count');
		$sheet->setCellValue('O1', 'Defect Found');
		$sheet->setCellValue('P1', 'Who Stop Defect Go');
		$sheet->setCellValue('Q1', 'Count');
		$sheet->setCellValue('R1', 'Remark');

		// Tambahkan data ke Excel
		$row_num = 2;
		$no = 1;
		foreach ($data as $row) {
			$sheet->setCellValue('A' . $row_num, $no++); // Ganti id_finding dengan kolom ID Anda
			$sheet->setCellValue('B' . $row_num, $row['date']);
			$sheet->setCellValue('C' . $row_num, $row['gedung']);
			$sheet->setCellValue('D' . $row_num, $row['cell']);
			$sheet->setCellValue('E' . $row_num, $row['artikel']);
			$sheet->setCellValue('F' . $row_num, $row['model']);
			$sheet->setCellValue('G' . $row_num, $row['nama_defect']);
			$sheet->setCellValue('H' . $row_num, $row['nama_defect_sub_class']);

			if ($row['picture']) {
				$sheet->setCellValue('I' . $row_num, base_url('assets/img/img-finding/' . $row['picture']));

				$drawing = new Drawing();
				$drawing->setName('Image ' . $row_num);
				$drawing->setDescription('Gambar Defect');
				$drawing->setPath(FCPATH . 'assets/img/img-finding/' . $row['picture']);
				$drawing->setCoordinates('I' . $row_num);
				$drawing->setWorksheet($sheet);
				$drawing->setWidth(100);
				$drawing->setHeight(100);
			}
			$sheet->setCellValue('J' . $row_num, $row['pairs']);
			$sheet->setCellValue('K' . $row_num, $row['defect_source']);
			$sheet->setCellValue('L' . $row_num, $row['self_inspect']);
			$sheet->setCellValue('M' . $row_num, $row['who_defect_go']);
			$sheet->setCellValue('N' . $row_num, $row['count']);
			$sheet->setCellValue('O' . $row_num, $row['defect_area']);
			$sheet->setCellValue('P' . $row_num, $row['who_stop_defect']);
			$sheet->setCellValue('Q' . $row_num, $row['count2']);
			$sheet->setCellValue('R' . $row_num, $row['remark']);
			$row_num++;
		}

		// Konfigurasi header HTTP untuk download file Excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="DATA TRACK DRSI.xlsx"');
		header('Cache-Control: max-age=0');

		// Tulis file Excel ke output
		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');

		$namaFile = 'DATA_TRACK_DRSI.xlsx';
		try {
			$writer->save($namaFile);
		} catch (Exception $e) {
			echo 'Error saving file: ' . $e->getMessage();
			return;
		}

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namaFile . '"');
		readfile($namaFile);
		unlink($namaFile);
	}
}

/* End of file: Dstrack.php */
