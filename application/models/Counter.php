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
      $query = $this->db->query('SELECT COUNT(profil.id) AS number FROM profil');
      return $query->result();
    }
  }
