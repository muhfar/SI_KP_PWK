<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_form_daftar extends CI_Controller {
	public function index()
	{
		$this->load->view('v_form_daftar');
	}
}