<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_daftarmhs extends CI_Controller {
	public function index()
	{
		$this->db->select('pengguna.nama_depan,nama_belakang,status,pengguna.NIM,instansi_nama,instansi_alamat,instansi_mulai, instansi_selesai');
		$this->db->from('pengguna');
		$this->db->join ('pesertakp', 'pengguna.NIM=pesertakp.nim', 'left outer');
		$query['query'] =  $this->db->get();
		$this->load->view('admin/v_admin_daftarmhs',$query);
	}

	public function cari(){
		$cari = $this->input->post("cari");
		if($cari != ""){
			$this->db->select('*')->like('instansi_nama', $cari);
			$this->db->or_like('instansi_alamat', $cari);
			$this->db->or_like('pengguna.NIM', $cari);
			$this->db->or_like('instansi_mulai', $cari);
			$this->db->or_like('instansi_selesai', $cari);
			$this->db->or_like('nama_depan', $cari);
			$this->db->or_like('nama_belakang', $cari);
			$this->db->or_like('status', $cari);

			$this->db->from('pengguna');
			$this->db->join ('pesertakp', 'pengguna.NIM=pesertakp.nim', 'left outer');
			$query['query'] = $this->db->get();
			if(!is_null($query)){
				$this->load->view('admin/v_admin_daftarmhs',$query);
				// redirect('admin/c_admin_jadwal');
			}
		}else{
			$this->db->select('pengguna.nama_depan,nama_belakang,status,pesertakp.NIM,instansi_nama,instansi_alamat,instansi_mulai, instansi_selesai');
			$this->db->from('pengguna');
			$this->db->join ('pesertakp', 'pengguna.NIM=pesertakp.nim', 'left outer');
			$query['query'] =  $this->db->get();
			$this->load->view('admin/v_admin_daftarmhs',$query);
		}
	}
}