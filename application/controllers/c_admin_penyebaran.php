<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_peyebaran extends CI_Controller {
	public function index()
	{
		$this->load->view('v_admin_penyebaran');
	}
}