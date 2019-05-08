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
			$level = $this->session->userdata('level');

			if($level == "mhs"){
				echo "<script>alert('Login Berhasil!');
				window.location.href='".base_url()."';</script>";
			}elseif($level == "adm"){
				echo "<script>alert('Login Berhasil!');
				window.location.href='".base_url()."admin';</script>";
			}
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