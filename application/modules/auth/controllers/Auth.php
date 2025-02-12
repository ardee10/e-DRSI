<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_auth');
	}

	public function index()
	{
		/* DATA CELL */
		$data = [
			'title' => 'HALAMAN LOGIN',
		];
		$this->load->view('part/header');
		$this->load->view('index', $data);
		$this->load->view('part/_js');
	}

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

	/* LOG OUT */

	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('flashlogut', 'Anda berhasil logout');
		redirect('Auth', 'refresh');
	}
}

/* End of file: Auth.php */
