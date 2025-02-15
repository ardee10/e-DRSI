<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
}

/* End of file: M_leader.php */
