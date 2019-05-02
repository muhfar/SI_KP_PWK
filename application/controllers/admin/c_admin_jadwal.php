<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_jadwal extends CI_Controller {
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$query['query'] = $this->db->select('*')->where('tanggal >= NOW()' )->order_by('tanggal', 'ASC')->get('seminar',5);
		$this->load->view('admin/v_admin_jadwal',$query);
	}

	public function edit(){
		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
		$pukul = $this->input->post('pukul');
		$ruang = $this->input->post('ruang');
		$keahlian = $this->input->post('keahlian');
		
		$data = array(
			'tanggal' => $tanggal." ".$pukul,  
			'ruang' => $ruang, 
			'keahlian' => $keahlian, 
		);
		
		$this->db->where('id_seminar', $id);
		if($this->db->update('seminar', $data)){
			redirect('admin/c_admin_jadwal');
			echo "<script>alert('Success');</script>";
		}else{
			echo "<script>alert('Edit Failed');</script>";
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
}