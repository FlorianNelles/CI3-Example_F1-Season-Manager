<?php
class Teams extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$lang = ($this->session->userdata('language'))?
			$this->session->userdata('language') : $this->input->config_item('language');
		$this->lang->load('home', $lang);
		$this->lang->load('navbar', $lang);
		$this->lang->load('teamlist', $lang);
		$this->lang->load('teampage', $lang);
		$this->lang->load('teamcreate', $lang);
		$this->lang->load('teamedit', $lang);
		$this->lang->load('flashdata', $lang);
	}

	public function index(){
		$data['title'] ='Teamliste';

		$data['teams'] = $this->team_model->get_teams();

		$this->load->view('templates/header');
		$this->load->view('teams/teamlist', $data);
		$this->load->view('templates/footer');
	}

	public function view($id = NULL){
		$data['team'] = $this->team_model->get_teams($id);
		if(empty($data['team'])){
			show_404();
		}
		$data['name'] = $data['team']['name'];
		$data['drivers'] = $this->driver_model->get_drivers();
		$this->load->view('templates/header');
		$this->load->view('teams/teampage', $data);
		$this->load->view('templates/footer');
	}

	public function create(){
		if ($this->session->userdata('user_id') != 1){
			$this->session->set_flashdata('not_admin', $this->lang->line('not_admin'));
			redirect('teams');
		}

		$data['title'] = 'Team erstellen';

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('teamchef', 'Teamchef', 'required');
		$this->form_validation->set_rules('motor', 'Motor', 'required');
		$this->form_validation->set_rules('sitz', 'Sitz', 'required');

		if ($this->form_validation->run()=== FALSE ){
			$this->load->view('templates/header');
			$this->load->view('teams/create', $data);
			$this->load->view('templates/footer');
		}else{
			$this->team_model->create_team();
			$this->session->set_flashdata('team_created', $this->lang->line('team_created'));
			redirect('teams');
		}
	}

	public function delete($id){
		if ($this->session->userdata('user_id') != 1){
			$this->session->set_flashdata('not_admin', $this->lang->line('not_admin'));
			redirect('teams');
		}

		$this->team_model->delete_team($id);
		$this->session->set_flashdata('team_delete', $this->lang->line('team_delete'));
		redirect('teams');
	}

	public function edit($id){
		if ($this->session->userdata('user_id') != 1){
			$this->session->set_flashdata('not_admin', $this->lang->line('not_admin'));
			redirect('teams');
		}

		$data['team'] = $this->team_model->get_teams($id);
		if(empty($data['team'])){
			show_404();
		}
		$data['title'] = 'Bearbeiten';

		$this->load->view('templates/header');
		$this->load->view('teams/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id){
		if ($this->session->userdata('user_id') != 1){
			$this->session->set_flashdata('not_admin', $this->lang->line('not_admin'));
			redirect('teams');
		}

		$data['title'] = 'Team bearbeiten';
		$data['team'] = $this->team_model->get_teams($id);

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('teamchef', 'Teamchef', 'required');
		$this->form_validation->set_rules('motor', 'Motor', 'required');
		$this->form_validation->set_rules('sitz', 'Sitz', 'required');

		if ($this->form_validation->run()=== FALSE ){
			$this->load->view('templates/header');
			$this->load->view('teams/edit', $data);
			$this->load->view('templates/footer');
		}else {
			$this->team_model->update_team();
			$this->session->set_flashdata('team_edit', $this->lang->line('team_edit'));
			redirect('teams');
		}
	}

}
