<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('guru');
    $this->load->model('counter');
  }

  public function index() {
    $data = array();
    $data['guru'] = $this->guru->read();
    $data['counter'] = $this->counter->read();
    $data['jumlahguru'] = $this->counter->jmlguru();
    $data['jumlahsiswa'] = $this->counter->jmlsiswa();
    $data['jumlahkab'] = $this->counter->jmlkab();
    $this->load->view('head');
    $this->load->view('nav');
    $this->load->view('home', $data);
    $this->load->view('foot');
  }
}
