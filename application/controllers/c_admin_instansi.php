<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_instansi extends CI_Controller {
	public function index()
	{
		$this->load->view('v_admin_instansi');
	}
}