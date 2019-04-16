<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class c_upload_surat extends CI_Controller {
		public function index()
		{
			$this->load->view('v_form_upload_surat');
		}

		public function fileUpload(){
		$this->load->helper(array('form','url'));

		//setting upload
		$config['upload_path']		= './upload/pendaftaran/';
		$config['allowed_types']	= 'pdf';
		$config['max_size']			= 1024;
		$config['encrypt_name'] 	= TRUE;

		//load config
		$this->load->library('upload',$config);

		if(!empty($_FILES['file']['name'])){			
			//upload file
			if($this->upload->do_upload('file')){
				$data = $this->upload->data();	
				echo '<script>alert("You Have Successfully upload this Record!");</script>';
				
			}
		}else{
			echo "<script>alert('tidak ada file');</script>";
		}

		// redirect(base_url('c_upload_laporan'), 'refresh');	
	}
}
