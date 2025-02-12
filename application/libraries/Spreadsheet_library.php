<?php

require_once FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Spreadsheet_library
{

	public function __construct()
	{
		// Kosong, bisa diisi jika ada inisialisasi khusus
	}

	public function buatSpreadsheet()
	{
		$spreadsheet = new Spreadsheet();
		return $spreadsheet;
	}

	public function simpanSpreadsheet($spreadsheet, $namaFile)
	{
		$writer = new Xlsx($spreadsheet);
		$writer->save($namaFile);
	}
}
