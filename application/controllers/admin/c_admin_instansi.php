<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_instansi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

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
		$nama = $this->input->post('ruang');
		$keahlian = $this->input->post('keahlian');
		$link = $this->input->post('link');
		$keterangan = $this->input->post('keterangan');
		// $image = $this->input->post('image');
		$image = "assets/images/plano_img.png";

		$data = array(
			'nama_perusahaan' => $nama,
			'keahlian' => $keahlian,
			'link_perusahaan' => $link,
			'keterangan' => $keterangan,
			'image' => $image,
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

	// public function aksi_upload(){
	// 	$config['upload_path']          = './assets/images/';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['max_size']             = 10000;
 
	// 	$this->load->library('upload', $config);
 
	// 	if ( ! $this->upload->do_upload('berkas')){
	// 		$error = array('error' => $this->upload->display_errors());
	// 		$this->load->view('v_upload', $error);
	// 	}else{
	// 		$data = array('upload_data' => $this->upload->data());
	// 		//$this->load->view('v_upload_sukses', $data);
	// 	}
	// }

	public function cari(){
		$cari = $this->input->post("cari");
		if($cari != ""){
			$this->db->select('*')->like('id_perusahaan', $cari);
			$this->db->or_like('nama_perusahaan', $cari);
			$this->db->or_like('link_perusahaan', $cari);
			$this->db->or_like('keahlian', $cari);

			$query['query'] = $this->db->select('id_perusahaan,nama_perusahaan,link_perusahaan,keahlian')->get('perusahaan');
			if(!is_null($query)){
				$this->load->view('admin/v_admin_instansi',$query);
				// redirect('admin/c_admin_jadwal');
			}
		}else{
			$query['query'] = $this->db->select('*')->get('perusahaan');
			$this->load->view('admin/v_admin_instansi',$query);
		}
	}
}