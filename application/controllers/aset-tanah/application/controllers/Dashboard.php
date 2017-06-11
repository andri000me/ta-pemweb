<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('my_lib');
	}

	function index()
	{
		$this->load->view('dashboard/header');
		
		$total = $this->my_lib->row_count('aset_tanah');
		$shm = $this->my_lib->row_count('aset_tanah',array('status_tanah'=>"SHM"));
		$hibah = $this->my_lib->row_count('aset_tanah',array('status_tanah'=>"Hibah"));
		$akta = $this->my_lib->row_count('aset_tanah',array('status_tanah'=>"Akte Jual Beli"));
		$hakpakai = $this->my_lib->row_count('aset_tanah',array('status_tanah'=>"Hak Pakai"));
		$hgb = $this->my_lib->row_count('aset_tanah',array('status_tanah'=>"HGB"));
		$lain = $total - ($shm + $hibah + $akta + $hakpakai + $hgb);
		$response = array(
		    array(
		        "name" => "SHM (Sertifikat Hak Milik)",
		        "y" => $shm
		    ),
		    array(
		        "name" => "Hibah",
		        "y" => $hibah
		    ),
		    array(
		        "name" => "Akta Jual Beli",
		        "y" => $akta
		    ),
		    array(
		        "name" => "Hak Pakai",
		        "y" => $hakpakai
		    ),
		    array(
		        "name" => "HGB (Hak Guna Bangunan)",
		        "y" => $hgb
		    ),
		    array(
		        "name" => "Lain-lain",
		        "y" => $lain
		    )
		);

		$data['getjson'] = json_encode($response, JSON_PRETTY_PRINT);
		$this->load->view('dashboard/dashboard',$data);
		$this->load->view('dashboard/footer');
	}

}