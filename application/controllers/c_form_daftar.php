<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_form_daftar extends CI_Controller {
	public function index()
	{
		$this->load->view('v_form_daftar');
	}

	public function insert ()
	{
		$this->load->helper(array('form','url'));

		$nim = $this->session->userdata('NIM');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('instansi-alamat');
		$tlp = $this->input->post('instansi-notlpn');
		$mulai = $this->input->post('tanggal-kp-mulai');
		$selesai = $this->input->post('tanggal-kp-selesai');
		$provinsi = $this->input->post('provinsi');
		$alamatmhs = $this->input->post('alamat-mhs');
		$notelpmhs = $this->input->post('notelp-mhs');
		
		$data['NIM'] = $nim;
		$data['instansi_nama'] = $nama;	
		$data['instansi_alamat'] = $alamat;
		$data['instansi_tlp'] = $tlp;
		$data['instansi_mulai'] = $mulai;
		$data['instansi_selesai'] = $selesai;

		$data1 = [
			'alamat' => $alamatmhs,
			'no_telp' => $notelpmhs,
		];

		$this->db->where('nama',$provinsi);
		$query = $this->db->select('jumlah_mhs')->get('provinsi');
		foreach ($query->result() as $row){
			$jum= $row->jumlah_mhs;
		}
		$jum+= 1;

		$data2 = [
			'jumlah_mhs' => $jum,
		];


		$this->load->model('m_daftar');
		$this->m_daftar->inputDaftar($data);
		$this->m_daftar->updatePengguna($data1);
		$this->m_daftar->updateProvinsi($data2, $provinsi);
		redirect('/c_upload_surat');

	}
}