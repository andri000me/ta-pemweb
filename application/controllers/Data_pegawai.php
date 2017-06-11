<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('pegawai');
  }

  public function index() {
    $data = array();
	$data['kabupaten'] = $this->pegawai->kabupaten();
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kabupaten'] as $key){
		$nama = $key['kabupaten'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->pegawai->perprov($nama, $nama_);
			$data['kabupaten'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('t_provinsi', $data);
    $this->load->view('foot');
  }

  public function kab($kab) {
    $data = array();
	$data['kecamatan'] = $this->pegawai->kecamatan($kab);
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kecamatan'] as $key){
		$nama = $key['nama_kec'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->pegawai->perkab($nama, $nama_);
			$data['kecamatan'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('t_kabupaten', $data);
    $this->load->view('foot');
  }

  public function sekolah($kec) {
    $data = array();
	$data['sekolah'] = $this->pegawai->sekolah($kec);
	$index = 0;
	foreach ($data['sekolah'] as $key) {
		$tamp = $this->pegawai->jumpegawai($key['npsn']);
		$data['sekolah'][$index++]['jumlah_pegawai'] = $tamp[0]['jumlah_pegawai'];
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('t_kecamatan', $data);
    $this->load->view('foot');
  }
  
  public function pegawai($npsn) {
    $data = array();
	$data['pegawai'] = $this->pegawai->dafpegawai($npsn);
	$data['profil']= $this->pegawai->profil_sekolah($npsn);
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('d_pegawai', $data);
    $this->load->view('foot');
  }
}
