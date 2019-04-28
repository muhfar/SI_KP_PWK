<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_berkas extends CI_Controller {
	public function index()
	{
		$this->db->select('nama_pengguna,id_berkas,file_pendaftaran,laporan');
		$this->db->from('berkas');
		$this->db->join ('pengguna','NIM = id_berkas');
		$query['query'] =  $this->db->get();
		$this->load->view('v_admin_berkas', $query);
	}
}