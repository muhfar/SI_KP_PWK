<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin_jadwal extends CI_Controller {
	public function index()
	{
		$query['query'] = $this->db->select('*')->order_by('tanggal', 'ASC')->get('seminar',5);
		$this->load->view('admin/v_admin_jadwal',$query);
	}

	public function tabledit(){
		header('Content-Type: application/json');
		$input = filter_input_array(INPUT_POST);

		$mysqli = new mysqli('localhost', 'root', '', 'sistemkp');
		
		if (mysqli_connect_errno()) {
		  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
		  exit;
		}


		if ($input['action'] === 'edit') {

			$query = "UPDATE seminar SET tanggal = '". $input["Waktu"]."', ruang = 'C105"."',
			keahlian = '".$input["keahlian"]."',
			WHERE id_seminar = '".$input["id"]."'
			";

			$mysqli->query($query);
		}

		mysqli_close($mysqli);
		echo json_encode($input);

	}
}