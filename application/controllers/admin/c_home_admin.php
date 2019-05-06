<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_home_admin extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->get('provinsi');
		$this->load->view('admin/v_home_admin',$query);
	}
}