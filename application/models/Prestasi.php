<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Class prestasi
   */
  class Prestasi extends CI_Model
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
      $query = $this->db->query("SELECT profil.jenjang as Jenjang, IFNULL(COUNT(prestasi.id),0) as TOTAL FROM prestasi JOIN profil ON prestasi.npsn = profil.npsn JOIN kabupaten ON profil.kab = kabupaten.id WHERE kabupaten.kabupaten LIKE '".$nama."' AND profil.jenjang LIKE '".$nama_."'");
      return $query->result_array();
    }

    public function kecamatan($kab)
    {
      $query = $this->db->query("SELECT * FROM kecamatan WHERE kode_kab = '".$kab."'");
      return $query->result_array();
    }

    public function perkab($nama, $nama_)
    {
      $query = $this->db->query("SELECT profil.jenjang as Jenjang, IFNULL(COUNT(prestasi.id),0) as TOTAL FROM prestasi JOIN profil ON prestasi.npsn = profil.npsn JOIN kecamatan ON profil.kec = kecamatan.kode_kec WHERE kecamatan.nama_kec LIKE '".$nama."' AND profil.jenjang LIKE '".$nama_."'");
      return $query->result_array();
    }

    public function sekolah($kec)
    {
      $query = $this->db->query("SELECT profil.nama_sekolah, profil.jenjang, profil.npsn FROM profil JOIN siswa ON profil.npsn = siswa.npsn WHERE kec = '".$kec."'");
      return $query->result_array();
    }

    public function jumpres($npsn)
    {
      $query = $this->db->query("SELECT IFNULL(COUNT(prestasi.id),0) as jumlah_prestasi FROM prestasi WHERE prestasi.npsn = '".$npsn."'");
      return $query->result_array();
    }

	public function dafprestasi($npsn)
    {
      $query = $this->db->query("SELECT * FROM prestasi WHERE prestasi.npsn = '".$npsn."'");
      return $query->result_array();
    }

	public function profil_sekolah($npsn)
    {
      $query = $this->db->query("SELECT profil.npsn, profil.nama_sekolah, profil.alamat, kepsek.kepala_sekolah FROM profil JOIN kepsek ON profil.npsn= kepsek.npsn WHERE profil.npsn = '".$npsn."'");
      return $query->result_array();
    }

	public function ta()
    {
      $query = $this->db->query("SELECT tahun_ajaran FROM siswa GROUP BY tahun_ajaran");
      return $query->result_array();
    }

	public function dafsiswa2($npsn, $ta)
    {
      $query = $this->db->query("SELECT * FROM siswa WHERE siswa.npsn = '".$npsn."' AND siswa.tahun_ajaran = '".$ta."'");
      return $query->result_array();
    }
  }
