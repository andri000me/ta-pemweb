<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_aset extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('aset');
  }

  public function index() {
    $data = array();
	$data['kabupaten'] = $this->aset->kabupaten();
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kabupaten'] as $key){
		$nama = $key['kabupaten'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->aset->perprov($nama, $nama_);
			$data['kabupaten'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('aset_provinsi', $data);
    $this->load->view('foot');
  }

  public function kab($kab) {
    $data = array();
	$data['kecamatan'] = $this->aset->kecamatan($kab);
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kecamatan'] as $key){
		$nama = $key['nama_kec'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->aset->perkab($nama, $nama_);
			$data['kecamatan'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('aset_kabupaten', $data);
    $this->load->view('foot');
  }

  public function sekolah($kec) {
    $data = array();
	$data['sekolah'] = $this->aset->sekolah($kec);
	$index = 0;
	foreach ($data['sekolah'] as $key) {
		$tamp = $this->aset->jumaset($key['npsn']);
		$data['sekolah'][$index++]['jumlah_aset'] = $tamp[0]['jumlah_aset'];
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('aset_kecamatan', $data);
    $this->load->view('foot');
  }
  
  public function aset($npsn) {
    $data = array();
	$data['aset'] = $this->aset->dafaset($npsn);
	$data['profil']= $this->aset->profil_sekolah($npsn);
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('aset_sekolah', $data);
    $this->load->view('foot');
}
}
?>