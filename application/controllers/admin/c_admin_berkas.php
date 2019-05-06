<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_berkas extends CI_Controller {
	public function index()
	{
		$this->db->select('nama_depan, nama_belakang,id_berkas,surat,laporan');
		$this->db->from('berkas');
		$this->db->join ('pengguna','NIM = id_berkas');
		$query['query'] =  $this->db->get();
		$this->load->view('admin/v_admin_berkas', $query);
	}
}