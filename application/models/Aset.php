<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * Class 
   */
  class Aset extends CI_Model
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
      $query = $this->db->query("SELECT profil.jenjang as Jenjang, IFNULL(SUM(IF(aset_bangunan.kondisi_bangunan='B',1,0)),0) as Kondisi_Bangunan, IFNULL(SUM(IF(aset_bangunan.kostruksi_bangunan='Bertingkat',1,0)),0) as Bertingkat, IFNULL(SUM(IF(aset_bangunan.kostruksi_bangunan='Tidak Bertingka',1,0)),0) as Tidak_Bertingkat FROM aset_bangunan JOIN profil ON aset_bangunan.npsn = profil.npsn JOIN kabupaten ON profil.kab = kabupaten.id WHERE kabupaten.kabupaten LIKE '".$nama."' AND profil.jenjang LIKE '".$nama_."'");
      return $query->result_array();
    }

    public function kecamatan($kab)
    {
      $query = $this->db->query("SELECT * FROM kecamatan WHERE kode_kab = '".$kab."'");
      return $query->result_array();
    }

    public function perkab($nama, $nama_)
    {
      $query = $this->db->query("SELECT profil.jenjang as Jenjang, IFNULL(SUM(IF(aset_bangunan.kondisi_bangunan='B',1,0)),0) as Kondisi_Bangunan, IFNULL(SUM(IF(aset_bangunan.kostruksi_bangunan='Bertingkat',1,0)),0) as Bertingkat, IFNULL(SUM(IF(aset_bangunan.kostruksi_bangunan='Tidak Bertingka',1,0)),0) as Tidak_Bertingkat FROM aset_bangunan JOIN profil ON aset_bangunan.npsn = profil.npsn JOIN kecamatan ON profil.kec = kecamatan.kode_kec WHERE kecamatan.nama_kec LIKE '".$nama."' AND profil.jenjang LIKE '".$nama_."'");
      return $query->result_array();
    }

    public function sekolah($kec)
    {
      $query = $this->db->query("SELECT profil.nama_sekolah, profil.jenjang, profil.npsn, IFNULL(siswa.jumlah_putra+siswa.jumlah_putri,0) as jumlah_siswa, siswa.rombel FROM profil JOIN siswa ON profil.npsn = siswa.npsn WHERE kec = '".$kec."'");
      return $query->result_array();
    }

   public function jumaset($npsn)
    {
      $query = $this->db->query("SELECT IFNULL(COUNT(aset_bangunan.id),0) as jumlah_aset FROM aset_bangunan WHERE aset_bangunan.npsn = '".$npsn."'");
      return $query->result_array();
    }

	public function dafaset($npsn)
    {
      $query = $this->db->query("SELECT * FROM aset_bangunan WHERE aset_bangunan.npsn = '".$npsn."'");
      return $query->result_array();
    }
	
	public function profil_sekolah($npsn)
    {
      $query = $this->db->query("SELECT profil.npsn, profil.nama_sekolah, profil.alamat, kepsek.kepala_sekolah FROM profil JOIN kepsek ON profil.npsn= kepsek.npsn WHERE profil.npsn = '".$npsn."'");
      return $query->result_array();
    }
	
	// // public function ta()
 // //    {
 // //      $query = $this->db->query("SELECT tahun_ajaran FROM siswa GROUP BY tahun_ajaran");
 // //      return $query->result_array();
 // //    }
	
	// // public function dafsiswa2($npsn, $ta)
 // //    {
 // //      $query = $this->db->query("SELECT * FROM siswa WHERE siswa.npsn = '".$npsn."' AND siswa.tahun_ajaran = '".$ta."'");
 // //      return $query->result_array();
 // //    }
  }
