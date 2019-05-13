<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_instansi extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->get('perusahaan');
		$this->load->view('admin/v_admin_instansi',$query);
	}

	public function delete($id){
		if(!is_null($id)){
			if($this->db->where('id_perusahaan', $id)->delete('perusahaan')){
				redirect('admin/c_admin_instansi');	
			}
		}else{
			echo "<script>alert('Delete Failed');</script>";
		}
	}

	public function edit(){
		$aksi = $this->input->post('aksi');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$keahlian = $this->input->post('keahlian');
		$link = $this->input->post('link_perusahaan');
		$keterangan = $this->input->post('keterangan');
		$iamge = $this->input->post('image');
		echo "<script>alert('Akun ".$id."tidak dapat mengakses!');
            </script>";
		$data = array(
			'nama_perusahaan'=> $nama,
			'keahlian'=>$keahlian,
			'link_perusahaan'=>$link,
			'keterangan'=>$keterangan,
			'image'=>$iamge,
		);
		
		$this->db->where('id_perusahan', $id);
		if($aksi == "edit"){
			if($this->db->update('perusahaan', $data)){
				echo "<script>alert('Success Edited');
				window.location.href='".base_url()."admin/c_admin_instansi';</script>";
			}else{
				echo "<script>alert('Edit Failed');</script>";
			}	
		}else{
			if($this->db->insert('perusahaan', $data)){
				echo "<script>alert('Success Added');
				window.location.href='".base_url()."admin/c_admin_instansi';</script>";
			}
		}
		


	}
	/*

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