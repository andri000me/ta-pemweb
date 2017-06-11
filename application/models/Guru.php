<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Class Siswa
   */
  class Guru extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function kabupaten()
    {
      $query = $this->db->query('SELECT * FROM kabupaten');
      return $query->result_array();
    }

    public function perprov($nama, $nama_)
    {
      $query = $this->db->query("SELECT profil.jenjang as Jenjang, IFNULL(SUM(IF(data_guru.jk = 'L', 1, 0)),0) as L, IFNULL(SUM(IF(data_guru.jk = 'P', 1, 0)),0) as P, IFNULL(SUM(IF(data_guru.jk = 'L', 1, 0)+IF(data_guru.jk = 'P', 1, 0)),0) as TOTAL FROM data_guru JOIN profil ON data_guru.npsn = profil.npsn JOIN kabupaten ON profil.kab = kabupaten.id WHERE kabupaten.kabupaten LIKE '".$nama."' AND profil.jenjang LIKE '".$nama_."'");
      return $query->result_array();
    }

    public function kecamatan($kab)
    {
      $query = $this->db->query("SELECT * FROM kecamatan WHERE kode_kab = '".$kab."'");
      return $query->result_array();
    }

    public function perkab($nama, $nama_)
    {
      $query = $this->db->query("SELECT profil.jenjang as Jenjang, IFNULL(SUM(IF(data_guru.jk = 'L', 1, 0)),0) as L, IFNULL(SUM(IF(data_guru.jk = 'P', 1, 0)),0) as P, IFNULL(SUM(IF(data_guru.jk = 'L', 1, 0)+IF(data_guru.jk = 'P', 1, 0)),0) as TOTAL FROM data_guru JOIN profil ON data_guru.npsn = profil.npsn JOIN kecamatan ON profil.kec = kecamatan.kode_kec WHERE kecamatan.nama_kec LIKE '".$nama."' AND profil.jenjang LIKE '".$nama_."'");
      return $query->result_array();
    }

    public function sekolah($kec)
    {
      $query = $this->db->query("SELECT profil.nama_sekolah, profil.jenjang, profil.npsn, IFNULL(siswa.jumlah_putra+siswa.jumlah_putri,0) as jumlah_siswa, siswa.rombel FROM profil JOIN siswa ON profil.npsn = siswa.npsn WHERE kec = '".$kec."'");
      return $query->result_array();
    }

    public function jumguru($npsn)
    {
      $query = $this->db->query("SELECT IFNULL(COUNT(data_guru.nama_guru),0) as jumlah_guru FROM data_guru WHERE data_guru.npsn = '".$npsn."'");
      return $query->result_array();
    }

    public function dafguru($npsn)
    {
      $query = $this->db->query("SELECT * FROM data_guru WHERE npsn= '".$npsn."'");
      return $query->result_array();
    }

    public function profil_sekolah($npsn)
    {
      $query = $this->db->query("SELECT profil.npsn, profil.nama_sekolah,profil.alamat,kepsek.kepala_sekolah FROM profil JOIN kepsek ON profil.npsn=kepsek.npsn WHERE profil.npsn= '".$npsn."'");
      return $query->result_array();
    }

    public function detail_guru($id)
    {
      $query = $this->db->query("SELECT *FROM data_guru WHERE id= '".$id."'");
      return $query->result_array();
    }

  }
