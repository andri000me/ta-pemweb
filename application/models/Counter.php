<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Class Guru
   */
  class Counter extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function read()
    {
      $query = $this->db->query('SELECT COUNT(profil.npsn) AS number FROM profil');
      return $query->result();
    }
    public function jmlguru(){
      $query = $this->db->query('SELECT COUNT(npsn) AS nomer FROM data_guru');
      return $query->result();
    }
    public function jmlsiswa(){
      $query = $this->db->query('SELECT COUNT(npsn) AS nomer FROM siswa');
      return $query->result();
    }
    public function jmlkab(){
      $query = $this->db->query('SELECT COUNT(id) AS nomer FROM kabupaten');
      return $query->result();
    }
  }
