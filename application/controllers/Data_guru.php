<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_guru extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('guru');
  }

  public function index() {
    $data = array();
	$data['kabupaten'] = $this->guru->kabupaten();
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kabupaten'] as $key){
		$nama = $key['kabupaten'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->guru->perprov($nama, $nama_);
			$data['kabupaten'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('provguru', $data);
    $this->load->view('foot');
  }

  public function kab($kab) {
    $data = array();
	$data['kecamatan'] = $this->guru->kecamatan($kab);
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kecamatan'] as $key){
		$nama = $key['nama_kec'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->guru->perkab($nama, $nama_);
			$data['kecamatan'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('kabguru', $data);
    $this->load->view('foot');
  }

  public function sekolah($kec) {
    $data = array();
	$data['sekolah'] = $this->guru->sekolah($kec);
	$index = 0;
	foreach ($data['sekolah'] as $key) {
		$tamp = $this->guru->jumguru($key['npsn']);
		$data['sekolah'][$index++]['jumlah_guru'] = $tamp[0]['jumlah_guru'];
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('sekguru', $data);
    $this->load->view('foot');
  }

  public function guru($npsn) {
    $data = array();
	$data['guru'] = $this->guru->dafguru($npsn);
	/*echo "<pre>";
	print_r($data);
	echo "</pre>";
	die();*/
	$data['profil']= $this->guru->profil_sekolah($npsn);
	
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('dafguru', $data);
    $this->load->view('foot');
  }

  public function detail_guru($id) {
    $data = array();
	$data['detail_guru'] = $this->guru->detail_guru($id);
	/*echo "<pre>";
	print_r($data);
	echo "</pre>";
	die();*/
	
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('detail_guru', $data);
    $this->load->view('foot');
  }
}
