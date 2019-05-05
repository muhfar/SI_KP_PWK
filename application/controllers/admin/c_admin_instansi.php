<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_instansi extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->get('instansi');
		$this->load->view('admin/v_admin_instansi',$query);
	}
}