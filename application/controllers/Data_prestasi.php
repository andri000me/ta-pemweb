<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_prestasi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('prestasi');
  }

  public function index() {
    $data = array();
	$data['kabupaten'] = $this->prestasi->kabupaten();
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kabupaten'] as $key){
		$nama = $key['kabupaten'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->prestasi->perprov($nama, $nama_);
			$data['kabupaten'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('tingkat_provinsi', $data);
    $this->load->view('foot');
  }

  public function kab($kab) {
    $data = array();
	$data['kecamatan'] = $this->prestasi->kecamatan($kab);
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kecamatan'] as $key){
		$nama = $key['nama_kec'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->prestasi->perkab($nama, $nama_);
			$data['kecamatan'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('tingkat_kabupaten', $data);
    $this->load->view('foot');
  }

  public function sekolah($kec) {
    $data = array();
	$data['sekolah'] = $this->prestasi->sekolah($kec);
	$index = 0;
	foreach ($data['sekolah'] as $key) {
		$tamp = $this->prestasi->jumpres($key['npsn']);
		$data['sekolah'][$index++]['jumlah_prestasi'] = $tamp[0]['jumlah_prestasi'];
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('tingkat_kecamatan', $data);
    $this->load->view('foot');
  }

  public function prestasi($npsn) {
    $data = array();
	$data['prestasi'] = $this->prestasi->dafprestasi($npsn);
	$data['profil']= $this->prestasi->profil_sekolah($npsn);
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('daftarprestasi', $data);
    $this->load->view('foot');
  }
}
