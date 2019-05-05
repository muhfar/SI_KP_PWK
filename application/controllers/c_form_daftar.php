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
		
		$data['NIM'] = $nim;
		$data['instansi_nama'] = $nama;	
		$data['instansi_alamat'] = $alamat;
		$data['provinsi'] = $provinsi;
		$data['instansi_tlp'] = $tlp;
		$data['instansi_mulai'] = $mulai;
		$data['instansi_selesai'] = $selesai;

		$this->load->model('m_daftar');
		$this->m_daftar->inputDaftar($data);
		redirect('/c_upload_surat');

	}
}