<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_daftar extends CI_model{
	function __construct() {
		$this->load->database();
		parent::__construct();
	}
	
	public function inputDaftar($data){
		$this->db->insert('pesertakp', $data);	
	}

	public function updatePengguna($data){
		$nim = $this->session->userdata('NIM');
		$this->db->where('NIM',$nim);
		$this->db->update('pengguna',$data);
	}

	public function updateProvinsi($data, $nama){
		$this->db->where('nama', $nama);
		$this->db->update('provinsi', $data);
	}
}