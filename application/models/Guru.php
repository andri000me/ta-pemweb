<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Class Guru
   */
  class Guru extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function read()
    {
      $query = $this->db->query('SELECT data_guru.nama_guru AS nama, data_guru.nip, data_guru.bidang FROM data_guru');
      return $query->result();
    }
  }
