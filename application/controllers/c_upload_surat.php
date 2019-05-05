<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class c_upload_surat extends CI_Controller {
		public function index()
		{
			$this->load->view('v_form_upload_surat');
		}

		public function fileUpload(){
		$this->load->helper(array('form','url'));

		$user = $this->session->userdata('NIM');

		if(!empty($_FILES['file']['name'])){	
			//setting upload
			$config['upload_path']		= './upload/surat/';
			$config['allowed_types']	= 'pdf';
			$config['max_size']			= 1024;
			$config['encrypt_name'] 	= TRUE;	
			//load config
			$this->load->library('upload',$config);

			//upload file
			if($this->upload->do_upload('file')){
				$data = $this->upload->data();	

				//datadb for database
				$datadb['id_berkas'] 	= $user;
				$datadb['surat'] 		= $data['file_name'];
				$datadb['laporan']		= "";

				//upload model
				$this->load->model('m_upload');
				$this->m_upload->uploadSurat($datadb);
				
			}
		}
	}
}
