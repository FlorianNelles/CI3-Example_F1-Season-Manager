<?php
class Posts extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$lang = ($this->session->userdata('language'))?
			$this->session->userdata('language') : $this->input->config_item('language');
		$this->lang->load('home', $lang);
		$this->lang->load('navbar', $lang);
		$this->lang->load('postindex', $lang);
		$this->lang->load('postcreateedit', $lang);
		$this->lang->load('flashdata', $lang);
	}

	public function index($offset = 0){

		//Pagination Library
		$this->load->library('pagination');
		$config['base_url'] = base_url().'posts/index/';
		$config['total_rows'] = $this->db->count_all('posts');
		$config['per_page'] = 2;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');
		$this->pagination->initialize($config);


		$data['title'] ='Aktuelle News';

		$data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);
		$data['users'] = $this->user_model->get_users();

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

    public function view($id = NULL){
        $data['post'] = $this->post_model->get_posts($id);

        $data['title'] = $data['post']['title'];
        $data['users'] = $this->user_model->get_users();
        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }

	public function create(){
		if (!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('not_logged_in',  $this->lang->line('not_logged_in'));
			redirect('users/login');
		}

		$data['title'] = 'Nachricht erstellen';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'body', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		} else {
			$this->post_model->create_post();
			$this->session->set_flashdata('post_created', $this->lang->line('post_created'));
			redirect('posts');
		}
	}

	public function delete($id){
		if (!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('not_logged_in', $this->lang->line('not_logged_in'));
			redirect('users/login');
		}

		if ($this->session->userdata('user_id') != $this->post_model->get_posts($id)['user_id']){
			$this->session->set_flashdata('not_right_user', $this->lang->line('not_right_user'));
			redirect('posts');
		}

		$this->post_model->delete_post($id);

		$this->session->set_flashdata('post_delete', $this->lang->line('post_delete'));
		redirect('posts');
	}

	public function edit($id){
		if (!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('not_logged_in', $this->lang->line('not_logged_in'));
			redirect('users/login');
		}

		$data['post'] = $this->post_model->get_posts($id);

		if ($this->session->userdata('user_id') != $this->post_model->get_posts($id)['user_id']){
			$this->session->set_flashdata('not_right_user', $this->lang->line('not_right_user'));
			redirect('posts');
		}

		$data['title'] = 'Nachricht bearbeiten';
		$this->load->view('templates/header');
		$this->load->view('posts/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update($id){

		$data['title'] = 'Nachricht bearbeiten';
		$data['post'] = $this->post_model->get_posts($id);

		if ($this->session->userdata('user_id') != $this->post_model->get_posts($id)['user_id']){
			$this->session->set_flashdata('not_right_user', $this->lang->line('not_right_user'));
			redirect('posts');
		}

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'body', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		} else {

			$this->post_model->update_post();
			$this->session->set_flashdata('post_edit', $this->lang->line('post_edit'));
			redirect('posts');
		}

	}
}
