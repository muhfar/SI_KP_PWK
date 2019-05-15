<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_home extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->get('provinsi');
		$this->load->view('v_home',$query);
	}

	public function aksi_download(){
		$this->load->view('v_download_file');
	}
}