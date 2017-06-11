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
      $query = $this->db->query("SELECT profil.jenjang as Jenjang, IFNULL(SUM(siswa.jumlah_putra),0) as L, IFNULL(SUM(siswa.jumlah_putri),0) as P, IFNULL(SUM(siswa.jumlah_putra+siswa.jumlah_putri),0) as TOTAL FROM siswa JOIN profil ON siswa.npsn = profil.npsn JOIN kabupaten ON profil.kab = kabupaten.id WHERE kabupaten.kabupaten LIKE '".$nama."' AND profil.jenjang LIKE '".$nama_."'");
      return $query->result_array();
    }

    public function kecamatan($kab)
    {
      $query = $this->db->query("SELECT * FROM kecamatan WHERE kode_kab = '".$kab."'");
      return $query->result_array();
    }

    public function perkab($nama, $nama_)
    {
      $query = $this->db->query("SELECT profil.jenjang as Jenjang, IFNULL(SUM(siswa.jumlah_putra),0) as L, IFNULL(SUM(siswa.jumlah_putri),0) as P, IFNULL(SUM(siswa.jumlah_putra+siswa.jumlah_putri),0) as TOTAL FROM siswa JOIN profil ON siswa.npsn = profil.npsn JOIN kecamatan ON profil.kec = kecamatan.kode_kec WHERE kecamatan.nama_kec LIKE '".$nama."' AND profil.jenjang LIKE '".$nama_."'");
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

	public function dafsiswa($npsn)
    {
      $query = $this->db->query("SELECT * FROM siswa WHERE siswa.npsn = '".$npsn."'");
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
