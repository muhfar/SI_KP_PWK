<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_instansi extends CI_model{
	function __construct() {
		$this->load->database();
		parent::__construct();
	}
	
	public function inputDaftar($data){
		$this->db->insert('perusahaan', $data);	
    }
}