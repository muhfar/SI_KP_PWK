<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_home_login extends CI_Controller {
	public function index()
	{
		$this->load->view('v_home_login');
	}
}