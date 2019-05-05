<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_upload extends CI_model{

	public function uploadSurat($datadb){
		$this->db->where('id_berkas', $datadb['id_berkas']);
		$this->db->from('berkas');
		$row = $this->db->count_all_results();
		if($row == 0){
			$this->db->insert('berkas', $datadb);	
		}else{
			$this->db->replace('berkas',$datadb);
		}
	}

	public function uploadLaporan($datadb){
		$this->db->set('laporan', $datadb['laporan']);
		$this->db->where('id_berkas', $datadb['nim']);
		$this->db->update('berkas');	
	}

}