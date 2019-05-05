<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_jadwal_seminar extends CI_Controller {
	public function index()
	{	
		$query['query'] = $this->db->select('tanggal,ruang,keahlian')->order_by('tanggal', 'ASC')->get('seminar',5);
		$this->load->view('v_jadwal_seminar',$query);
	}
}