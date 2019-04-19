<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_login extends CI_Controller {
	public function index()
	{
		$this->load->view('v_login');
	}

	public function aksi_login()
	{	
		$data['u'] = $this->input->post('uname');
		$data['p'] = $this->input->post('pass');
		$this->load->model('m_Login');
		

		if($this->m_Login->cek_login($data)){
			echo "<script>alert('Login Successfully!')</script>";
			$this->load->view('v_home_login');
		}else{
			echo "<script>alert('Username atau Password tidak ditemukan!')</script>";
			redirect(base_url('c_login'), 'refresh');
		}
	}


	public function Keluar()
	{
		$this->session->sess_destroy();
		redirect('c_home');
	}

	
}