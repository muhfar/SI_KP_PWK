<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_penyebaran extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->get('provinsi');
		$this->load->view('v_admin_penyebaran',$query);
	}
}