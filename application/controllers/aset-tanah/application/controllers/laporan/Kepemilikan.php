<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Kepemilikan extends CI_Controller
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
		$data['yayasan'] = $this->my_lib->row_count('aset_tanah',array('kepemilikan'=>"yayasan"));
		$data['pemerintah'] = $this->my_lib->row_count('aset_tanah',array('kepemilikan'=>"pemerintah"));
		$data['menyewa'] = $this->my_lib->row_count('aset_tanah',array('kepemilikan'=>"menyewa"));
		$data['menumpang'] = $this->my_lib->row_count('aset_tanah',array('kepemilikan'=>"menumpang"));
		$data['lain'] = $total - ($data['yayasan'] + $data['pemerintah'] + $data['menyewa'] + $data['menumpang']);

		$response = array(
		    array(
		        "name" => "Yayasan",
		        "y" => $data['yayasan']
		    ),
		    array(
		        "name" => "Pemerintah",
		        "y" => $data['pemerintah']
		    ),
		    array(
		        "name" => "Menyewa",
		        "y" => $data['menyewa']
		    ),
		    array(
		        "name" => "Menumpang",
		        "y" => $data['menumpang']
		    ),
		    array(
		        "name" => "Lain-lain",
		        "y" => $data['lain']
		    )
		);

		$data['getjson'] = json_encode($response, JSON_PRETTY_PRINT);

		$this->load->view('dashboard/laporan/kepemilikan',$data);
		$this->load->view('dashboard/footer');
	}

	function daftar()
	{
		$this->load->view('dashboard/header');
		$val = $this->uri->segment(4);
		$data['list'] = $this->my_lib->get_data('aset_tanah',array('kepemilikan'=>$val));
		$this->load->view('dashboard/laporan/v_list',$data);
		$this->load->view('dashboard/footer');
	}
}