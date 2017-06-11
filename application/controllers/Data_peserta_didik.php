<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_peserta_didik extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('siswa');
  }

  public function index() {
    $data = array();
	$data['kabupaten'] = $this->siswa->kabupaten();
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kabupaten'] as $key){
		$nama = $key['kabupaten'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->siswa->perprov($nama, $nama_);
			$data['kabupaten'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('provinsi', $data);
    $this->load->view('foot');
  }

  public function kab($kab) {
    $data = array();
	$data['kecamatan'] = $this->siswa->kecamatan($kab);
	$data['jenjang'] = array('SD', 'SMP', 'SMA', 'SMK', 'SLB');
	$index = 0;
	foreach ($data['kecamatan'] as $key){
		$nama = $key['nama_kec'];
		for($i=0; $i<count($data['jenjang']); $i++){
			$nama_= $data['jenjang'][$i];
			$tamp = $this->siswa->perkab($nama, $nama_);
			$data['kecamatan'][$index][$nama_] = $tamp[0];
		}
		$index++;
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('kebsiswa', $data);
    $this->load->view('foot');
  }

  public function sekolah($kec) {
    $data = array();
	$data['sekolah'] = $this->siswa->sekolah($kec);
	$index = 0;
	foreach ($data['sekolah'] as $key) {
		$tamp = $this->siswa->jumguru($key['npsn']);
		$data['sekolah'][$index++]['jumlah_guru'] = $tamp[0]['jumlah_guru'];
	}
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('seksiswa', $data);
    $this->load->view('foot');
  }
  
  public function siswa($npsn) {
    $data = array();
	$data['siswa'] = $this->siswa->dafsiswa($npsn);
	$ta = $this->input->post('tahun');
	if(!empty($ta)){
		$data['siswa'] = $this->siswa->dafsiswa2($npsn,$ta);
	}
	$data['profil']= $this->siswa->profil_sekolah($npsn);
	$data['ta'] = $this->siswa->ta();
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('daftarsiswa', $data);
    $this->load->view('foot');
  }
}
