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

	public function cari(){
		$cari = $this->input->post("cari");
		if($cari != ""){
			$this->db->select('*')->like('id_berkas', $cari);
			$this->db->or_like('surat', $cari);
			$this->db->or_like('NIM', $cari);
			$this->db->or_like('laporan', $cari);
			$this->db->or_like('nama_depan', $cari);
			$this->db->or_like('nama_belakang', $cari);

			$this->db->from('berkas');
			$this->db->join ('pengguna','NIM = id_berkas');
			$query['query'] = $this->db->get();
			if(!is_null($query)){
				$this->load->view('admin/v_admin_berkas',$query);
				// redirect('admin/c_admin_jadwal');
			}
		}else{
			$this->db->select('nama_depan, nama_belakang,id_berkas,surat,laporan');
			$this->db->from('berkas');
			$this->db->join ('pengguna','NIM = id_berkas');
			$query['query'] =  $this->db->get();
			$this->load->view('admin/v_admin_berkas', $query);
		}
	}
}