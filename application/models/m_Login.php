<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_model{

	function cek_login($data){
		$pwd = md5($data['p']);
		
		// $this->db->where('NIM',$data['u']);
		// $this->db->where('password',$pwd);

		$query = $this->db->where('NIM',$data['u'])->where('password',$pwd)->get('pengguna');

		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess = array(	'NIM'	=> $row->NIM,
							  	'nama' 	=> $row->nama_depan.$row->nama_belakang,
							  	'level' => "mhs"
							  );

				$this->session->set_userdata($sess);

				return $sess['level'];
			}
		}
		else
		{	
			$query = $this->db->where('username', $data['u'])->where('password',$pwd)->get('admin');	
				if($query->num_rows()>0)
				{
				foreach ($query->result() as $row) {
					$sess = array(	'nama' 	=> $row->nama,
									'username' => $row->username,
								  	'level' => "admin"
								  );

					$this->session->set_userdata($sess);

					return $sess['level'];
					}
				}else{
					return 0;
				}
		}
	}	
}