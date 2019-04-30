<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_jadwal extends CI_Controller {
	public function index()
	{
		$this->db->select('pengguna.nama_pengguna,pengguna.NIM,tanggal,ruang,keahlian');
		$this->db->from('seminar');
		$this->db->join ('pengguna','pengguna.NIM = seminar.NIM');
		$query['query'] =  $this->db->get();
		$this->load->view('v_admin_jadwal',$query);
	}
}