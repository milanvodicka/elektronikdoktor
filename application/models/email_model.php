<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model{

    public function __construct(){
	parent::__construct();
	//email configs
	$config['protocol']='smtp';
	$config['smtp_host']='ssl://mail.vodicka.eu.sk';
	$config['smtp_port']='465';
	$config['smtp_user']='milan@vodicka.eu.sk';
	$config['smtp_pass']='cdaptijoj';
	$config['mailtype']='html';
	$this->load->library('email');
	$this->email->initialize($config);
    }

    public function sendEmail($email, $name, $msg){
	$this->email->from($email, $name);
	$this->email->to('peter.vodicka@eldoktor.sk'); 
	$this->email->subject('ELEKTRONIK DOKTOR Správa');
	$this->email->message($msg);	
	$this->email->send();
	return $this->email->print_debugger();
    }
}
