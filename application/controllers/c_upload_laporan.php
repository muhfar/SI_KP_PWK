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

		//setting upload
		$config['upload_path']		= './upload/laporan/';
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