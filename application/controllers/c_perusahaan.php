<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_perusahaan extends CI_Controller {
	public function index()
	{
		$this->load->view('v_perusahaan');
	}

	// public function simpan_laporan()
	// {
	// 	$this->load->helper(array('form', 'url'));

	// 	$config['upload_path'] = './upload/laporan/';
	// 	$config['allowed_types']  = 'docx|doc|pdf';
	// 	$config['max_size']     = 10240;
	// 	$config['encrypt_name']   = TRUE;

	// 	$this->load->library('upload', $config);

		
	// }

	public function data_perusahaan()
	{
		$this->load->model('m_perusahaan');
		$this->m_perusahaan->data();

		foreach ($query->result() as $row) {
			$data['nama'] =  $row->nama;
			
		}
	}
}
