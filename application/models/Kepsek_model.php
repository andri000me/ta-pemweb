<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Kepsek_model extends CI_Model
{
	
	function jum_kepsek($where=array()) {
		$this->db->select("*");
		$this->db->from("kepsek");
		$this->db->join("profil","kepsek.npsn=profil.npsn");
		$this->db->where($where);
		$sql = $this->db->get();
		$count = $sql->num_rows();
		return $count;
	}

	function sat_periode($kab)
	{
		$this->db->select("*");
		$this->db->from("kepsek");
		$this->db->join("profil","kepsek.npsn=profil.npsn");
		$this->db->where("year(tgl_berahir)-year(tmt_jabatan)=4 AND kab=$kab ");
		$sql = $this->db->get();
		$count = $sql->num_rows();
		return $count;
	}

	function dua_periode($kab)
	{
		$this->db->select("*");
		$this->db->from("kepsek");
		$this->db->join("profil","kepsek.npsn=profil.npsn");
		$this->db->where("year(tgl_berahir)-year(tmt_jabatan)>4 AND kab=$kab ");
		$sql = $this->db->get();
		$count = $sql->num_rows();
		return $count;
	}

	function ti_periode($kab)
	{
		$this->db->select("*");
		$this->db->from("kepsek");
		$this->db->join("profil","kepsek.npsn=profil.npsn");
		$this->db->where("year(tgl_berahir)-year(tmt_jabatan)<4 AND kab=$kab ");
		$sql = $this->db->get();
		$count = $sql->num_rows();
		return $count;
	}

	function sat_periode_kec($kec)
	{
		$this->db->select("*");
		$this->db->from("kepsek");
		$this->db->join("profil","kepsek.npsn=profil.npsn");
		$this->db->where("year(tgl_berahir)-year(tmt_jabatan)=4 AND kec=$kec ");
		$sql = $this->db->get();
		$count = $sql->num_rows();
		return $count;
	}

	function dua_periode_kec($kec)
	{
		$this->db->select("*");
		$this->db->from("kepsek");
		$this->db->join("profil","kepsek.npsn=profil.npsn");
		$this->db->where("year(tgl_berahir)-year(tmt_jabatan)>4 AND kec=$kec ");
		$sql = $this->db->get();
		$count = $sql->num_rows();
		return $count;
	}

	function ti_periode_kec($kec)
	{
		$this->db->select("*");
		$this->db->from("kepsek");
		$this->db->join("profil","kepsek.npsn=profil.npsn");
		$this->db->where("year(tgl_berahir)-year(tmt_jabatan)<4 AND kec=$kec ");
		$sql = $this->db->get();
		$count = $sql->num_rows();
		return $count;
	}

	
}