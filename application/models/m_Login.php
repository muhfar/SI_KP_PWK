<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_model{

	function cek_login($data){
		$pwd = md5($data['p']);
		
		$this->db->where('NIM',$data['u']);
		$this->db->where('password',$pwd);

		$query = $this->db->get('pengguna');	


		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess = array(	'NIM'			=> $row->NIM,
							  	'nama_pengguna' => $row->nama_pengguna);


				$this->session->set_userdata($sess);
				

				return 1;


			}
		}
		else
		{

			return 0;
			
			
		}
	}	
}