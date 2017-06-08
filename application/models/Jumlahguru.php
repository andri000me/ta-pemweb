<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Class Guru
   */
  class Jumlahguru extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function jmlguru(){
      $query = $this->db->query('SELECT COUNT(no) AS nomer FROM data_guru');
      return $query->result();
    }
  }
