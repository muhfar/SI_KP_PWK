<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_info_instansi extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->get('perusahaan');
		$this->load->view('v_info_instansi',$query);
	}
}