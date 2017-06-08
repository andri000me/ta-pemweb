<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Class Guru
   */
  class Jumlahsiswa extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function jumlahsiswa(){
      $query = $this->db->query('SELECT COUNT(npsn) AS nomer FROM data_guru');
      return $query->result();
    }
  }
