<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Luas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('my_lib');
	}

	function index()
	{
		$this->load->view('dashboard/header');
		
		
		$this->load->view('dashboard/dashboard');
		$this->load->view('dashboard/footer');
	}
}