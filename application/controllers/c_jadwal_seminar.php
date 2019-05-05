<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_jadwal_seminar extends CI_Controller {
	public function index()
	{	
		$query['query'] = $this->db->select('*')->where('tanggal >= NOW()' )->order_by('tanggal', 'ASC')->get('seminar',10);
		$this->load->view('v_jadwal_seminar',$query);
	}

	public function cari(){
		$cari = $this->input->post("cari");
		if($cari != ""){
			$this->db->select('*')->like('id_seminar', $cari);
			$this->db->or_like('tanggal', $cari);
			$this->db->or_like('ruang', $cari);
			$this->db->or_like('keahlian', $cari);


			$query['query'] = $this->db->where('tanggal >= NOW()' )->get('seminar');
			if(!is_null($query)){
				$this->load->view('v_jadwal_seminar',$query);
			}
		}else{
			$query['query'] = $this->db->select('*')->where('tanggal >= NOW()' )->order_by('tanggal', 'ASC')->get('seminar',10);
			$this->load->view('v_jadwal_seminar',$query);
		}
	
	}
}