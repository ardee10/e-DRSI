<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class M_leader extends CI_Model
{

	protected $table = '';

	public function __construct()
	{
		parent::__construct();
	}

	function get_gedung()
	{
		/* Gedung */
		$where = [
			'active'      => '1'
		];
		$data = $this->db->get_where('tbl_gedung', $where)->result();
		return $data;
	}

	function getArea()
	{
		/* Area */
		$data = $this->db->get('tbl_area')->result();
		return $data;
	}

	public function dataLeader()
	{
		/* Menampilkan data leader */
		$data = $this->db->get('tbl_leader')->result();
		return $data;
	}

	/* Cell */

	function cell($id)
	{
		$query = $this->db->get_where('tbl_cell', ['kode_factory' => $id])->result();
		return $query;
	}

	function addLeader()
	{
		/* Cek dl datanya */
		$where = [
			'nik' => $this->input->post('nik'),
		];
		$exist = $this->db->get_where('tbl_leader', $where)->row();

		if ($exist) {
			$this->session->set_flashdata('flashDataError', 'Data NIK tidak boleh sama');
			redirect('Leader', 'refresh');
		} else {

			/* siapkan datanya */
			$data = [

				'id_leader' 		=> uniqid(),
				'nama_leader' 	=> $this->input->post('nama_leader'),
				'nik' 			=> $this->input->post('nik'),
				'gedung' 		=> $this->input->post('gedung'),
				'password' 		=> md5($this->input->post('password')),
				'area' 			=> $this->input->post('area'),
				'cell' 			=> $this->input->post('cellSelect'),
				'timestamp' 	=> date('Y-m-d H:s:i'),
				'password_real' => $this->input->post('password'),

			];

			$this->session->set_flashdata('flash', 'Data Leader Berhasil Ditambahkan ');
			$this->db->insert('tbl_leader', $data);
			// redirect('Leader', 'refresh');
		}
	}

	/* Edit data leader */

	function detailLeader($id)
	{

		/* Query */
	}

	function hapusLeader($id)
	{

		$this->db->where($id);
		return $this->db->delete('tbl_leader');
	}

	/* Proses Import Leader */

	function prosesImportLeader()
	{
		$nama = uniqid(12) . '.xlsx';
		$config['upload_path']          = './file/temp/';
		$config['allowed_types']        = 'xls|xlsx';
		$config['file_name']            = $nama;
		$this->load->library('upload', $config);
		$this->upload->overwrite = true;

		if (!$this->upload->do_upload('file')) {
			$response = $this->upload->display_errors();
			return  [
				'kode'      => 'error',
				'msg'       => $response
			];
		} else {
			//proses import
			$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($config['upload_path'] . $config['file_name']);
			$worksheet = $spreadsheet->getActiveSheet()->toArray();
			// $hasil = $this->Import($worksheet);
			$this->Import($worksheet);
			unlink('./file/temp/' . $nama);
			$this->session->set_flashdata('flash', 'Data Leader berhasil di Import');

			// return  [
			// 	'kode'      => 'success',
			// 	'msg'       => 'upload berhasil,..',
			// 	'hasil'     => $hasil
			// ];
		}
	}

	function Import($data)
	{
		$hasil = [];
		for ($i = 1; $i < count($data); $i++) {
			if ($data[$i][0] != "") {
				$hasil[$i]  = [
					'data' => $this->getDataImport($data[0], count($data[$i]), $data[$i], $data[$i][0], $data[$i][1], $data[$i][2], $data[$i][3], $data[$i][4], $data[$i][5])
				];
			}
		}

		// return 1;
		return $hasil;
	}

	function getDataImport($header, $jumlahData, $data, $nik, $nama_leader, $area, $gedung, $cell, $password)
	{
		$hasil = [];
		for ($i = 2; $i < $jumlahData; $i++) {
			$value = str_replace("%", "", $data[$i]);
			$value = ($value == 0) ? null : $value;
			$hasil[$i]  = [
				'id_leader'     => uniqid(),
				'nik'           => $nik,
				'nama_leader' 	=> $nama_leader,
				'area'          => $area,
				'gedung'        => $gedung,
				'cell'          => $cell,
				'password'      => md5($password),
				'password_real' => $password,
				'timestamp'     => date('Y-m-d H:s:i')
			];
			$where = [
				'nik'           => $nik
			];
			$cek = $this->db->get_where('tbl_leader', $where)->row();
			if ($cek) {
				$this->db->where($where);
				$this->db->update('tbl_leader',  $hasil[$i]);
			} else {
				$this->db->insert('tbl_leader', $hasil[$i]);
			}
		}
		return $hasil;
	}

	public function get_inspeksi($tanggal, $nik)
	{
		$this->db->select('f.*, l.nama_leader'); // Pilih kolom yang dibutuhkan dari kedua tabel
		$this->db->from('tbl_finding f');
		$this->db->join('tbl_leader l', 'l.nik = f.who_stop_defect');
		$this->db->where('f.date', $tanggal);
		$this->db->where('f.who_stop_defect', $nik);

		return $this->db->get()->result(); // Gunakan result() karena mungkin ada banyak data
	}
	// public function get_inspeksi($tanggal_awal, $tanggal_akhir, $nik)
	// {
	// 	$this->db->select('f.*, l.nama_leader');
	// 	$this->db->from('tbl_finding f');
	// 	$this->db->join('tbl_leader l', 'l.nik = f.who_stop_defect');
	// 	$this->db->where('f.who_stop_defect', $nik);
	// 	$this->db->where('f.date >=', $tanggal_awal); // Filter tanggal mulai
	// 	$this->db->where('f.date <=', $tanggal_akhir); // Filter tanggal akhir
	// 	return $this->db->get()->result();
	// }
}

/* End of file: M_leader.php */
