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

            if (!isset($_SESSION['logged_in'])){
                $_SESSION['user_id'] = 0;
                $_SESSION['logged_in'] = false;
            }
		}

		public function view($page = 'home'){

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}
