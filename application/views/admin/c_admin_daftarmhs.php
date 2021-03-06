<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_daftarmhs extends CI_Controller {
	public function index()
	{
		$this->db->select('*');
		$this->db->from('pesertakp');
		$this->db->join ('pengguna','pesertakp.nim=pengguna.NIM','natural');
		$query['query'] =  $this->db->get();
		$this->load->view('admin/v_admin_daftarmhs',$query);
	}

	public function edit() {
		$aksi = $this->input->post('aksi');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$instansi = $this->input->post('instansi');
		$alamatinstansi = $this->input->post('alamatinstansi');
		$tanggalmulai = $this->input->post('tanggalmulai');
		$tanggalselesai = $this->input->post('tanggalselesai');

		$data = array(
			'nama' => $nama_depan." ".$nama_belakang,
			'NIM' => $NIM,
			'instansi_nama' => $instansi_nama,
			'instansi_alamat' => $instansi_alamat,
			'instansi_mulai' => $instansi_mulai,
			'instansi_selesai' => $instansi_selesai,
		);

		$this->db->where('nim', $nim);
		if(aksi == "edit"){
			if ($this->db->update('pesertakp', $data)) {
				echo "<script>alert('Success Edited');
				window.location.href='".base_url()."admin/c_admin_daftarmhs';</script>";
			} elseif ($this->db->update('pengguna', $data)) {
				echo "<script>alert('Success Edited');
				window.location.href='".base_url()."admin/c_admin_daftarmhs';</script>";
			} else {
				if($this->db->insert('pesertakp', $data)) {
					echo "<script>alert('Success Added');
					window.location.href='".base_url()."admin/c_admin_daftarmhs';</script>";
				} elseif ($this->db->insert('pengguna', $data)) {
					echo "<script>alert('Success Added');
					window.location.href='".base_url()."admin/c_admin_daftarmhs';</script>";
				}
			}
		}
	}

	public function delete($NIM){
		if(!is_null($NIM)){
			if($this->db->where('nim', $NIM)->delete('pesertakp')){
				redirect('admin/c_admin_daftarmhs');	
			}
		}else{
			echo "<script>alert('Delete Failed');</script>";
		}
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