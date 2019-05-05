<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_upload_laporan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  
	public function __construct()
	{
	   parent::__construct();
	   $this->load->helper(array('form','url'));
	}

	public function index()
	{
		$this->load->view('v_form_upload_laporan');
	}

	public function fileUpload(){
		$this->load->helper(array('form','url'));

		$user = $this->session->userdata('NIM');

		if(!empty($_FILES['file']['name'])){	
			//setting upload
<<<<<<< HEAD
			$config['upload_path']		= 'upload/';
			$config['allowed_types']	= 'pdf|jpg|jpeg|png|gif';
			$config['max_size']			= '10240';
			$config['file_name']		= $_FILES['file']['name'];

=======
			$config['upload_path']		= './upload/laporan/';
			$config['allowed_types']	= 'pdf';
			$config['max_size']			= 1024;
			$config['encrypt_name'] 	= TRUE;
>>>>>>> origin/farhan
			//load config
			$this->load->library('upload',$config);
			
			//upload file
			if($this->upload->do_upload('file')){
<<<<<<< HEAD
				$uploadData = $this->upload->data();
			}
=======
				$data = $this->upload->data();	

				//datadb for database
				$datadb['nim'] 		= $user;
				$datadb['laporan'] 	= $data['file_name'];
>>>>>>> origin/farhan

				//upload model
				$this->load->model('m_upload');
				$this->m_upload->uploadLaporan($datadb);
							
				echo '<script>alert("You Have Successfully upload this Record!")</script>';
			}
		}else{
			echo "<script>alert('tidak ada file')</script>";
		}

	}

}