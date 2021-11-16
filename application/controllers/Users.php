<?php
	class Users extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$lang = ($this->session->userdata('language'))?
				$this->session->userdata('language') : $this->input->config_item('language');
			$this->lang->load('home', $lang);
			$this->lang->load('navbar', $lang);
			$this->lang->load('login', $lang);
			$this->lang->load('register', $lang);
			$this->lang->load('flashdata', $lang);
		}

		public function register(){
			$data['title'] = 'Benutzer erstellen';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
			$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run()=== FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			}else{
				$enc_password = md5($this->input->post('password'));
				$this->user_model->register($enc_password);

				$this->session->set_flashdata('user_registered', $this->lang->line('user_registered'));

				// send registration mail
                $this->load->library('email');

                $this->email->from('info@uni-trier.web02.necror.de', 'CI3 StudiProjekt');
                $this->email->to($this->input->post('email'));

                $this->email->subject('Erfolgreich registriert');
                $this->email->message("Hallo,\n\ndu hast dich soeben erfolgreich registriert.\n\nViele Grüße\nDas Studienprojekt Team");

                $this->email->send();

				redirect('home');
			}
		}

		public function login(){
			$data['title'] = 'Login';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');


			if($this->form_validation->run()=== FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			}else{

				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));

				$user_id = $this->user_model->login($username, $password);

				if ($user_id){
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					$this->session->set_flashdata('user_loggedin',  $this->lang->line('user_loggedin'));
					redirect('home');
				}else{
					$this->session->set_flashdata('login_failed',  $this->lang->line('login_failed'));
					redirect('users/login');
				}

			}
		}


		public function logout(){
			$this->session->set_userdata('logged_in', false);
			$this->session->set_userdata('user_id', 0);
			$this->session->unset_userdata('username');

			$this->session->set_flashdata('user_loggedout',  $this->lang->line('user_loggedout'));

			redirect('users/login');
		}

	}
