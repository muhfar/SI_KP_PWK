<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_instansi extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->get('perusahaan');
		$this->load->view('admin/v_admin_instansi',$query);
	}
/*
	public function edit(){
		$aksi = $this->input->post('aksi');
		$id = $this->input->post('id');
		$tanggal = $this->input->post('nama_perusahaan');
		$pukul = $this->input->post('keahlian');
		$ruang = $this->input->post('link_perusahaan');
		$keahlian = $this->input->post('keterangan');
		$iamge = $this->input->post('image');
		
		$data = array(
			'tanggal' => $tanggal." ".$pukul,  
			'ruang' => $ruang, 
			'keahlian' => $keahlian, 
		);
		
		$this->db->where('id_seminar', $id);
		if($aksi == "edit"){
			if($this->db->update('seminar', $data)){
				echo "<script>alert('Success Edited');
				window.location.href='".base_url()."admin/c_admin_jadwal';</script>";
			}else{
				echo "<script>alert('Edit Failed');</script>";
			}	
		}else{
			if($this->db->insert('seminar', $data)){
				echo "<script>alert('Success Added');
				window.location.href='".base_url()."admin/c_admin_jadwal';</script>";
			}
		}
		


	}

	public function delete($id){
		if(!is_null($id)){
			if($this->db->where('id_seminar', $id)->delete('seminar')){
				redirect('admin/c_admin_jadwal');	
			}
		}else{
			echo "<script>alert('Delete Failed');</script>";
		}
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
				$this->load->view('admin/v_admin_jadwal',$query);
				// redirect('admin/c_admin_jadwal');
			}
		}else{
			$query['query'] = $this->db->select('*')->where('tanggal >= NOW()' )->order_by('tanggal', 'ASC')->get('seminar',10);
			$this->load->view('admin/v_admin_jadwal',$query);
		}
	}
	*/
}