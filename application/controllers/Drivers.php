<?php
class Drivers extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$lang = ($this->session->userdata('language'))?
			$this->session->userdata('language') : $this->input->config_item('language');
		$this->lang->load('home', $lang);
		$this->lang->load('navbar', $lang);
		$this->lang->load('driverlist', $lang);
		$this->lang->load('driverpage', $lang);
		$this->lang->load('drivercreate', $lang);
		$this->lang->load('driveredit', $lang);
		$this->lang->load('flashdata', $lang);
	}

	public function index(){
		$data['title'] ='Fahrerliste';

		$data['drivers'] = $this->driver_model->get_drivers();
		$data['teams'] = $this->team_model->get_teams();

		$this->load->view('templates/header');
		$this->load->view('drivers/driverlist', $data);
		$this->load->view('templates/footer');
	}

	public function view($id = NULL){
		$data['driver'] = $this->driver_model->get_drivers($id);

		$data['id'] = $data['driver']['id'];
		$data['teams'] = $this->team_model->get_teams();
		$this->load->view('templates/header');
		$this->load->view('drivers/driverpage', $data);
		$this->load->view('templates/footer');
	}

	public function create(){
		if (!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('not_logged_in', $this->lang->line('not_logged_in'));
			redirect('users/login');
		}

		$data['title'] = 'Fahrer erstellen';

		$data['teams'] = $this->team_model->get_teams();

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('startnr', 'Startnr', 'required|max_length[2]');
		$this->form_validation->set_rules('team', 'Team', 'required');

		if ($this->form_validation->run()=== FALSE ){
			$this->load->view('templates/header');
			$this->load->view('drivers/create', $data);
			$this->load->view('templates/footer');
		}else{
		    //file upload
            $config['upload_path'] = './upload/driverimages/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $driver_image = 'noimage.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $driver_image = $_FILES['userfile']['name'];
            }

			$this->driver_model->create_driver($driver_image);
			$this->session->set_flashdata('driver_created', $this->lang->line('driver_created'));
			redirect('drivers');
		}
	}

	public function delete($id){
		if (!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('not_logged_in', $this->lang->line('not_logged_in'));
			redirect('users/login');
		}

		if ($this->session->userdata('user_id') != $this->driver_model->get_drivers($id)['user_id']){
			$this->session->set_flashdata('not_right_user', $this->lang->line('not_right_user'));
			redirect('drivers');
		}

		$this->driver_model->delete_driver($id);


		$this->session->set_flashdata('driver_delete', $this->lang->line('driver_delete'));
		redirect('drivers');
	}

	public function edit($id){
		if (!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('not_logged_in', $this->lang->line('not_logged_in'));
			redirect('users/login');
		}

		$data['driver'] = $this->driver_model->get_drivers($id);

		if ($this->session->userdata('user_id') != $this->driver_model->get_drivers($id)['user_id']){
			$this->session->set_flashdata('not_right_user', $this->lang->line('not_right_user'));
			redirect('drivers');
		}

		$data['title'] = 'Bearbeiten';

		$data['teams'] = $this->team_model->get_teams();

		$this->load->view('templates/header');
		$this->load->view('drivers/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id){

		$data['driver'] = $this->driver_model->get_drivers($id);
		$data['title'] = 'Bearbeiten';
		$data['teams'] = $this->team_model->get_teams();

		if ($this->session->userdata('user_id') != $this->driver_model->get_drivers($id)['user_id']){
			$this->session->set_flashdata('not_right_user', $this->lang->line('not_right_user'));
			redirect('drivers');
		}

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('startnr', 'Startnr', 'required|max_length[2]');
		$this->form_validation->set_rules('team', 'Team', 'required');

		if ($this->form_validation->run()=== FALSE ){
			$this->load->view('templates/header');
			$this->load->view('drivers/edit', $data);
			$this->load->view('templates/footer');
		}else {
            //file upload
            $config['upload_path'] = './upload/driverimages/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $driver_image = $data['driver']['drivers_image'];
            } else {
                $data = array('upload_data' => $this->upload->data());
                $driver_image = $_FILES['userfile']['name'];
            }

			$this->driver_model->update_driver($driver_image);
			$this->session->set_flashdata('driver_edit', $this->lang->line('driver_edit'));
			redirect('drivers');

		}
	}

}
