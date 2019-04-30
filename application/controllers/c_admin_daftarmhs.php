<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_daftarmhs extends CI_Controller {
	public function index()
	{
		$this->db->select('pengguna.nama_pengguna,pesertakp.NIM,instansi_nama,instansi_alamat,instansi_mulai, instansi_selesai');
		$this->db->from('pesertakp');
		$this->db->join ('pengguna','pengguna.NIM = pesertakp.NIM');
		$query['query'] =  $this->db->get();
		$this->load->view('v_admin_daftarmhs',$query);
	}
}