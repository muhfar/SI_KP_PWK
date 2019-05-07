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
		
		$level = $this->m_Login->cek_login($data);
		if($level == "mhs"){
			echo "<script>alert('Login Successfully!')</script>";
			redirect(base_url());
		}elseif($level == "admin"){
			redirect(base_url('admin'));
		}else{
			echo "<script>alert('Username atau Password tidak ditemukan!')</script>";
			redirect(base_url('c_login'), 'refresh');
		}
	}


	public function keluar()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	
}