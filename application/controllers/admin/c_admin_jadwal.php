<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_jadwal extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->order_by('tanggal', 'ASC')->get('seminar',5);
		$this->load->view('admin/v_admin_jadwal',$query);
	}

	public function tabledit(){

	}
}