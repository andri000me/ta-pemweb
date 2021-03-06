<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('set_header_message'))
{
	function set_header_message($tipe,$title,$message)
	{
		$CI=& get_instance();
		
		$CI->session->set_flashdata('message_header',array(
		'tipe'=>$tipe,
		'title'=>$title,
		'message'=>$message,
		));				
	}
}

if(!function_exists('user_info'))
{
	function user_info($output)
	{
		$CI=& get_instance();
		$CI->load->model('login_model');
		$item=$CI->login_model->user_info($output);
		return $item;
	}
}

if(!function_exists('menu_active'))
{
	function menu_active($slug2)
	{
		$CI=& get_instance();
		$s=$CI->uri->segment(1);
		if($slug2==$s)
		{
			return true;
		}else{
			return false;
		}
	}
}

if(!function_exists('submenu_active'))
{
	function submenu_active($slug2)
	{
		$CI=& get_instance();
		$s=$CI->uri->segment(2);
		if($slug2==$s)
		{
			return true;
		}else{
			return false;
		}
	}
}

if(!function_exists('add_css'))
{
	function add_css($url)
	{
		$tmp='<link rel="stylesheet" href="'.$url.'">';
		return $tmp;
	}
}

if(!function_exists('add_js'))
{
	function add_js($url)
	{
		$tmp='<script src="'.$url.'"></script>';
		return $tmp;
	}
}

if(!function_exists('asset_datatables'))
{
	function asset_datatables()
	{
		$a='';				
		$a.=add_css(base_url().'assets/plugin/datatables/DataTables/css/dataTables.bootstrap.min.css');
		$a.=add_css(base_url().'assets/plugin/datatables/Responsive/css/responsive.bootstrap.min.css');
		$a.=add_css(base_url().'assets/plugin/datatables/Buttons/css/buttons.dataTables.min.css');
		$a.=add_js(base_url().'assets/plugin/datatables/DataTables/js/jquery.dataTables.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/Responsive/js/dataTables.responsive.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/DataTables/js/dataTables.bootstrap.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/Responsive/js/responsive.bootstrap.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/Buttons/js/dataTables.buttons.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/Buttons/js/buttons.flash.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/JSZip/jszip.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/pdfmake/build/pdfmake.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/pdfmake/build/vfs_fonts.js');
		$a.=add_js(base_url().'assets/plugin/datatables/Buttons/js/buttons.html5.min.js');
		$a.=add_js(base_url().'assets/plugin/datatables/Buttons/js/buttons.print.min.js');		
		
		return $a;
	}
}
