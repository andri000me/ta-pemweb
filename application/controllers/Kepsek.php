<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepsek extends CI_Controller {

	public function index()
	{
		$this->load->model('kepsek_model');
		$this->load->view('head');
		$this->load->view('nav');
		$data['kab'] = $this->my_lib->get_data('kabupaten');
		$this->load->view('page/kepsek',$data);
		$this->load->view('foot');
	}

	public function perkecamatan()
	{
		$this->load->model('kepsek_model');
		$this->load->view('head');
		$this->load->view('nav');
		$kab = $this->uri->segment(3);
		$data['keca'] = $this->my_lib->get_data('kecamatan',array('kode_kab'=>$kab));
		$this->load->view('page/kepsek_keca',$data);
		$this->load->view('foot');
	}

	public function listkepsek()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$k = $this->uri->segment(3);
		$data['prof'] = $this->my_lib->get_data('profil',array('kec'=>$k));
		$this->load->view('page/kepsek_list',$data);
		$this->load->view('foot');
	}

	public function detail()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$id = $this->uri->segment(3);
		$data['detail'] = $this->my_lib->get_data('kepsek',array('npsn'=>$id));
		$this->load->view('page/kepsek_detail',$data);
		$this->load->view('foot');
	}
}