<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_auth');
		$this->load->library('session');
	}

	public function index()
	{
		/* DATA CELL */
		$data = [
			'title' => 'HALAMAN LOGIN ADMIN',
		];
		$this->load->view('part/header');
		$this->load->view('index', $data);
		$this->load->view('part/_js');
	}

	/* Login leader */

	function login_leader()
	{
		// echo 'HALAMAN LOGIN LEADER';
		$data = [
			'title' => 'HALAMAN LOGIN LEADER',
		];
		$this->load->view('part/header');
		$this->load->view('index_leader', $data);
		$this->load->view('part/_js');
	}

	/* Login Admin */
	public function cek_login()
	{
		//load model M_user
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// $user = $this->db->get_where('tbl_user', ['username' => $username, 'password' => password_hash($password)])->row();
		$user =  $this->db->get_where('tbl_user', ['username' => $username, 'password' => md5($password)])->row();

		if ($user) {

			if ($user->is_active == 1) {

				$session_data = [
					'id_user'   => $user->id_user,
					'username'  => $user->username,
					'nama' 		=> $user->nama,
					'is_active' => $user->is_active
				];
				$this->session->set_flashdata('flash', 'Anda berhasil Login');
				$this->session->set_userdata($session_data);
				redirect('Home');
			} else {
				$this->session->set_flashdata('flash', 'User is Not Registered');
				redirect('Auth', 'refresh');
			}
		} else {
			$this->session->set_flashdata('flash', ' User is Not Registered');
			redirect('Auth', 'refresh');
		}
	}

	/* Login Leader */

	public function cek_login_leader()
	{
		//load model M_user
		$nik 		= $this->input->post('nik');
		$password 	= $this->input->post('password');
		$leader 	= $this->db->get_where('tbl_leader', ['nik' => $nik, 'password' => md5($password)])->row();


		if ($leader) {

			$session_data = [
				'id_leader'   	=> $leader->id_leader,
				'nama_leader'  	=> $leader->nama_leader,
				'nik'  			=> $leader->nik,
				'password' 		=> $password,
				'area' 			=> $leader->area,
				'gedung' 		=> $leader->gedung,
				'cell' 			=> $leader->cell,
				'timestamp' 	=> $leader->timestamp
			];

			$this->session->set_flashdata('flash', 'Anda berhasil Login');
			$this->session->set_userdata($session_data);
			redirect('Home/PageLeader');
		} else {
			$this->session->set_flashdata('flash', 'User is Not Registered');
			redirect('Auth/login_leader', 'refresh');
		}
	}

	/* LOG OUT */

	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('flashlogut', 'Anda berhasil logout');
		redirect('Auth', 'refresh');
	}
	public function logout_leader()
	{
		$this->session->unset_userdata('id_leader');
		$this->session->unset_userdata('nama_leader');
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('gedung');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('cell');
		$this->session->set_flashdata('flashlogut', 'Anda berhasil logout');
		redirect('Auth/login_leader', 'refresh');
	}
}

/* End of file: Auth.php */
