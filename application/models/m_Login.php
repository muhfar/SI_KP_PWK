<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_model{

	function cek_login($data){
		$pwd = md5($data['p']);
		
		$this->db->where('NIM',$data['u']);
		$this->db->where('password',$pwd);
// ->where('NIM',$data['u'])->where('password',$pwd)
		$query = $this->db->get('pengguna');

		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess = array(	'NIM'	=> $row->NIM,
							  	'nama' 	=> $row->nama_depan.$row->nama_belakang,
							  	'level' => "mhs"
							  );

				$this->session->set_userdata($sess);

				return 1;
			}
		}
		else
		{	
			$this->db->where('username', $data['u']);
			$this->db->where('password',$pwd);
			$queryad = $this->db->get('admin');	
				if($queryad->num_rows()>0)
				{
				foreach ($queryad->result() as $row) {
					$sess = array(	'nama' 	=> $row->nama,
									'username' => $row->username,
								  	'level' => "adm"
								  );

					$this->session->set_userdata($sess);

					return 1;
					}
				}else{
					return 0;
				}
		}
	}	
}