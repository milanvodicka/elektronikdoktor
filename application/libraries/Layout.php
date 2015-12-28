<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout{
	public function __construct(){
		//...

		$this->ci =& get_instance();
		$this->ci->load->helper(array('url', 'form'));
	}

	// $main 	- main content
	// $header 	- optional header content
	// $footer 	- optional footer content
	// $layout 	- layout; $main, $header and $footer are rendered inside the layout; 
	// 			  default is layouts/default_view according to original view() method
	// $data 	- these data will be extracted like this: $data['foo'] -> $foo

	// public function render($main, $data=array(), $header=null, $footer=null, $layout='default'){
	public function render($main, $data=array(), $featured = false, $layout='default'){
		if(empty($main)) return false;
		else $main = $this->ci->load->view($main.'_view', $data, true);
		$data['page'] = $this->ci->uri->segment(1);
		// if(!empty($header))	$header = $this->ci->load->view($header.'_view', $data, true);
		// if(!empty($footer))	$footer = $this->ci->load->view($footer.'_view', $data, true);
		$data['main'] = $main;
		$data['featured'] = $featured;
		// $data['header'] = $header;
		// $data['footer'] = $footer;
		$this->ci->load->view('layouts/'.$layout.'_view', $data);
	}
	
	// this method should be called right inside the view (template or layout)
	public function widget($name, $data=array()){
		$this->ci->load->view('widgets/'.$name.'_widget', $data);
	}
}
