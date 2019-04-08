<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_upload_surat extends CI_Controller {
	public function index()
	{
		$this->load->view('v_form_upload_surat');
	}
}