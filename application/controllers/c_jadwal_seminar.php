<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_jadwal_seminar extends CI_Controller {
	public function index()
	{
		$this->load->view('v_jadwal_seminar');
	}
}