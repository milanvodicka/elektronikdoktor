<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
    function __construct() {
	parent::__construct();
	$this->load->helper(array('url'));
	$this->load->library('layout');
    }

    public function index(){
	$data['title'] = 'ELEKTRONIK DOKTOR - Satelit | AV Systémy | Alarmy';
	$data['desc'] = 'ELEKTRONIK DOKTOR, spol. s r. o. v Bratislave.';
	$this->layout->render('home', $data, true);
    }
    
    public function montaz_satelitov(){
	$data['title'] = 'Montáž satelitov Bratislava | ELEKTRONIK DOKTOR';
	$data['desc'] = 'V oblasti návrhu a montáže satelitov máme dlhoročné skúsenosti a mnoho spokojných zákazníkov. Riešenia na mieru, s dôrazom na požiadavky zákazníka!';
	$this->layout->render('satelit', $data);
    }

    public function ozvucenie_domu(){
	$data['title'] = 'Ozvučenie domu Bratislava | ELEKTRONIK DOKTOR';
	$data['desc'] = 'Ponúkame viaczónový bezdrôtový zvukový systém SONOS pre ozvučenie Vášho domu.';
	$this->layout->render('ozvuceniedomu', $data);
    }
    
    public function alarmy_jablotron(){
	$data['title'] = 'Alarmy Jablotron Bratislava | ELEKTRONIK DOKTOR';
	$data['desc'] = 'Ponúkame Vám unikátny inteligentný alarm Jablotron 100. Návrh, inštalácia a predaj.';
	$this->layout->render('alarmy', $data);
    }


    public function digital_signage(){
	$data['title'] = 'Digital Signage - informačné a reklamné obrazovky | ELEKTRONIK DOKTOR';
	$this->layout->render('digitalsignage', $data);
    }
    
    public function sta(){
	$data['title'] = 'Spoločná televízna anténa Bratislava | ELEKTRONIK DOKTOR';
	$data['desc'] = 'Rozhodli ste sa pri obnove budovy pre inováciu spoločnej televíznej antény? Našli ste správneho partnera!';
	$this->layout->render('sta', $data);
    }
    
    public function hotelove_tv_systemy(){
	$data['title'] = 'Hotelové TV systémy | ELEKTRONIK DOKTOR';
	$this->layout->render('hotelovesystemy', $data);
    }

    public function kontakt(){
	$this->load->helper('form');
	$data = array('done'=>false);
	if($this->input->post()){
	    $this->load->library('form_validation');
	    $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
	    $this->form_validation->set_rules('meno', 'Meno', 'required');
	    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
	    $this->form_validation->set_rules('sprava', 'Správa', 'required');
	    $this->form_validation->set_rules('stamp', 'Stamp', 'callback_stamp_check');
	    $this->form_validation->set_rules('message', 'Message', 'max_length[0]');
	    $this->form_validation->set_rules('url', 'Url', 'max_length[0]');
	    $this->form_validation->set_message('max_length', 'Pri odosielaní správy nastala chyba! Skúste nás kontaktovať telefonicky!');

	    // got form
	    if($this->form_validation->run()){
		// ok
		$this->load->model('Email_model');
		$data = $this->input->post();
		$this->Email_model->sendEmail($data['email'], $data['meno'], $data['sprava']);
		$data['done'] = true;
	    }
	}
	$data['title'] = 'Kontaktujte nás | Elektronik Doktor';
	$this->layout->render('kontakt', $data);
    }


    public function notfound(){
	$this->layout->render('404', array(), false);
    }

    public function stamp_check($stamp){
	$now = microtime(true);
	$diff = $now - $stamp;
	if($diff > 5) return true;
	else{
	    $this->form_validation->set_message('stamp_check', 'Pri odosielaní správy nastala chyba! Skúste nás kontaktovať telefonicky!');
	    return false;
	}
    }
	
}

