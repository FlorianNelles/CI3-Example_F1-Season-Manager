<?php
	class Pages extends CI_Controller{

		public function __construct(){
			parent::__construct();

			if (! $this->session->userdata('language')){
				$this->session->set_userdata('language', 'english');}

			$lang = ($this->session->userdata('language'))?
				$this->session->userdata('language') : $this->input->config_item('language');
			$this->lang->load('home', $lang);
			$this->lang->load('navbar', $lang);
		}


		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}
