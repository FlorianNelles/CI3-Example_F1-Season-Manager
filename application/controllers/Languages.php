<?php

class Languages extends CI_Controller{
	public function english(){
		$this->session->unset_userdata('language');
		$this->session->set_userdata('language', 'english');
		redirect($_SERVER['HTTP_REFERER']);

	}
	public function german(){
		$this->session->unset_userdata('language');
		$this->session->set_userdata('language', 'german');
		redirect($_SERVER['HTTP_REFERER']);
	}
}
